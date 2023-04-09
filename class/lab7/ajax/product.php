<?php

require_once('../../DbHelp/handle.php');
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
if (!empty($_POST)) {
    if (isset($_POST["id"]) && $_POST['type'] == 'get') {
        $id = $_POST["id"];
        $sql = "SELECT * FROM `products` WHERE id = '" . $id . "'";
        $data = executeSingleResult($sql);
        $sqlCategory = "SELECT * FROM `category`";
        $dataCategory = executeResult($sqlCategory);
        $template = '';
        foreach($dataCategory as $key => $value){
            $check = $value['id'] == $data['category_id'] ? 'selected' : '';
            $template = $template . '<option ' . $check .' value="'.$value['id'].'" > '.$value['name'].'</option>';
        }


        echo '<div class="form-group">
        <label for="" class="">Product Name:</label>
        <input value="'.$data['name'].'" name="name" type="text" placeholder="Enter name" class="" />
        <span></span>
</div>
<div class="form-group">
        <label for="" class="">Description:</label>
        <input value="'.$data['description'].'" name="description" type="text" placeholder="Enter description" class="" />
        <span></span>
</div>

<div class="form-group">
        <label for="" class="">Price :</label>
        <input value="'.$data['price_sale'].'" name="price" type="text" placeholder="Enter price" class="" />
        <span></span>
</div>

<div class="form-group">
        <label for="" class="">Category: </label>
        <select name="category" id="category" class="">'.$template.'</select>
        <span></span>
</div>

<div class="form-group">
        <label for="" class="">Image:</label>
        <input  class="customFile"  type="file" name="image" id="customFile">
      
        <img id="imgSrc" src="../lab6/img/'.$data['thumb'].'"  class="rounded" >
</div>

<div data-save="'.$data['id'].'" class="submit submit-product">
     <button  class="" type="button">Save</button>
</div>';
    }else if($_POST['type'] == 'update'){
        $image = false;
       
        if(isset($_POST['category'])){
            $category = $_POST['category'];
        }
        if(isset($_POST['id'])){
            $id = $_POST['id'];
        }
        if(isset($_POST['price'])){
            $price = $_POST['price'];
        }
        if(isset($_POST['name'])){
            $name = $_POST['name'];
        }
        if(isset($_POST['description'])){
            $description = $_POST['description'];
        }
        $sqlImg = "SELECT `thumb` FROM `products` WHERE `id` = '".$id."'";
        $dataImage = executeSingleResult(($sqlImg));

        if(isset($_FILES['image'])){
            $errorImage = false;
          // var_dump($_FILES['image']);
           $file = $_FILES['image'];
          


           if(validateUploadFile($file) == 0){
              $errorImage = '* File vượt quá 50Mb!';
          }else if(validateUploadFile($file) == 1){
              $errorImage = '* File '.$file["name"].': không đúng với định dạng hình ảnh!';
          } else {
              $image = validateUploadFile($file);
          }
          if($errorImage != false){
           
             echo json_encode([
                'status' => 'error',
                'message' => $errorImage
             ]);
             die();
          }else {

           unlink("../../lab6/img/".$dataImage['thumb']);
            $random =  mt_rand(100000, 999999);
            $uploadPath = "../../lab6/img/" ;
            move_uploaded_file($file["tmp_name"],$uploadPath .$random.$file["name"]);


            $sql = "UPDATE `products` SET `name` = '".$name."',`thumb` = '".$random.$image."', `price_sale` = '".$price."', `category_id` = '".$category."', `description` = '".$description."' WHERE `products`.`id` = '".$id."'";
          }

        }else {
           
            $sql = "UPDATE `products` SET `name` = '".$name."', `price_sale` = '".$price."', `category_id` = '".$category."', `description` = '".$description."' WHERE `products`.`id` = '".$id."'";
            
        }
        execute($sql);

        $updateSql = "SELECT `name` FROM `category` WHERE `id` = '".$category."'";
        $nameCategory = executeSingleResult($updateSql);

        echo json_encode([
            'status' => 'success',
            'data' => (object)[
                'id' => $id,
                'name' => $name,
                'category' => $nameCategory['name'],
                'thumb' =>  $image ?   $random.$image : $dataImage['thumb']
            ]
        ]);

    }else if($_POST['type'] == 'delete'){
        if(isset($_POST['id'])){
            $id = $_POST['id'];
            $sqlImg = "SELECT `thumb` FROM `products` WHERE `id` = '".$id."'";
            $dataImage = executeSingleResult(($sqlImg));
            unlink("../../lab6/img/".$dataImage['thumb']);


            $sql = "DELETE FROM `products` WHERE `id` = '".$id."'";
            execute($sql);
            echo json_encode([
                'state' => 'success'
            ]);
        }
    }
}
