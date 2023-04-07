<?php
     require_once('../DbHelp/handle.php');
   $name = '';
   $errorName = false;
  
   $state = false;
   if (!empty($_POST)) {
     
        $regex = '/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềếểỄỆỈỊỌỎỐỒỔỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]{8,})$/i';
   
       if (isset($_POST['name'])) {
         $name = $_POST['name'];
         
         if (!preg_match($regex,  $name)) {
            $errorName = "* Tên phải ít nhất 8 ký tự!";
         }
       }
       if($errorName == false ){
           $state = "Thêm danh mục " . $name . " Thành công !";
          
           $sql = "INSERT INTO `category` ( `name`) VALUES ( '".$name."')";
           execute($sql);
           $name = '';
       }

     }
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <title> lab7 Category add</title>
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
    .form-group select {
        padding : 10px 10px;
        background: white;
        border : 1px solid #eee;
    }
    .form-group input{
        padding : 10px 10px;
        background: white;
       
        border : 1px solid #eee;
    }
    .form-group span {
        color :red;
    }
    select:focus {
        outline : none;
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
    .submit-product button {
        background : blue;
        color : white;
        border : none;
        cursor: pointer;
    }
    .rounded {
        width : 304px;
        height : 236px;
        object-fit: cover;
        margin-top : 30px;
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
        width : 100%;
        height : 100vh;
        display : flex;
        justify-content: center;
        align-items: center;
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
                 <h2 class="">Category Add </h2>
              </div>
               <form enctype="multipart/form-data" action="" method="POST" class="">
                    <div class="form-group">
                            <label for="" class="">Category Name:</label>
                            <input value="<?=$name?>" name="name" type="text" placeholder="Enter name" class="" />
                            <?=$errorName ? "<span class=''> ".$errorName ."</span>"  : ""?>
                    </div>
                   
                   
                    <div class="submit submit-product">
                         <button class="" type="submit">Save</button>
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