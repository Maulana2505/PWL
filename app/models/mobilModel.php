<?php
class mobilModel
{
     private $table = 'mobil';
     private $db;
     public function __construct()
     {
          $this->db = new Database;
     }
     public function getallMobil(){
          return $this->mobil;
     }
     public function getMobil()
     {
          $query = "SELECT * FROM mobil";
          $this->db->query($query);
         return $this->db->resultSet();
     }
     public function getModilId($id)
     {
          $query = "SELECT * FROM mobil where id=:id";
          $this->db->query($query);
          $this->db->bind('id',$id);
         return $this->db->single();
     }
     
}
