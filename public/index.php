<?php

use Core\App;
use Model\Client;


session_start();
const BASE_PATH = __DIR__.'/../';
require_once BASE_PATH.'vendor/autoload.php';
require BASE_PATH ."functions.php";



// Load database configuration from config.php file
$config = require BASE_PATH.'config.php';
//get the instance of the app
$App = App::getInstance();
//set the database configuration
$App->setDatabase( dbConfig:   $config['database']);




//set the routes
$App->setRoutes([
    '/' => 'Controller/index.php',
    '/flights'=>'Controller/flights.php',
    '/pilots'=>'Controller/pilots.php',
    '/planes'=>'Controller/planes.php'

],BASE_PATH);


//run the app
$App->run();