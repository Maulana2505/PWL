<header>
     <label class="logo">logo <span>.ink</span> </label>
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
          <img id="img-home" class="img-slider" src="<?= BASEURL?>/img/home.jpg"  />
          <img id="img-home2" class="img-slider" src="<?= BASEURL?>/img/mobil-home2.jpg" >
          <img id="img-home3" class="img-slider" src="<?= BASEURL?>/img/mobil-home3.jpg" >
          <h2>Selamat Datang di Rental Mobil Dimong.car
               <br> Rental Mobil Cepat Aman dan Terpercaya
          </h2>
     </div>
</div>
<div class="mobil-container">
     <h1>Vehecles</h1>

</div>
<div class="form-container">
     <span class="fas fa-times" id="close-login"></span>
     <div class="form2-container">
          <div id="login-form" class="input-field">
               <form>
                    <h3>LOGIN</h3>
                    <input type="text" placeholder="Username"  class="box">
                    <input type="text" placeholder="Password" class="box">
                    <p>Forget Password? <a href="#"> Click Here</a></p>
                    <input type="button" value="Login Now" class="btn">
                    <p>Don't Have an Account? <input type="button" value="Click Here" id="login-click"></p>
               </form>
          </div>
          <div id="regis-form" class="input-field">
               <form>
                    <h3>Register</h3>
                    <input type="text" placeholder="Username"  class="box">
                    <input type="email" placeholder="Email"  class="box">
                    <input type="password" placeholder="Password"  class="box">
                    <input type="button" value="Login Now" class="btn">
                    <p>Have an Account? <input type="button" value="Click Here" id="regis-click"></p>
               </form>
          </div>
     </div>
</div>