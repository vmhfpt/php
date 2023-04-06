<?php
   
      function validateUploadFile($file) {

            $Test_Valid = false ;
            if ($file['size'] > 50 * 1024 * 1024) { // 2Mb = 2 * 1024kb * 1024 bite
            
                return (0);
            }
        
            $validTypes = array('jpg', 'jpeg', 'png', 'bmp');
            $fileType = substr($file['name'], strrpos($file['name'], ".") + 1) ;
            
            for ($i = 0; $i < count($validTypes); $i ++){
                if ($fileType == $validTypes[$i]){
                        $Test_Valid = true ;
                        break ;
                } else {
                    continue ;
                }
            }
            if ($Test_Valid == false){
                return (1) ;
            }
           
            return ($file['name']);
   }
    
   $name = $description = $price = $category = $image = '';
  
   
   $errorName = false;
   $errorDescription = false;
   $errorPrice = false;
   $errorCategory = false;
   $errorImage = false;
   $state = false;
   if (!empty($_POST)) {
     
        $regex = '/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềếểỄỆỈỊỌỎỐỒỔỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]{8,})$/i';
        $regexPrice = '/^([0-9]{5,})$/';
   
   
       if (isset($_POST['name'])) {
         $name = $_POST['name'];
         
         if (!preg_match($regex,  $name)) {
            $errorName = "* Tên phải ít nhất 8 ký tự!";
         }
       }
   
   
       if (isset($_POST['description'])) {
           $description = $_POST['description'];
           if (!preg_match($regex, $description)) {
               $errorDescription = "* Mô tả phải ít nhất 8 ký tự!";
           }
          
       }

       if (isset($_POST['price'])) {
            $price = $_POST['price'];
            if (!preg_match($regexPrice, $price)) {
                $errorPrice = "* Giá không hợp lệ!";
            }
       }

       if (isset($_POST['category'])) {
            $category = $_POST['category'];
            if ($category == 'null') {
                $errorCategory = "* Danh mục không được để trống!";
            }
       
       }

       if(isset($_FILES)){
        
           $file = $_FILES['image'];
           if($_FILES['image']['name'] == ''){
                $errorImage = '* Cần ít nhất một ảnh!';
           }else {
            
            
              if(validateUploadFile($file) == 0){
                $errorImage = '* File vượt quá 50Mb!';
              }else if(validateUploadFile($file) == 1){
                $errorImage = '* File '.$file["name"].': không đúng với định dạng hình ảnh!';
              } else {
                $image = validateUploadFile($file);
              }

              
           }
       }

       if($errorCategory == false && $errorDescription == false && $errorName == false && $errorImage == false && $errorPrice == false){
           $state = true;
           echo "Tên : " .$name. "<br/>";
           echo "Mô tả : " .$description. "<br/>";
           echo "Danh mục : " .$category. "<br/>";
           echo "Giá : " .$price. "<br/>";
           echo "Ảnh : " .$image. "<br/>";
       }

     }
?>


<!DOCTYPE html>
<html lang="vi">

