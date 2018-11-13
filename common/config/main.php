<?php
$params = array_merge(
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'vendorPath' => '@app/../vendor',
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'charset' => 'utf8',
            'dsn' => $params['db-dsn'],
            'username' => $params['db-username'],
            'password' => $params['db-password'],
            'tablePrefix' => $params['db-tablePrefix'],
        ],
        'assetManager' => [
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'js' => []
                ],
                'yii\bootstrap\BootstrapAsset' => [
                    'css' => []
                ],
                'yii\bootstrap4\BootstrapAsset' => [
                    'css' => []
                ],
                'yii\bootstrap\BootstrapPluginAsset' => [
                    'js' => []
                ],
                'yii\bootstrap4\BootstrapPluginAsset' => [
                    'js' => []
                ],
            ],
            'linkAssets' => true,
            'appendTimestamp' => false,
            'hashCallback' => function($path) {
                $getLatestModifyDate = function($filePath) use (&$getLatestModifyDate) {
                    $latestDate = 0;
                    if (is_file($filePath)) $latestDate = max($latestDate, filemtime($filePath));
                    elseif (is_dir($filePath)) {
                        foreach (glob($filePath . '/*') as $childFile) {
                            $latestDate = max($latestDate, $getLatestModifyDate($childFile));
                        }
                    }
                    return $latestDate;
                };
                $path = (is_file($path) ? dirname($path) : $path) . $getLatestModifyDate($path);
                return sprintf('%x', crc32($path . Yii::getVersion()));
            },
        ],
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'defaultTimeZone' => 'Asia/Tashkent',
        ],
        'mailQueue' => [
            'class' => 'common\components\MailQueue',
        ],
        'errorLogger' => [
            'class' => 'common\components\Error',
        ],
        'reCaptcha' => [
            'name' => 'reCaptcha',
            'class' => 'himiklab\yii2\recaptcha\ReCaptcha',
            'siteKey' => $params['reCaptcha-siteKey'],
            'secret' => $params['reCaptcha-secret'],
        ],
        'tinifier' => [
            'class' => 'common\components\Tinifier',
            'apiKey' => $params['tinifyKey'],
        ],
    ],
    'aliases' => [
        '@uploads' => '@frontend/web/uploads',
        '@uploadsUrl' => '//businessterra.uz/uploads',
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'language' => 'ru-RU',
    'timeZone' => 'Asia/Tashkent',
];
