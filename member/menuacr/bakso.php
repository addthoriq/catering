<?php
  session_start();
  $_SESSION['idusr'];
  if (isset($_SESSION['idusr'])) {
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
    <title>Bakso</title>
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
    include '../layouts/header.php';
    ?>
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <div id="main">
      <div class="wrapper">
        <?php
        include '../layouts/left-sidebar.php';
        ?>
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START CONTENT -->
        <section id="content">
          <!--start container-->
          <div class="container">
            <!--card stats start-->
            <div class="row">
              <div class="col s12 m6 l6">
                <div class="card">
                  <div class="card-image">
                    <img src="../../gambar/opac_bakso.jpg">
                    <span class="card-title">Bakso</span>
                  </div>
                  <div class="card-content">
                    <p>I am a very simple card with small size solid color fab button. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                  </div>
                </div>
              </div>
              <!-- Form with validation -->
              <div class="col s12 m6 l6">
                <div class="card-panel">
                  <h4 class="header2">Pesan</h4>
                  <div class="row">
                    <form class="col s12" method="post" action="proses_pesan.php">
                      <!-- JCart -->
                      <div class="row">
                        <div class="input-field col s9">
                          <input type="text" id="amount" value="50 Porsi" disabled>
                          <label for="amount">Jumlah Porsi perhari</label>
                        </div>
                        <div class="input-field col s3">
                          <a class="add-box btn-floating waves-effect waves-light green lighten-1">
                            <i class="material-icons">add</i>
                          </a>
                          <a class="sub-box btn-floating waves-effect waves-light red lighten-1">
                            <i class="material-icons">remove</i>
                          </a>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s8">
                          <input type="text" id="date" class="datepicker">
                          <label for="date">Tanggal Mulai</label>
                          <small class="grey-text">Sampai
                            <span class="until"></span>
                          </small>
                        </div>
                        <div class="input-field col s4">
                          <select id="duration">
                            <option value="1" selected>1 Hari</option>
                            <option value="2">2 Hari</option>
                            <option value="3">3 Hari</option>
                            <option value="4">4 Hari</option>
                            <option value="5">5 Hari</option>
                          </select>
                          <label for="duration">Durasi</label>
                        </div>
                      </div>
                      <hr>
                      <div id="summary">
                        <div class="row">
                          <div class="col s4">
                            <h6>Total</h6>
                          </div>
                          <div class="col s8" style="text-align: right;">
                            <h6>Rp <span class="total"></span></h6>
                            <p class="grey-text" style="text-align: right;">
                              <small>
                                Rp <span class="cost"></span> x <span class="amount"></span> porsi x <span class="duration"></span> hari
                              </small>
                            </p>
                          </div>
                        </div>
                      </div>
                      <!-- Data Pemesan -->
                      <div class="row">
                        <div class="input-field col s12">
                          <input id="nameusr" type="text" class="validate" placeholder="<?= $_SESSION['namausr'] ?>" disabled>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">account_circle</i>
                          <input id="name" type="text" class="validate">
                          <label for="name">Nama Instansi/Perorangan</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">place</i>
                          <input id="alamat" type="email" class="validate">
                          <label for="alamat">Alamat</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">stay_current_portrait</i>
                          <input id="hp" type="text" class="validate">
                          <label for="hp">Nomor Hp</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">email</i>
                          <input id="email4" type="email" class="validate">
                          <label for="email">Email</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

            </div>

            <div class="col s12 m6 l6">
              <div class="card gradient-45deg-light-blue-cyan gradient-shadow">
                <div class="card-content white-text">
                  <span class="card-title">Tambah lagi pilihanmu</span>
                  <p>Masih ada beraneka macam menu pilihan untukmu</p>
                </div>
              </div>
            </div>
            <!-- carousel -->
              <div class="row owl-carousel owl-theme">
                <div class="col s12 m12 item gradient-shadow">
                  <div class="card">
                    <div class="card-image">
                      <img src="../../gambar/opac_bakso.jpg" alt="sample">
                      <span class="card-title">Bakso</span>
                    </div>
                    <div class="card-content">
                      <p>Rp 18.000/hari</p>
                    </div>
                    <div class="card-action">
                      <a href="bakso.php" class="waves-effect waves-light btn #ef5350 red lighten-1">Pesan Sekarang !</a>
                    </div>
                  </div>
                </div>
                <div class="col s12 m12 item gradient-shadow">
                  <div class="card">
                    <div class="card-image">
                      <img src="../../gambar/opac_soto.jpg" alt="sample">
                      <span class="card-title">Soto Banjar</span>
                    </div>
                    <div class="card-content">
                      <p>Rp 12.000/hari</p>
                    </div>
                    <div class="card-action">
                      <a href="#!" class="waves-effect waves-light btn #ef5350 red lighten-1">Pesan Sekarang !</a>
                    </div>
                  </div>
                </div>
                <div class="col s12 m12 item gradient-shadow">
                  <div class="card">
                    <div class="card-image">
                      <img src="../../gambar/opac_rawon.jpg" alt="sample">
                      <span class="card-title">Rawon</span>
                    </div>
                    <div class="card-content">
                      <p>Rp 15.000/hari</p>
                    </div>
                    <div class="card-action">
                      <a href="#!" class="waves-effect waves-light btn #ef5350 red lighten-1">Pesan Sekarang !</a>
                    </div>
                  </div>
                </div>
                <div class="col s12 m12 l12 item gradient-shadow">
                  <div class="card">
                    <div class="card-image">
                      <img src="../../gambar/opac_nasgor.jpg" alt="sample">
                      <span class="card-title">Nasi Goreng</span>
                    </div>
                    <div class="card-content">
                      <p>Rp 13.000/hari</p>
                    </div>
                    <div class="card-action">
                      <a href="#!" class="waves-effect waves-light btn #ef5350 red lighten-1">Pesan Sekarang !</a>
                    </div>
                  </div>
                </div>
                <div class="col s12 m12 l12 item gradient-shadow">
                  <div class="card">
                    <div class="card-image">
                      <img src="../../gambar/opac_ikan.jpg" alt="sample">
                      <span class="card-title">Ikan Bakar</span>
                    </div>
                    <div class="card-content">
                      <p>Rp 17.000/hari</p>
                    </div>
                    <div class="card-action">
                      <a href="#!" class="waves-effect waves-light btn #ef5350 red lighten-1">Pesan Sekarang !</a>
                    </div>
                  </div>
                </div>
                <div class="col s12 m12 l12 item gradient-shadow">
                  <div class="card">
                    <div class="card-image">
                      <img src="../../gambar/opac_ayam_bakar.jpg" alt="sample">
                      <span class="card-title">Ayam Bakar</span>
                    </div>
                    <div class="card-content">
                      <p>Rp 22.000/hari</p>
                    </div>
                    <div class="card-action">
                      <a href="#!" class="waves-effect waves-light btn #ef5350 red lighten-1">Pesan Sekarang !</a>
                    </div>
                  </div>
                </div>
                <div class="col s12 m12 l12 item gradient-shadow">
                  <div class="card">
                    <div class="card-image">
                      <img src="../../gambar/opac_ayam_goreng.jpg" alt="sample">
                      <span class="card-title">Ayam Goreng</span>
                    </div>
                    <div class="card-content">
                      <p>Rp 20.000/hari</p>
                    </div>
                    <div class="card-action">
                      <a href="#!" class="waves-effect waves-light btn #ef5350 red lighten-1">Pesan Sekarang !</a>
                    </div>
                  </div>
                </div>
                <div class="col s12 m12 l12 item gradient-shadow">
                  <div class="card">
                    <div class="card-image">
                      <img src="../../gambar/opac_nasik.jpg" alt="sample">
                      <span class="card-title">Nasi Kuning</span>
                    </div>
                    <div class="card-content">
                      <p>Rp 14.000/hari</p>
                    </div>
                    <div class="card-action">
                      <a href="#!" class="waves-effect waves-light btn #ef5350 red lighten-1">Pesan Sekarang !</a>
                    </div>
                  </div>
                </div>
              </div>
            <!-- //////////////////////////////////////////////////////////////////////////// -->
          </div>
          <!--end container-->
        </section>
        <!-- END CONTENT -->
      </div>
    </div>
    <?php
    include '../layouts/right-sidebar.php';
    ?>
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
                  items:5
              }
          }
      });
    </script>
    <script type="text/javascript">
     $(document).ready(function(){

       //Amount (box)
       $('.add-box').click(function(){
         var amount  = $('#amount');
         var val     = amount.val().replace(' Porsi', '');
         var num     = parseInt(val) + 50;

         amount.val(num + " Porsi");

         countAll();
       });

       $('.sub-box').click(function(){
         var amount  = $('#amount');
         var val     = amount.val().replace(' Porsi', '');
         var num     = parseInt(val) - 50;

         if (num > 0) {
           amount.val(num + " Box");
         }
         countAll();
       });

       countAll = function(){
         var cost      = 18000;
         var amount    = $('#amount').val().replace(' Box', '');
         var duration  = $('#duration').val();
         var total     = cost * parseInt(amount) * parseInt(duration);

         $('.total').text(total);
         $('.cost').text(cost);
         $('.amount').text(amount);
         $('.duration').text(duration);
       }
       countAll();
       $('#duration').change(function(){
         countAll();
       });
     });
    </script>
  </body>
</html>
<?php
}else {
  echo "Anda Belum Login, silahkan Login <a href='http://localhost/ilma/member.php'>Di sini</a>";
}
?>
