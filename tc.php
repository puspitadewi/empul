<?php include('templates/head.php') ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Empul</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>  -->
      </div>
      <!-- end loader --> 
      <!-- header -->
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
                     <div class="logo">  <a href="home.php"><img src="images/Empul.gif" alt="Empul" width="80" /></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                            <li> <a href="home.php">Home</a> </li>
                            <li> <a href="about.php">About</a> </li>
                            <li class="active"> <a href="tc.php">Trash Collect</a> </li>
                            <li> <a href= "akun.php"> Account</a> </li>
                            <li> <a href="FB.php">FeedBack</a></li>
                            
                            </ul>
                        </nav>
                     </div>
                  </div>
               </div>
               </div>
            </div>
         </div>
         <!-- end header inner --> 
      </header>

<?php require 'func.php';
$result = mysqli_query($conn, "SELECT * FROM barang");

if (isset($_POST["submit"])) {
  if (data($_POST) > 0) {
    echo "<script>
  alert('data baru ditambahkan');
  </script>";
  } else {
    echo mysqli_error($conn);
  }
}
?>


<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="container h-100 pt-5">
            <div class="row align-itemes-center h-100 align-middle">
              <div class="col-6 mx-auto">
                <div class="jumbotron">
                  <div class="card" style="width: 30rem;">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">No.</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Alamat</th>
                          <th scope="col">Jenis Sampahnya</th>
                          <th scope="col">Harga/kg </th>
                          <th scope="col">Tanggal</th>
                        </tr>
                      </thead>
                      <tbody>
                        <center>
                        <br>
                          <h4>Daftar Riwayat Empul</h4>
                        </center>
                        <?php $i = 1; ?>
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                          <tr>
                            <th scope="row"><?= $i;  ?></th>
                            <td><?= $row["alamat"];  ?></td>
                            <td><?= $row["hp"];  ?></td>
                            <td><?= $row["bobot"] * 3000;  ?>/(<?= $row["bobot"];  ?>)</td>
                          </tr>
                          <?php $i++; ?>
                        <?php endwhile; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm">
          <div class="container h-100 pt-5">
            <div class="row align-itemes-center h-100 align-middle">
              <div class="col-8 mx-auto">
               
                  <center>
                    <h3>Ayook Kumpul Sampah </h3>
                  </center>
                  <form action="" method="post">
                    <div class="form-group">
                      <label for="">Lokasi Saat Ini </label>
                      <input autocomplete="off" autofocus="on" type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Lokasi Anda" >
                    </div>
                    <div class="form-group">
                      <label for="">Bobot</label>
                    <input autocomplete="off" autofocus="on" type="text" name="bobot" id="bobot" class="form-control" placeholder="Masukkan Bobot MIN 0,5 Kg" >
                    </div>
                    <div class="form-group">
                      <label for="">Tanggal</label>
                    <input autocomplete="off" autofocus="on" type="timestamp" name="tanggal" id="tanggal" class="form-control" placeholder="Masukka Y-M-D saat ini" >
                    </div>
                    <div class="form-group">
                      <label for="">Jenis Sampah</label>
                      <select autocomplete="off" autofocus="on" class="form-control custom-select " id="jenis" name="jenis" >
                      <option value="" selected> Pilih salah satu </option>
                                                 <option value="1">Plastik</option>
                                                 <option value="2">Kaleng/Logam</option>
                                                 <option value="3">Kertas</option>
                                                 <option value="4">Kerdus/kotak</option>
                                                 <option value="5">Kain Sisa</option>
                                            </select>                                                       
                    </div>
                    <button type="submit" name="submit" class="btn btn-warning btn-block">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('templates/foter.php') ?>