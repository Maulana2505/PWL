<?php

class Booknow extends Controller{
     public function index($id){
          if (session_status() !== PHP_SESSION_ACTIVE) {
               session_start();
          }
          if(!isset($_SESSION['id'])){
               header('Location:' . BASEURL . 'login');
          }else{
          $data['book'] = $this->model('mobilModel')->getModilId($id);
          $this->view('booknow/index',$data);
     }
     }
     public function book()
     {
          if ($this->model('bookingModel')->booking($_POST) > 0) {
               header('Location:' . BASEURL . 'dashboard#booking');
               exit;
          }
     }
}