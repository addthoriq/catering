<?php
session_start();
$_SESSION['idusr'];
if (isset($_SESSION['emailusr'])) {

?>
<!DOCTYPE html>
<html lang="id">
  <!--================================================================================
    Item Name: Materialize - Material Design Admin Template
    Version: 4.0
    Author: PIXINVENT
    Author URL: https://themeforest.net/user/pixinvent/portfolio
  ================================================================================ -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Ilma Catering Samarinda</title>
    <!-- Favicons-->
    <link rel="icon" href="adminmt/images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="adminmt/images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="adminmt/images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link href="adminmt/css//materialize.css" type="text/css" rel="stylesheet">
    <link href="adminmt/css//style.css" type="text/css" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="adminmt/css/custom/custom.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="adminmt/vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href="adminmt/vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
  </head>
  <body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <?php
    include 'layouts/header.php';
    ?>
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <div id="main">
      <div class="wrapper">
        <?php
        include 'layouts/left-sidebar.php';
        ?>
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START CONTENT -->
        <section id="content">
          <!--start container-->
          <div class="container">
            <!--card stats start-->
            <div class="col s12 m6 l6">
              <div class="card gradient-45deg-light-blue-cyan gradient-shadow">
                <div class="card-content white-text">
                  <span class="card-title">Bebas dari repot makan di Samarinda</span>
                  <p>Langganan makan siang beberapa hari, fokuskan waktumu ke hal yang lebih penting</p>
                </div>
                <div class="row">
                  <div class="card-action col s12 m3 l3">
                    <a class="waves-effect waves-light gradient-45deg-amber-amber btn" href=""><i class="material-icons left">brightness_5</i> Lunch</a>
                  </div>
                  <div class="card-action col s12 m3 l3">
                    <a class="waves-effect waves-light gradient-45deg-blue-grey-blue btn" href=""><i class="material-icons left">brightness_3</i> Dinner</a>
                  </div>
                  <div class="card-action col s12 m3 l3">
                    <a class="waves-effect waves-light gradient-45deg-purple-deep-orange btn" href="menuacr/index.php"><i class="material-icons left">tag_faces</i> Event</a>
                  </div>
                </div>
              </div>
            </div>
            <?php
            include '../config/koneksi.php';
            $sql    = "SELECT * FROM menuacr WHERE status = 1";
            $res    = mysqli_query($konek, $sql);

            function harga($m){
              $rupiah = "Rp. ".number_format($m,0,",",".")."/hari";
              return $rupiah;
            }
            if (mysqli_num_rows($res)>0) {
              while ($row = mysqli_fetch_assoc($res)) {
                $ava    = "http://localhost/ilma/img/".$row['foto'];
            ?>
            <div class="row owl-carousel owl-theme">
              <div class="col s12 m12 item gradient-shadow">
                <div class="card">
                  <div class="card-image">
                    <img src="<?= $ava ?>" alt="sample">
                    <span class="card-title"><?= $row['nama'] ?></span>
                  </div>
                  <div class="card-content">
                    <p><?= harga($row['harga']) ?></p>
                  </div>
                  <div class="card-action">
                    <a href="menuacr/bakso.php" class="waves-effect waves-light btn #ef5350 red lighten-1">Pesan Sekarang !</a>
                  </div>
                </div>
              </div>
            </div>
            <?php
              }
            }
            ?>
            <!-- //////////////////////////////////////////////////////////////////////////// -->
          </div>
          <div class="parallax-container">
            <div class="parallax"><img src="../gambar/opac_bakso.jpg"></div>
          </div>
          <div class="section white">
            <div class="row container">
              <h2 class="header">Harga Bersahabat</h2>
              <p class="grey-text text-darken-3 lighten-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
          <div class="parallax-container">
            <div class="parallax"><img src="../gambar/opac_ikan.jpg"></div>
          </div>
          <div class="row"></div>
          <!--end container-->
        </section>
        <!-- END CONTENT -->
      </div>
    </div>
    <?php
    include 'layouts/right-sidebar.php';
    ?>
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <?php
    include 'layouts/footer.php'
    ?>
    <!-- ================================================
    Scripts
    ================================================ -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="adminmt/vendors/jquery-3.2.1.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="adminmt/js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="adminmt/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="adminmt/js/plugins.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="adminmt/js/custom-script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript">
      $('.owl-carousel').owlCarousel({
          margin:10,
          nav:true,
          autoplay:true,
          autoplayTimeout:2000,
          loop:true,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:3
              },
              1000:{
                  items:4
              }
          }
      })
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
        $('.parallax').parallax();
      });
    </script>
  </body>
</html>
<?php
}else{
  echo "Anda Belum Login, silahkan Login <a href='http://localhost/ilma/member.php'>Di sini</a>";
}
