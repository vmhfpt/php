<?php

define('ROOT_PATH', dirname(__DIR__) . '/layout/');
require_once('../../DbHelp/handle.php');
require_once('../../DbHelp/function.php');
require_once(ROOT_PATH . "header.php");
$categorySql = "SELECT * FROM category ";
$state = false;


$dataCategory = executeResult($categorySql);


$errorFile = $errorDescription = $errorName = $errorContent = $errorPrice = $errorPriceSale  = false;
$upload = $name = $description = $content = $category = $price = $priceSale = $active = '';

if (!empty($_POST)) {
 
  $regex = '/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềếểỄỆỈỊỌỎỐỒỔỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]{8,})$/i';
  $regexFrice = '/^([0-9]{5,})$/';
 
  if(isset($_POST['description'])){
    $description = $_POST['description'];
    if (!preg_match($regex, $description )) {
      $errorDescription = ("Mô tả không hợp lệ !");
   
    }
  }

  if (isset($_POST['category'])) {
    $category = $_POST['category'];
  }


  if(isset($_POST['name'])){
    $name = $_POST['name'];
    if (!preg_match($regex, $name)) {
      $errorName = ("Tên không hợp lệ !");
   
    }
  }
  if(isset($_POST['content'])){
    $content = $_POST['content'];
$content = str_replace('"', '\\"', $content) ;
    if ($content == '') {
      $errorContent = ("Nội dung không hợp lệ !");
    }
  }
  

  if(isset($_POST['price'])){
    $price = $_POST['price'];
    if (!preg_match($regexFrice, $price)) {
      $errorPrice = ("Giá không hợp lệ !");
     
    }
  }

  if(isset($_POST['price_sale'])){
    
    $priceSale = $_POST['price_sale'];
    if (!preg_match($regexFrice, $priceSale)) {
      $errorPriceSale = ("Giá ưu đãi không hợp lệ !");
    }
  }

  if($errorDescription == false && $errorName == false &&  $errorContent == false && $errorPrice == false && $errorPriceSale == false){
 if(!empty($_FILES)){
    if (isset($_FILES['thumb'])) {
   
      $thumb = $_FILES['thumb'];
     if( $thumb["name"][0] == ""){
      $errorFile = "* Cần ít nhất một ảnh";
     }else {
          $upload = upLoadFiles($thumb);
          $check = $upload[0];
          if($check[0] == '*'){
            $errorFile = $upload;
          }else {
$sql = "INSERT INTO `product` ( `name`, `category_id`, `description`, `price`, `price_sale`, `content`, `slug`, `active`, `thumb`, `admin_post_id`, `view_model`, `created_at`, `updated_at`) VALUES ( '".$name."', '".$category."', '".$description."', '".$price."', '".$priceSale."', '".$content."', '".createSlug($name)."', '1', '".$upload[0]."', '1', '1', '".date("y-m-d h:m:s")."', '".date("y-m-d h:m:s")."')";
    execute($sql);
    $state = "Thêm " .$name. "Thành công";
            $errorFile = false;
          }
          
     }
    }
  }
     //INSERT INTO `product` (`id`, `name`, `category_id`, `description`, `price`, `price_sale`, `content`, `slug`, `active`, `thumb`, `admin_post_id`, `view_model`, `created_at`, `updated_at`) VALUES (NULL, 'ggsgasgsgd', '1', 'fsdfasdfasd', '34234', '4234234', 'asdfsdaf', 'fsdf-fsdfa', '1', 'fsdafasdf', '2', '3', NULL, NULL);
    //header('Location: ./index.php');
    
  }



}


?>

<script src="../../public/Admin/ckeditor/ckeditor.js"></script>
<div class="content-wrapper" style="min-height: 774px;"> <br />
  <?php
   if($state != false){
  ?>
<div class="alert alert-success">
  <strong>Thành công !</strong> <?=$state?>
</div>
  <?php
   }
  ?>

    <!-- Content Header (Page header) -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Thêm sản phẩm mới</h3>
                </div>
    <form method="POST" action="" enctype="multipart/form-data">

           
         <div class="card-body">
                                    <div class="form-group">
                <label>Tên sản phẩm</label>
                <input value="<?=$name?>" name="name" type="text" class="form-control" placeholder="Nhập tên sản phẩm">
                <?php
                    if($errorName != false){
                      echo ' <span id="exampleInputPassword1-error" class="error text-danger">'.$errorName.'</span>';
                    }
                  ?>
            </div>
                        <div class="form-group">
                <label>Danh mục</label>
                

                <select name="category" class="form-control">
                   
                    <?php
                    foreach ($dataCategory as $key => $value) { ?>

                      <option  <?= $category == $value['id'] ? 'selected' : ''?> value="<?=$value['id']?>">
                        <?= $value['name'] ?>
                      </option>
                    <?php

                    }
                    ?>
                  </select>
                                </div>
            


                                <div class="form-group">
                <label>Giá gốc</label>
                <input value="<?=$price?>" name="price" type="number" class="form-control" placeholder="Nhập giá gốc sản phẩm">
                <?php
                    if($errorPrice != false){
                      echo ' <span id="exampleInputPassword1-error" class="error text-danger">'.$errorPrice.'</span>';
                    }
                  ?>
            </div>
            
            <div class="form-group">
                <label>Giá ưu đãi</label>
                <input value="<?=$priceSale?>" name="price_sale" type="number" class="form-control" placeholder="Nhập giá ưu đãi sản phẩm">
                <?php
                    if($errorPriceSale != false){
                      echo ' <span id="exampleInputPassword1-error" class="error text-danger">'.$errorPriceSale.'</span>';
                    }
                  ?>
            </div>
                        <div class="form-group">
                <label>Mô tả</label>
                <input value="<?=$description?>" name="description" type="text" class="form-control" placeholder="Nhập mô tả">
                <?php
                    if($errorDescription != false){
                      echo ' <span id="exampleInputPassword1-error" class="error text-danger">'.$errorDescription.'</span>';
                    }
                  ?>
            </div>
            


            <div class="form-group">
                <label>Nội dung</label>
                <textarea name="content" id="editor1" rows="10" cols="80">
                <?=$content?>
                  </textarea>
                  <?php
                    if($errorContent != false){
                      echo ' <span id="exampleInputPassword1-error" class="error text-danger">'.$errorContent.'</span>';
                    }
                  ?>
            </div>
                        <div class="form-group">
                <div class="custom-control custom-switch">
                    <input name="active" value="" type="checkbox" class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1">Trạng thái kích hoạt</label>
                </div>
            </div>
            <div class="custom-file">

                <input accept="image/*" name="thumb[]" type="file" class="custom-file-input" id="customFile">
                <?php
                    if($errorFile != false){
                      echo ' <span id="exampleInputPassword1-error" class="error text-danger">'.$errorFile.'</span>';
                    }
                  ?>
                <label class="custom-file-label" for="customFile">Chọn một ảnh đại diện sản phẩm</label>
            </div> <br> <br>
                        <img id="imgSrc" src="https://www.freeiconspng.com/thumbs/no-image-icon/no-image-icon-6.png" style="margin-top : 30px" class="rounded" width="304" height="236">
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
        </div>
    </form>
  
              </div>


              </div>
          </div>
        </div>
      </section>
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
              // Replace the <textarea id="editor1"> with a CKEditor 4
              // instance, using default configuration.
              CKEDITOR.replace("editor1");
            </script>

<?php
require_once(ROOT_PATH . "footer.php");
?>