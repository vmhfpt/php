<?php
require_once('./handle.php');
   if(!empty($_POST)){
   	$id = 0;
   	  if(isset($_POST["id"])){
   	     	$id = $_POST["id"];
   	  }
   	  if(isset($_POST["type"])){
   	  	 if($_POST["type"] == 'district'){
   	  	 	  $sql = "SELECT * FROM `devvn_quanhuyen` WHERE `matp` = '".$id."'";
   	  	 	  $data = executeResult($sql);
   	  	 	  echo json_encode($data);
   	  	 }else {
   	  	 	$sql = "SELECT * FROM `devvn_xaphuongthitran` WHERE `maqh` = '".$id."'";
   	  	 	  $data = executeResult($sql);
   	  	 	  echo json_encode($data);
   	  	 }
   	  }
   }
?>