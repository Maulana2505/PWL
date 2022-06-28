<?php

class Dashboard extends Controller{
     public function index(){
          $data['judul'] = 'Dashboard';
          $data['css'] = 'dashboard.css';
          $data['mmobil'] = $this->model('mobilModel')->getallMobil();
          $this->view('templates/header', $data);
          $this->view('dashboard/index',$data);
          $this->view('templates/footer');
     }
     public function page(){
          echo "ssssss";
     }
}