<?php

class Login extends Controller{
     public function index(){
          $data['judul'] = 'Login';
          $this->view('templates/header', $data);
          $this->view('login/index');
          $this->view('templates/footer');
     }
     public function page(){
          echo "ssssss";
     }
     }
