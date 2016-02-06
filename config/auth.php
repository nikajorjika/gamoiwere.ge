<?php

return [

    'multi-auth' => [
        'admin' => [
            'driver' => 'eloquent',
            'model'  => App\User::class,
        ],
        'user' => [
            'driver' => 'eloquent',
            'model'  => App\Users::class,
        ],
    ],
];
