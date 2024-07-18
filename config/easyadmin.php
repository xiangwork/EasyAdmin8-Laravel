<?php

return [
    'ADMIN'             => env('EASYADMIN_ADMIN', 'admin'),
    'CAPTCHA'           => env('EASYADMIN_CAPTCHA', false),
    'IS_DEMO'           => env('EASYADMIN_IS_DEMO', false),
    'CDN'               => env('EASYADMIN_CDN', ''),
    'EXAMPLE'           => env('EASYADMIN_EXAMPLE', true),
    'IS_CSRF'           => env('EASYADMIN_IS_CSRF', false),
    'STATIC_PATH'       => env('EASYADMIN_STATIC_PATH', '/static'),
    'OSS_STATIC_PREFIX' => env('EASYADMIN_OSS_STATIC_PREFIX', 'static_easyadmin'),
];
