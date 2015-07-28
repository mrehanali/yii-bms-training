<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => [
        'books' => [
            'class' => 'app\modules\books\BooksModule',
        ],
    ],
    'language' => 'de',
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => [
                'say' => 'site/say',
                'say/<message:\w+>' => 'site/say',
                'user/create/<id:\d+>' => 'site/say',
                'books' => 'books/book/list',
            ],
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'QFFrjWm7eTT8XrsoMeh5PI_qqtxJYVPB',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        // internationalization
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages',
                    'sourceLanguage' => 'en',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/msg' => 'msg.php',
                        'app/error' => 'error.php',
                    ],
                ],
            ],
        ],
    ],
    'params' => $params,
    'aliases' => [
        '@name1' => '/var/www/yii-bms-training',
        '@name2' => 'path/to/path2',
    ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    //  $config['bootstrap'][] = 'debug';
    //  $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
