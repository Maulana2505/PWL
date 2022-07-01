<?php

class Controller
{
     public function view($view, $data = [])
     {
          if (session_status() !== PHP_SESSION_ACTIVE) {
               session_start();
          }
          if(!isset($_SESSION['id'])){
               require_once "../app/views/login/index.php";
          }else{
          require_once '../app/views/' . $view . '.php';
          }
     }
     public function model($model)
     {
          require_once '../app/models/' . $model . '.php';
          return new $model;
     }
}
