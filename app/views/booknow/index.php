<!DOCTYPE html>
<html lang="en">
<?php 
var_dump($data['book']['nama'])?>
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="<?= BASEURL;?>/css/booknow.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
     <title>Booking</title>
</head>
<body>
<div class="from-booknow">
     <!-- <span class="fas fa-times" id="close-book"></span> -->
     <a href="<?= BASEURL;?>dashboard"><i class="fa-solid fa-arrow-left fa-xl" id="back-booking"></i></a>
     <div class="from2-booknow">
          <div id="book-form" class="input-field-booknow">
               <form action="<?= BASEURL;?>booknow/book" method="POST">
                    <h3>Booking</h3>
                    <input type="text" placeholder="Nama Mobil" class="box" id="book-nama" value="<?=$data['book']['nama']?>" name="mobil">
                    <input type="text" placeholder="harga" class="box" id="book-harga" value="<?=$data['book']['harga']?>" name="harga">
                    <input type="text" placeholder="Username" class="box" value="<?=$_SESSION['nama']?>" name="username">
                    <!-- <input type="text" placeholder="Email" class="box" value="<?=$data['book']['email']?>"> -->
                    <input type="text" placeholder="NIK" class="box" name="nik">
                    <div class="tgl-con">
                         <label class="pickup">Pick UP</label>
                         <input type="date" name="pickup" id="" class="date">
                    </div>
                    <div class="tgl-con"> 
                    <label class="pickup">Drop Off</label>
                         <input type="date" name="dropoff" id="" class="date">
                    </div>
                    <input type="submit" value="Book Now" class="btn">
               </form>
          </div>
     </div>
</div>
</body>
</html>