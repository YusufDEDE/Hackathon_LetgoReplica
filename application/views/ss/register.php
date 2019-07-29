<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">
z
    <title>KaizerTech | Envanter Kontrol Sistemi</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url('vendor/datatables/dataTables.bootstrap4.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('css/sb-admin.css'); ?>" rel="stylesheet">



  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
      <button class="btn btn-link btn-sm text-blue order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>
      <a class="navbar-brand mr-1" href="index.html">Envanter Kontrol Sistemi</a>



      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">

          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">

          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Çıkış</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('user/user_profile'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Ana Sayfa</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Ürün</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Bölüm</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>Kullanıcı Ekleme</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container">
  <h2>Kullanıcı Ekleme Formu</h2>
  <form role="form" method="post" action="<?php echo base_url('user/register_user'); ?>">
    <div class="form-group">
        <input class="form-control" placeholder="Adı Soyadı" name="user_name" type="text" autofocus>
    </div>

    <div class="form-group">
        <input class="form-control" placeholder="E-mail" name="user_email" type="email" autofocus>
    </div>
    <div class="form-group">
        <input class="form-control" placeholder="Parola" name="user_password" type="password" value="">
    </div>

    <div class="form-group">
        <input class="form-control" placeholder="Yaşı" name="user_age" type="number" value="">
    </div>

    <div class="form-group">
        <input class="form-control" placeholder="Telefon" name="user_mobile" type="number" value="">
    </div>

  <label><h4>Yetki Alanı </h3> <label>
    <div class="radio">
      <label><input type="radio" name="optradio" checked>Personel Şef</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio" checked>Satın Alma Personeli</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<div class="login-panel panel panel-success">
    <div class="panel-body">

      <?php
    $success_msg= $this->session->flashdata('success_msg');
    $error_msg= $this->session->flashdata('error_msg');

        if($success_msg){
          ?>
          <div class="alert alert-success">
            <?php echo $success_msg; ?>
          </div>
        <?php
        }
        if($error_msg){
          ?>
          <div class="alert alert-danger">
            <?php echo $error_msg; ?>
          </div>
          <?php
        }
        ?>
</div>
</div>


        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © 2018 KaizerTech</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Çıkış Yap!</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Çıkış yapmak istediğinize eminmisiniz?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">İptal</button>
            <a class="btn btn-primary" href="<?php echo base_url('user/user_logout');?>">Çıkış Yap</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('vendor/jquery-easing/jquery.easing.min.js');?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('vendor/chart.js/Chart.min.js');  ?>"></script>
    <script src="<?php echo base_url('vendor/datatables/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('js/sb-admin.min.js'); ?>"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url('js/demo/datatables-demo.js'); ?>"></script>
    <script src="<?php echo base_url('js/demo/chart-area-demo.js'); ?>"></script>

    <script src="<?php echo base_url('js/regindex.js'); ?>"></script>



  </body>

</html>
