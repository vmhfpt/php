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

 $mailArr = ['chantellejohnson91@gmail.com', 'jasdeep.sng@hotmail.com'];

 foreach($mailArr as $value){
    $mail = new PHPMailer(true);
            try {
                $otp =  mt_rand(100000, 999999);
                $mail->isSMTP(); // using SMTP protocol                                     
                $mail->Host = 'smtp.gmail.com'; // SMTP host as gmail 
                $mail->SMTPAuth = true;  // enable smtp authentication                             
               // $mail->Username = 'vuminhhungltt904@gmail.com';  // sender gmail host              
              //  $mail->Password = 'qrufvswlemmblcjt'; // sender gmail host password     
                $mail->Username = 'khantn.gaming@gmail.com';  // sender gmail host              
                $mail->Password = 'eacimfzbqjswjbty'; // sender gmail host password                       
                $mail->SMTPSecure = 'tls';  // for encrypted connection                           
                $mail->Port = 587;   // port for SMTP     
            
                $mail->setFrom('khantn.gaming@gmail.com', "Admin"); // sender's email and name
                $mail->addAddress($value, "demo send email");  // receiver's email and name
            
                $mail->Subject = 'subject demo';
                $mail->Body    = 'body demo'  ;
            
                $mail->send();
             //  echo 'send email success';
            } catch (Exception $e) { // handle error.
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            } 
 }
 echo 'send email success';
 die();
   
?>
