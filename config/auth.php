<?php

return [

    'defaults' => [
        'guard' => 'web',  // Define o guard padrão (você pode definir o 'web' ou outro)
        'passwords' => 'users',  // Define o broker de senhas padrão
    ],

   'guards' => [
    'web' => [
        'driver' => 'session',
        'provider' => 'users',  // Guard para coordenadores
   
],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,  // Model para coordenadores
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

]
];

