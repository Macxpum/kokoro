<?php

$configPath = dirname(__DIR__, 2)
    . DIRECTORY_SEPARATOR
    . 'site__configs'
    . DIRECTORY_SEPARATOR
    . 'bd__config.php';

if (!is_file($configPath)) {
    exit('Конфиг БД не найден');
}

$dbConfig = require $configPath;

$connect = mysqli_connect(
    $dbConfig['host'],
    $dbConfig['user'],
    $dbConfig['password'],
    $dbConfig['database']
);

if (!$connect) {
    exit(mysqli_connect_error());
}
