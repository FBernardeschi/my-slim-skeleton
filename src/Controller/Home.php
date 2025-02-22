<?php

namespace App\Controller;

use DI\Container;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class Home
{
    private $container;

    function __construct(Container $container)
    {
        $this->container = $container;
    }

    function index(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface {
        $title = 'Slim 4 Skeleton';
        $view = $this->container->get('view');
        $response = $view->render($response, 'index.html', compact('title'));

        return $response;
    }
}