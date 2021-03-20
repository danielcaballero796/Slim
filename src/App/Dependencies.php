<?php

use Psr\Container\ContainerInterface;

/* 
* LLamamos al contenedor creado en el archivo App\App.php para BD
* el cual llamaremos db y hacemos uso del contenedor de App\Configs.php
* de nombre settings
*/

$container->set('db', function (ContainerInterface $c) {
    $config = $c->get('settings'); //se instancia el contenedor de las configuracioness

    $DB_HOST = $config->DB_HOST;
    $DB_NAME = $config->DB_NAME;
    $DB_PASSWORD = $config->DB_PASS;
    $DB_CHARSET = $config->DB_CHAR;
    $DB_USER = $config->DB_USER;

    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    ];

    $dsn = "mysql:host=" . $DB_HOST . ";dbname=" . $DB_NAME . ";charset=" . $DB_CHARSET;
    return new PDO($dsn, $DB_USER, $DB_PASSWORD, $opt);
});
