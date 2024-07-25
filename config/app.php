<?php
use Dotenv\Dotenv;

if (!defined('PROJECT_ROOT')) {
    define('PROJECT_ROOT', dirname(__DIR__));
}

$env = Dotenv::createImmutable(dirname(__DIR__) );
$env->load();

return [
    'defaultTemplate' => 'layout',
];