<?php
require_once('../DbHelp/handle.php');

   $email = '';
   $password = '';
   $userName = '';
   $confirmPassWord = '';
   
   $errorUserName = false;
   $errorPassWord = false;
   $errorConfirmPassWord = false;
   $errorEmail = false;
   $state = false;
   if (!empty($_POST)) {
     
       $regexEmail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
       $regexPassword = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';
       $regexUserName = '/^[A-Za-z][A-Za-z0-9]{5,31}$/';
   
   
       if (isset($_POST['user-name'])) {
         $userName = $_POST['user-name'];
         
         if (!preg_match($regexUserName,  $userName)) {
            $errorUserName = "* Tên đăng nhập không hợp lệ !";
         }
       }
   

       if (isset($_POST['email'])) {
           $email = $_POST['email'];
           
           if (!preg_match($regexEmail, $email)) {
               $errorEmail = "* Email không hợp lệ !";
           }
       }
   
       if (isset($_POST['password'])) {
           $password = $_POST['password'];
           if (!preg_match($regexPassword, $password)) {
               $errorPassWord = "* Mật khẩu phải chứa chữ cái thường, in hoa và số !";
           }
          
       }

       if (isset($_POST['confirm-password'])) {
            $confirmPassWord = $_POST['confirm-password'];
            if (!preg_match($regexPassword, $confirmPassWord)) {
                $errorConfirmPassWord = "* Mật khẩu xác thực phải chứa chữ cái thường, in hoa và số !";
            }
       
       }

       if ($errorConfirmPassWord == false && $errorPassWord == false ) {
           if($password != $confirmPassWord){
                $errorConfirmPassWord = "* Mật khẩu xác thực không khớp!";
           }
       }

       if( $errorUserName == false && $errorPassWord == false && $errorConfirmPassWord == false && $errorEmail == false){
          $state = "Đăng ký thành công !";
          $sql = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ( '".$userName."', '".$email."', '".md5($password)."')";
          execute($sql);
       }


     }
     
?>


<!DOCTYPE html>
<html lang="vi">

<head>
    <title> Lap 7 register</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="/unnamed.png" />

    
    <script src="../highlight/jquery-3.5.1.min.js"></script>
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


</head>

<body>



<style >
    .container-fluid-form {
       
        width : 100%;
        display : flex;
        justify-content: center;
        align-items: center;
    }
    .container-form {
        padding : 20px;
        background: rgba(192, 192, 192, 0.798);
        width : 450px;
    }
    .form-group {
        gap : 5px;
        padding : 10px 0px;
        display : flex;
        flex-direction: column;
    }
    .form-group input{
        padding : 10px 10px;
        background: white;
       
        border : 1px solid #eee;
    }
    .form-group span {
        color :red;
    }
    input:focus {
        outline: none;
    }
    .submit {
        display : flex;
        justify-content: center;
    }
    .submit button {
        padding : 10px;
    }
    .container-fluid {
  width : 100%;
  display : flex;
  justify-content: center;
  align-items: center;
}
.container {
	width : 100%;
}
.tab-content {
   
   display : flex;
   justify-content: center;
   align-items: center;
   height : 100vh;
}
.popup-success {
    font-size: 17px;
    padding : 10px 0px;
    color : white;
    background: #5cb85c;
    width : 100%;
    text-align: center;
}
</style>
    <div class="container-fluid section-lab">
        <div class="container">
            <div class="tab-content">
      
                <div class="tab-content__item">
                  

                    <div class="container-fluid-form">
         <div class="container-form">
            <?= $state ? '<div class="popup-success">
                 <span class=""> '.$state.'</span>
            </div>' : ''?>
            
              <div class="">
                 <h2 class="">Register form </h2>
              </div>
               <form action="" method="POST" class="">
                    <div class="form-group">
                            <label for="" class="">Username:</label>
                            <input value="<?=$userName?>" name="user-name" type="text" placeholder="Enter Username" class="" />
                            <?=$errorUserName ? "<span class=''> ".$errorUserName."</span>"  : ""?>
                    </div>
                    <div class="form-group">
                            <label for="" class="">Email:</label>
                            <input value="<?=$email?>" name="email" type="text" placeholder="Enter Email" class="" />
                            <?=$errorEmail ? "<span class=''> ".$errorEmail."</span>"  : ""?>
                    </div>
                    <div class="form-group">
                            <label for="" class="">Password:</label>
                            <input value="<?=$password?>" name="password" type="password" placeholder="Enter password" class="" />
                            <?=$errorPassWord ? "<span class=''> ".$errorPassWord."</span>"  : ""?>
                    </div>
                    <div class="form-group">
                            <label for="" class="">Confirm Password:</label>
                            <input value="<?=$confirmPassWord?>" name="confirm-password" type="password" placeholder="Confirm password" class="" />
                            <?=$errorConfirmPassWord ? "<span class=''> ".$errorConfirmPassWord."</span>"  : ""?>
                    </div>
                    <div class="submit">
                         <button class="" type="submit">Register</button>
                    </div>
               </form>

               
         </div>
     </div>

                </div>

            </div>
        </div>
    </div>

   
   

    <script src="../highlight/rainbow-custom.min.js"> </script>
</body>

</html>