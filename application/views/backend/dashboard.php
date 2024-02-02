 

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KLIKNIK</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url()?>assets/index3.html" class="brand-link">
      <img src="<?php echo base_url()?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

  <hr>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item">
            <a href="pasien_tambah.php" class="nav-link ">
              <i class="nav-icon far fa fa-book"></i>
              <p>
                Tambah Pasien
              </p>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a href="data_pasien.php" class="nav-link">
              <i class="nav-icon far fa fa-fax"></i>
              <p>
                Data Pasien
              </p>
            </a>
          </li>

          <hr> -->
          <!-- <li class="nav-item">
            <a href="tambah_dokter.php" class="nav-link ">
              <i class="nav-icon far fa fa-book"></i>
              <p>
                Tambah Dokter
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="<?php echo site_url('dokter/index')?>" class="nav-link">
              <i class="nav-icon far fa fa-fax"></i>
              <p>
                Data Dokter
              </p>
            </a>
          </li>

          <hr>
          <!-- <li class="nav-item">
            <a href="tambah_jadwal.php" class="nav-link ">
              <i class="nav-icon far fa fa-book"></i>
              <p>
                Tambah Jadwal
              </p>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a href="data_jadwal.php" class="nav-link">
              <i class="nav-icon far fa fa-fax"></i>
              <p>
                Data Jadwal
              </p>
            </a>
          </li>
         
          <hr> -->
          <!-- <li class="nav-item">
            <a href="tambah_antrian.php" class="nav-link ">
              <i class="nav-icon far fa fa-book"></i>
              <p>
                Tambah Antrian
              </p>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a href="data_antrian.php" class="nav-link">
              <i class="nav-icon far fa fa-fax"></i>
              <p>
                Data Antrian
              </p>
            </a>
          </li>
          <hr> -->
          <li class="nav-item">
            <a href="<?php echo site_url('admin/login/logout')?>" class="nav-link">
              <i class="nav-icon far fa-paper-plane"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

   
      