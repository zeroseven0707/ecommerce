<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Modules &rsaquo; DataTables &mdash; Admin Control</title>

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
  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
</head>
<body>
<div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary" style="border-radius: 25px;">
              <div class="card-header"><h4>Login</h4></div>
              <div class="card-body">
                <form method="POST" action="<?= base_url('auth/login') ?>" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text" class="form-control" name="email" tabindex="1" required autofocus style="border-radius: 20px;">
                    <div class="invalid-feedback">
                      Please fill in your Username
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" name="password" class="form-control" name="password" tabindex="2" required style="border-radius: 20px;">
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4" style="border-radius: 20px;">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              <?= get_setting('copyright') ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="<?php echo base_url('assets/modules/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/modules/popper.js'); ?>"></script>
  <script src="<?php echo base_url('assets/modules/tooltip.js'); ?>"></script>
  <script src="<?php echo base_url('assets/modules/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/modules/nicescroll/jquery.nicescroll.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/modules/moment.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/stisla.js'); ?>"></script>
  
  <!-- JS Libraies -->
  <script src="<?php echo base_url('assets/modules/datatables/datatables.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/modules/jquery-ui/jquery-ui.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/modules/simple-weather/jquery.simpleWeather.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/modules/chart.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/modules/jqvmap/dist/jquery.vmap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/modules/jqvmap/dist/maps/jquery.vmap.world.js'); ?>"></script>
  <script src="<?php echo base_url('assets/modules/summernote/summernote-bs4.js'); ?>"></script>
  <script src="<?php echo base_url('assets/modules/chocolat/dist/js/jquery.chocolat.min.js'); ?>"></script>

  <!-- Page Specific JS File -->
  <script src="<?php echo base_url('assets/js/page/modules-datatables.js'); ?>"></script>
  
  <!-- Page Specific JS File -->
  <script src="<?php echo base_url('assets/js/page/index-0.js'); ?>"></script>
  
  <!-- Template JS File -->
  <script src="<?php echo base_url('assets/js/scripts.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>

</body>
</html>