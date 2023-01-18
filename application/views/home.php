<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/'); ?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url('assets/'); ?>assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dinas Koperasi dan Usaha Mikro Jombang
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="<?= base_url('assets/'); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?= base_url('assets/'); ?>assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= base_url('assets/'); ?>assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">

  <div class="main-panel">
    <!-- Navbar -->


    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

      <div class="container-fluid">
        <div class="navbar-wrapper">

          <a class="navbar-brand" href="javascript:;">Dinas Koperasi dan Usaha Mikro Jombang</a>

        </div>

      </div>
      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>

      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <div class="topbar-divider d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-lg-inline text-gray-600 small">

            </span>
            <img class="img-profile rounded-circle" src="assets/assets/img/default-avatar.png">
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="<?php echo base_url(); ?>profile">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profile
            </a>
            <a class="dropdown-item" href="">
              <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
              Settings
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= base_url("Admin/logout") ?>" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- End Navbar -->
    <div class="content">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-body ">
              <div class="row">
                <div class="col-5 col-md-4">
                  <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-globe text-warning"></i>
                  </div>
                </div>
                <div class="col-7 col-md-8">
                  <div class="numbers">
                    <p class="card-category">Pengukuran Tenaga Kerja</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                Cek
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-body ">
              <div class="row">
                <div class="col-5 col-md-4">
                  <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-money-coins text-success"></i>
                  </div>
                </div>
                <div class="col-7 col-md-8">
                  <div class="numbers">
                    <p class="card-category">Reward And Punishmen</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                Cek
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-body ">
              <div class="row">
                <div class="col-5 col-md-4">
                  <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-sound-wave text-danger"></i>
                  </div>
                </div>
                <div class="col-7 col-md-8">
                  <div class="numbers">
                    <p class="card-category">Evaluasi</p>
                    <!-- <p class="card-title">23<p> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                Cek
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-body ">
              <div class="row">
                <div class="col-5 col-md-4">
                  <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-single-copy-04 text-primary"></i>
                  </div>
                </div>
                <div class="col-7 col-md-8">
                  <div class="numbers">
                    <p class="card-category">Sistem</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                Cek
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>
  </div>
  <footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
      <div class="row">
        <!-- <nav class="footer-nav">
          <ul>
            <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
            <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
            <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
          </ul>
        </nav> -->
        <div class="credits ml-auto">
          <span class="copyright">
            © <script>
              document.write(new Date().getFullYear())
            </script>, Dinas Koperasi dan Usaha Mikro <i class="fa fa-heart heart"></i> by Unwaha Tim
          </span>
        </div>
      </div>
    </div>
  </footer>
  </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?= base_url('assets/'); ?>assets/js/core/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>assets/js/core/popper.min.js"></script>
  <script src="<?= base_url('assets/'); ?>assets/js/core/bootstrap.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?= base_url('assets/'); ?>assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?= base_url('assets/'); ?>assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url('assets/'); ?>assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?= base_url('assets/'); ?>assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>