<header>
     <label class="logo">Mongs <span>.Car</span> </label>
     <nav>
          <ul>
               <li><a class="Active" href="<?php echo BASEURL; ?>Dashboard">Home</a></li>
               <li><a href="#">Vehecles</a></li>
               <li><a href="#">Home</a></li>
          </ul>
     </nav>
     <div class="nav-login">
          <input type="button" value="Login" class="btn1" id="btn1">
     </div>
</header>

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

<!-- Vehecles -->

<h1 class="txt-veh">Vehecles</h1>
<div class="mobil-container">
     <?php foreach ($data['mmobil'] as $mobil) : ?>
          <div class="grid">
               <img src="<?= BASEURL ?><?= $mobil['img'] ?>" alt="" height="100" width="150">
               <h2 id="nama-mobil"><?= $mobil['nama'] ?></h2>
               <h4 id="harga-mobil"><?= $mobil['harga'] ?></h4>
               <!-- <input type="button" value="Book Now" class="mobil-book"> -->
               <!-- <button class="mobil-book" id="book-mobil">BOOK NOW</button> -->
               <input type="button" value="BOOK NOW" class="mobil-book" id="book-mobil" onclick="btnbook('<?=$mobil['nama']?>')">
               <script>
                    function btnbook(mobil){

                         var mobil = <?php echo json_encode($mobil); ?>
     
                         // var nama = mobil.nama
                         console.log(mobil)
     
                         document.getElementById('book-mobil').addEventListener('click', function() {
                              
                                   document.getElementById('book-nama').value =mobil['nama']
     
                                   // document.getElementById('book-harga').value = mobil[]
                                   
                             
                              
                              document.querySelector('.from-booknow').classList.toggle('activet')
                         })
                    }


               </script>
          </div>
     <?php endforeach; ?>
</div>
<!-- Constact Us -->

<div class="contactus-container">

</div>
<!-- Form bookNow -->
<div class="from-booknow">
     <span class="fas fa-times" id="close-book"></span>
     <div class="from2-booknow">
          <div id="book-form" class="input-field-booknow">
               <form action="">
                    <h3>Booking</h3>
                    <input type="text" placeholder="Nama Mobil" class="box" id="book-nama">
                    <input type="text" placeholder="harga" class="box" id="book-harga">
                    <input type="text" placeholder="Username" class="box">
                    <input type="text" placeholder="Password" class="box">

                    <input type="button" value="Book Now" class="btn">
               </form>
          </div>
     </div>
</div>
<div class="form-container">
     <span class="fas fa-times" id="close-login"></span>
     <div class="form2-container">
          <div id="login-form" class="input-field">
               <form>
                    <h3>LOGIN</h3>
                    <input type="text" placeholder="Username" class="box">
                    <input type="text" placeholder="Password" class="box">
                    <p>Forget Password? <a href="#"> Click Here</a></p>
                    <input type="button" value="Login Now" class="btn">
                    <p>Don't Have an Account? <input type="button" value="Click Here" id="login-click"></p>
               </form>
          </div>
          <div id="regis-form" class="input-field">
               <form>
                    <h3>Register</h3>
                    <input type="text" placeholder="Username" class="box">
                    <input type="email" placeholder="Email" class="box">
                    <input type="password" placeholder="Password" class="box">
                    <input type="button" value="Login Now" class="btn">
                    <p>Have an Account? <input type="button" value="Click Here" id="regis-click"></p>
               </form>
          </div>
     </div>
</div>