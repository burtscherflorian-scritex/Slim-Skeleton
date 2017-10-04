<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

// For a better overview use Controller Functions as callback
/*

$app->get('/[{name}]', 'Controller:index');

*/

// To use Controllers, you have to register them in Slim Container
// Make new Folder inside app directory called "Controllers" and inside of this a new Controller.php
// Controller.php:
    // Here you nee a public function called "index" which have the above callback code inside.
    // Everything should work like before, but brings a better structure

