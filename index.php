<?php

var_dump (trim($_SERVER['REQUEST_URI'], '/'));

 require 'core/bootstrap.php';


//  refers to router.php/class Router
$router = new Router;

//list all available routs
require 'routes.php';

//gets uri out of url
$uri = ($_SERVER['REQUEST_URI']);




require $router->direct($uri);