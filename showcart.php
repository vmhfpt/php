<?php
require_once('./DbHelp/handle.php');
  if(!empty($_POST)){
    if(isset($_POST['id'])){
        if($_POST['type'] == 'show'){
            $sql = "SELECT `oder_detail`.*, `product`.`name` AS `name_product`, `product`.`price_sale`, `product`.`thumb` FROM `oder_detail` JOIN `product` WHERE `product`.`id` = `oder_detail`.`color_id` AND `oder_id` = '".$_POST['id']."'";
        $dataItem = executeResult(($sql));
        echo json_encode(
             $dataItem
        );
        }else if($_POST['type'] == 'delete'){
            $sql = "DELETE FROM `oder_detail` WHERE `id` = '".$_POST['id']."'";
            execute($sql);


           
            echo json_encode(
               [
                'state' => 'success'
               ]
           );
        }else if($_POST['type'] == 'delete_all'){
            $sql = "DELETE FROM `oder_detail` WHERE `oder_id` = '".$_POST['id']."'";
            execute($sql);

            $sql_next = "DELETE FROM `oder` WHERE `id` = '".$_POST['id']."'";
            execute($sql_next);

            echo json_encode(
                [
                 'state' => 'success'
                ]
            );
        }
    }
  }

?>