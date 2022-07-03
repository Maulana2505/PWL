<?php

class userModel{

     private $table = 'user';
     private $db;
     public function __construct()
     {
          $this->db = new Database;
     }
     public function getAllUser(){
          $this->db->query('SELECT * FROM'. $this->table);
     }
     public function regisUser($data)
     {
         $query = "INSERT INTO user values ('',:username,:password,:alamat,:notlp,:email)";
         $this->db->query($query);
         $this->db->bind('username',$data['username']);
         $this->db->bind('password',$data['password']);
         $this->db->bind('alamat',$data['alamat']);
         $this->db->bind('notlp',$data['notlp']);
         $this->db->bind('email',$data['email']);
         $this->db->exe();
         return $this->db->rowCount();
     }
     public function loginUser($username,$password)
     {
          try {
               
               $query = "SELECT * FROM user where username = :username and password = :password";
               $this->db->query($query);
               $this->db->bind('username',$username);
               $this->db->bind('password',$password);
               $this->db->exe();
               return $this->db->resultSet();
          } catch (\Exception $e) {
               echo $e;
          }
     }
}