<head>
    <title> Add Product</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="/unnamed.png" />

    <script src="../highlight/rainbow-custom.min.js"> </script>
    <script src="../highlight/jquery-3.5.1.min.js"></script>
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


    <link rel="stylesheet" href="../highlight/learn.css">
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
</style>
    <div class="container-fluid section-lab">
        <div class="container">
            <div class="tab-content">
                <div class="tab-content__item">
                    <div class="tab-title">
                        <h2 class="">file productAdd.php</h2>
                    </div>
                    <pre class="language-html" id="press">
    <code class="line-numbers"  style="position: relative;
              left: 0px;
              top : -40px">
      
        <xmp>
                <‽php
                
                function validateUploadFile($file) {

                        $Test_Valid = false ;
                        if ($file['size'] > 50 * 1024 * 1024) { // 2Mb = 2 * 1024kb * 1024 bite
                        
                            return (0);
                        }
                    
                        $validTypes = array('jpg', 'jpeg', 'png', 'bmp');
                        $fileType = substr($file['name'], strrpos($file['name'], ".") + 1) ;
                        
                        for ($i = 0; $i < count($validTypes); $i ++){
                            if ($fileType == $validTypes[$i]){
                                    $Test_Valid = true ;
                                    break ;
                            } else {
                                continue ;
                            }
                        }
                        if ($Test_Valid == false){
                            return (1) ;
                        }
                        
                        return ($file['name']);
                }
                
                $name = $description = $price = $category = $image = '';


                $errorName = false;
                $errorDescription = false;
                $errorPrice = false;
                $errorCategory = false;
                $errorImage = false;
                $state = false;
                if (!empty($_POST)) {
                
                    $regex = '/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềếểỄỆỈỊỌỎỐỒỔỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]{8,})$/i';
                    $regexPrice = '/^([0-9]{5,})$/';


                    if (isset($_POST['name'])) {
                    $name = $_POST['name'];
                    
                    if (!preg_match($regex,  $name)) {
                        $errorName = "* Tên phải ít nhất 8 ký tự!";
                    }
                    }


                    if (isset($_POST['description'])) {
                        $description = $_POST['description'];
                        if (!preg_match($regex, $description)) {
                            $errorDescription = "* Mô tả phải ít nhất 8 ký tự!";
                        }
                    
                    }

                    if (isset($_POST['price'])) {
                        $price = $_POST['price'];
                        if (!preg_match($regexPrice, $price)) {
                            $errorPrice = "* Giá không hợp lệ!";
                        }
                    }

                    if (isset($_POST['category'])) {
                        $category = $_POST['category'];
                        if ($category == 'null') {
                            $errorCategory = "* Danh mục không được để trống!";
                        }
                    
                    }

                    if(isset($_FILES)){
                    
                        $file = $_FILES['image'];
                        if($_FILES['image']['name'] == ''){
                            $errorImage = '* Cần ít nhất một ảnh!';
                        }else {
                        
                        
                        if(validateUploadFile($file) == 0){
                            $errorImage = '* File vượt quá 50Mb!';
                        }else if(validateUploadFile($file) == 1){
                            $errorImage = '* File '.$file["name"].': không đúng với định dạng hình ảnh!';
                        } else {
                            $image = validateUploadFile($file);
                        }

                        
                        }
                    }

                    if($errorCategory == false && $errorDescription == false && $errorName == false && $errorImage == false && $errorPrice == false){
                        $state == true;
                        echo "Tên : " .$name. "<br/>";
                        echo "Mô tả : " .$description. "<br/>";
                        echo "Danh mục : " .$category. "<br/>";
                        echo "Giá : " .$price. "<br/>";
                        echo "Ảnh : " .$image. "<br/>";
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
                <title>Lab 4 - Add Product</title>
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
                            <h2 class="">Product Add </h2>
                        </div>
                            <form enctype="multipart/form-data" action="" method="POST" class="">
                                <div class="form-group">
                                        <label for="" class="">Product Name:</label>
                                        <input value="<‽=$name?>" name="name" type="text" placeholder="Enter name" class="" />
                                        <‽=$errorName ? "<span class=''> ".$errorName ."</span>"  : ""?>
                                </div>
                                <div class="form-group">
                                        <label for="" class="">Description:</label>
                                        <input value="<‽=$description?>" name="description" type="text" placeholder="Enter description" class="" />
                                        <‽=$errorDescription ? "<span class=''> ".$errorDescription."</span>"  : ""?>
                                </div>

                                <div class="form-group">
                                        <label for="" class="">Price :</label>
                                        <input value="<‽=$price?>" name="price" type="text" placeholder="Enter price" class="" />
                                        <‽=$errorPrice ? "<span class=''> ".$errorPrice."</span>"  : ""?>
                                </div>

                                <div class="form-group">
                                        <label for="" class="">Category: </label>
                                        <select name="category" id="" class="">
                                            <option <‽=$category == 'null' ? 'selected': ""?> value="null" class="">-- Lựa chọn --</option>
                                            <option <‽=$category == 'điện thoại' ? 'selected': ""?> value="điện thoại" class="">Điện thoại</option>
                                            <option <‽=$category == 'máy tính bảng' ? 'selected': ""?> value="máy tính bảng" class="">Máy tính bảng</option>
                                            <option <‽=$category == 'đồng hồ' ? 'selected': ""?> value="đồng hồ" class="">Đồng hồ</option>
                                        </select>
                                        <‽=$errorCategory ? "<span class=''> ".$errorCategory."</span>"  : ""?>
                                </div>

                                <div class="form-group">
                                        <label for="" class="">Image:</label>
                                        <input class="customFile"  type="file" name="image" id="customFile">
                                        <‽=$errorImage ? "<span class=''> ".$errorImage ."</span>"  : ""?>
                                        <img id="imgSrc" src="https://www.freeiconspng.com/thumbs/no-image-icon/no-image-icon-6.png"  class="rounded" >
                                </div>
                                
                                <div class="submit submit-product">
                                    <button class="" type="submit">Save</button>
                                </div>
                            </form>

                            <‽php
                                if($state == true){
                                    echo '<script> alert("validate success") ;</script>';
                                }
                            ?>
                    </div>
                </div>
                <script>
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                $("#imgSrc").attr("src", e.target.result);
                            };
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                    $("#customFile").change(function () {
                        var fileName = $(this).val().split("\\").pop();
                        $(this).siblings(".customFile").addClass("selected").html(fileName);
                        readURL(this);
                    });
                </script>
                </body>
                </html>
        </xmp>
    </code>
  </pre>
                </div>
                <div class="tab-content__item">
                    <div class="tab-title">
                        <h2 class="">Kết quả</h2>
                    </div>

                    <div class="container-fluid-form">
         <div class="container-form">
              <div class="">
                 <h2 class="">Product Add </h2>
              </div>
               <form enctype="multipart/form-data" action="" method="POST" class="">
                    <div class="form-group">
                            <label for="" class="">Product Name:</label>
                            <input value="<?=$name?>" name="name" type="text" placeholder="Enter name" class="" />
                            <?=$errorName ? "<span class=''> ".$errorName ."</span>"  : ""?>
                    </div>
                    <div class="form-group">
                            <label for="" class="">Description:</label>
                            <input value="<?=$description?>" name="description" type="text" placeholder="Enter description" class="" />
                            <?=$errorDescription ? "<span class=''> ".$errorDescription."</span>"  : ""?>
                    </div>

                    <div class="form-group">
                            <label for="" class="">Price :</label>
                            <input value="<?=$price?>" name="price" type="text" placeholder="Enter price" class="" />
                            <?=$errorPrice ? "<span class=''> ".$errorPrice."</span>"  : ""?>
                    </div>

                    <div class="form-group">
                            <label for="" class="">Category: </label>
                            <select name="category" id="" class="">
                                <option <?=$category == 'null' ? 'selected': ""?> value="null" class="">-- Lựa chọn --</option>
                                <option <?=$category == 'điện thoại' ? 'selected': ""?> value="điện thoại" class="">Điện thoại</option>
                                <option <?=$category == 'máy tính bảng' ? 'selected': ""?> value="máy tính bảng" class="">Máy tính bảng</option>
                                <option <?=$category == 'đồng hồ' ? 'selected': ""?> value="đồng hồ" class="">Đồng hồ</option>
                            </select>
                            <?=$errorCategory ? "<span class=''> ".$errorCategory."</span>"  : ""?>
                    </div>

                    <div class="form-group">
                            <label for="" class="">Image:</label>
                            <input class="customFile"  type="file" name="image" id="customFile">
                            <?=$errorImage ? "<span class=''> ".$errorImage ."</span>"  : ""?>
                            <img id="imgSrc" src="https://www.freeiconspng.com/thumbs/no-image-icon/no-image-icon-6.png"  class="rounded" >
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

                </div>

            </div>
        </div>
    </div>

   
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $("#imgSrc").attr("src", e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#customFile").change(function () {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".customFile").addClass("selected").html(fileName);
            readURL(this);
        });
    </script>

    <script src="../highlight/rainbow-custom.min.js"> </script>
</body>

</html>