<?php

if (!defined('WEBSITE_ACCESS')) { header('HTTP/1.0 403 Forbidden');exit('Direkter Zugriff verweigert.');}

return [
    'db' => [
        'servername'    => '',
        'dbname'        => '',
        'username'      => '',
        'password'      => ''
    ],
    'login' => [
        'user'      => 'admin',
        'passwort'  => 'passwoertchen'
    ],
    'domain' => [
        'titel' => 'Seitentitel',
        'url'   => 'www.testseite.at'
    ]
];
?>