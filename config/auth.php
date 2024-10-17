<?php

return [

    'defaults' => [
        'guard' => 'web',  // Define o guard padrão (você pode definir o 'web' ou outro)
        'passwords' => 'users',  // Define o broker de senhas padrão
    ],

   'guards' => [
    'web' => [
        'driver' => 'session',
        'provider' => 'users',
    ],

    'orientador' => [
        'driver' => 'session',
        'provider' => 'orientadores',
    ],
],

    'providers' => [
    'users' => [
        'driver' => 'eloquent',
        'model' => App\Models\User::class,
    ],

    'orientadores' => [
        'driver' => 'eloquent',
        'model' => App\Models\Orientador::class, // O Model dos Orientadores
    ],
],


    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
        
    ],

    'password_timeout' => 10800,

];

