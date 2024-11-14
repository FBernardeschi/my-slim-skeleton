<?php

use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use DI\Container;
use Slim\Factory\AppFactory;

$container = new Container();

$container->set('view', function() {
    return Twig::create(__DIR__ . '/../../templates');
});

$app = AppFactory::createFromContainer($container);
$app->add(TwigMiddleware::create($app, $container->get('view')));
$app->addRoutingMiddleware();
$app->addErrorMiddleware(true, true, true);
$app->setBasePath($_ENV['BASE_DIR']);

return $app;