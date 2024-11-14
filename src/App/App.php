<?php

require __DIR__ . '/../../vendor/autoload.php';
(require __DIR__ . '/DotEnv.php');
$app = require __DIR__ . '/Container.php';
(require __DIR__ . '/Routes.php')($app);

return $app;