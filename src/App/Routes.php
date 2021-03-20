<?php

use Slim\Routing\RouteCollectorProxy;

$app->group('/api', function (RouteCollectorProxy $group) {
    $group->get('/', 'App\Controllers\UsersController:getAll');
    $group->post('/', 'App\Controllers\UsersController:insert');
    $group->put('/', 'App\Controllers\UsersController:update');
    $group->delete('/', 'App\Controllers\UsersController:delete');
});
