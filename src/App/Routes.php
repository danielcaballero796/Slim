<?php

use Slim\Routing\RouteCollectorProxy;

$app->group('/api', function (RouteCollectorProxy $group) {
    $group->get('/', 'App\Controllers\UsersController:getAll');
    $group->get('/user', 'App\Controllers\UsersController:select');
    $group->post('/', 'App\Controllers\UsersController:insert');
    $group->put('/', 'App\Controllers\UsersController:update');
    $group->put('/user', 'App\Controllers\UsersController:updateState');
    $group->delete('/', 'App\Controllers\UsersController:delete');
});