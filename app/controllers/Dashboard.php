<?php

class Dashboard extends Controller{
     public function index(){
          $data['judul'] = 'Dashboard';
          $data['css'] = 'dashboard.css';
          $this->view('templates/header', $data);
          $this->view('dashboard/index');
          $this->view('templates/footer');
     }
     public function page(){
          echo "ssssss";
     }
}