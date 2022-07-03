<?php

class contactusModel{
     private $table = 'user';
     private $db;
     public function __construct()
     {
          $this->db = new Database;
     }
     public function contacusData($data)
     {
          try{
          $query = "INSERT INTO contactus values ('',:nama,:email,:pesan)";
          $this->db->query($query);
          $this->db->bind('nama',$data['nama']);
          $this->db->bind('email',$data['email']);
          $this->db->bind('pesan',$data['pesan']);
          $this->db->exe();
          return $this->db->rowCount();
          }catch(\Exception $e){
               print $e;
          }
     }
}