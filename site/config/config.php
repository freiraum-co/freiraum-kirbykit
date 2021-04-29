<?php

\Beebmx\KirbyEnv::load('../');

return [
    'panel' =>[
        'install' => env('KIRBY_PANEL_INSTALL', false)
    ],
    'debug'  => env('DEV', false),
    'url' => $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'],
    'michnhokn.cookie-banner' => [
        'features' => [
            'analytics' => 'Analyse',
            //'identifier' => 'name'
        ]
    ]
];