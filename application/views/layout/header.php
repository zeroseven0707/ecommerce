<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Admin Control</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/fontawesome/css/all.min.css'); ?>">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/datatables/datatables.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css'); ?>">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/components.css'); ?>">
  <!-- iconify -->
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <style>
    @media (max-width:768px) {
    .navbar{
      width: 85%;
    }
    }
  </style>
  <!-- /END GA -->
</head>
<body>
<?php 
$CI =& get_instance();
$user_id = $CI->session->userdata('user_id');
$username = $CI->session->userdata('username');
?>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <!-- <div class="navbar-bg"></div> -->
      <nav class="navbar navbar-expand-lg main-navbar bg-primary mt-2" style="border-radius: 30px; margin:auto;">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?php echo base_url('assets/img/avatar/avatar-1.png'); ?>" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, <?= $username ?></div></a>
         <!-- Logout -->
          <div class="dropdown-menu dropdown-menu-right" style="border-radius: 1vw;">
            <div class="dropdown-divider"></div>
            <form action="<?php echo site_url('auth/logout'); ?>" method="post" id="logout-form">
              <button type="submit" class="dropdown-item has-icon text-danger" style="border-radius: 10vw; background: none; height: 3vw;">
                <i class="fas fa-sign-out-alt">Logout</i> 
              </button>
            </form>
          </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Admin Control</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Admin</a>
          </div>
          <ul class="sidebar-menu">
          <li>
              <a class="nav-link" href="<?php echo site_url('admin'); ?>">
              <iconify-icon icon="tabler:chart-histogram" width="23" height="23"></iconify-icon>
                <span>&nbsp; Dashboard</span>
              </a>
            </li>
            <li>
              <a class="nav-link" href="<?php echo site_url('admin/products'); ?>">
              <iconify-icon icon="tabler:laurel-wreath-1" width="23" height="23"></iconify-icon>
                <span>&nbsp; Product</span>
              </a>
            </li>
            <li>
            <li>
              <a class="nav-link" href="<?php echo site_url('admin/licenses'); ?>">
              <iconify-icon icon="tabler:award" width="23" height="23"></iconify-icon>
              <span>&nbsp; License</span>
              </a>
            </li>
            <li>
              <a class="nav-link" href="<?php echo site_url('admin/widgets'); ?>">
              <iconify-icon icon="tabler:layout-dashboard" width="23" height="23"></iconify-icon>
                <span>&nbsp; Widgets</span>
              </a>
            </li>
            <li>
              <a class="nav-link" href="<?php echo site_url('admin/contact'); ?>">
              <iconify-icon icon="tabler:paw" width="23" height="23"></iconify-icon>
              <span>&nbsp; Contact</span>
              </a>
            </li>
            <li>
              <a class="nav-link" href="<?php echo site_url('admin/menu'); ?>">
              <iconify-icon icon="tabler:news" width="23" height="23"></iconify-icon>
                <span>&nbsp; Menu</span>
              </a>
            </li>
            <li>
              <a class="nav-link" href="<?php echo site_url('admin/shortcuts'); ?>">
              <iconify-icon icon="tabler:device-ipad-up" width="23" height="23"></iconify-icon>
                <span>&nbsp; Shortcut</span>
              </a>
            </li>
            <li>
              <a class="nav-link" href="<?php echo site_url('admin/guides'); ?>">
              <iconify-icon icon="tabler:album" width="23" height="23"></iconify-icon>
                <span>&nbsp; Guide</span>
              </a>
            </li>
            <li>
            <li>
              <a class="nav-link" href="<?php echo site_url('admin/theme'); ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.5 17H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v8.5M3 13h13.5M8 21h4.5M10 17l-.5 4m6.5-2h6m-3-3v6"/></svg>
                <span>&nbsp; Theme</span>
              </a>
            </li>
            <li>
              <a class="nav-link" href="<?php echo site_url('admin/trafficts'); ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0-8 0m8 12h6m-3-3v6M6 21v-2a4 4 0 0 1 4-4h4"/></svg>
                <span>&nbsp; Traffict</span>
              </a>
            </li>
            <li>
              <a class="nav-link" href="<?php echo site_url('admin/settings'); ?>">
              <iconify-icon icon="tabler:settings-bolt" width="23" height="23"></iconify-icon>
                <span>&nbsp; Setting</span>
              </a>
            </li>
          </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">   