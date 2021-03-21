<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$container->set('middlewar', function (Request $request, Response $response, $args) {

    $token = $request->getHeaderLine('Content-Type');

    $payload = $this->container->get('users_service')->getAuthorization($token);

    ($payload) ? $response->getBody()->write('Usuario No Autorizado') : "";
    return $response
        ->withHeader('content-type', 'application/json')
        ->withStatus(401);
});
