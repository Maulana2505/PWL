<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="<?= BASEURL;?>css/login.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
     <script src=""></script>
     <title>Login</title>
</head>
<body>
<div class="form-container">
     <!-- <span class="fas fa-times" id="close-login"></span> -->
     <a href="<?= BASEURL;?>dashboard"><i class="fa-solid fa-arrow-left fa-xl" id="back-login"></i></a>
     <!-- <i class="fa-solid fa-arrow-left fa-xl" id="back-login"></i> -->
     <div class="form2-container">
          <div id="login-form" class="input-field">
               <form action="<?= BASEURL;?>/login/login" method="POST">
                    <h3>LOGIN</h3>
                    <input type="text" placeholder="Username" class="box" name="username">
                    <input type="password" placeholder="Password" class="box" name="password">
                    <p>Forget Password? <a href="#"> Click Here</a></p>
                    <input type="submit" value="Login Now" class="btn">
                    <p>Don't Have an Account? <input type="button" value="Click Here" id="login-click"></p>
               </form>
          </div>
          <div id="regis-form" class="input-field">
               <form action="<?= BASEURL;?>/login/regis" method="POST">
                    <h3>Register</h3>
                    <input type="text" placeholder="Username" class="box" name="username">
                    <input type="email" placeholder="Email" class="box" name="email">
                    <input type="text" placeholder="Alamat" class="box" name="alamat">
                    <input type="number" placeholder="No.TLP" class="box" name="notlp">
                    <input type="password" placeholder="Password" class="box" name="password">
                    <input type="submit" value="Login Now" class="btn">
                    <p>Have an Account? <input type="button" value="Click Here" id="regis-click"></p>
               </form>
          </div>
     </div>
</div>
<script src="<?php echo BASEURL; ?>/js/login.js"></script>
</body>
</html>