<?php
// Index file for the EV Station Finder application.

require 'vendor/autoload.php';

use App\Router;

// Create a new router instance
$router = new Router();

// Load routes
$router->loadRoutes();

// Handle the request
$router->dispatch();

?>