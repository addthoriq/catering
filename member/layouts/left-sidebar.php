<?php
$server = "localhost";
$usr  = "root";
$pass = "123";
$db   = "catering";

$konek  = mysqli_connect($server, $usr, $pass, $db);

if (!$konek) {
  die("Connection Failed : ".mysqli_connect_error());
}
  $id   = $_SESSION['idusr'];
  $sql  = "SELECT * FROM user WHERE id = '$id'";
  $res  = mysqli_query($konek, $sql);
  $row  = mysqli_fetch_assoc($res);

  $ava  = "http://localhost/ilma/member/avatar/".$row['foto'];

?>
<!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">
          <ul id="slide-out" class="side-nav fixed leftside-navigation">
                <li class="user-details cyan darken-2">
                  <div class="row">
                    <div class="col col s4 m4 l4">
                      <img src="<?= $ava ?>" alt="" class="circle responsive-img valign profile-image cyan" onError="this.onerror=null;this.">
                    </div>
                    <div class="col col s8 m8 l8">
                      <ul id="profile-dropdown-nav" class="dropdown-content">
                        <li>
                          <a href="http://localhost/ilma/member/profile/index.php?id=<?= $_SESSION['idusr'] ?>" class="grey-text text-darken-1">
                            <i class="material-icons">face</i> Profile</a>
                        </li>
                        <li>
                          <a href="#" class="grey-text text-darken-1">
                            <i class="material-icons">settings</i> Settings</a>
                        </li>
                        <li>
                          <a href="#" class="grey-text text-darken-1">
                            <i class="material-icons">live_help</i> Help</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="#" class="grey-text text-darken-1">
                            <i class="material-icons">lock_outline</i> Lock</a>
                        </li>
                        <li>
                          <a href="http://localhost/ilma/member/logout.php" class="grey-text text-darken-1">
                            <i class="material-icons">keyboard_tab</i> Logout</a>
                        </li>
                      </ul>
                      <?php
                      include 'erd.php';
                      ?>
                      <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown-nav"><?= $row['nama'] ?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                      <p class="user-roal"><?= role($row['role_id']) ?></p>
                    </div>
                  </div>
                </li>
            <?php
            $url  = $_SERVER['PHP_SELF'];
            $exp  = explode("/", $url);

            if ($exp[3]=="index.php") {
              ?>
            <li class="no-padding">
              <ul class="collapsible" data-collapsible="accordion">
                <li class="bold active">
                  <a href="http://localhost/ilma/member/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">donut_small</i>
                      <span class="nav-text">Beranda</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="http://localhost/ilma/member/menuacr/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">kitchen</i>
                      <span class="nav-text">Menu Katering Acara</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="http://localhost/ilma/member/menulangg/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">kitchen</i>
                      <span class="nav-text">Menu Langganan</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="http://localhost/ilma/member/orderacara/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">add_shopping_cart</i>
                      <span class="nav-text">Pesanan Acara</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="http://localhost/ilma/member/order/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">add_shopping_cart</i>
                      <span class="nav-text">Pesanan Langganan</span>
                    </a>
                </li>
              </ul>
            </li>

            <?php
          }elseif ($exp[3]=="menuacr") {
            ?>

            <li class="no-padding">
              <ul class="collapsible" data-collapsible="accordion">
                <li class="bold">
                  <a href="http://localhost/ilma/member/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">donut_large</i>
                      <span class="nav-text">Beranda</span>
                    </a>
                </li>
                <li class="bold active">
                  <a href="http://localhost/ilma/member/menuacr/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">room_service</i>
                      <span class="nav-text">Menu Katering Acara</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="http://localhost/ilma/member/menulangg/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">kitchen</i>
                      <span class="nav-text">Menu Langganan</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="http://localhost/ilma/member/orderacara/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">add_shopping_cart</i>
                      <span class="nav-text">Pesanan Acara</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="http://localhost/ilma/member/order/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">add_shopping_cart</i>
                      <span class="nav-text">Pesanan Langganan</span>
                    </a>
                </li>
              </ul>
            </li>

            <?php
          }elseif ($exp[3]=="menulangg") {
            ?>

            <li class="no-padding">
              <ul class="collapsible" data-collapsible="accordion">
                <li class="bold">
                  <a href="http://localhost/ilma/member/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">donut_large</i>
                      <span class="nav-text">Beranda</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="http://localhost/ilma/member/menuacr/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">kitchen</i>
                      <span class="nav-text">Menu Katering Acara</span>
                    </a>
                </li>
                <li class="bold active">
                  <a href="http://localhost/ilma/member/menulangg/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">room_service</i>
                      <span class="nav-text">Menu Langganan</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="http://localhost/ilma/member/orderacara/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">add_shopping_cart</i>
                      <span class="nav-text">Pesanan Acara</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="http://localhost/ilma/member/order/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">add_shopping_cart</i>
                      <span class="nav-text">Pesanan Langganan</span>
                    </a>
                </li>
              </ul>
            </li>

            <?php
            }elseif ($exp[3]=="orderacara") {
            ?>

            <li class="no-padding">
              <ul class="collapsible" data-collapsible="accordion">
                <li class="bold">
                  <a href="http://localhost/ilma/member/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">donut_large</i>
                      <span class="nav-text">Beranda</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="http://localhost/ilma/member/menuacr/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">kitchen</i>
                      <span class="nav-text">Menu Katering Acara</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="http://localhost/ilma/member/menulangg/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">kitchen</i>
                      <span class="nav-text">Menu Langganan</span>
                    </a>
                </li>
                <li class="bold active">
                  <a href="http://localhost/ilma/member/orderacara/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">shopping_cart</i>
                      <span class="nav-text">Pesanan Acara</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="http://localhost/ilma/member/order/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">add_shopping_cart</i>
                      <span class="nav-text">Pesanan Langganan</span>
                    </a>
                </li>
              </ul>
            </li>

            <?php
          }elseif ($exp[3]=="order"){
            ?>
            <li class="no-padding">
              <ul class="collapsible" data-collapsible="accordion">
                <li class="bold">
                  <a href="http://localhost/ilma/member/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">donut_large</i>
                      <span class="nav-text">Beranda</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="http://localhost/ilma/member/menuacr/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">kitchen</i>
                      <span class="nav-text">Menu Katering Acara</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="http://localhost/ilma/member/menulangg/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">kitchen</i>
                      <span class="nav-text">Menu Langganan</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="http://localhost/ilma/member/orderacara/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">add_shopping_cart</i>
                      <span class="nav-text">Pesanan Acara</span>
                    </a>
                </li>
                <li class="bold active">
                  <a href="http://localhost/ilma/member/order/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">shopping_cart</i>
                      <span class="nav-text">Pesanan Langganan</span>
                    </a>
                </li>
              </ul>
            </li>
            <?php
            }else{
            ?>
            <li class="no-padding">
              <ul class="collapsible" data-collapsible="accordion">
                <li class="bold">
                  <a href="http://localhost/ilma/member/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">donut_large</i>
                      <span class="nav-text">Beranda</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="http://localhost/ilma/member/menuacr/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">kitchen</i>
                      <span class="nav-text">Menu Katering Acara</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="http://localhost/ilma/member/menulangg/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">kitchen</i>
                      <span class="nav-text">Menu Langganan</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="http://localhost/ilma/member/orderacara/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">add_shopping_cart</i>
                      <span class="nav-text">Pesanan Acara</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="http://localhost/ilma/member/order/index.php" class="waves-effect waves-cyan">
                      <i class="material-icons">add_shopping_cart</i>
                      <span class="nav-text">Pesanan Langganan</span>
                    </a>
                </li>
              </ul>
            </li>
            <?php
            };
            ?>
          </ul>
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
            <i class="material-icons">menu</i>
          </a>
        </aside>
<!-- END LEFT SIDEBAR NAV-->
