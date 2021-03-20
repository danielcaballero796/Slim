<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/../../vendor/autoload.php';

// Instancia del contenedor en el cual estara la app con ayuda de la dependencia php-di
$instancia = new \DI\Container();
AppFactory::setContainer($instancia); // se setea el contenedor para luego llenarlo
$app = AppFactory::create();
$container = $app->getContainer(); //definimos el contenedor principal en la variable

//se requieren los archivos de estructura para que sean reconocidos en el proyecto
require __DIR__ . "/Configs.php";
require __DIR__ . "/Dependencies.php";
require __DIR__ . "/Routes.php";
require __DIR__ . "/Services.php";
require __DIR__ . "/Models.php";

$app->addErrorMiddleware(true, true, true);
$app->run();
