<?php
session_start();
if (isset($_SESSION['emailop'])) {

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
    <title>Backup | Ilma Catering Samarinda</title>
    <!-- Favicons-->
    <link rel="icon" href="../adminmt/images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="../adminmt/images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="../adminmt/images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link href="../adminmt/css//materialize.css" type="text/css" rel="stylesheet">
    <link href="../adminmt/css//style.css" type="text/css" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="../adminmt/css/custom/custom.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="../adminmt/vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href="../adminmt/vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
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
    include '../layouts/header.php';
    ?>
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START MAIN -->
    <div id="main">
      <!-- START WRAPPER -->
      <div class="wrapper">
        <?php
        include '../layouts/left-sidebar.php';
        ?>
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START CONTENT -->
        <section id="content">
          <!--start container-->
          <div class="container">
            <div class="divider"></div>
            <div id="striped-table">
              <div class="row">
                <div class="col s6 m6 l6">
                  <h4 class="header"><a class="waves-effect" href="index.php">Menu Pesanan Acara</a></h4>
                </div>
              </div>
              <div class="card-panel">
                <div class="row">
                  <div class="col s12">
                  <table class="striped">
                    <thead>
                      <tr>
                        <th>Nomor</th>
                        <th>Data</th>
                        <th>Unduh</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Akun Admin</td>
                      <td><a class="waves-effect" href="">Klik Disini</a></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Akun Member</td>
                      <td><a class="waves-effect" href="">Klik Disini</a></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Menu Acara</td>
                      <td><a class="waves-effect" href="">Klik Disini</a></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Menu Langganan</td>
                      <td><a class="waves-effect" href="">Klik Disini</a></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Transaksi Pemesanan Acara</td>
                      <td><a class="waves-effect" href="">Klik Disini</a></td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Transaksi Katering Langganan</td>
                      <td><a class="waves-effect" href="">Klik Disini</a></td>
                    </tr>
                    </tbody>
                  </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- //////////////////////////////////////////////////////////////////////////// -->
          </div>
          <!--end container-->
        </section>
        <!-- END CONTENT -->
        <?php
        include '../layouts/right-sidebar.php';
        ?>
      </div>
      <!-- END WRAPPER -->
    </div>
    <!-- END MAIN -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <?php
    include '../layouts/footer.php'
    ?>
    <!-- ================================================
    Scripts
    ================================================ -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="../adminmt/vendors/jquery-3.2.1.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="../adminmt/js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="../adminmt/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../adminmt/js/plugins.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="../adminmt/js/custom-script.js"></script>
  </body>
</html>

<?php
}else{
  echo "Anda Belum Login, silahkan Login <a href='../index.php'>Di sini</a>";
}