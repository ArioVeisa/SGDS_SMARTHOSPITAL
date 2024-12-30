<?php

return [

    'default_panel' => 'admin',  // Menetapkan panel default sebagai 'admin'

    'panel' => [
        'id' => 'admin',
        'path' => 'admin', // Path untuk mengakses dashboard
    ],

    'middleware' => [
        'web',
        \Illuminate\Session\Middleware\AuthenticateSession::class,
        \App\Http\Middleware\EnsureFilamentUser::class, // Middleware custom untuk memfilter pengguna
    ],
];
