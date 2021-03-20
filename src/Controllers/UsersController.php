<?php 
namespace App\Controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Container\ContainerInterface;
use App\Controllers\BaseController;

class UsersController extends BaseController{

    public function getAll($request, $response, $args){
        $payload = $this->container->get('users_service')->getAll();
        
        $response->getBody()->write(json_encode($payload));
        return $response
            ->withHeader('content-type', 'application/json')
            ->withStatus(200);
    }

    public function insert($request, $response, $args){
        $payload = $this->container->get('users_service')->getAll();
        
        $response->getBody()->write(json_encode($payload));
        return $response
            ->withHeader('content-type', 'application/json')
            ->withStatus(200);
    }

    public function update($request, $response, $args){
        $payload = $this->container->get('users_service')->getAll();
        
        $response->getBody()->write(json_encode($payload));
        return $response
            ->withHeader('content-type', 'application/json')
            ->withStatus(200);
    }

    public function delete($request, $response, $args){
        $payload = $this->container->get('users_service')->getAll();
        
        $response->getBody()->write(json_encode($payload));
        return $response
            ->withHeader('content-type', 'application/json')
            ->withStatus(200);
    }

}
