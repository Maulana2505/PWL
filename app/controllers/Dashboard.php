<?php

class Dashboard extends Controller{
     public function index(){
          $data['judul'] = 'Dashboard';
          $data['mmobil'] = $this->model('mobilModel')->getMobil();
          $this->view('templates/header', $data);
          $this->view('dashboard/index',$data);
          $this->view('templates/footer');
     }
     public function page(){
          echo "ssssss";
     }
     public function contactus()
     {
          if ($this->model('contactusModel')->contacusData($_POST) > 0) {
               header('Location:' . BASEURL . '/dashboard#contactus');
               exit;
          }
          else{
               header('Location:' . BASEURL . 'dashboard/404');
          }
     }
}