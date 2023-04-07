<?php
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
require '../../admin/PHPMailer/Exception.php';
require '../../admin/PHPMailer/PHPMailer.php';
require '../../admin/PHPMailer/SMTP.php';
   $email = '';
   $name = '';
   $message = '';
   $errorMessage = false;
   $errorName = false;
   $errorEmail = false;
  
   $state = false;
   if (!empty($_POST)) {
    $regexEmail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
    $regex = '/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềếểỄỆỈỊỌỎỐỒỔỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]{8,})$/i';
   
       if (isset($_POST['name'])) {
         $name = $_POST['name'];
         
         if (!preg_match($regex,  $name)) {
            $errorName = "* Tên phải ít nhất 8 ký tự!";
         }
       }

       if (isset($_POST['email'])) {
        $email = $_POST['email'];
        
        if (!preg_match($regexEmail, $email)) {
            $errorEmail = "* Email không hợp lệ !";
        }
    }
    if (isset($_POST['message'])) {
        $message = $_POST['message'];
        
        if (!preg_match($regex, $message)) {
            $errorMessage = "* Nội dung không được để trống !";  
        }
    }
       if($errorName == false && $errorEmail == false && $errorMessage == false){
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP(); // using SMTP protocol                                     
            $mail->Host = 'smtp.gmail.com'; // SMTP host as gmail 
            $mail->SMTPAuth = true;  // enable smtp authentication                             
            $mail->Username = 'vuminhhungltt904@gmail.com';  // sender gmail host              
            $mail->Password = 'qrufvswlemmblcjt'; // sender gmail host password                          
            $mail->SMTPSecure = 'tls';  // for encrypted connection                           
            $mail->Port = 587;   // port for SMTP     
        
            $mail->setFrom('vuminhhungltt904@gmail.com', "Admin"); // sender's email and name
            $mail->addAddress($email, "Contact");  // receiver's email and name
        
            $mail->Subject = 'Send contact';
            $mail->Body    =  "Tên :" . $name . " Nội dung : " . $message ;
        
            $mail->send();
            $state = true;
        } catch (Exception $e) { // handle error.
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        } 
          
           
       }

     }
?>


<!DOCTYPE html>
<html lang="vi">

<head>
    <title> lab5 contact</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="/unnamed.png" />


    <script src="../highlight/jquery-3.5.1.min.js"></script>
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


  
</head>

<body>



    <style>
        .container-fluid-form {
            height : 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container-form {
            padding: 20px;
            background: rgba(192, 192, 192, 0.798);
            width: 450px;
        }

        .form-group {
            gap: 5px;
            padding: 10px 0px;
            display: flex;
            flex-direction: column;
        }

        .form-group input {
            padding: 10px 10px;
            background: white;

            border: 1px solid #eee;
        }

        .form-group span {
            color: red;
        } 

        input:focus {
            outline: none;
        }

        .submit {
            display: flex;
            justify-content: center;
        }

        .submit button {
            padding: 10px;
        }

        .container-fluid {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 100%;
        }
    </style>
    <div class="container-fluid section-lab">
        <div class="container">
            <div class="container-fluid-form">
                <div class="container-form">
                    <div class="">
                        <h2 class="">Contact</h2>
                    </div>
                    <form action="" method="POST" class="">
                        <div class="form-group">
                            <label for="" class="">Name:</label>
                            <input value="<?= $name ?>" name="name" type="text" placeholder="Enter name" class="" />
                            <?= $errorName ? "<span class=''> " . $errorName . "</span>"  : "" ?>
                        </div>
                        <div class="form-group">
                            <label for="" class="">Email:</label>
                            <input value="<?= $email ?>" name="email" type="email" placeholder="Enter Email" class="" />
                            <?= $errorEmail ? "<span class=''> " . $errorEmail . "</span>"  : "" ?>
                        </div>

                        <div class="form-group">
                            <label for="" class="">Message:</label>
                            <input value="<?= $message ?>" name="message" type="text" placeholder="Enter content " class="" />
                            <?= $errorMessage ? "<span class=''> " . $errorMessage . "</span>"  : "" ?>
                        </div>

                        <div class="submit">
                            <button class="" type="submit">Send</button>
                        </div>

                      
                    </form>

                    <?php
                    if ($state == true) {
                        echo '<script> alert("send contact success") ;</script>';
                    }
                    ?>
                </div>
            </div>

        </div>


    </div>




</body>

</html>