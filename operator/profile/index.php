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
    <title>Edit Profil | Ilma Catering Samarinda</title>
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
    </script>
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
            <div id="striped-table">
              <div class="row">
                <div class="col s12">
                  <h4 class="header"><a class="waves-effect" href="../index.php">Beranda</a></h4>
                </div>
              </div>
            </div>
            <!--Basic Form-->
              <div class="card-panel">
                <h4 class="header2">Data Profil</h4>
                <div class="row">
                  <form class="col s12" action="proses_edit.php" method="POST" enctype="multipart/form-data">
                    <?php
                    include '../../config/koneksi.php';

                    $id   = $_GET['id'];
                    $sql  = "SELECT * FROM op WHERE id = '$id'";
                    $res  = mysqli_query($konek, $sql);
                    $row  = mysqli_fetch_assoc($res);

                    $ava  = "http://localhost/ilma/operator/avatar/".$row['foto'];
                    ?>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="name" type="hidden" name="id" value="<?= $id ?>">
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s2 m2 l2">
                        <img src="<?= $ava ?>" alt="" class="circle responsive-img valign profile-image cyan" onError="this.onerror=null;this.">
                      </div>
                    </div>
                    <div class="row">
                     <div class="file-field input-field col s6">
                        <div class="btn waves-effect waves-light">
                          <span>File</span>
                          <input type="file" name="gambar">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" value="<?= $row['foto'] ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="name" type="text" name="nama" value="<?= $row['nama'] ?>">
                        <label for="name">Nama</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="email" type="email" name="email" value="<?= $row['email'] ?>">
                        <label for="email">Email</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="pass" type="password" name="pass">
                        <label for="pass">Password</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <button class="btn waves-effect waves-light right" type="submit" name="action">Simpan
                          <i class="material-icons right">send</i>
                        </button>
                      </div>
                    </div>
                  </form>
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
  echo "Anda Belum Login, silahkan Login <a href='http://localhost/ilma/member.php'>Di sini</a>";
}
