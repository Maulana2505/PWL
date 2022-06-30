<?php

class Login extends Controller
{
     public function index()
     {
          $data['judul'] = 'Login';
          // $this->view('templates/header', $data);
          $this->view('login/index');
          // $this->view('templates/footer');
     }
     public function page()
     {
          echo "ssssss";
     }
     public function regis()
     {
          if ($this->model('userModel')->regisUSer($_POST) > 0) {
               header('Location:' . BASEURL . 'login');
               exit;
          }
     }
     public function login()
     {
          $username = $_POST['username'];
          $pass = $_POST['password'];
          $data['login'] = $this->model('userModel')->loginUser($username,$pass);
          if(!$data['login']){
               echo "erorr";
          }else{
               foreach ($data['login'] as $db ) {
                    $_SESSION['id'] = $db['id'];
                    $_SESSION['nama'] = $db['nama'];
                    $_SESSION['email'] = $db['email'];
                    header('Location:' . BASEURL . 'dashboard');
               };
          }
     }
}
