<?php

use App\Services\UsersService;
use Psr\Container\ContainerInterface;

$container->set('users_service', function (ContainerInterface $container) {
    return new UsersService($container->get('users_model'));
});
