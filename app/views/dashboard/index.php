<header>
     <label class="logo">Mongs <span>.Car</span> </label>
     <nav>
          <ul>
               <li class="Active"><a href="#home">Home</a></li>
               <li><a href="#mobil">Vehecles</a></li>
               <li><a href="#contactus">Contact Us</a></li>
          </ul>
     </nav>
     <div class="nav-login">
          <a href="<?= BASEURL ?>/login"><input type="button" value="Login" class="btn1" id="btn1" style="visibility: visible;"></a>
          <!-- <input type="button" value="Login" class="btn1" id="btn1"> -->
          <a href="<?= BASEURL ?>/login/logout"> <img src="<?= BASEURL ?>/img/user.png" alt="" height="25" width="30" id="img-nav" style="visibility: hidden ;"></a>
     </div>
     <script>
          var session = <?php echo $_SESSION['id']; ?>

          console.log(session)

          if (!session) {
               document.getElementById('img-nav').style.visibility = 'hidden'
               document.getElementById('btn1').style.visibility = 'visible'
          } else {
               document.getElementById('img-nav').style.visibility = 'visible'
               document.getElementById('btn1').style.visibility = 'hidden'
          }
     </script>
</header>
<section id="home">
     <div class="img-container">
          <div class="img-con2">
               <img id="img-home" class="img-slider" src="<?= BASEURL ?>/img/home.jpg" />
               <img id="img-home2" class="img-slider" src="<?= BASEURL ?>/img/mobil-home2.jpg">
               <img src="<?= BASEURL ?>/img/mobil-home4.jpg" alt="" class="img-slider">
               <img src="<?= BASEURL ?>/img/mobil-home5.jpg" alt="" class="img-slider">
          </div>
          <h2>Selamat Datang di Rental Mobil Dimong.car
               <br> Rental Mobil Cepat Aman dan Terpercaya
          </h2>
     </div>
</section>
<!-- Vehecles -->
<section id="mobil">


     <div class="mob-container">
          <h1 class="txt-veh">Vehecles</h1>
          <div class="mobil-container">
               <?php foreach ($data['mmobil'] as $mobil) : ?>
                    <div class="grid">
                         <img src="data:image;base64,<?= base64_encode($mobil['gambar']) ?>" alt="" height="100" width="150">
                         <h2 id="nama-mobil" class="q34"><?= $mobil['nama'] ?></h2>
                         <h4 id="harga-mobil" class="q34"><?= $mobil['harga'] ?></h4>
                         <!-- <a href="javascript:btnbook('<?php echo $mobil['nama'] ?>')"><input type="button" value="BOOK NOW" class="mobil-book" id="book-mobil"></a> -->
                         <a href="<?= BASEURL ?>booknow/<?=$mobil['id']?>"><input type="button" value="BOOK NOW" class="mobil-book" id="book-mobil" /></a>
                         <!-- <input type="button" value="BOOK NOW" class="mobil-book" id="book-mobil" /> -->

                         <!-- onclick="btnbook('')" -->

                    </div>
               <?php endforeach; ?>
          </div>
     </div>
</section>
<!-- Constact Us -->
<section id="contactus">
     <h1 class="txt-veh">Contact Us</h1>
     <div class="contactus-container">
          <div class="form-contactus">
               <form action="<?= BASEURL;?>/dashboard/contactus" method="POST">
                    <input type="text" placeholder="Nama" class="box" name="nama">
                    <input type="email" placeholder="Email" class="box" name="email">
                    <textarea  name="pesan" cols="30" rows="10" class="box" placeholder="Massage"></textarea>
                    <input type="submit" value="Contact Us" class="btn">
               </form>
          </div>
     </div>
</section>
