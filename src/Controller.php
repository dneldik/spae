<?php

declare(strict_types=1);

namespace App;

require_once("View.php");
require_once("Database.php");

class Controller
{
  private const DEFAULT_ACTION = 'list';

  private static array $configuration = [];

  private array $request;
  private View $view;
  private Database $database;

  public static function initConfiguration(array $configuration): void
  {
    self::$configuration = $configuration;
  }

  public function __construct(array $request)
  {
    $this->request = $request;
    $this->view = new View();
    $this->database = new Database(self::$configuration['db']);
  }

  public function run(): void
  {
    $viewParams = [];

    switch($this->action()) {

      case 'create':
        $page = 'create';
        $created = false;

        $data = $this->getRequestPost();
        if(!empty($data)) {
          $created = true;
          $viewParams = [
            'title' => $data['title'],
            'content' => $data['content'],
          ];
        }
        $viewParams['created'] = $created;
      break;

      default:
        $page = 'list';
        $viewParams['elements'] = 'list of elements';       
    }

    $this->view->render($page, $viewParams);
  }

  private function getRequestGet(): array
  {
    return $this->request['get'] ?? [];
  }

  private function getRequestPost(): array
  {
    return $this->request['post'] ?? [];
  }

  private function action(): string
  {
    $data = $this->getRequestGet();
    return $data['action'] ?? self::DEFAULT_ACTION;
  }
}
