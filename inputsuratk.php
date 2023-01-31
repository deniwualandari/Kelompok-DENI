<?php
session_start();

if ( !isset($_SESSION["login"])  ) {
    header("location: login.php");
}


$coon = mysqli_connect("localhost", "root", "", "agenda");
if( isset($_POST["submit"]) ) {

    $nomor_surat = ($_POST["nomor_surat"]);
    $kepada = ($_POST["kepada"]);
    $tanggal_surat = ($_POST["tanggal_surat"]);
    $perihal = ($_POST["perihal"]);
    $File = ($_POST["File"]);
    

    $query = "INSERT INTO surat_keluar VALUES
    ('', '$nomor_surat', '$kepada', '$tanggal_surat', '$perihal', '$File')
    ";

    mysqli_query($coon, $query);

    if(mysqli_affected_rows($coon) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'surat_keluar.php';
            </script>
        ";
    } else {
        echo "
        <script>
                alert('data gagal ditambahkan');
                document.location.href = 'surat_keluar.php';
            </script>
            ";
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>INPUT SURAT KELUAR</title>

  <!-- Custom fonts for this template-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body  style=" color: black; font-style: italic" id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i style=" color: black; font-style: italic"class="fas fa-plus"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SK <sup>DINKES</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i style=" color: black; font-style: italic"class="fas fa-fw fa-tachometer-alt"></i>
          <span>Beranda</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>
      

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.php">
          <i style=" color: black; font-style: italic"class="fas fa-book"></i>
          <span>Data Agenda</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="sekarang.php">
          <i style=" color: black; font-style: italic"class="fas fa-calendar"></i>
          <span>Agenda Hari Ini</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="besok.php">
          <i style=" color: black; font-style: italic" class="fas fa-calendar"></i>
          <span>Agenda Besok</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="surat_masuk.php">
          <i style=" color: black; font-style: italic" class="fas fa-envelope"></i>
          <span>Data Surat Masuk</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="surat_keluar.php">
          <i style=" color: black; font-style: italic"class="fas fa-envelope-open"></i>
          <span>Data Surat Keluar</span></a>
      </li>



      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i style=" color: black; font-style: italic"class="fas fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i style=" color: black; font-style: italic"class="fa fa-bars"></i>
          </button>
          
        <h2>  INPUT SURAT KELUAR </h2>
        
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="container">
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            
            </div>
            <div class="panel-body">
                <form method="POST">
                <div style=" color: blue; font-style: italic" class="form-group">
                        <label>Kode</label>
                        <input type="text" class="form-control" name="kode_surat" placeholder="Masukkan kode surat .." required="yes">
                    </div>
                    <div style=" color: blue; font-style: italic" class="form-group">
                        <label>Nomor Surat</label>
                        <input type="text" class="form-control" name="nomor_surat" placeholder="Masukkan nomor surat .." required="yes">
                    </div> 
                    <div style=" color: blue; font-style: italic"class="form-group">
                        <label>Kepada</label>
                        <input type="text" class="form-control" name="kepada" placeholder="Kepada ..">
                    </div> 
                    <div style=" color: blue; font-style: italic" class="form-group">
                        <label>Tanggal Surat</label>
                        <input type="date" class="form-control" name="tanggal_surat" placeholder="Masukkan tanggal surat ..">
                    </div>
                    <div style=" color: blue; font-style: italic" class="form-group">
                        <label>Perihal</label>
                        <input type="text" class="form-control" name="perihal" placeholder="Masukkan perihal ..">
                    </div>
                  
                    <br/>
                    <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                </form>
            </div>
        </div>
    </div>
</div>

      <!-- End of Main Content -->

      

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

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
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
