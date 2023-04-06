<?php


if(!session_id()){
  session_start();
  
}
$userHeader  = false;
if(isset($_SESSION["user"])){
  $userHeader = $_SESSION["user"];
}

$key = '';
if(!empty($_GET)){
    if(isset($_GET['key'])){
        $key = $_GET['key'] ;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  <link href="../public/Post/css/category.css" type='text/css' rel='stylesheet' />
    <link href="../public/Post/css/grid.css" type='text/css' rel='stylesheet' />
    <link href="../public/Post/css/index.css" type='text/css' rel='stylesheet' />
    <link href="../public/Post/css/new.css" type='text/css' rel='stylesheet' />
    <link href="../public/Post/css/cart.css" type='text/css' rel='stylesheet' />
    <link href="../public/Post/css/form.css" type='text/css' rel='stylesheet' />
    <link href="../public/Post/responsive/new.css" type='text/css' rel='stylesheet' />
    <link href="../public/Post/css/detail.css" type='text/css' rel='stylesheet' />
    <link href="../public/Post/responsive/index.css" type='text/css' rel='stylesheet' />
    <link href="../public/Post/responsive/form.css" type='text/css' rel='stylesheet' />
    <link href="../public/Post/responsive/detail.css" type='text/css' rel='stylesheet' />
    <title>Home</title>
    <link rel="stylesheet" href="../public/Post/carousel/dist/assets/owl.carousel.min.css" />
    <link
      rel="stylesheet"
      href="../public/Post/carousel/dist/assets/owl.theme.default.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body>
    <style class="">
      .app-header__top-item-icon button {
    background: none;
    border:none;
}
.app-header__top-item a {
  color : white;
}
    </style>
    <header class="app-header container-fluid">
      <div class="container">
        <div class="app-header__top">
          <div class="app-header__top-item">
            <a href="index.php" class="">
            <img
              class="logo-desktop"
              src="https://didongthongminh.vn/images/config/lg_1648528949.svg"
              alt=""
            />
            </a>
            <img
              class="logo-mobile"
              src="https://didongthongminh.vn/images/config/logo_1648529142.svg"
              alt=""
            />
          </div>
          <div class="app-header__top-item">
            <div class="app-header__top-item-icons">
              <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div class="app-header__top-item-title">Danh mục</div>
          </div>
          <div class="app-header__top-item">
            <div class="app-header__top-item-title-address">
              Xem giá, <span> tồn kho</span> tại :
            </div>

            <div class="app-header__top-item-title-zone">
              Đà Nẵng<i class="fa fa-caret-down" aria-hidden="true"></i>
            </div>
          </div>
          <form action="./search.php" method="GET" class="app-header__top-item">
            <div class="app-header__top-item-input">
              <input value="<?=$key?>" name="key" placeholder="Bạn tìm gì ..." />
            </div>
            <div class="app-header__top-item-icon">
             <button class=""> <i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
          </form>
          <div class="app-header__top-item">
            <div class="">
              <img
                src="https://didongthongminh.vn/templates/default/images/call.svg"
                alt=""
              />
            </div>
            <div class="app-header__top-item-detail-ship">
              <span>Gọi mua hàng </span>
              <b> 0855100001</b>
            </div>
          </div>
          <div class="app-header__top-item">
            <div class="">
              <img
                src="https://didongthongminh.vn/templates/default/images/store-w.svg"
                alt=""
              />
            </div>
            <div class="app-header__top-item-detail-ship">
              <span>Cửa hàng gần bạn </span>
            </div>
          </div>
          <div class="app-header__top-item">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
           <a href="./cart.php"> <div class="app-header__top-item-icon-cart-quantity"></div> </a>
          </div>
          <div class="app-header__top-item">
          <a href="<?=$userHeader  ? 'dashboard.php' : 'login.php'?>" class="">  <i class="fa fa-user-o" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </header>