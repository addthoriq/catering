<?php
session_start();
$_SESSION['idop'];
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
    <title>Akun Member | Ilma Catering Samarinda</title>
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
                  <h4 class="header"><a class="waves-effect" href="index.php">Menu Langganan</a></h4>
                </div>
              </div>
            </div>
            <!--Basic Form-->
              <div class="card-panel">
                <h4 class="header2">Ubah Menu Makanan</h4>
                <div class="row">
                  <form class="col s12" action="proses_edit.php" method="POST">
                    <?php
                    include '../../config/koneksi.php';

                    $id   = $_GET['id'];
                    $sql  = "SELECT * FROM user WHERE id = '$id'";
                    $res  = mysqli_query($konek, $sql);
                    $row  = mysqli_fetch_assoc($res);
                    ?>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="name" type="hidden" name="id" value="<?= $id ?>">
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="first_name" type="text" name="nama" value="<?= $row['nama'] ?>" disabled>
                        <label for="first_name">Nama</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <textarea id="message" class="materialize-textarea" name="alamat" disabled><?= $row['alamat'] ?></textarea>
                        <label for="message">Alamat</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="first_name" type="text" name="telpon" value="<?= $row['hp'] ?>" disabled>
                        <label for="first_name">Telepon</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="first_name" type="text" name="email" value="<?= $row['email'] ?>" disabled>
                        <label for="first_name">Email</label>
                      </div>
                    </div>
                    <?php
                    if ($row['status']==1) {
                    ?>
                    <p>
                       <input class="with-gap" id="ada" type="radio" name="status" value="1" required checked/>
                       <label for="ada">Tersedixa</label>
                    </p>
                    <p>
                       <input class="with-gap" id="tidak" type="radio" name="status" value="0" required/>
                       <label for="tidak">Tidak Tersedia</label>
                    </p>
                    <?php
                    }else{
                    ?>
                    <p>
                       <input class="with-gap" id="ada" type="radio" name="status" value="1" required/>
                       <label for="ada">Tersedia</label>
                    </p>
                    <p>
                       <input class="with-gap" id="tidak" type="radio" name="status" value="0" required checked/>
                       <label for="tidak">Tidak Tersedia</label>
                    </p>
                    <?php
                    }
                    ?>
                    <div class="row">
                      <div class="input-field col s12">
                        <button class="btn waves-effect waves-light right" type="submit" name="action">Ubah
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
