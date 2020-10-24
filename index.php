<?php

declare(strict_types=1);
 
namespace App;

require_once("src/Utils/debug.php");
require_once("src/View.php");

const DEFAULT_ACTION =  'list';

$action = $_GET['action'] ?? DEFAULT_ACTION;

$viewParams = [];
$view = new View();

if($action === 'create') {
  $page = 'create';
  $viewParams['created'] = 'New element created.';
} else {
  $page = 'list';
  $viewParams['elements'] = 'List of elements.';
}


$view->render($page, $viewParams);
