<?php
defined("ENV") || define("ENV", "pre");
$baseConfig = include('base.php');

$commonConfig = array(
    'components' => [
        'demoDB' => [
            'dsn' => Dotenv\Dotenv::get("demoDB.dsn"),
            'username' => Dotenv\Dotenv::get("demoDB.username"),
            'password' => Dotenv\Dotenv::get("demoDB.password"),
        ],
    ],
    'params' => [],
);

return [$baseConfig, $commonConfig];
