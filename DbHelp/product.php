<?php
require_once('./handle.php');
$page = 1;
$limit = 5;
$total = 0;
$show = 5;
$offSet = 0;
$breadCrumb;
  	if(isset($_GET['page'])){
  	 	  $page = (int)$_GET['page'];
  	 	  $limit  = (int)$_GET["page"]  * $show;
  	 }
  	 
  	 
  	 if(isset($_GET['ca'])){
  	 	 	$ca = $_GET['ca'];
  	 	  $sqlCategory = "SELECT `category`.`name` as `name_category`,`business-platform`.`name` as 'name_business' FROM `category` JOIN `business-platform` WHERE `business-platform`.`id` = `category`.`business_platform_id`  AND `category`.`slug` = '".$ca."' ";
		  	$nameCategory = executeSingleResult($sqlCategory);
		  	
		  	$breadCrumb = [
		  		'category' => $nameCategory['name_category'],
		  		'business' => $nameCategory['name_business'],
		  	];
		  	
		  	
  	 
  	 	  $sqlTotal = "SELECT COUNT(`product`.`id`) as total FROM `product` JOIN `category` WHERE `category`.`id` = `product`.`category_id` AND `category`.`slug` = '".$ca."'";
  	 	  
  	 	 /* $total =  executeSingleResult($sqlTotal);
        $total = (int)$total["total"];*/

  	 	  $sql = "SELECT  `product`.`name`, `product`.`thumb`, `product`.`price`, `product`.`price_sale`, `product`.`slug` FROM  `product` JOIN `category` WHERE `category`.`id` = `product`.`category_id` AND `category`.`slug` = '".$ca."' LIMIT  ".$limit." OFFSET 0 ";
  	    /*	  $dataItem = executeResult($sql);*/
  	 	 /* $paginate = [
  	 	  	"total" => $total,
  	 	  	"page_current" => $page,
  	 	  	"total_view" => count($dataItem),
  	 	  	"next_page" => (ceil($total/$show) > $page) ? $page + 1 : false,
  	 	  	"prev_page" => ($page - 1 <= 0) ? false : $page - 1
  	 	  ];
  	 	  
  	 	  
  	 	  echo json_encode([
  	 	  	"data" => $dataItem,
  	 	  	"paginate" =>  $paginate
  	 	  ]);*/
  	 }else {
  	 	
  	 	  if(isset($_GET['bu'])){
  	 	  	 $business = $_GET['bu'];
  	 	  	  $sql = "SELECT  `product`.`name`, `product`.`thumb`, `product`.`price`, `product`.`price_sale`, `product`.`slug` FROM `business-platform` JOIN `category` JOIN `product` WHERE `business-platform`.`id` = `category`.`business_platform_id` AND `category`.`id` = `product`.`category_id` AND `business-platform`.`slug` = '".$business."' LIMIT ".$limit." OFFSET 0 ";
  	 	  	  
  	 	  	   $sqlTotal = "SELECT COUNT(`product`.`id`) as total FROM `business-platform` JOIN `category` JOIN `product` WHERE `business-platform`.`id` = `category`.`business_platform_id` AND `category`.`id` = `product`.`category_id` AND `business-platform`.`slug` = '".$business."'";
  	 	  	   
  	 	  	   $breadCrumb = [
		  		    'category' => 'Tất cả',
		  	     	'business' => false,
		      	];
  	 	  }else {
  	 	  	 	$breadCrumb = [
		  		    'category' => 'Tất cả',
		  	     	'business' => false,
		  	];
		  	
		  	
  	 	 $sql = "SELECT  `product`.`name`, `product`.`thumb`, `product`.`price`, `product`.`price_sale`, `product`.`slug` FROM  `product` LIMIT ".$limit." OFFSET 0 ";
  	 	 $sqlTotal = "SELECT COUNT(`product`.`id`) as total FROM `product`";
  	 	  }
  	 	  
  	 	
  	}
  	
  	
      $total =  executeSingleResult($sqlTotal);
      $total = (int)$total["total"];
      $dataItem = executeResult($sql);
  	  $paginate = [
  	 	  	"total" => $total,
  	 	  	"page_current" => $page,
  	 	  	"total_view" => count($dataItem),
  	 	  	"next_page" => (ceil($total/$show) > $page) ? $page + 1 : false,
  	 	  	"prev_page" => ($page - 1 <= 0) ? false : $page - 1
  	 	];
  	 	  
  	 	  
  	 	echo json_encode([
  	 	  	"data" => $dataItem,
  	 	  	"paginate" =>  $paginate,
  	 	  	"bread_crumb" => $breadCrumb
  	 	]);
?>