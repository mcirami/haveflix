<?php

return [
    'name' => 'HaveFlix',
    'manifest' => [
        'name' => env('APP_NAME', 'My PWA App'),
        'short_name' => 'H',
        'start_url' => '/',
        'background_color' => '#ffffff',
        'theme_color' => '#ff0000',
        'display' => 'standalone',
        'orientation'=> 'any',
        'status_bar'=> 'black',
        'icons' => [
            '192x192' => [
                'path' => '/images/icons/icon-192x192.png',
                'sizes' => '192x192',
                'purpose' => 'any'
            ],
            '512x512' => [
                'path' => '/images/icons/icon-512x512.png',
                'sizes' => '512×512',
                'purpose' => 'any'
            ],
        ],
        'custom' => []
    ]
];
