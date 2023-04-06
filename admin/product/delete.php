<?php
require_once('../../DbHelp/handle.php');
if (!empty($_POST)) {
    if (isset($_POST['id'])) {
      $sql = "SELECT `product`.`thumb` from `product` WHERE `product`.`id` = '".$_POST['id']."'";
      
      $data = executeSingleResult($sql);
      unlink("../../public/img/".$data["thumb"]);
      $sql = "DELETE FROM product WHERE id = '".$_POST['id']."'";
      execute(($sql));
    echo json_encode(['status' => 'success']);
    }
}


?>