<?php

/* 
* LLamamos al contenedor creado en el archivo App\App.php y retornamos un objeto 
* con las credenciales de BD el cual llamaremos settings
*/
$container->set('settings', function () {
    return (object)[
        "DB_HOST" => 'localhost',
        "DB_NAME" => 'slimFramework',
        "DB_USER" => 'root',
        "DB_PASS" => 'Soporte',
        "DB_CHAR" => 'utf8'
    ];
});