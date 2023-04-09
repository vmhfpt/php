

<!DOCTYPE html>
<html lang="vi">

<head>
    <title> lab8 login</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="/unnamed.png" />

    
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
        margin-top : 120px;
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
.popup-error {
    margin : 20px 0px;
    padding : 20px 0px;
    color : white;
    background : red;
    text-align: center;
}
</style>


    <div class="container-fluid section-lab">
        <div class="container">
            <div class="tab-content">
          
                <div class="tab-content__item">
                   

                    <div class="container-fluid-form">
                    <div class="container-form">
                            <div class="">
                                <h2 class="">Login form </h2>
                            </div>
                            <form action="" method="POST" class="">
                                    <div class="form-group">
                                            <label for="" class="">Username:</label>
                                            <input value="<?=isset($data['username']) ? $data['username'] : ''?>" name="user-name" type="text" placeholder="Enter Username" class="" />
                                            <?=isset($data['errorUserName']) ? "<span class=''> ".$data['errorUserName']."</span>"  : ""?>
                                    </div>
                                    <div class="form-group">
                                            <label for="" class="">Password:</label>
                                            <input value="<?=isset($data['password']) ? $data['password'] : ''?>" name="password" type="password" placeholder="Enter password" class="" />
                                            <?=isset($data['errorPassword']) ? "<span class=''> ".$data['errorPassword']."</span>"  : ""?>
                                    </div>
                                    
                                    

                                    <?=(isset($data['state']) && $data['state'] == true) ? '<div class="popup-error">
                                        <span class="">Tài khoản hoặc mật khẩu không chính xác !</span>
                                    </div>': "" ?>

                                    
                                    <div class="submit">
                                        <button class="" type="submit">Login</button>
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