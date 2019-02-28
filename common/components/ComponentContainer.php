<?php

namespace common\components;

use common\components\paygram\PaygramApi;
use common\components\paymo\PaymoApi;

class ComponentContainer
{
    public static function getMailQueue(): MailQueue
    {
        return \Yii::$app->mailQueue;
    }
    public static function getErrorLogger(): Error
    {
        return \Yii::$app->errorLogger;
    }
    public static function getTinifier(): Tinifier
    {
        return \Yii::$app->tinifier;
    }
    public static function getPaymoApi(): PaymoApi
    {
        return \Yii::$app->paymoApi;
    }
    public static function getTelegramAdminNotifier(): Telegram
    {
        return \Yii::$app->telegramAdminNotifier;
    }
}