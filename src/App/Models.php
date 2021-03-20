<?php 
use App\Models\UsersModel;
use Psr\Container\ContainerInterface;

$container->set('users_model',function(ContainerInterface $container){
    return new UsersModel($container->get('db'));
});