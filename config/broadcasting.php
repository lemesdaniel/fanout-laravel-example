<?php

return [

    'default' => env('BROADCAST_DRIVER', 'fanout'),

    'connections' => [

       'fanout' => [
            'driver' => 'fanout',
            'realm_id' => '',
            'realm_key' => '',
            'ssl' => true,
            'publish_async' => false
        ],
 

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],

        'log' => [
            'driver' => 'log',
        ],

    ],

];
