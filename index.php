<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Slim\Factory\AppFactory;
require __DIR__ . '/vendor/autoload.php';
 
$app = AppFactory::create();

$handler = function (Request $request, Response $response) {
    $params = $request->getParsedBody();
 
    // Fall back to query parameters if needed
    if (!count($params)){
        $params = $request->getQueryParams();
    }
 
    error_log(print_r($params, true));
    return $response->withStatus(204);
};
 
$app->get('/webhooks/delivery-receipt', $handler);
$app->post('/webhooks/delivery-receipt', $handler);
 
$app->run();