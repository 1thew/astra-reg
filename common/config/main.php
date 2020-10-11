<?php
return [
    //'charset'=>'utf-8',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'emailService'=> [
            'class'=> 'common\components\EmailService',
        ]
    ],
];
