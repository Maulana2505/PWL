<?php
class mobilModel
{
     private $mobil = [
          [
               "img" => "img/mobil-ven1.png",
               "nama" => "Toyota Invaza",
               "harga" => "300"

          ],
          [
               "img" => "img/mobil-ven2.jpeg",
               "nama" => "Toyota Alphard",
               "harga" => "400"
          ],
          // [
          //      "img" => "/img/mobil-ven1.png",
          //      "nama" => "Toyota Invaza",
          //      "harga" => "300"
          // ],[
          //      "img" => "/img/mobil-ven1.png",
          //      "nama" => "Toyota Invaza",
          //      "harga" => "300"
          // ],
          // [
          //      "img" => "/img/mobil-ven1.png",
          //      "nama" => "Toyota Invaza",
          //      "harga" => "300"
          // ],[
          //      "img" => "/img/mobil-ven1.png",
          //      "nama" => "Toyota Invaza",
          //      "harga" => "300"
          // ],
          // [
          //      "img" => "/img/mobil-ven1.png",
          //      "nama" => "Toyota Invaza",
          //      "harga" => "300"
          // ],[
          //      "img" => "/img/mobil-ven1.png",
          //      "nama" => "Toyota Invaza",
          //      "harga" => "300"
          // ],
          // [
          //      "img" => "/img/mobil-ven1.png",
          //      "nama" => "Toyota Invaza",
          //      "harga" => "300"
          // ],
     ];
     private $table = 'mobil';
     private $db;
     public function __construct()
     {
          $this->db = new Database;
     }
     public function getallMobil(){
          return $this->mobil;
     }
     
}
