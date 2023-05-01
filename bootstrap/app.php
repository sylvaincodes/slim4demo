<?php
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim4demo\Kernel\App;

session_start();

require __DIR__.'/../vendor/autoload.php';

$app = \DI\Bridge\Slim\Bridge::create();

$app->get('/hello/{name}', function (Request $request, Response $response) {
    $response->getBody()->write('Hello!');
    return $response;
});

$app->run();