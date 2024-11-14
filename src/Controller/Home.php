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

    function index(ServerRequestInterface $request, ResponseInterface $response) {
        $title = 'It`s work!';
        $view = $this->container->get('view');
        $response = $view->render($response, 'index.html', compact('title'));

        // $response->getBody()->write('Hello from index controller');

        return $response;
    }
}