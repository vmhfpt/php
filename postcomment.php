<?php
require_once('./DbHelp/handle.php');
   if(!empty($_POST)){
     if(isset($_POST['name'])){
        $name = $_POST['name'];
     }
     if(isset($_POST['content'])){
        $content = $_POST['content'];
     }
     if(isset($_POST['phone'])){
        $phone = $_POST['phone'];
     }
     if(isset($_POST['email'])){
        $email = $_POST['email'];
     }
     if(isset($_POST['id'])){
        $id = $_POST['id'];
     }
     $sql = "INSERT INTO `comment` ( `product_id`, `parent_id`, `thumb`, `vote`, `content`, `name`, `number_phone`, `email`, `active`, `created_at`, `updated_at`) VALUES ( '".$id."', '0', '0', '1', '".$content."', '".$name."', '".$phone."', '".$email."', '1', '".date('Y-m-d H:m:s')."', '".date('Y-m-d H:m:s')."')";

     $lastId = insertAndGetLastId($sql);


     $sqlCmt = "SELECT * FROM `comment` WHERE `id` = '".$lastId."'";
     $data = executeSingleResult(($sqlCmt));
     echo json_encode($data);
   }
?>