<?php
require_once ('../../DbHelp/handle.php');
   if(!empty($_POST)){
     if(isset($_POST['order_id'])){
        $order_id = $_POST['order_id'];
     }
     if(isset($_POST['active'])){
        $active = (int)$_POST['active'];
     }   

     $sql = "SELECT * FROM `oder` WHERE `id` = '".$order_id."'";
     $dataItem = executeSingleResult($sql);
     $dataItemActive =(int)$dataItem['active'];
     if($dataItemActive != 0 &&  (($active == ($dataItemActive - 1)) || ($active == 0) )  ){
        $sql = "UPDATE `oder` SET `active` = '".$active."' WHERE `oder`.`id` = '". $order_id."'";
        execute(($sql));
        echo json_encode([
            'status' => 'success'
         ]);
     }else {
        echo json_encode([
            'status' => 'error'
         ]);
     }
   
   }

?>