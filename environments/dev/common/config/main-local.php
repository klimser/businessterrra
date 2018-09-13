<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=businessterra',
            'username' => 'root',
            'password' => '1234',
            'charset' => 'utf8',
            'tablePrefix' => 'cms_',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
            'keyPrefix' => 'businessterra',
            'cachePath' => '@frontend/runtime/cache',
        ],
    ],
    'aliases' => [
        '@uploadsUrl' => '//businessterra.test/uploads',
    ]
];
