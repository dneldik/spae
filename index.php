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

  if(!empty($_POST)) {
    $viewParams = [
      'title' => $_POST['title'],
      'content' => $_POST['content'],
    ];
  }

}
else {
  $page = 'list';
  
  $viewParams['elements'] = 'list of elements';
}

$view->render($page, $viewParams);
