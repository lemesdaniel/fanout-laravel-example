<?php

return [

    'default' => env('BROADCAST_DRIVER', 'fanout'),

    'connections' => [

       'fanout' => [
            'driver' => 'fanout',
            'realm_id' => 'da1cbe49',
            'realm_key' => '75wgSdYqKOWZ6dMrhaaNrQ==',
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
