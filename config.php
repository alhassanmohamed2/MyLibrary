<?php

return [
    'database' => [
       'name' => 'booksdata',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=localhost',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ],
    'admin' => [
        'admin_email' => 'elghamry@fal.com',
        'admin_pass' => 'Elghamry123'
    ]
];