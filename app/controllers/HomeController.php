<?php
namespace app\controllers;

use app\controllers\Controller;

class HomeController
{
  public function index($params)
  {
    var_dump($params->name);
    return Controller::view("home");
  }
}
