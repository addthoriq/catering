<?php
  $ava  = "http://www.stickpng.com/assets/images/585e4bf3cb11b227491c339a.png";
?> 
    <!-- START HEADER -->
    <header id="header" class="page-topbar">
      <!-- start header nav-->
      <div class="navbar-fixed">
        <nav class="navbar-color gradient-45deg-red-pink">
          <div class="nav-wrapper">
            <ul class="left">
              <li>
                <h1 class="logo-wrapper">
                  <a href="http://localhost/ilma/admin/index.php" class="brand-logo darken-1">
                    <img src="http://localhost/ilma/admin/adminmt/images/logo/materialize-logo.png" alt="materialize logo">
                    <span class="logo-text hide-on-med-and-down">Ilma Catering Online Samarinda</span>
                  </a>
                </h1>
              </li>
            </ul>
            <ul class="right hide-on-med-and-down">
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button" data-activates="translation-dropdown">
                  <span class="flag-icon flag-icon-id"></span>
                </a>
              </li>
              <li>
                <a href="http://localhost/ilma/menuacr/index.php" class="waves-effect waves-block waves-light">
                  Katering Acara
                </a>
              </li>
              <li>
                <a href="http://localhost/ilma/menulangg/index.php" class="waves-effect waves-block waves-light">
                  Paket Langganan
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                  <span class="avatar-status avatar-online">
                    <img src="<?= $ava ?>" alt="avatar" width="28px">
                  </span>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                  <i class="material-icons">settings_overscan</i>
                </a>
              </li>
            </ul>
            <!-- translation-button -->
            <ul id="translation-dropdown" class="dropdown-content">
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-id"></i> Bahasa Indonesia</a>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-gb"></i> English</a>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-sa"></i> العربية</a>
              </li>
            </ul>
            <!-- profile-dropdown -->
            <ul id="profile-dropdown" class="dropdown-content">
              <li>
                <a href="http://localhost/ilma/admin/profile/index.php?id=<?= $id ?>" class="grey-text text-darken-1"><i class="material-icons">face</i> Masuk</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">settings</i> Daftar</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- end header nav-->
    </header>
    <!-- END HEADER -->