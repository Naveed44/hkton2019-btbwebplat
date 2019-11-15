<?php
return [
    'propel' => [
        'database' => [
            'connections' => [
                'ftb' => [
                    'adapter' => 'mysql',
                    'dsn' => 'mysql:host=127.0.0.1;dbname=ftb',
                    'user' => 'root',
                    'password' => '',
                    'settings' => [
                        'charset' => 'utf8'
                    ]
                ]
            ]
        ],
        'runtime' => [
            'defaultConnection' => 'ftb',
            'connections' => ['ftb']
        ],
        'generator' => [
            'defaultConnection' => 'ftb',
            'connections' => ['ftb'],
            'dateTime' => [
                'defaultTimeStampFormat' =>'Y-m-d H:i:s',
                'defaultTimeFormat' => 'H:i:s',
                'defaultDateFormat' => 'Y-m-d'
            ]
        ]
    ]
];
?>
