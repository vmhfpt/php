<?php

require_once('../../DbHelp/handle.php');
session_start();
ob_start();



$errorPassWord = false;
$errorEmail = false;
$state = false;
if (!empty($_POST)) {
    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
    $regexPassword = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        if (!preg_match($regex, $email)) {
            $errorEmail = "Email không hợp lệ !";
        }
    }

    if (isset($_POST['password'])) {
        $password = $_POST['password'];
       
        if (!preg_match($regexPassword, $password)) {
            $errorPassWord = "Mật khẩu phải chứa chữ cái thường, in hoa và số !";
        }
    }
    if (!$errorEmail && !$errorPassWord) {

        $sql = "SELECT * FROM `users` WHERE `password` = '" . md5($password). "' AND `email` = '" . $email . "'";
        $data = executeSingleResult($sql);
        if (is_null($data)) {
            session_unset();
            session_destroy();
            $state = "Tài khoản hoặc mật khẩu không chính xác !";
        } else {
            //var_dump($data);
            $_SESSION["user"] =  [
                'id' => $data['id'],
                'name' => $data['name'],
                'email' => $data['email'],
                'picture' => false
              ];
              header('Location: ../index.php');
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
                <a href="../../index2.html"><b>Admin</b>Shop</a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Đăng nhập để bắt đầu với phiên của bạn</p>

                    <form action="" method="post">
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
                        <div class="input-group mb-3">
                            <input name="password" type="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            <?php
                            if ($errorPassWord != false) {
                                ?>
                                <a href="#" class="btn btn-block btn-danger btn-block-custom">

                                    <?= $errorPassWord ?>
                                </a>


                            <?php
                            }
                            ?>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">
                                        Ghi nhớ tôi
                                    </label>
                                </div>
                            </div>

                            <div class="col-5">
                                <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>


                            </div>
                            <div class="col-12">
                                <?php
                                if ($state != false) {
                                    ?>

                                    <a href="#" class="btn btn-block btn-danger btn-block-custom">
                                        <?= $state ?>
                                    </a>
                                <?php
                                }
                                ?>

                            </div>


                        </div>
                    </form>



                    <p class="mb-1">
                        <a href="force.php">Lấy lại mật khẩu</a>
                    </p>

                </div>

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