<!DOCTYPE html>
<html>
<?php include 'views/admin/includes/header.php' ?>
<body>
<body class="animsition">
    <div class="page-wrapper">

  

  
  
  <?php include 'views/admin/includes/sidebar.php' ?>

 
  <div class="page-container">
 
  <?php require_once  'views/admin/'.$page.'.php' ?>
  
  </div>
  

  
  

</div>


<?php include 'views/admin/includes/footer.php' ?>

</body>
</html>
