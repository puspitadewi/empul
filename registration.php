<?php include('templates/header.php') ?>
<?php include('templates/head.php') ?>
 <!-- Custom styles for this template -->
 <header>
         <!-- header inner -->
         <div class="header">
            <div class="head_top">
               <div class="container">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <ul class="sociel_link">
                         <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                         <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                         <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                     </ul>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <p>Website Pengepul Sampah </p>
                    </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <a class="navbar-brand"> Empul</a>
                        <div class="logo">  <a href="index.php"><img src="images/Empul.gif" alt="Empul" width="80" /></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li class="mean-last"> <a href="index.php">Home</a> </li>
                              <li class="active"> <a href="registration.php">signup</a> </li>
                               
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                  <li><a class="buy" href="login.php">Login</a></li>
               </div>
            </div>
         </div>
         </div>
         <!-- end header inner --> 
      </header>
      <!-- end header -->
<?php
require 'func.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
    alert('user baru ditambahkan');
    </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Log In Empul</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;s
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
         <!-- Custom styles for this template -->
         <link href="css/floating-labels.css" rel="stylesheet">
         </head>
  <body>
    <div class="container h-100 pt-5">
        <div class="row align-itemes-center h-100 align-middle">
          <div class="col-6 mx-auto">
         <div class="jumbotron">
         <form class="form-login">
         <div class="text-center mb-4">
         <img class="mb-4" src="images/Empul.gif" alt="" width="90" >
         <h1 class="h3 mb-3 font-weight-normal">Creat Account</h1>
         <p>Mari Buat Account Disini !</p>
        </div>

  <div class="form-label-group">
    <input type="text" class="form-control" name="First Name" placeholder="Masukkan First Name Anda" required autofocus>
    <label></label>
  </div>

  <div class="form-label-group">
    <input type="text" class="form-control" name="Last Name" placeholder="Masukkan Last Name Anda" required autofocus>
    <label></label>
  </div>

  <div class="form-label-group">
    <input type="text" class="form-control" id ="email" placeholder="Masukkan Email Anda" required autofocus>
    <label></label>
  </div>

  <div class="form-label-group">
    <input type="password" id="password1" name="password1" class="form-control" placeholder="Masukkan Password Anda" required>
    <label></label>
  </div>

  <div class="form-label-group">
    <input type="password" id="password2"  name="password2" class="form-control" placeholder="Masukkan Kembali Password Anda" required>
    <label></label>
  </div>
  
  <div class="form-label-group">
    <input type="text" name="Alamat" class="form-control" placeholder="Masukkan Alamat Anda" required>
    <label></label>
  </div>

  <div class="form-label-group">
    <input type="text" name="No.hp" class="form-control" placeholder="No.HP" required>
    <label></label>
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>

  <button type="submit" name="register" class="btn btn-warning btn-block">LogIn</button>
</form>
</body>
</div></div></div></div></div>
</html>
<?php include('templates/header.php') ?>
<?php include('templates/foter.php') ?>