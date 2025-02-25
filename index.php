<?php 

session_start();
if(empty($_SESSION['admin'])) 
{
  echo "<script>window.alert('login dulu');
  document.location = 'login.php';</script>";
}else{

  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Siti Nur Kholidah</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Siti Nur Kholidah</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <div class="input-group-append">
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-signout"></i><span>Log Out</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=data_member">
            <i class="fas fa-fw fa-user-circle"></i>
            <span>Data Member</span>
          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="index.php?page=lapangan">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Lapangan</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=booking">
              <i class="fas fa-fw fa-list"></i>
              <span>Data Booking</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="index.php?page=Transaksi">
                <i class="fas fa-fw fa-credit-card"></i>
                <span>Data Transaksi</span></a>
              </li>

      <!-- <li class="nav-item">
        <a class="nav-link" href="index.php?page=konfirmasi">
          <i class="fas fa-fw fa-inbox"></i>
          <span>Data konfirmasi</span></a>
        </li> -->

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-fw fa-folder"></i>
              <span>Laporan</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              
              <a class="dropdown-item" href="../tcpdf/lap_member.php" target="_blank">Laporan Data Member</a>
              <a class="dropdown-item" href="../tcpdf/lap_lapangan.php" target="_blank">Laporan Data Lapangan</a>
              <!-- <a class="dropdown-item" href="../tcpdf/lap_booking.php" target="_blank">Laporan Data Booking</a> -->
              <a class="dropdown-item" href="index.php?page=lap_booking">Laporan Data Booking</a>
              <a class="dropdown-item" href="index.php?page=lap_transaksi">Laporan Data Transaksi</a>
              <!-- <a class="dropdown-item" href="../tcpdf/lap_transaksi.php" target="_blank">Laporan Data Transaksi</a> -->
            </div>
          </li>
        </ul>

        <div id="content-wrapper">

          <div class="container-fluid">

            <!-- Breadcrumbs-->
            <?php

            include ('content.php');

            ?>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Sitinurkholidah1410</span>
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
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Pilih Logout di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

  </html>
  <?php } ?>