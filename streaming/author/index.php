<?php 
  require '../koneksi.php';
  checkLogin();
  $user = $_SESSION['id_user'];
  $jumlah_film = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT count(id_film) as jumlah_film FROM tb_film where id_user=$user"));
  $jumlah_film = $jumlah_film['jumlah_film'];

  $jumlah_komentar = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT count(id_komentar) as jumlah_komentar FROM tb_komentar"));
  $jumlah_komentar = $jumlah_komentar['jumlah_komentar'];
?>
<!DOCTYPE html>
<html>
<head>
  <?php include '../include_admin/css.php'; ?>
  <title>Dashboard</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  
  <?php include 'navbar.php'; ?>

  <?php include 'sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm">
            <h1 class="m-0 text-dark">Dashboard Author</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row my-2">
          <div class="col-lg-3">
            <div class="card">
              <div class="card-body">
                <h5><i class="fas fa-fw fa-film"></i> Film</h5>
                <h6 class="mb-2 text-muted">Jumlah Film: <?= $jumlah_film; ?></h6>
                <a href="film.php" class="card-link btn btn-primary"><i class="fas fa-fw fa-align-justify"></i></a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024 By Al Hikmah.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

</div>
<!-- ./wrapper -->
</body>
</html>
