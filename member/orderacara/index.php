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
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START CONTENT -->
    <section id="content">
      <!--start container-->
      <div class="container">
        <!--card stats start-->
        <div class="col s12 m12 l12">
          <div class="row">
            <div class="col s6 m3 l3">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.berrykitchen.com/new/properties/recipes/foto_berita/bakso_01.jpg" alt="sample">
                  <span class="card-title">Paket A</span>
                </div>
                <div class="card-content">
                  <p>Paket A : Bakso</p>
                </div>
                <div class="card-action">
                  <a href="#!" class="waves-effect waves-light btn #ef5350 red lighten-1">Pesan Sekarang !</a>
                </div>
              </div>
            </div>
            <div class="col s6 m3 l3">
              <div class="card">
                <div class="card-image">
                  <img src="http://katalogkuliner.com/wp-content/uploads/2016/02/katalogkuliner-Resep-Membuat-Soto-Banjar-Asli-Khas-Kalimantan-595x446.jpg" alt="sample">
                  <span class="card-title">Paket B</span>
                </div>
                <div class="card-content">
                  <p>Paket B : Soto Banjar</p>
                </div>
                <div class="card-action">
                  <a href="#!" class="waves-effect waves-light btn #ef5350 red lighten-1">Pesan Sekarang !</a>
                </div>
              </div>
            </div>
            <div class="col s6 m3 l3">
              <div class="card">
                <div class="card-image">
                  <img src="https://3.bp.blogspot.com/-0tzeTI_noDs/WrxTP9ac_QI/AAAAAAAAADE/sKOhw-uHAyQRo_NKL0Hd35W1Dp7c-6RAACLcBGAs/s1600/photo.jpg" alt="sample">
                  <span class="card-title">Paket C</span>
                </div>
                <div class="card-content">
                  <p>Paket C : Rawon</p>
                </div>
                <div class="card-action">
                  <a href="#!" class="waves-effect waves-light btn #ef5350 red lighten-1">Pesan Sekarang !</a>
                </div>
              </div>
            </div>
            <div class="col s6 m3 l3">
              <div class="card">
                <div class="card-image">
                  <img src="https://cfcdn2.azsg.opensnap.com/azsg/snapphoto/photo/LG/GY4M/3CIOWS0D193A176E2D468Clv.jpg" alt="sample">
                  <span class="card-title">Paket D</span>
                </div>
                <div class="card-content">
                  <p>Paket A : Nasi+Ayam+dll</p>
                </div>
                <div class="card-action">
                  <a href="#!" class="waves-effect waves-light btn #ef5350 red lighten-1">Pesan Sekarang !</a>
                </div>
              </div>
            </div>
            <div class="col s6 m3 l3">
              <div class="card">
                <div class="card-image">
                  <img src="../images/blog/blog-img-3.jpg" alt="sample">
                  <span class="card-title">Paket D</span>
                </div>
                <div class="card-content">
                  <p>Paket A : Nasi+Ayam+dll</p>
                </div>
                <div class="card-action">
                  <a href="#!" class="waves-effect waves-light btn #ef5350 red lighten-1">Pesan Sekarang !</a>
                </div>
              </div>
            </div>
            <div class="col s6 m3 l3">
              <div class="card">
                <div class="card-image">
                  <img src="../images/blog/blog-img-3.jpg" alt="sample">
                  <span class="card-title">Paket D</span>
                </div>
                <div class="card-content">
                  <p>Paket A : Nasi+Ayam+dll</p>
                </div>
                <div class="card-action">
                  <a href="#!" class="waves-effect waves-light btn #ef5350 red lighten-1">Pesan Sekarang !</a>
                </div>
              </div>
            </div>
            <div class="col s6 m3 l3">
              <div class="card">
                <div class="card-image">
                  <img src="../images/blog/blog-img-3.jpg" alt="sample">
                  <span class="card-title">Paket D</span>
                </div>
                <div class="card-content">
                  <p>Paket A : Nasi+Ayam+dll</p>
                </div>
                <div class="card-action">
                  <a href="#!" class="waves-effect waves-light btn #ef5350 red lighten-1">Pesan Sekarang !</a>
                </div>
              </div>
            </div>
            <div class="col s6 m3 l3">
              <div class="card">
                <div class="card-image">
                  <img src="../images/blog/blog-img-3.jpg" alt="sample">
                  <span class="card-title">Paket D</span>
                </div>
                <div class="card-content">
                  <p>Paket A : Nasi+Ayam+dll</p>
                </div>
                <div class="card-action">
                  <a href="#!" class="waves-effect waves-light btn #ef5350 red lighten-1">Pesan Sekarang !</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="card-stats">
          <div class="row">
            <div class="col s12 m6 l3">
              <div class="card">
                <div class="card-content cyan white-text">
                  <p class="card-stats-title">
                    <i class="material-icons">person_outline</i> New Clients</p>
                  <h4 class="card-stats-number">566</h4>
                  <p class="card-stats-compare">
                    <i class="material-icons">keyboard_arrow_up</i> 15%
                    <span class="cyan text text-lighten-5">from yesterday</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col s12 m6 l3">
              <div class="card">
                <div class="card-content red accent-2 white-text">
                  <p class="card-stats-title">
                    <i class="material-icons">attach_money</i>Total Sales</p>
                  <h4 class="card-stats-number">$8990.63</h4>
                  <p class="card-stats-compare">
                    <i class="material-icons">keyboard_arrow_up</i> 70%
                    <span class="red-text text-lighten-5">last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col s12 m6 l3">
              <div class="card">
                <div class="card-content teal accent-4 white-text">
                  <p class="card-stats-title">
                    <i class="material-icons">trending_up</i> Today Profit</p>
                  <h4 class="card-stats-number">$806.52</h4>
                  <p class="card-stats-compare">
                    <i class="material-icons">keyboard_arrow_up</i> 80%
                    <span class="teal-text text-lighten-5">from yesterday</span>
                  </p>
                </div>

              </div>
            </div>
            <div class="col s12 m6 l3">
              <div class="card">
                <div class="card-content deep-orange accent-2 white-text">
                  <p class="card-stats-title">
                    <i class="material-icons">content_copy</i> New Invoice</p>
                  <h4 class="card-stats-number">1806</h4>
                  <p class="card-stats-compare">
                    <i class="material-icons">keyboard_arrow_down</i> 3%
                    <span class="deep-orange-text text-lighten-5">from last month</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--card widgets start-->
        <div id="card-widgets">
          <div class="row">
            <div class="col s12 m4 l4">
              <ul id="task-card" class="collection with-header">
                <li class="collection-header teal accent-4">
                  <h4 class="task-card-title">My Task</h4>
                  <p class="task-card-date">Sept 16, 2017</p>
                </li>
                <li class="collection-item dismissable">
                  <input type="checkbox" id="task1" />
                  <label for="task1">Create Mobile App UI.
                    <a href="#" class="secondary-content">
                      <span class="ultra-small">Today</span>
                    </a>
                  </label>
                  <span class="task-cat cyan">Mobile App</span>
                </li>
                <li class="collection-item dismissable">
                  <input type="checkbox" id="task2" />
                  <label for="task2">Check the new API standerds.
                    <a href="#" class="secondary-content">
                      <span class="ultra-small">Monday</span>
                    </a>
                  </label>
                  <span class="task-cat red accent-2">Web API</span>
                </li>
                <li class="collection-item dismissable">
                  <input type="checkbox" id="task3" checked="checked" />
                  <label for="task3">Check the new Mockup of ABC.
                    <a href="#" class="secondary-content">
                      <span class="ultra-small">Wednesday</span>
                    </a>
                  </label>
                  <span class="task-cat teal accent-4">Mockup</span>
                </li>
                <li class="collection-item dismissable">
                  <input type="checkbox" id="task4" checked="checked" disabled="disabled" />
                  <label for="task4">I did it !</label>
                  <span class="task-cat deep-orange accent-2">Mobile App</span>
                </li>
              </ul>
            </div>
            <div class="col s12 m12 l4">
              <div id="flight-card" class="card">
                <div class="card-header deep-orange accent-2">
                  <div class="card-title">
                    <h4 class="flight-card-title">Flight</h4>
                    <p class="flight-card-date">June 18, Thu 04:50</p>
                  </div>
                </div>
                <div class="card-content-bg white-text">
                  <div class="card-content">
                    <div class="row flight-state-wrapper">
                      <div class="col s5 m5 l5 center-align">
                        <div class="flight-state">
                          <h4 class="margin">LDN</h4>
                          <p class="ultra-small">London</p>
                        </div>
                      </div>
                      <div class="col s2 m2 l2 center-align">
                        <i class="material-icons flight-icon">local_airport</i>
                      </div>
                      <div class="col s5 m5 l5 center-align">
                        <div class="flight-state">
                          <h4 class="margin">SFO</h4>
                          <p class="ultra-small">San Francisco</p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col s6 m6 l6 center-align">
                        <div class="flight-info">
                          <p class="small">
                            <span class="grey-text text-lighten-4">Depart:</span> 04.50</p>
                          <p class="small">
                            <span class="grey-text text-lighten-4">Flight:</span> IB 5786</p>
                          <p class="small">
                            <span class="grey-text text-lighten-4">Terminal:</span> B</p>
                        </div>
                      </div>
                      <div class="col s6 m6 l6 center-align flight-state-two">
                        <div class="flight-info">
                          <p class="small">
                            <span class="grey-text text-lighten-4">Arrive:</span> 08.50</p>
                          <p class="small">
                            <span class="grey-text text-lighten-4">Flight:</span> IB 5786</p>
                          <p class="small">
                            <span class="grey-text text-lighten-4">Terminal:</span> C</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col s12 m4 l4">
              <div id="profile-card" class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="../adminmt/images/gallary/3.png" alt="user bg">
                </div>
                <div class="card-content">
                  <img src="../adminmt/images/avatar/avatar-7.png" alt="" class="circle responsive-img activator card-profile-image cyan lighten-1 padding-2">
                  <a class="btn-floating activator btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                    <i class="material-icons">edit</i>
                  </a>
                  <span class="card-title activator grey-text text-darken-4">Roger Waters</span>
                  <p>
                    <i class="material-icons">perm_identity</i> Project Manager</p>
                  <p>
                    <i class="material-icons">perm_phone_msg</i> +1 (612) 222 8989</p>
                  <p>
                    <i class="material-icons">email</i> yourmail@domain.com</p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Roger Waters
                    <i class="material-icons right">close</i>
                  </span>
                  <p>Here is some more information about this card.</p>
                  <p>
                    <i class="material-icons">perm_identity</i> Project Manager</p>
                  <p>
                    <i class="material-icons">perm_phone_msg</i> +1 (612) 222 8989</p>
                  <p>
                    <i class="material-icons">email</i> yourmail@domain.com</p>
                  <p>
                    <i class="material-icons">cake</i> 18th June 1990
                  </p>
                  <p>
                  </p>
                  <p>
                    <i class="material-icons">airplanemode_active</i> BAR - AUS
                  </p>
                  <p>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--card widgets end-->

        <!--work collections start-->
        <div id="work-collections">
          <div class="row">
            <div class="col s12 m12 l6">
              <ul id="projects-collection" class="collection z-depth-1">
                <li class="collection-item avatar">
                  <i class="material-icons cyan circle">card_travel</i>
                  <h6 class="collection-header m-0">Projects</h6>
                  <p>Your Favorites</p>
                </li>
                <li class="collection-item">
                  <div class="row">
                    <div class="col s9">
                      <p class="collections-title">Web App</p>
                      <p class="collections-content">AEC Company</p>
                    </div>
                    <div class="col s3">
                      <span class="task-cat cyan">Development</span>
                    </div>
                  </div>
                </li>
                <li class="collection-item">
                  <div class="row">
                    <div class="col s9">
                      <p class="collections-title">Mobile App for Social</p>
                      <p class="collections-content">iSocial App</p>
                    </div>
                    <div class="col s3">
                      <span class="task-cat red accent-2">UI/UX</span>
                    </div>
                  </div>
                </li>
                <li class="collection-item">
                  <div class="row">
                    <div class="col s9">
                      <p class="collections-title">Website</p>
                      <p class="collections-content">MediTab</p>
                    </div>
                    <div class="col s3">
                      <span class="task-cat teal accent-4">Marketing</span>
                    </div>
                  </div>
                </li>
                <li class="collection-item">
                  <div class="row">
                    <div class="col s9">
                      <p class="collections-title">AdWord campaign</p>
                      <p class="collections-content">True Line</p>
                    </div>
                    <div class="col s3">
                      <span class="task-cat deep-orange accent-2">SEO</span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="col s12 m12 l6">
              <ul id="issues-collection" class="collection z-depth-1">
                <li class="collection-item avatar">
                  <i class="material-icons red accent-2 circle">bug_report</i>
                  <h6 class="collection-header m-0">Issues</h6>
                  <p>Assigned to you</p>
                </li>
                <li class="collection-item">
                  <div class="row">
                    <div class="col s7">
                      <p class="collections-title">
                        <strong>#102</strong> Home Page</p>
                      <p class="collections-content">Web Project</p>
                    </div>
                    <div class="col s2">
                      <span class="task-cat deep-orange accent-2">P1</span>
                    </div>
                    <div class="col s3">
                      <div class="progress">
                        <div class="determinate" style="width: 70%"></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="collection-item">
                  <div class="row">
                    <div class="col s7">
                      <p class="collections-title">
                        <strong>#108</strong> API Fix</p>
                      <p class="collections-content">API Project </p>
                    </div>
                    <div class="col s2">
                      <span class="task-cat cyan">P2</span>
                    </div>
                    <div class="col s3">
                      <div class="progress">
                        <div class="determinate" style="width: 40%"></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="collection-item">
                  <div class="row">
                    <div class="col s7">
                      <p class="collections-title">
                        <strong>#205</strong> Profile page css</p>
                      <p class="collections-content">New Project </p>
                    </div>
                    <div class="col s2">
                      <span class="task-cat red accent-2">P3</span>
                    </div>
                    <div class="col s3">
                      <div class="progress">
                        <div class="determinate" style="width: 95%"></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="collection-item">
                  <div class="row">
                    <div class="col s7">
                      <p class="collections-title">
                        <strong>#188</strong> SAP Changes</p>
                      <p class="collections-content">SAP Project</p>
                    </div>
                    <div class="col s2">
                      <span class="task-cat teal accent-4">P1</span>
                    </div>
                    <div class="col s3">
                      <div class="progress">
                        <div class="determinate" style="width: 10%"></div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!--work collections end-->

        <!-- //////////////////////////////////////////////////////////////////////////// -->
      </div>
      <!--end container-->
    </section>
    <!-- END CONTENT -->
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
  </body>
</html>
<?php
}else{
  echo "Anda Belum Login, silahkan Login <a href='http://localhost/ilma/member.php'>Di sini</a>";
}
