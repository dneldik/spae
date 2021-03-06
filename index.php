<?php

declare(strict_types=1);
 
namespace App;

require_once("src/Utils/debug.php");
require_once("src/Controller.php");

$configuration = require("config/config.php");

$request = [
  'get' => $_GET,
  'post' => $_POST
];

Controller::initConfiguration($configuration);
(new Controller($request))->run();
