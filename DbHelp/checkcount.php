<?php


use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;

require '../admin/PHPMailer/Exception.php';
require '../admin/PHPMailer/PHPMailer.php';
require '../admin/PHPMailer/SMTP.php';

/*
require '../admin/PHPMailer/Exception.php';
require '../admin/PHPMailer/PHPMailer.php';
require '../admin/PHPMailer/SMTP.php';
  {
      "name":"Vu Minh Hung",
      "email":"vuminhhungltt904@gmail.com",
      "phone":"0359932904",
      "note":"Yeu cau ghi chu them",
      "address_code":{
          "city":"66",
          "district":"650",
          "aware":"24364"
       },
      "address":"so nha 55, Thon xuan dat"
  } 
*/
  session_start();
  ob_start();
  require_once('./handle.php');
  
  $userSession = null;
 
  if(isset($_SESSION["user"])){
    $userSession = $_SESSION["user"];
  }

  $carts = [];
  $detailUser ;
  
 
  function sendEmail($email, $total, $carts, $user, $address){
  $template = "";
 for($i = 0; $i < count($carts); $i ++){
 	   $template  = $template  . "<tr><td>#".($i+1)."</td><td>".$carts[$i]["name"]."</td><td>".$carts[$i]["price_sale"]."</td><td>".$carts[$i]["quantity"]."</td></tr>";
 }
 $template = "<table><tr><th>STT</th><th>Name</th><th>Price</th><th>Quantity</th></tr>" . $template . "</table><br/>";
 
 $templateUser = " <br/><ul>
    <li> Ten : ".$user['name']."</li>
      <li> Email : ".$user['email']."</li>
      <li> SDT : ".$user['phone']."</li>
      <li> Ghi chu : ".$user['note']."</li>
      <li> Dia chi nhan hang : ".$address."</li>
  </ul>
 ";
  
  	 $mail = new PHPMailer(true);
            try {
               
                $mail->isSMTP(); // using SMTP protocol                                     
                $mail->Host = 'smtp.gmail.com'; // SMTP host as gmail 
                $mail->SMTPAuth = true;  // enable smtp authentication                             
                $mail->Username = 'vuminhhungltt904@gmail.com';  // sender gmail host              
                $mail->Password = 'qrufvswlemmblcjt'; // sender gmail host password                          
                $mail->SMTPSecure = 'tls';  // for encrypted connection                           
                $mail->Port = 587;   // port for SMTP     
            
                $mail->setFrom('vuminhhungltt904@gmail.com', "Admin"); // sender's email and name
                $mail->addAddress($email, "Don hang");  // receiver's email and name
                $mail->isHTML(true);
                $mail->Subject = 'Chi tiet don hang';
                $mail->Body    = '<h1> Dat hang thanh cong ! </h1><br/>' . $template . 'Tong tien : '.$total. "VND" . $templateUser;
            
                $mail->send();
       }  catch (Exception $e) { // handle error.
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
         } 
 }
  function addOder($carts, $user){
 
  	$idUser = 0;
    if(isset($_SESSION["user"])){
      $idUser = $_SESSION["user"]['id'];
    }
    
  	$total = 0;
  	for($i = 0; $i < count($carts); $i ++){
  		 $total = $total + ((int)$carts[$i]['quantity'] * (int)$carts[$i]['price_sale']);
  	}
  	$sqlAddress = "SELECT `devvn_tinhthanhpho`.`name` as `city`, `devvn_quanhuyen`.`name` as `district`, `devvn_xaphuongthitran`.`name` as `aware` FROM `devvn_tinhthanhpho`, `devvn_quanhuyen`, `devvn_xaphuongthitran` WHERE `devvn_tinhthanhpho`.`matp` = '".$user["address_code"]["city"]."' AND `devvn_quanhuyen`.`maqh` = '".$user["address_code"]["district"]."' AND `devvn_xaphuongthitran`.`xaid` = '".$user["address_code"]["aware"]."'";
  	
  	$dataAddress = executeSingleResult($sqlAddress);
  	$fullAddress = $user["address"] . "," . $dataAddress["aware"] . "," . $dataAddress["district"] . "," . $dataAddress["city"];
  	 	 
      
  	  //INSERT INTO `oder` (`id`, `user_id`, `transport_fee`, `discount_code`, `note`, `name`, `phone_number`, `address_detail`, `total`, `active`, `created_at`, `updated_at`) VALUES (NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL);
  	  $sql = "INSERT INTO `oder` (`user_id`, `transport_fee`, `discount_code`, `note`, `name`, `phone_number`, `address_detail`, `total`, `active`, `created_at`, `updated_at`) VALUES ('".$idUser."', '1', '1', '".$user['note']."', '".$user['name']."', '".$user['phone']."', '".$fullAddress."', '".$total."', '6', '".date("y-m-d h:m:s")."', '".date("y-m-d h:m:s")."')";
  	   $oderId = insertAndGetLastId($sql);
  	  
  	   /*
  	  [
  	      {
  	       "id":"11",
  	       "name":"Iphone 8 plus",
  	       "thumb":"a61b4f14f408de0119802613363618b9.jpg",
  	       "price":"8900000",
  	       "price_sale":"7800000",
  	       "quantity":"4"
  	      }
  	  ] 
  	   */
  	   //INSERT INTO `oder_detail` (`id`, `oder_id`, `color_id`, `total`, `quantity`, `created_at`, `updated_at`) VALUES (NULL, '1', '1', '1', '1', NULL, NULL);
  	   	for($i = 0; $i < count($carts); $i ++){
  		        $sqlOder = "INSERT INTO `oder_detail` ( `oder_id`, `color_id`, `total`, `quantity`, `created_at`, `updated_at`) VALUES ('".$oderId."', '".$carts[$i]['id']."', '".$carts[$i]['price_sale']."', '".$carts[$i]['quantity']."', '".date("y-m-d h:m:s")."', '".date("y-m-d h:m:s")."')";
  		        execute($sqlOder);
  	    }
  	    sendEmail($user['email'],$total, $carts, $user, $fullAddress);
  	   echo json_encode([
  	   	   "status" => 'success',
           'address' => $fullAddress,
           'name' => $user['name'],
           'email' => $user['email']
  	   	 ]);
  }
  
  if(!empty($_POST)){
  	 if(isset($_POST['carts'])){
  	 	  $carts = $_POST['carts'];
        
  	 }
  	 if(isset($_POST['detail_user'])){
  	 	 $detailUser = $_POST['detail_user'];
  	 	  
  	 }

  	 if(is_null($userSession)){
  	  	addOder($carts, $detailUser);
    
     }else {
      $new = [
        'email' => $userSession['email'],
        'name' => $userSession['name'],
        'phone' => $detailUser['phone'],
        'note'  => $detailUser['note'],
        'address_code' => $detailUser['address_code'],
        'address'  => $detailUser['address'],
      ];
  
      addOder($carts, $new);
     }

  }
?>