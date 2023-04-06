<?php
    
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
           echo "Tên : " .$name. "<br/>";
       }

     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Lab 4 - Add Category</title>
</head>

<style >
    .container-fluid {
        width : 100%;
        display : flex;
        justify-content: center;
        align-items: center;
    }
    .container {
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
    

</style>
<body>
     <div class="container-fluid-form">
         <div class="container-form">
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

               <?php
                 if($state == true){
                    echo '<script> alert("validate success") ;</script>';
                 }
               ?>
         </div>
     </div>
    
</body>
</html>