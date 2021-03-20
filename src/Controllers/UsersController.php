<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Container\ContainerInterface;
use App\Controllers\BaseController;

class UsersController extends BaseController
{

    public function getAll($request, $response, $args)
    {
        $payload = $this->container->get('users_service')->getAll();

        $response->getBody()->write($payload);
        return $response
            ->withHeader('content-type', 'application/json')
            ->withStatus(200);
    }

    public function select($request, $response, $args)
    {
        $payload = $this->container->get('users_service')->select($args);

        $response->getBody()->write($payload);
        return $response
            ->withHeader('content-type', 'application/json')
            ->withStatus(200);
    }

    public function insert(Request $request, Response $response, $args)
    {
        //se verifica que venga un JSON
        $contentType = $request->getHeaderLine('Content-Type');
        if (strstr($contentType, 'application/json')) {
            //$contents = json_decode(file_get_contents('php://input'), true);//Se parsea la data en array
            $contents = json_decode(file_get_contents('php://input')); //Se parsea la data en obj
            if (json_last_error() === JSON_ERROR_NONE) {
                $request = $request->withParsedBody($contents);
            }
        }
        //se envia el obj al modelo
        $payload = $this->container->get('users_service')->insert($contents);
        //se envia la respuesta del payload
        $response->getBody()->write($payload);
        return $response
            ->withHeader('content-type', 'application/json')
            ->withStatus(200);
    }

    public function update($request, $response, $args)
    {
        //$id = $request->getAttribute('id');//para solicitar datos de la url
        //se verifica que venga un JSON
        $contentType = $request->getHeaderLine('Content-Type');
        if (strstr($contentType, 'application/json')) {
            //$contents = json_decode(file_get_contents('php://input'), true);//Se parsea la data en array
            $contents = json_decode(file_get_contents('php://input')); //Se parsea la data en obj
            if (json_last_error() === JSON_ERROR_NONE) {
                $request = $request->withParsedBody($contents);
            }
        }
        //se envia el obj al modelo
        $payload = $this->container->get('users_service')->update($contents);
        //se envia la respuesta del payload
        $response->getBody()->write($payload);
        return $response
            ->withHeader('content-type', 'application/json')
            ->withStatus(200);
    }

    public function delete($request, $response, $args)
    {
        //se verifica que venga un JSON
        $contentType = $request->getHeaderLine('Content-Type');
        if (strstr($contentType, 'application/json')) {
            //$contents = json_decode(file_get_contents('php://input'), true);//Se parsea la data en array
            $contents = json_decode(file_get_contents('php://input')); //Se parsea la data en obj
            if (json_last_error() === JSON_ERROR_NONE) {
                $request = $request->withParsedBody($contents);
            }
        }
        //se envia el obj al modelo
        $payload = $this->container->get('users_service')->delete($contents);
        //se envia la respuesta del payload
        $response->getBody()->write($payload);
        return $response
            ->withHeader('content-type', 'application/json')
            ->withStatus(200);
    }
}
