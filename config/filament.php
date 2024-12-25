<?php

return [

    'broadcasting' => [
        // Configurasi lainnya...
    ],

    'default_filesystem_disk' => env('FILAMENT_FILESYSTEM_DISK', 'public'),

    'assets_path' => null,

    'cache_path' => base_path('bootstrap/cache/filament'),

    'livewire_loading_delay' => 'default',

    'middleware' => [
        'web',
        \Illuminate\Session\Middleware\AuthenticateSession::class,
        \App\Http\Middleware\EnsureFilamentUser::class, // Middleware custom untuk memfilter pengguna
    ],

];
