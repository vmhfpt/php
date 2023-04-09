


<!DOCTYPE html>
<html lang="vi">

<head>
    <title> Lab 8</title>
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
        
            <?= isset($data['state']) && $data['state'] ? ' <div class="popup-success">
                 <span class=""> '.$data['state'].'</span>
            </div>' : ""?>
            
              <div class="">
                 <h2 class="">Edit user "<?=isset($data[0]->username) ? $data[0]->username : $data['username'] ?>" </h2>
              </div>
               <form action="" method="POST" class="">
                    <div class="form-group">
                            <label for="" class="">Username:</label>
                            <input value="<?=isset($data[0]->username) ? $data[0]->username : $data['username'] ?>" name="user-name" type="text" placeholder="Enter Username" class="" />
                           
                           <?=isset($data['errorUserName']) ? '<span class="">'.$data['errorUserName'].'</span>' : "" ?>
                    </div>
                    <div class="form-group">
                            <label for="" class="">Email:</label>
                            <input value="<?=isset($data[0]->email) ? $data[0]->email : $data['email'] ?>" name="email" type="text" placeholder="Enter Email" class="" />
                            <?=isset($data['errorEmail']) ? '<span class="">'.$data['errorEmail'].'</span>' : "" ?>
                    </div>
                    <div class="form-group">
                            <label for="" class="">Password:</label>
                            <input value="<?=isset($data['password']) ? $data['password'] : ''?>" name="password" type="password" placeholder="Enter password" class="" />
                            <?=isset($data['errorPassWord']) ? '<span class="">'.$data['errorPassWord'].'</span>' : "" ?>
                    </div>
                    <div class="form-group">
                            <label for="" class="">Confirm Password:</label>
                            <input value="<?=isset($data['confirmPassWord']) ? $data['confirmPassWord'] : ''?>" name="confirm-password" type="password" placeholder="Confirm password" class="" />
                            <?=isset($data['errorConfirmPassWord']) ? '<span class="">'.$data['errorConfirmPassWord'].'</span>' : "" ?>
                    </div>
                    <div class="submit">
                         <button class="" type="submit">SAVE</button>
                    </div>
               </form>

               
         </div>
     </div>

                </div>

            </div>
        </div>
    </div>

   
   


</body>

</html>