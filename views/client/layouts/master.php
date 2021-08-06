<!DOCTYPE html>
<html>
<?php include 'views/client/include/header.php' ?>
<body>
<div class="wrapper">

  <!-- Navbar -->
  <?php include 'views/client/include/navbar.php' ?>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <?php require_once  'views/client/'.$page.'.php' ?>
  <!-- /.content-wrapper -->
  
  
  <!-- Control Sidebar -->
  <?php include 'views/client/include/main_footer.php' ?>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include 'views/client/include/footer.php' ?>
</body>
</html>
