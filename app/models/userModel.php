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
}