<?php

chdir(dirname(__DIR__));

putenv('APP_ENV=development');

if (getenv('APP_ENV') === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// register autoloader, helpers and DB helper
require 'src/boot.php';

// $_SESSION
session_start();

// send utf8 to browser
header('Content-Type: text/html; charset=utf8');

// capture request
$request = Solver\Request::fromGlobals();

// view renderer to inject into controller
$renderer = new Solver\View();
$renderer->addPath(__DIR__ . '/../templates');

// default error controller
$error = new Solver\Controller\Error($renderer);

try {

    // try to resolve the controller
    $controller = $request->getParam('controller', 'home');
    $controller = 'Solver\\Controller\\' . ucfirst($controller);

    if (class_exists($controller, true)) {
        $instance = new $controller($renderer); // inject the view
        echo $instance($request); // callable with captured request
    } else {
        echo $error($request, 'Невалидна заявка');
    }

} catch (\Exception $e) {
    try {
        if (getenv('APP_ENV') === 'development') {
            echo $error($request, $e->getMessage());
        } else {
            echo $error($request, 'Моля, опитайте по-късно.');
        }
    } catch (\Exception $e) {
        if (getenv('APP_ENV') === 'development') {
            echo $e->getMessage();
        }
    }
}