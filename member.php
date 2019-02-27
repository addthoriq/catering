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
    <link rel="stylesheet" type="text/css" href="sty.css">
  </head>
  <body class="#ff4081 pink accent-2">
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START CONTENT -->
    <section id="content">
      <!--start container-->
      <div class="container">
        <!--card stats start-->
        <div class="row">
          <div class="col s12 m12 l12">
            <div class="card-panel z-depth-6">
              <div class="row">
                <h4 class="header2">Member Ilma Catering Online Samarinda</h4>
              </div>
              <ul class="row tabs">
                <li class="tab col s6 m6 l6"><a  href="#daftar" class="active">Daftar</a></li>
                <li class="tab col s6 m6 l6"><a  href="#login">Login</a></li>
              </ul>
              <div class="row">

                <!-- REGISTER -->
                <form class="col s12" method="post" action="config/proses_login.php" id="daftar">
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="name3" type="text" required class="validate" autocomplete="off" name="nama">
                      <label for="first_name">Nama</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">email</i>
                      <input id="email3" type="email" required class="validate" autocomplete="off" name="email">
                      <label for="email">Email</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">phone_iphone</i>
                      <input id="hp" type="text" required class="validate" autocomplete="off" name="hp">
                      <label for="hp">Nomor Hp</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">lock_outline</i>
                      <input id="password3" type="password" required class="validate" autocomplete="off" name="password">
                      <label for="pass">Password</label>
                    </div>
                  </div>
                  <p>
                     <input class="with-gap" id="lk" type="radio" name="jkl" value="1" required/>
                     <label for="lk">Laki laki</label>
                  </p>
                  <p>
                     <input class="with-gap" id="pr" type="radio" name="jkl" value="0" required/>
                     <label for="pr">Perempuan</label>
                  </p>
                  <div class="row">
                    <div class="input-field col s12">
                      <button class="btn waves-effect waves-light right" type="submit" name="action">Daftar
                        <i class="material-icons right">send</i>
                      </button>
                    </div>
                  </div>
                </form>


                <form class="col s12" method="post" action="config/proses_login.php" id="login">
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">email</i>
                      <input id="email" type="email" required class="validate" autocomplete="off" name="email">
                      <label for="email">Email</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">lock_outline</i>
                      <input id="password" type="password" required class="validate" autocomplete="off" name="password">
                      <label for="password">Password</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <button class="btn waves-effect waves-light right" type="submit" name="action">Masuk
                        <i class="material-icons right">send</i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- //////////////////////////////////////////////////////////////////////////// -->
      </div>
      <!--end container-->
    </section>
    <!-- END CONTENT -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
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
    <script type="text/javascript">
    $(document).ready(function(){
       $('.tabs').tabs({
         duration: 1000
       });
     });
    </script>
  </body>
</html>
