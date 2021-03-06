<!DOCTYPE html>
<html lang="id">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ilma Catering Samarinda</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
  </head>
  <body>
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <?php
    include 'layouts/header.php';
    ?>
    <!-- //////////////////////////////////////////////////////////////////////////// -->
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
              <div class="card-action col s12 m3 l2">
                <a class="waves-effect waves-light gradient-45deg-amber-amber btn" href=""><i class="material-icons left">brightness_5</i> Lunch</a>
              </div>
              <div class="card-action col s12 m3 l2">
                <a class="waves-effect waves-light gradient-45deg-blue-grey-blue btn" href=""><i class="material-icons left">brightness_3</i> Dinner</a>
              </div>
              <div class="card-action col s12 m3 l2">
                <a class="waves-effect waves-light gradient-45deg-purple-deep-orange btn" href="menuacr/index.php"><i class="material-icons left">tag_faces</i> Event</a>
              </div>
            </div>
          </div>
        </div>
        <?php
        include 'config/koneksi.php';

        $sql    = "SELECT * FROM menuacr";
        $res    = mysqli_query($konek, $sql);
        $row    = mysqli_fetch_assoc($res);
        $ava  = "http://localhost/ilma/img/".$row['foto'];
        ?>
          <div class="row owl-carousel owl-theme">
            <div class="col s12 m12 item gradient-shadow">
              <div class="card">
                <div class="card-image">
                  <img src="<?= $ava ?>" alt="sample">
                  <span class="card-title">Bakso</span>
                </div>
                <div class="card-content">
                  <p>Rp 18.000/hari</p>
                </div>
                <div class="card-action">
                  <a href="menuacr/bakso.php" class="waves-effect waves-light btn #ef5350 red lighten-1">Pesan Sekarang !</a>
                </div>
              </div>
            </div>
            <div class="col s12 m12 item gradient-shadow">
              <div class="card">
                <div class="card-image">
                  <img src="<?= $ava ?>" alt="sample">
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
                  <img src="gambar/opac_rawon.jpg" alt="sample">
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
                  <img src="gambar/opac_nasgor.jpg" alt="sample">
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
                  <img src="gambar/opac_ikan.jpg" alt="sample">
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
                  <img src="gambar/opac_ayam_bakar.jpg" alt="sample">
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
                  <img src="gambar/opac_ayam_goreng.jpg" alt="sample">
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
                  <img src="gambar/opac_nasik.jpg" alt="sample">
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
      <div class="parallax-container">
        <div class="parallax"><img src="gambar/opac_bakso.jpg"></div>
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
        <div class="parallax"><img src="gambar/opac_ikan.jpg"></div>
      </div>
      <div class="row"></div>
      <!--end container-->
    </section>
    <!-- END CONTENT -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <?php
    include 'layouts/footer.php'
    ?>
    <!-- ================================================
    Scripts
    ================================================ -->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript" src="layouts/js.js"></script>
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
      })
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
        $('.parallax').parallax();
      });
    </script>
  </body>
</html>
