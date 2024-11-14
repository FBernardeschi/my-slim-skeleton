<?php

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

$dotenv->required(['BASE_DIR']);