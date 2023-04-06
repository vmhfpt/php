<?php

define('ROOT_PATH', dirname(__DIR__) . '/layout/');
require_once('../../DbHelp/handle.php');
require_once(ROOT_PATH . "header.php");
$categorySql = "SELECT * FROM category ";
$platFormSql = "SELECT * FROM `business-platform`";


$dataCategory = executeResult($categorySql);
$dataPlatForm =  executeResult($platFormSql);

$errorDescription = $errorName = $errorEditor = false;

if(!empty($_GET)){
    if(isset($_GET['slug'])){
        $slug = $_GET['slug'];
        $sql = "SELECT * FROM category WHERE slug = '".$slug."'";
        $dataEdit = executeSingleResult($sql);
        $name = $dataEdit['name'];
        $description = $dataEdit['description'];
         $editor = $dataEdit['content'];
         $category = $dataEdit['parent_id'];
         $business_platform = $dataEdit['business_platform_id'];
         $active =  $dataEdit['active'];
    }
}else {
  die();
}

if (!empty($_POST)) {
  $regex = '/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]{2,})$/i';

  if (isset($_POST['description'])) {
    $description = $_POST['description'];
    if (!preg_match($regex, $description)) {
      $errorDescription = ("Mô tả không hợp lệ !");
     
    }
  }

  if (isset($_POST['name'])) {
    $name = $_POST['name'];
    if (!preg_match($regex, $name)) {
      $errorName = ("Tên không hợp lệ !");
   
    }
  }
 
  if (isset($_POST['editor'])) {
    $editor = $_POST['editor'];
$editor = str_replace('"', '\\"', $editor) ;
    if ($editor == '') {
      $errorEditor = ("Nội dung không hợp lệ !");
      
    }
  }
  if (isset($_POST['business-platform'])) {
    $business_platform = $_POST['business-platform'];
  }
  if (isset($_POST['category'])) {
    $category = $_POST['category'];
  }
  if (isset($_POST['active'])) {
    $active = 1;
    
  }

  //$errorDescription = $errorName = $errorEditor = false;
  if($errorDescription == false && $errorName == false &&  $errorEditor == false){
 


    $sql = "UPDATE `category` SET `name` = '".$name."', `parent_id` = '".$category."', `description` = '".$description."', `content` = '".$editor."', `slug` = '".createSlug($name)."', `active` = '1', `business_platform_id` = '".$business_platform."' WHERE `category`.`slug` = '".$dataEdit['slug']."' ";
    execute($sql);
    header('Location: ./index.php');
  }



}


?>

<script src="../../public/Admin/ckeditor/ckeditor.js"></script>
<div class="content-wrapper" style="min-height: 1929.81px">
  <!-- Content Header (Page header) -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">Sửa danh mục "<?=$name?>" </h3>
            </div>
            <form method="POST" action="">
              <div class="card-body">
                <div class="form-group">
                  <label>Tên danh mục</label>
                  <input value="<?=$name?>" name="name" type="text" class="form-control" placeholder="Nhập tên danh mục" />
                 
                  <?php
                    if($errorName != false){
                      echo ' <span id="exampleInputPassword1-error" class="error text-danger">"'.$errorName.'"</span>';
                    }
                  ?>
                </div>
                <div class="form-group">
                  <label>Nền tảng</label>
                  <select name="business-platform" class="form-control">
                    <?php
                    foreach ($dataPlatForm as $key => $value) { ?>

                      <option <?= $business_platform == $value['id'] ? 'selected' : ''?> value="<?=$value['id']?>">
                        <?= $value['name'] ?>
                      </option>
                    <?php

                    }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Danh mục</label>
                  <select name="category" class="form-control">
                    <option <?= $category == '0' ? 'selected' : ''?> value="0">Danh mục cha</option>
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
                  <label>Mô tả</label>
                  <input value="<?=$description?>" name="description" type="text" class="form-control" placeholder="Nhập mô tả" />
                  <?php
                    if($errorDescription != false){
                      echo ' <span id="exampleInputPassword1-error" class="error text-danger">"'.$errorDescription.'"</span>';
                    }
                  ?>
                </div>
                <div class="form-group">
                  <label>Nội dung</label>
                  <textarea name="editor" id="editor1" rows="10" cols="80">
                    <?=$editor?>
                  </textarea>
                  <?php
                    if($errorEditor != false){
                      echo ' <span id="exampleInputPassword1-error" class="error text-danger">"'.$errorEditor.'"</span>';
                    }
                  ?>
                </div>
                <div class="form-group">
                  <div class="custom-control custom-switch">
                    <input name="active" type="checkbox" class="custom-control-input" id="customSwitch1" />
                    <label class="custom-control-label" for="customSwitch1">Trạng thái kích
                      hoạt</label>
                  </div>
                </div>
              </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            <script>
              // Replace the <textarea id="editor1"> with a CKEditor 4
              // instance, using default configuration.
              CKEDITOR.replace("editor1");
            </script>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php
require_once(ROOT_PATH . "footer.php");
?>