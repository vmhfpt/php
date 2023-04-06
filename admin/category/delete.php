<?php
require_once('../../DbHelp/handle.php');
if (!empty($_POST)) {
    if (isset($_POST['id'])) {
      $sql = "DELETE FROM category WHERE id = '".$_POST['id']."'";
      execute(($sql));
    echo json_encode(['status' => 'success']);
    }
}
?>