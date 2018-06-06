<?php

return [
    'sakura' => [
        'host'       => env('SAKURA_IMAP_HOST', 'imap.gmail.com'),
        'port'       => env('SAKURA_IMAP_PORT', 993),
        'username'   => env('SAKURA_IMAP_USERNAME', 'diyfactorytest@gmail.com'),
        'password'   => env('SAKURA_IMAP_PASSWORD', 'daito1000'),
        'encryption' => env('SAKURA_IMAP_ENCRYPTION', 'ssl'),
    ],
];
