<?php
require_once('../DbHelp/handle.php');
$sql = "SELECT  `products`.* , `category`.`name` as `category` FROM `products` JOIN `category` WHERE `products`.`category_id` = `category`.`id`";
$dataItem = executeResult($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../public/index.css">
    <link rel="stylesheet" type="text/css" href="../public/responsive.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Lab6</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="over-layer"></div>

    

    <div class="show-detail-eye-popup-success">
        <div class="show-detail-eye-success-add">
            <div class="show-detail__add-cart ">
                <span class="icon-app-close-popup-add close-popup-cart">×</span>
                <div class="row over-flow-cart">
                    <div class="col">
                        <div class="close-popup-cart__image">
                            <img class="close-popup-cart__image-main show-image" src="https://product.hstatic.net/200000472671/product/food_21_1_9b5dac63918c40ce9e8929db2e67d63f_master.jpg" alt="" />
                            <div class="close-popup-cart__image-main-promotion">
                                <span class="show-promotion">-8%</span>
                                <span>OFF</span>
                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <div class="close-popup-cart__content">
                            <div class="close-popup-cart__content-block">
                                <h4 class="show-name"> Yuu Li White Jade Noodle</h4>
                                <p class="p-border"><span>Mã sản phẩm:</span> <b>F00018</b></p>
                                <p><span>Tình trạng:</span> <b>Còn hàng</b></p>
                            </div>
                            <div class="close-popup-cart__content-price">
                                <div class="close-popup-cart__content-title">
                                    <span>Giá:</span>
                                </div>
                                <div class="close-popup-cart__content-detail">
                                    <b class="show-price-sale">60,000₫</b>
                                    <span class="close-popup-cart__content-detail-sale show-price"> 75,000₫</span>
                                    <span class="close-popup-cart__content-detail-promotion">-14%</span>
                                </div>
                                <div class="clear-fix"></div>
                            </div>
                            <div class="close-popup-cart__content-weight">
                                <div class="close-popup-cart__content-title">
                                    <span>Màu:</span>
                                </div>
                                <div class="close-popup-cart__content-detail">
                                    <button class="close-popup-cart__content-detail-action"> Trắng</button>
                                    <button> Đen</button>
                                </div>
                                <div class="clear-fix"></div>
                            </div>
                            <div class="close-popup-cart__content-quantity">
                                <div class="close-popup-cart__content-title">
                                    <span>Số lượng:</span>
                                </div>
                                <div class="close-popup-cart__content-detail-quantity">
                                    <button> -</button>
                                    <input type="number" value="1" />
                                    <button> +</button>
                                </div>
                                <div class="clear-fix"></div>
                            </div>
                            <div class="close-popup-cart__content-add-cart">
                                <button data-id="132" data-name="Yuu Li White Jade Noodle" data-img="https://product.hstatic.net/200000472671/product/food_21_1_9b5dac63918c40ce9e8929db2e67d63f_master.jpg" data-price="60,000₫">THÊM VÀO GIỎ </button>
                            </div>
                            <div class="close-popup-cart__content-share">
                                <span>Chia sẻ:</span>
                                <ul class="close-popup-cart__content-share-item">
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                    <li><a href=""> <i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>


                                </ul>
                            </div>
                            <div class="close-popup-cart__content-detail">
                                <a href="">Xem chi tiết sản phẩm <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>



        </div>
    </div>

    <main>
        <section class="app-suggest container-fluid">
            <div class="container">
                <div class="app-suggest__title">
                    <div class="row">
                        <div class="col">
                            <div class="app-suggest__title-left">
                                <h2> Trang sản phẩm</h2>
                            </div>
                        </div>

                        <div class="clear-fix"></div>
                    </div>
                </div>
                <div class="clear-fix"></div>
                <div class="app-suggest__product">
                    <div class="row">

                        <div class="">
                            <div style="width : 100%">

    <!-- ${Math.ceil(100 - ((value.price_sale * 100) / value.price ))}-->
                                <?php
                                foreach ($dataItem as $key => $value) {
                                ?>
                                    <div class="app-suggest__product-item">
                                        <div class="app-suggest__product-item-image">
                                            <img class="get-img" src="../img/<?=$value['thumb']?>" alt="" />
                                            <div class="app-suggest__product-item-sale">-<?=ceil(100 - (($value['price_sale'] * 100) / $value['price']))?>%</div>
                                            <div class="app-suggest__product-item-gift">
                                                <img src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="" />
                                            </div>

                                            
                                        </div>
                                        <div class="app-suggest__product-item-price">
                                            <span class="data-name"><?=$value['name']?></span>
                                            <span class="data-name">Danh mục : <?=$value['category']?></span> <br/>
                                            <b class="data-price" ><?=$value['price']?>₫</b> <span class="data-price-sale"> <?=$value['price_sale']?>₫</span>
                                        </div>
                                        <div class="app-suggest__product-item-add">
                                            <span> THÊM VÀO <p class="cart-word">GIỎ</p> </span>
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>


                            </div>
                        </div>
                    </div>
                    <div class="clear-fix"></div>
                 
                </div>
            </div>
        </section>
    </main>



    <script src="../public/index.js"></script>
</body>

</html>