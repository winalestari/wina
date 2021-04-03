<?php 
  session_start();

  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""){
    header("location:index.php?pesan=belummasuk");
  }

  ?>
  <?php
  if($_SESSION['level']=="admin"){
  ?>

<body class="bg-secondary">
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
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="assets2/img/avatar/logoavatar.jpg" class="rounded-circle mr-1">
            Halo <b><?php echo $_SESSION['username']; ?></b> 
            <div class="dropdown-menu dropdown-menu-right">
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar bg-secondary text-light">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">PEMBAYARAN SMK MAHARDHIKA</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">MH</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">DASHBOARD</li>
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="dashboard.php">Utama</a></li>
                </ul>
              </li>
              <li class="menu-header">Data</li>
              <li><a class="nav-link" href="spp.php"><i class="fas fa-database"></i> <span>DATA SPP</span></a></li>
              <li><a class="nav-link" href="kelas.php"><i class="fas fa-database"></i> <span>KELAS</span></a></li>
              <li class="menu-header">Personal</li>
              <li><a class="nav-link" href="petugas.php"><i class="fas fa-user-edit"></i> <span>DATA PETUGAS</span></a></li>
              <li><a class="nav-link" href="siswa.php"><i class="fas fa-user-graduate"></i> <span>SISWA</span></a></li>
              <li class="menu-header">Fitur</li>
              <li><a class="nav-link" href="pembayaran.php"><i class="fas fa-money-check-alt"></i> <span>TRANSAKSI PEMBAYARAN</span></a></li>
              <li><a class="nav-link" href="laporan.php"><i class="fas fa-book"></i> <span>LAPORAN TRANSAKSI</span></a></li>
              <li><a class="nav-link" href="laporan2.php"><i class="fas fa-book"></i> <span>LAPORAN SISWA</span></a></li>
        </aside>
      </div>
<?php 
}

else if($_SESSION['level']=="petugas"){

   ?>


<body class="bg-secondary">
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
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="assets2/img/avatar/logoavatar.jpg" class="rounded-circle mr-1">
            Halo <b><?php echo $_SESSION['username']; ?></b> 
            <div class="dropdown-menu dropdown-menu-right">
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Mahardhika</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">MH</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="dashboard.php">Utama</a></li>
                </ul>
              </li>
              <li class="menu-header">Fitur</li>
              <li><a class="nav-link" href="pembayaran.php"><i class="fas fa-money-check-alt"></i> <span>TRANSAKSI PEMBAYARAN</span></a></li>
        </aside>
      </div>
      <?php
}
  else if($_SESSION['level']=="siswa"){

   ?>


<body class="bg-secondary">  
  <div id="app">
    <div class="main-wrapper bg-secondary">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="assets2/img/avatar/logoavatar.jpg" class="rounded-circle mr-1">
            Halo <b><?php echo $_SESSION['username']; ?></b> 
            <div class="dropdown-menu dropdown-menu-right">
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> Mahardhika</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">MH</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="dashboard.php">Utama</a></li>
                </ul>
              </li>
              <li class="menu-header">Fitur</li>
              <li><a class="nav-link" href="pembayaran.php"><i class="fas fa-money-check-alt"></i> <span>HISTORY PEMBAYARAN</span></a></li>
        </aside>
      </div>
      <?php
  }
  
  
  ?>

