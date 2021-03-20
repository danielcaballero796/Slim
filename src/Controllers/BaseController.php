<?php
namespace App\Controllers;
use Psr\Container\ContainerInterface;

abstract class BaseController{

    protected $container;

    public function __construct(ContainerInterface $container){
        $this->container = $container;
    }

    protected function getUsersService(){
        return $this->container->get('users_service');
    }
}