<?php

namespace frontend\controllers;

use common\components\ComponentContainer;
use common\components\Telegram;
use common\models\Order;
use Longman\TelegramBot\Exception\TelegramException;
use Longman\TelegramBot\TelegramLog;
use yii\web\Controller;
use yii\web\HttpException;

/**
 * ApiController is used to provide API-messaging
 */
class ApiController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionTgAdminBot()
    {
        \Yii::$app->db->open();
        try {
            /** @var Telegram $telegram */
            $telegram = \Yii::$app->telegramAdminNotifier;

            if (!$telegram->checkAccess(\Yii::$app->request)) throw new HttpException(403, 'Access denied');

            $telegram->telegram->handle();
        } catch (TelegramException $e) {
            TelegramLog::error($e);
        }
    }

    private function processPaymoRequest()
    {
        $jsonData = ['status' => 0];
        $whiteList = ['185.8.212.47', '185.8.212.48'];

        if (!\Yii::$app->request->isPost) {
            $jsonData['message'] = 'Request should be POST';
            return $jsonData;
        }
        if (!in_array(\Yii::$app->request->remoteIP, $whiteList)) {
            $jsonData['message'] = 'Wrong server IP';
            return $jsonData;
        }

        $params = json_decode(\Yii::$app->request->rawBody, true);

        if ($params === false
            || !array_key_exists('store_id', $params)
            || !array_key_exists('transaction_id', $params)
            || !array_key_exists('invoice', $params)
            || !array_key_exists('amount', $params)
            || !array_key_exists('sign', $params)) {
            $jsonData['message'] = 'Invalid JSON-body';
            return $jsonData;
        }

        $hash = $params['store_id'] . $params['transaction_id'] . $params['invoice'] . $params['amount'] . ComponentContainer::getPaymoApi()->apiKey;
        $sign = md5($hash);

        if ($sign != $params['sign']) {
            $jsonData['message'] = 'Invalid signature';
            return $jsonData;
        }

        /** @var Order $order */
        $order = Order::findOne($params['invoice']);

        if (!$order) {
            $jsonData['message'] = 'Invoice not found';
            return $jsonData;
        }
        if ($order->price * 100 != $params['amount']) {
            $jsonData['message'] = 'Wrong amount';
            return $jsonData;
        }

        $transaction = \Yii::$app->db->beginTransaction();
        try {
            $order->status = Order::STATUS_PAID;
            $order->save();
            $order->notifyAdmin();
            $transaction->commit();
        } catch (\Throwable $exception) {
            $transaction->rollBack();
            $jsonData['message'] = 'Ошибка регистрации оплаты: ' . $exception->getMessage();
            ComponentContainer::getErrorLogger()->logError('api/paymo', $exception->getMessage() . "\n" . $exception->getTraceAsString(), true);
            return $jsonData;
        }

        $jsonData['status'] = 1;
        $jsonData['message'] = 'Успешно';
        return $jsonData;
    }

    public function actionPaymoComplete()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $jsonData = $this->processPaymoRequest();
        if (!array_key_exists('status', $jsonData) || $jsonData['status'] != 1) {
            \Yii::$app->response->statusCode = 400;
            ComponentContainer::getErrorLogger()->logError(
                'api/paymo',
                \Yii::$app->request->rawBody . "\n" . print_r($jsonData, true),
                true
            );
        } else {
            \Yii::$app->response->statusCode = 200;
        }

        return $jsonData;
    }
}