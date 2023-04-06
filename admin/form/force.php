<?php


use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';
require_once('../../DbHelp/handle.php');
session_start();
ob_start();


$errorEmail = false;
$state = false;



if (!empty($_POST)) {
    
    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
    

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        if (!preg_match($regex, $email)) {
            $errorEmail = "Email không hợp lệ !";
        }
    }

  
    if (!$errorEmail ) {
        $sql = "SELECT * FROM `users` WHERE  `email` = '" . $email . "'";
      
        if(executeSingleResult($sql) == null){
            $errorEmail = "Email chưa được đăng ký";
        }else {
            $mail = new PHPMailer(true);
            try {
                $otp =  mt_rand(100000, 999999);
                $mail->isSMTP(); // using SMTP protocol                                     
                $mail->Host = 'smtp.gmail.com'; // SMTP host as gmail 
                $mail->SMTPAuth = true;  // enable smtp authentication                             
                $mail->Username = 'vuminhhungltt904@gmail.com';  // sender gmail host              
                $mail->Password = 'qrufvswlemmblcjt'; // sender gmail host password                          
                $mail->SMTPSecure = 'tls';  // for encrypted connection                           
                $mail->Port = 587;   // port for SMTP     
            
                $mail->setFrom('vuminhhungltt904@gmail.com', "Admin"); // sender's email and name
                $mail->addAddress($email, "Xác thực OTP!");  // receiver's email and name
            
                $mail->Subject = 'Forget Password';
                $mail->Body    = 'Mã OTP khôi phục mật khẩu cho ' .$email . ': ' . $otp ;
            
                $mail->send();
                $_SESSION["force_user"] =  [
                    'otp' =>  $otp ,
                    'email' => $email
                  ];
                  header('Location: ./auth.php');
            } catch (Exception $e) { // handle error.
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            } 
        }
  
    } 



}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Web site created using create-react-app" />

    <!--
      manifest.json provides metadata used when your web app is installed on a
      user's mobile device or desktop. See https://developers.google.com/web/fundamentals/web-app-manifest/
    -->

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->

    <link rel="stylesheet" href="../../public/Admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="../../public/Admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../public/Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../../public/Admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../public/Admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../public/Admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../public/Admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../public/Admin/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="../../public/Admin/dist/css/custom.css">


    <title>Login Admin</title>
</head>

<body class="login-page iframe-mode" style="height : 100%;">
    <style>
        .btn-block-custom {
            margin: 10px 0px 20px 0px !important;
        }
    </style>
    <main>
    <div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Nhập Email của bạn để lấy lại mật khẩu!</p>

      <form action="./force.php" method="POST">
        <div class="input-group mb-3">
          <input name="email" type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <?php
                            if ($errorEmail != false) {
                                ?>
                                <a href="#" class="btn btn-block btn-danger btn-block-custom">

                                    <?= $errorEmail ?>
                                </a>


                            <?php
                            }
                            ?>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Lấy lại mật khẩu</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="./login.php">Login</a>
      </p>
   
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
    </main>

    <script src="../../public/Admin/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../../public/Admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../../public/Admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../../public/Admin/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../../public/Admin/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->


    <!-- jQuery Knob Chart -->
    <script src="../../public/Admin/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../../public/Admin/plugins/moment/moment.min.js"></script>
    <script src="../../public/Admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../public/Admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../../public/Admin/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../../public/Admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../public/Admin/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->

</body>

</html>
<?php

ob_end_flush(); 
?>