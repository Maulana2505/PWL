<?php

class bookingModel
{
     private $db;
     public function __construct()
     {
          $this->db = new Database;
     }
     public function booking($data)
     {
          $query = "INSERT INTO booking values ('',:mobil,:harga,:username,:NIK,:pickup,:dropoff)";
          $this->db->query($query);
          $this->db->bind('mobil', $data['mobil']);
          $this->db->bind('harga', $data['harga']);
          $this->db->bind('username', $data['username']);
          $this->db->bind('NIK', $data['nik']);
          $this->db->bind('pickup', $data['pickup']);
          $this->db->bind('dropoff', $data['dropoff']);
          $this->db->exe();
          return $this->db->rowCount();
     }
}
