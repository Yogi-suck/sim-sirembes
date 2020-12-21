<?php session_start(); 

include "lib/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dusun Sirembes</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?php echo $baseUrl; ?>assets/img/avatar/avatar-1.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Yogi Sukmono Aji</b>
                    <p>Ojo Lali Madang Lek</p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Jo Lali Madang
                    <div class="time">Yen luweh</div>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?php echo $baseUrl; ?>assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, <?php echo $_SESSION['username'] ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="<?php echo $baseUrl; ?>pages/kk/main.php" class="dropdown-item has-icon">
                <i class="far fa-user"></i> KK
              </a>
          
              <div class="dropdown-divider"></div>
              <a href="<?php echo $baseUrl; ?>logout.php" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo $baseUrl; ?>dashboard.php">Dusun Sirembes</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo $baseUrl; ?>dashboard.php">DS</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li><a class="nav-link" href="<?php echo $baseUrl; ?>dashboard.php"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
              <li class="menu-header">Kependudukan</li>
              <li><a class="nav-link" href="<?php echo $baseUrl; ?>pages/penduduk/main.php"><i class="far fa-user"></i> <span>Penduduk</span></a></li>
              <li><a class="nav-link" href="<?php echo $baseUrl; ?>pages/kelahiran/main.php"><i class="fas fa-baby"></i> <span>Kelahiran</span></a></li>
              <li><a class="nav-link" href="<?php echo $baseUrl; ?>pages/kematian/main.php"><i class="fas fa-book-dead"></i> <span>Kematian</span></a></li>
              <li><a class="nav-link" href="<?php echo $baseUrl; ?>pages/kk/main.php"><i class="fas fa-id-card-alt"></i> <span>KK</span></a></li>
              <li><a class="nav-link" href="<?php echo $baseUrl; ?>pages/kedatangan/main.php"><i class="fas fa-suitcase-rolling"></i> <span>Pendatang</span></a></li>
              <li><a class="nav-link" href="<?php echo $baseUrl; ?>pages/pindah/main.php"><i class="fas fa-people-carry"></i> <span>Pindah</span></a></li>

              <li class="menu-header">Wilayah</li>
            
                <li><a class="nav-link" href="<?php echo $baseUrl; ?>pages/maps/main.php"><i class="fas fa-map-marker-alt"></i> <span>Google Maps</span></a></li>
                <li><a class="nav-link" href="<?php echo $baseUrl; ?>pages/batas wilayah/main.php"><i class="fas fa-atlas"></i> <span>Batas wilayah</span></a></li>
                <li><a class="nav-link" href="<?php echo $baseUrl; ?>pages/jumlah kk/main.php"><i class="fas fa-chart-bar"></i> <span>Jumlah KK</span></a></li>
                <li><a class="nav-link" href="<?php echo $baseUrl; ?>pages/berita/main.php"><i class="fas fa-newspaper"></i> <span>Berita</span></a></li>
            
              <li class="menu-header">Pages</li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="<?php echo $baseUrl; ?>logout.php"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a>
              </li>
            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://www.instagram.com/yogisuck_/" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fab fa-instagram"></i> jo lali di follow gan
              </a>
            </div>
        </aside>
      </div>
