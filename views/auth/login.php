

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trang Đăng Nhập</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?php echo(URL_TENPLATE_AUTH)?>images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo(URL_TENPLATE_AUTH)?>endor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo(URL_TENPLATE_AUTH)?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo(URL_TENPLATE_AUTH)?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo(URL_TENPLATE_AUTH)?>vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo(URL_TENPLATE_AUTH)?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo(URL_TENPLATE_AUTH)?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo(URL_TENPLATE_AUTH)?>vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo(URL_TENPLATE_AUTH)?>vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo(URL_TENPLATE_AUTH)?>css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo(URL_TENPLATE_AUTH)?>css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form"  method="POST" action ="?mod=admin&act=checkLogin&c=auth">
          <span class="login100-form-title p-b-43">
            Login to continue
          </span>
          
          
          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="username" placeholder="UserName">
            <span class="focus-input100"></span>
            <span class="label-input100">UserName</span>
          </div>
          
          
          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="label-input100">Password</span>
          </div>

          <div class="flex-sb-m w-full p-t-3 p-b-32">
            <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
              <label class="label-checkbox100" for="ckb1">
                Remember me
              </label>
            </div>

            <div>
              <a href="#" class="txt1">
                Forgot Password?
              </a>
            </div>
          </div>
      

          <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn">
              Login
            </button>
          </div>

          <div class="container-login100-form-btn">
            <button  class="login100-form-btn" style="background-color: red;">
              <a style="color: white; text-decoration: none;" href="index.php">Trở lại Trang Chủ</a>
            </button>
          </div>
          
          <div class="text-center p-t-46 p-b-20">
            <span class="txt2">
              or sign up using
            </span>
          </div>


          <div class="login100-form-social flex-c-m">
            <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
              <i class="fa fa-facebook-f" aria-hidden="true"></i>
            </a>

            <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
          </div>
        </form>

        <div class="login100-more" style="background-image: url('<?php echo(URL_TENPLATE_AUTH)?>images/bg-01.jpg');">
        </div>
      </div>
    </div>
  </div>
  
  

  
  
<!--===============================================================================================-->
  <script src="<?php echo(URL_TENPLATE_AUTH)?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo(URL_TENPLATE_AUTH)?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo(URL_TENPLATE_AUTH)?>vendor/bootstrap/js/popper.js"></script>
  <script src="<?php echo(URL_TENPLATE_AUTH)?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo(URL_TENPLATE_AUTH)?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo(URL_TENPLATE_AUTH)?>vendor/daterangepicker/moment.min.js"></script>
  <script src="<?php echo(URL_TENPLATE_AUTH)?>vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo(URL_TENPLATE_AUTH)?>vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo(URL_TENPLATE_AUTH)?>js/main.js"></script>

</body>
</html>