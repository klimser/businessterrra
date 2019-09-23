<?php

namespace frontend\controllers;

use common\components\ComponentContainer;
use common\components\extended\Controller;
use common\models\Order;
use yii;
use yii\web\Response;

/**
 * OrderController implements the CRUD actions for Order model.
 */
class OrderController extends Controller
{
    private const PRICES = [
        'gold' => [
            '2019-03-10' => 790000,
            '2019-03-31' => 990000,
            '2019-04-05' => 1290000,
        ],
        'platinum' => [
            '2019-03-10' => 1290000,
            '2019-03-31' => 1490000,
            '2019-04-05' => 1790000,
        ],
        'kulikova' => [
            '2019-10-22' => 890000,
        ],
    ];
    /**
     * Creates a new Order model.
     * @return Response
     * @throws yii\web\BadRequestHttpException
     */
    public function actionCreate()
    {
        if (!Yii::$app->request->isAjax) throw new yii\web\BadRequestHttpException('Wrong request');

        $orderData = Yii::$app->request->post('order');
        $order = new Order(['scenario' => Order::SCENARIO_USER]);
        $order->load($orderData, '');
        $order->status = Order::STATUS_UNREAD;
        if (Yii::$app->request->post('g-recaptcha-response')) $order->reCaptcha = Yii::$app->request->post('g-recaptcha-response');
        if ($order->save(true)) {
            $order->notifyAdmin();
            $jsonData = self::getJsonOkResult();
        } else {
            Yii::$app->errorLogger->logError('Order.create', $order->getErrorsAsString());
            $jsonData = self::getJsonErrorResult('Server error');
            $jsonData['errors'] = $order->getErrorsAsString();
        }

        return $this->asJson($jsonData);
    }

    /**
     * Creates a new Order model for online-payment.
     * @return Response|array
     * @throws yii\web\BadRequestHttpException
     */
    public function actionCreatePayment()
    {
        if (!Yii::$app->request->isAjax) throw new yii\web\BadRequestHttpException('Wrong request');
        \Yii::$app->response->format = Response::FORMAT_JSON;

        $orderData = Yii::$app->request->post('order');
        $order = new Order(['scenario' => Order::SCENARIO_USER]);
        $order->load($orderData, '');
        if (Yii::$app->request->post('g-recaptcha-response')) $order->reCaptcha = Yii::$app->request->post('g-recaptcha-response');
        $order->status = Order::STATUS_UNPAID;
        if (!array_key_exists($order->type, self::PRICES)) {
            return self::getJsonErrorResult('Некорректный запрос');
        }
        $nowDate = date('Y-m-d');
        foreach (self::PRICES[$order->type] as $date => $price) {
            if ($nowDate <= $date) {
                $order->price = $price;
                break;
            }
        }
        if (!$order->price) {
            return self::getJsonErrorResult('Продажа билетов невозможна');
        }
        $transaction = \Yii::$app->db->beginTransaction();
        try {
            if ($order->save(true)) {
                $transaction->commit();
                return self::getJsonOkResult([
                    'payment_info' => [
                        'store_id' => ComponentContainer::getPaymoApi()->storeId,
                        'account' => $order->id,
                        'amount' => $order->price * 100,
                        'key' => hash('sha256', ComponentContainer::getPaymoApi()->storeId . $order->price * 100 . $order->id . ComponentContainer::getPaymoApi()->apiKey),
                        'success_redirect' => yii\helpers\Url::to(['order/success'], true),
                        'fail_redirect' => yii\helpers\Url::to(['order/fail'], true),
                        'lang' => $_SERVER['HTTP_ACCEPT_LANGUAGE'] ? substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) : 'ru',
                        'theme' => '',
                        'color1' => "#777777",
                        'color2' => "#ffffff",
                        'color3' => "#ff0000",
                        'color4' => "#ffffff",
                        'color5' => "#ffeeaa",
                        'color6' => "#666666",
                        'color7' => "#ffd800",
                        'color8' => "#333366",
                        'color9' => "#000000",
                        'color10' =>"#ffffff",
                        'details' => json_encode([
                            'семинар' => $order->subject,
//                            'билет' => $order->type,
                        ]),
                    ],
                ]);
            } else {
                $transaction->rollBack();
                ComponentContainer::getErrorLogger()->logError('Order.create', $order->getErrorsAsString());
                $jsonData = self::getJsonErrorResult('Server error');
                $jsonData['errors'] = $order->getErrorsAsString();
                return $jsonData;
            }
        } catch (\Throwable $exception) {
            $transaction->rollBack();
            ComponentContainer::getErrorLogger()
                ->logError('order/create-payment', 'Paymo: ' . $exception->getMessage(), true);
            return self::getJsonErrorResult('Произошла ошибка, оплата не может быть зарегистрирована');
        }
    }

    public function actionSuccess()
    {
        return $this->render('complete', ['success' => true]);
    }

    public function actionFail()
    {
        return $this->render('complete', ['success' => false]);
    }
}
