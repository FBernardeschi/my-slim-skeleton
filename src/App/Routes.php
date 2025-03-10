<?php

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\App;

return function(App $app) {
    $app->get('/', [\App\Controller\Home::class, 'index'])->setName('index');
};