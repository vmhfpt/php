<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;

require '../admin/PHPMailer/Exception.php';
require '../admin/PHPMailer/PHPMailer.php';
require '../admin/PHPMailer/SMTP.php';
require_once('./handle.php');
  if(!empty($_POST)){
    if(isset($_POST['type']) && $_POST['type'] == "authentication"){
     if(isset($_POST['email'])){
         $email = $_POST['email'];
         $sql = "SELECT `id` FROM users WHERE email = '".$email."' AND login_type = 1";
         $data = executeSingleResult($sql);
         if($data){
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
                    'id' => $data['id'],
                    'otp' =>  $otp ,
                    'email' => $email
                  ];
                  echo json_encode([
                     'status' => 'success',
                     'message' => 'send OTP  success'
                  ]);
            } catch (Exception $e) { // handle error.
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            } 
         }else {
            echo json_encode([
                'status' => 'error',
                'message' => '* Địa chỉ email chưa được đăng ký'
             ]);
         }
     }
    }

    if(isset($_POST['type'])  && $_POST['type'] == "send-otp"){
        if($_SESSION["force_user"]["otp"] == $_POST['otp'] && $_SESSION["force_user"]["email"] == $_POST['email']){
            // echo $_POST['password'] . "<br/>";
            // echo $_POST['otp'] . "<br/>";
            // echo $_POST['email'] . "<br/>";
            $sql = "UPDATE `users` SET `password` = '".md5($_POST['password'])."' WHERE `users`.`email` = '".$_SESSION["force_user"]["email"]."' AND `users`.`id` = '".$_SESSION["force_user"]["id"]."'";
            execute($sql);


            $sqlGet = "SELECT * FROM users WHERE id = '".$_SESSION["force_user"]["id"]."'";

            $getUser = executeSingleResult($sqlGet);

            $_SESSION["user"] =  [
                'id' =>  $getUser['id'],
                'name' => $getUser['name'],
                'email' => $getUser['email'],
                'picture' => false
              ];

            echo json_encode([
                'status' => 'success',
                'message' => '* Đổi mật khẩu thành công'
             ]);
        }else {
            echo json_encode([
                'status' => 'error',
                'message' => '* Mã OTP không khớp'
             ]);
        }
        
    }
  }
?>