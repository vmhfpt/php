<?php

require_once('./DbHelp/handle.php');
require_once('./DbHelp/function.php');
//$sql = "SELECT `product`.`id` FROM `product`";

$sql = "SELECT `business-platform`.`slug` as 'business_name', `category`.`id` as 'category_id', `product`.`name`, `product`.`thumb`, `product`.`price`, `product`.`price_sale`, `product`.`slug` FROM `business-platform` JOIN `category` JOIN `product` WHERE `business-platform`.`id` = `category`.`business_platform_id` AND `category`.`id` = `product`.`category_id`";
$data = executeResult($sql);



$sqlSale = "SELECT `product`.`name`, `product`.`thumb`, `product`.`price`, `product`.`price_sale`, `product`.`slug` FROM `product` LIMIT 15 OFFSET 0";
$dataSale = executeResult($sqlSale);

$dataTablet = getData("may-tinh-bang-table", $data);
$dataPhone = getData("dien-thoai-di-dong", $data);
$dataLapTop = getData("laptop", $data);
$dataAccessory = getData("phu-kien", $data);
$dataWatch = getData("dong-ho", $data);

//var_dump($dataAccessory);

//var_dump($data); die();
?>
<!DOCTYPE html>
<?php
require_once('./post/header.php');
?>
    <nav class="app-nav container-fluid">
      <div class="container">
        <div class="app-header__flex">
          <div class="app-header__flex-item">
            <ul>
          
            	   <li>
                <img
                  class="icon-desktop"
                  src="https://didongthongminh.vn/images/menus/icon-dien-thoai.svg"
                  alt=""
                />
                <img
                  class="icon-mobile"
                  src="https://didongthongminh.vn/images/menus/dien_thoai.webp"
                  alt=""
                />
              <a href="./category.php?bu=dien-thoai-di-dong">    Điện thoại </a> <i class="fa fa-angle-right" aria-hidden="true"></i>

                <div class="app-header__flex-item-nav-child">
                  <div class="app-header__flex-item-nav-child-list">
                    <div class="app-header__flex-item-nav-child-item">
                      <ul class="">
                        <li class="app-header__flex-item-nav-child-list-active">
                          Chọn theo hãng
                        </li>
                        <li><a href="">SamSung </a></li>
                        <li><a href="">iphone </a></li>
                        <li><a href="">Xiami </a></li>
                        <li><a href="">Oppo </a></li>
                        <li><a href="">Vivo </a></li>
                      </ul>
                    </div>
                    <div class="app-header__flex-item-nav-child-item">
                      <ul class="">
                        <li class="app-header__flex-item-nav-child-list-active">
                          Chọn theo mức giá
                        </li>
                        <li><a href="">SamSung </a></li>
                        <li><a href="">iphone </a></li>
                        <li><a href="">Xiami </a></li>
                        <li><a href="">Oppo </a></li>
                        <li><a href="">Vivo </a></li>
                      </ul>
                    </div>
                    <div class="app-header__flex-item-nav-child-item">
                      <ul class="">
                        <li class="app-header__flex-item-nav-child-list-active">
                          Chọn theo hãng
                        </li>
                        <li><a href="">SamSung </a></li>
                        <li><a href="">iphone </a></li>
                        <li><a href="">Xiami </a></li>
                        <li><a href="">Oppo </a></li>
                        <li><a href="">Vivo </a></li>
                      </ul>
                    </div>
                    <div class="app-header__flex-item-nav-child-item">
                      <ul class="">
                        <li class="app-header__flex-item-nav-child-list-active">
                          Chọn theo hãng
                        </li>
                        <li><a href="">SamSung </a></li>
                        <li><a href="">iphone </a></li>
                        <li><a href="">Xiami </a></li>
                        <li><a href="">Oppo </a></li>
                        <li><a href="">Vivo </a></li>
                      </ul>
                    </div>
                    <div class="app-header__flex-item-nav-child-item">
                      <ul class="">
                        <li class="app-header__flex-item-nav-child-list-active">
                          Chọn theo hãng
                        </li>
                        <li><a href="">SamSung </a></li>
                        <li><a href="">iphone </a></li>
                        <li><a href="">Xiami </a></li>
                        <li><a href="">Oppo </a></li>
                        <li><a href="">Vivo </a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
        
              <li>
                <img
                  class="icon-mobile"
                  src="https://didongthongminh.vn/images/menus/untitled-3-1.webp"
                  alt=""
                />
                <img
                  class="icon-desktop"
                  src="https://didongthongminh.vn/images/menus/icon-tablet.svg"
                  alt=""
                />
                Máy tính bảng
                <i class="fa fa-angle-right" aria-hidden="true"></i>

                <div class="app-header__flex-item-nav-child">
                  <div class="app-header__flex-item-nav-child-list">
                    <div class="app-header__flex-item-nav-child-item">
                      <ul class="">
                        <li class="app-header__flex-item-nav-child-list-active">
                          Chọn theo hãng
                        </li>
                        <li><a href="">SamSung </a></li>
                        <li><a href="">iphone </a></li>
                        <li><a href="">Xiami </a></li>
                        <li><a href="">Oppo </a></li>
                        <li><a href="">Vivo </a></li>
                      </ul>
                    </div>
                    <div class="app-header__flex-item-nav-child-item">
                      <ul class="">
                        <li class="app-header__flex-item-nav-child-list-active">
                          Chọn theo mức giá
                        </li>
                        <li><a href="">SamSung </a></li>
                        <li><a href="">iphone </a></li>
                        <li><a href="">Xiami </a></li>
                        <li><a href="">Oppo </a></li>
                        <li><a href="">Vivo </a></li>
                      </ul>
                    </div>
                    <div class="app-header__flex-item-nav-child-item"></div>
                    <div class="app-header__flex-item-nav-child-item"></div>
                    <div class="app-header__flex-item-nav-child-item"></div>
                  </div>
                </div>
              </li>
            <a href="./category.php?bu=laptop">
            	  <li>
                <img
                  class="icon-mobile"
                  src="https://didongthongminh.vn/images/menus/untitled-2-1.webp"
                  alt=""
                />
                <img
                  class="icon-desktop"
                  src="https://didongthongminh.vn/images/menus/icon-laptop.svg"
                  alt=""
                />
                Laptop <i class="fa fa-angle-right" aria-hidden="true"></i>
              </li>
            </a>
              <li>
                <img
                  class="icon-mobile"
                  src="https://didongthongminh.vn/images/menus/4-658125.webp"
                  alt=""
                />
                <img
                  class="icon-desktop"
                  src="https://didongthongminh.vn/images/menus/icon-amthanh.svg"
                  alt=""
                />
                Âm thanh <i class="fa fa-angle-right" aria-hidden="true"></i>
              </li>
             <a href="./category.php?bu=phu-kien">
             	   <li>
                <img
                  class="icon-mobile"
                  src="https://didongthongminh.vn/images/menus/adapter-sac-macbook-pro-15-inch-17-inch-magsafe-85-mc556-thumb-650x650-1.webp"
                  alt=""
                />
                <img
                  class="icon-desktop"
                  src="https://didongthongminh.vn/images/menus/icon-phu-kien.svg"
                  alt=""
                />
                Phụ kiện <i class="fa fa-angle-right" aria-hidden="true"></i>
              </li>
             </a>
              <li>
                <img
                  class="icon-mobile"
                  src="https://didongthongminh.vn/images/menus/3-844473.webp"
                  alt=""
                />
                <img
                  class="icon-desktop"
                  src="https://didongthongminh.vn/images/menus/icon-hang-cu.svg"
                  alt=""
                />
                Hàng cũ <i class="fa fa-angle-right" aria-hidden="true"></i>
              </li>
             <a href="./category.php?bu=may-tinh-bang-table">
             	  <li>
                <img
                  class="icon-mobile"
                  src="https://didongthongminh.vn/images/menus/untitled-3-1.webp"
                  alt=""
                />
                <img
                  class="icon-desktop"
                  src="https://didongthongminh.vn/images/menus/icon-dien-thoai.svg"
                  alt=""
                />
                iPad Cũ <i class="fa fa-angle-right" aria-hidden="true"></i>
              </li>
             </a>
            <a href="./category.php?bu=dong-ho">
            	  <li>
                <img
                  class="icon-mobile"
                  src="https://didongthongminh.vn/images/menus/dh-1.webp"
                  alt=""
                />
                <img
                  class="icon-desktop"
                  src="https://didongthongminh.vn/images/menus/icon-smartwatch.svg"
                  alt=""
                />
                Smartwatch <i class="fa fa-angle-right" aria-hidden="true"></i>
              </li>
            </a>
              <li>
                <img
                  class="icon-mobile"
                  src="https://didongthongminh.vn/images/menus/9-1.webp"
                  alt=""
                />
                <img
                  class="icon-desktop"
                  src="https://didongthongminh.vn/images/menus/icon-thu-cu4.svg"
                  alt=""
                />
                Thu cũ <i class="fa fa-angle-right" aria-hidden="true"></i>
              </li>
              <li>
                <img
                  class="icon-mobile"
                  src="https://didongthongminh.vn/images/menus/a1-1.webp"
                  alt=""
                />
                <img
                  class="icon-desktop"
                  src="https://didongthongminh.vn/images/menus/icon-tin-tuc.svg"
                  alt=""
                />
                Tin công nghệ
                <i class="fa fa-angle-right" aria-hidden="true"></i>
              </li>
            </ul>
          </div>
          <div class="app-header__flex-item">




            <div class="app-header__flex-item-carousel">
              <div class="item"><img
                src="https://didongthongminh.vn/images/slideshow/2022/12/27/slideshow_large/banner-website_1672105716.webp"
                alt=""
              /></div>
              <div class="item"><img
                src="https://didongthongminh.vn/images/slideshow/2022/12/28/slideshow_large/year-celebration_1672202283.webp"
                alt=""
              /></div>
              <div class="item"><img
                src="https://didongthongminh.vn/images/slideshow/2022/12/30/slideshow_large/galaxy-s22-ultra-3_1672364553.webp"
                alt=""
              /></div>
              <div class="item"><img
                src="https://didongthongminh.vn/images/slideshow/2022/12/22/slideshow_large/last-chance-offer_1671682927.webp"
                alt=""
              /></div>
              <div class="item"><img
                src="https://didongthongminh.vn/images/slideshow/2022/12/24/slideshow_large/galaxy-note-20-ultra_1671848648.webp"
                alt=""
              /></div>

              <div class="button">
                <div class="prev">
                    <div class="button-click" data-slide="prev">
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="next">
                    <div class="button-click" data-slide="next">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>

            <div class="nav">
                <ul class="show-nav">
                </ul>
            </div>


            </div>






            <div class="app-header__flex-item-carousel-detail">
              <ul>
                <li id="carousel-detail__nav-1" data-show="1" class="carousel-detail__nav-item ">
                  <a href="#">Tết đong đầy đủ đầy quà tặng</a>
                </li>
                <li id="carousel-detail__nav-2" class="carousel-detail__nav-item" data-show="2"><a href="#">Redmi 10 sale siêu khủng</a></li>
                <li id="carousel-detail__nav-3" class="carousel-detail__nav-item" data-show="3"><a href="#">Galaxy A53 5G Giá sập sàn</a></li>
                <li id="carousel-detail__nav-4" class="carousel-detail__nav-item" data-show="4"><a href="#">Xả kho Tecno không lo về giá</a></li>
                <li id="carousel-detail__nav-5" class="carousel-detail__nav-item" data-show="5"><a href="#">Note 20 Ultra Giá cực ngon</a></li>
              </ul>
            </div>
          </div>
          <div class="app-header__flex-item">
            <div class="app-header__flex-item-image">
              <img
                src="https://didongthongminh.vn/images/video/resized/2-5_1669864243.webp"
                alt=""
              />
              <div class="app-header__flex-item-image-icon-play">
                <img
                  src="https://didongthongminh.vn/templates/default/images/play.svg"
                  alt=""
                />
              </div>
            </div>
            <div class="app-header__flex-item-image">
              <img
                src="https://didongthongminh.vn/images/video/resized/12345_1671757676.jpeg"
                alt=""
              />
              <div class="app-header__flex-item-image-icon-play">
                <img
                  src="https://didongthongminh.vn/templates/default/images/play.svg"
                  alt=""
                />
              </div>
            </div>
            <div class="app-header__flex-item-image">
              <img
                src="https://didongthongminh.vn/images/video/resized/612-thumbail_1670306908.webp"
                alt=""
              />
              <div class="app-header__flex-item-image-icon-play">
                <img
                  src="https://didongthongminh.vn/templates/default/images/play.svg"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    
    
    <main>
      <section class="app-top-sale__day container-fluid">
        <div class="container">
          <div class="app-top-sale__day-gb">
            <div class="app-top-sale__day-title">
              <h3>Săn sale giá sốc năm mới</h3>
              <div class="app-top-sale__day-title-img">
                <img
                  src="https://cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/newyear2023/Background/bg-tuan-le-top-right2.png"
                  alt=""
                />
              </div>
              <div class="app-top-sale__day-title-img-right">
                <img
                  src="https://cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/newyear2023/Background/bg-tuan-le-top-right2.png"
                  alt=""
                />
              </div>
            </div>

            <div
              class="app-top-sale__day-carousel app-information__content owl-carousel owl-theme owl-loaded"
            >
              <div class="owl-stage-outer">
                <div class="owl-stage">
                	
                	<?php
                	   for($i = 0; $i < count($dataSale); $i ++){
                	?>
                	 <div class="app-top-sale__day-carousel-item owl-item">
                    <div class="app-top-sale__day-carousel-item-img">
                      <img
                        src="./public/img/<?=$dataSale[$i]['thumb']?>"
                        alt=""
                      />
                      <div class="app-top-sale__day-carousel-item-img-position">
                        <div
                          class="app-top-sale__day-carousel-item-img-position-center"
                        >
                          <div
                            class="app-top-sale__day-carousel-item-img-position-center-top"
                          >
                            <div
                              class="app-top-sale__day-carousel-item-img-position-center-icon"
                            >
                              <i class="fa fa-bolt" aria-hidden="true"></i>
                            </div>
                            <div class="discount-val">-21%</div>
                          </div>
                          <div
                            class="app-top-sale__day-carousel-item-img-position-center-price"
                          >
                            <?=$dataSale[$i]['price'] - $dataSale[$i]['price_sale']?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="app-top-sale__day-carousel-item-detail">
                      <div class="app-top-sale__day-carousel-item-detail-title">
                        <a href="./detail.php?slug=<?=$dataSale[$i]['slug']?>"><?=$dataSale[$i]['name']?></a>
                      </div>
                      <div class="app-top-sale__day-carousel-item-detail-price">
                        <b><?=$dataSale[$i]['price_sale']?>đ</b> <span><?=$dataSale[$i]['price']?>đ</span>
                      </div>
                      <div class="app-top-sale__day-carousel-item-time-sale">
                        <i class="fa fa-clock-o" aria-hidden="true"></i
                        ><span>
                          Còn: <span class="highlight-time">2</span> ngày
                          <span class="highlight-time">18</span> giờ</span
                        >
                      </div>
                      <div
                        class="app-top-sale__day-carousel-item-total-product"
                      >
                        <div
                          style="width: 60%"
                          class="app-top-sale__day-carousel-item-total-product-tag"
                        ></div>
                        <div
                          class="app-top-sale__day-carousel-item-quantity-product"
                        >
                          Đã bán 82/100
                        </div>
                      </div>
                      <div
                        class="app-top-sale__day-carousel-item-detail-bottom"
                      >
                        <div
                          class="app-top-sale__day-carousel-item-detail-bottom-vote"
                        >
                          <ul>
                            <li>
                              <i
                                class="vote-active fa fa-star"
                                aria-hidden="true"
                              ></i>
                            </li>
                            <li>
                              <i
                                class="vote-active fa fa-star"
                                aria-hidden="true"
                              ></i>
                            </li>
                            <li>
                              <i
                                class="vote-active fa fa-star"
                                aria-hidden="true"
                              ></i>
                            </li>
                            <li>
                              <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li>
                              <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                          </ul>
                        </div>
                        <div
                          class="app-top-sale__day-carousel-item-detail-like-product"
                        >
                          <i class="fa fa-heart-o" aria-hidden="true"></i> Yêu
                          thích
                        </div>
                      </div>
                    </div>
                  </div>
                	<?php
                	   }
                	?>
                 
                
                  
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="app-banner-center container-fluid">
        <div class="container">
          <div class="">
            <img
              src="https://didongthongminh.vn/images/banners/resized/banner-dai_1667447003.webp"
              alt=""
            />
          </div>
          <div class="row">
            <div class="col-sm-6">
              <img
                src="https://didongthongminh.vn/images/banners/resized/samsung-a04s_1671616567.webp"
                alt=""
              />
            </div>
            <div class="col-sm-6">
              <img
                src="https://didongthongminh.vn/images/banners/resized/macbook-cu_1671590677.webp"
                alt=""
              />
            </div>
          </div>
        </div>
      </section>

      <section class="app-phone-suggest container-fluid">
        <div class="container">
          <div class="app-phone-suggest__title">
            <div class="app-phone-suggest__title-left">
              <div class="app-phone-suggest__title-left-icon">
                <img
                  src="https://didongthongminh.vn/images/products/cat/original/dienthoai_1637510220.svg"
                  alt=""
                />
              </div>
              <div class="app-phone-suggest__title-left-text">
                Điện thoại đáng mua nhất
              </div>
            </div>
            <div class="app-phone-suggest__title-right">
              <ul>
                <li><button>iphone</button></li>
                <li><button>iphone cũ</button></li>
                <li><button>Samsung</button></li>
                <li><button>Xiaomi</button></li>
                <li><button>REDMI</button></li>
                <li><button>Tecno</button></li>
                <li><button>POCO</button></li>
                <li>
                  <button class="app-phone-suggest__title-right-active">
                    Xem tất cả 1196 Điện thoại
                  </button>
                </li>
              </ul>
            </div>
          </div>

          <div class="app-phone-suggest__product">
            
  	      <?php
  	         for($i = 0; $i < count($dataPhone); $i ++){
  	      ?>
  	      <div class="app-phone-suggest__product-item">
              <div class="app-top-sale__day-carousel-item-img">
                <img
                  src="./public/img/<?=$dataPhone[$i]['thumb']?>"
                  alt=""
                />
                <div class="app-top-sale__day-carousel-item-img-position">
                  <div
                    class="app-top-sale__day-carousel-item-img-position-center"
                  >
                    <div
                      class="app-top-sale__day-carousel-item-img-position-center-top"
                    >
                      <div
                        class="app-top-sale__day-carousel-item-img-position-center-icon"
                      >
                        <i class="fa fa-bolt" aria-hidden="true"></i>
                      </div>
                      <div class="discount-val">-21%</div>
                    </div>
                    <div
                      class="app-top-sale__day-carousel-item-img-position-center-price"
                    >
                      <?=$dataPhone[$i]['price'] - $dataPhone[$i]['price_sale']?>đ
                    </div>
                  </div>
                </div>
              </div>

              <div class="app-top-sale__day-carousel-item-detail">
                <div class="app-top-sale__day-carousel-item-detail-title">
                  <a href="./detail.php?slug=<?=$dataPhone[$i]['slug']?>"><?=$dataPhone[$i]['name']?></a>
                </div>
                <div class="app-top-sale__day-carousel-item-detail-price">
                  <b><?=$dataPhone[$i]['price']?>đ</b> <span><?=$dataPhone[$i]['price_sale']?>đ</span>
                </div>
                <div class="app-top-sale__day-carousel-item-time-sale">
                  <i class="fa fa-clock-o" aria-hidden="true"></i
                  ><span>
                    Còn: <span class="highlight-time">2</span> ngày
                    <span class="highlight-time">18</span> giờ</span
                  >
                </div>
                <div class="app-top-sale__day-carousel-item-total-product">
                  <div
                    style="width: 60%"
                    class="app-top-sale__day-carousel-item-total-product-tag"
                  ></div>
                  <div class="app-top-sale__day-carousel-item-quantity-product">
                    Đã bán 82/100
                  </div>
                </div>
                <div class="app-top-sale__day-carousel-item-detail-bottom">
                  <div
                    class="app-top-sale__day-carousel-item-detail-bottom-vote"
                  >
                    <ul>
                      <li>
                        <i
                          class="vote-active fa fa-star"
                          aria-hidden="true"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="vote-active fa fa-star"
                          aria-hidden="true"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="vote-active fa fa-star"
                          aria-hidden="true"
                        ></i>
                      </li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    </ul>
                  </div>
                  <div
                    class="app-top-sale__day-carousel-item-detail-like-product"
                  >
                    <i class="fa fa-heart-o" aria-hidden="true"></i> Yêu thích
                  </div>
                </div>
              </div>
            </div>
  	       <?php
  	         }
  	      ?>
           
          </div>
        </div>
      </section>

      <section class="app-phone-suggest container-fluid">
        <div class="container">
          <div class="app-phone-suggest__title">
            <div class="app-phone-suggest__title-left">
              <div class="app-phone-suggest__title-left-icon">
                <img
                  src="https://didongthongminh.vn/images/products/cat/original/dienthoai_1637510220.svg"
                  alt=""
                />
              </div>
              <div class="app-phone-suggest__title-left-text">
                Phụ kiện đáng mua nhất
              </div>
            </div>
            <div class="app-phone-suggest__title-right">
              <ul>
                <li><button>Tai Nghe Giá Rẻ</button></li>
                <li><button>Tai nghe</button></li>
                <li><button>Tai nghe Samsung</button></li>
                <li><button>Phụ kiện Apple</button></li>

                <li>
                  <button class="app-phone-suggest__title-right-active">
                    Xem tất cả 401 phụ kiện
                  </button>
                </li>
              </ul>
            </div>
          </div>
          <div class="app-phone-suggest__product-flex">
            <div class="app-top-sale__day-carousel app-information__content-second owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                    	
                    	<?php
                    	//$dataAccessory
                    	for($i = 0; $i < count($dataAccessory);$i ++){
                    	?>
                    	 <div class="app-top-sale__day-carousel-item owl-item">
                <div class="app-top-sale__day-carousel-item-img-top-sale">
                  -40% 
                </div>
                <div class="app-top-sale__day-carousel-item-img">
                  <img
                    src="./public/img/<?=$dataAccessory[$i]["thumb"]?>"
                    alt=""
                  />
                </div>

                <div class="app-top-sale__day-carousel-item-detail">
                  <div class="app-top-sale__day-carousel-item-detail-title">
                    <a href="./detail.php?slug=<?=$dataAccessory[$i]['slug']?>"><?=$dataAccessory[$i]["name"]?></a>
                  </div>
                  <div class="app-top-sale__day-carousel-item-detail-price">
                    <b><?=$dataAccessory[$i]['price']?>đ</b> <span><?=$dataAccessory[$i]['price_sale']?>đ</span>
                  </div>

                  <div class="sale-product">
                    <span>Giảm 100.000đ khi mua kèm iPhone 14</span>
                  </div>
                  <div class="app-top-sale__day-carousel-item-detail-bottom">
                    <div
                      class="app-top-sale__day-carousel-item-detail-bottom-vote"
                    >
                      <ul>
                        <li>
                          <i
                            class="vote-active fa fa-star"
                            aria-hidden="true"
                          ></i>
                        </li>
                        <li>
                          <i
                            class="vote-active fa fa-star"
                            aria-hidden="true"
                          ></i>
                        </li>
                        <li>
                          <i
                            class="vote-active fa fa-star"
                            aria-hidden="true"
                          ></i>
                        </li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      </ul>
                    </div>
                    <div
                      class="app-top-sale__day-carousel-item-detail-like-product"
                    >
                      <i class="fa fa-heart-o" aria-hidden="true"></i> Yêu thích
                    </div>
                  </div>
                </div>
              </div>
                    	<?php
                    	}
                    	?>
             
             
            </div>
        </div>


            </div>
          </div>
        </div>
      </section>

      <section class="app-phone-suggest container-fluid">
        <div class="container">
          <div class="app-phone-suggest__title">
            <div class="app-phone-suggest__title-left">
              <div class="app-phone-suggest__title-left-icon">
                <img
                  src="https://didongthongminh.vn/images/products/cat/original/dienthoai_1637510220.svg"
                  alt=""
                />
              </div>
              <div class="app-phone-suggest__title-left-text">
                Máy tính đáng mua nhất
              </div>
            </div>
            <div class="app-phone-suggest__title-right">
              <ul>
                <li><button>Máy tính Apple</button></li>
                <li><button>Macbook cũ 99%</button></li>
                <li><button>Gaming</button></li>

                <li>
                  <button class="app-phone-suggest__title-right-active">
                    Xem tất cả 1200 máy tính
                  </button>
                </li>
              </ul>
            </div>
          </div>
          <div class="app-phone-suggest__product-flex">
            <div class="app-top-sale__day-carousel app-information__content-third owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
								<?php
                    	//$dataAccessory
                    	for($i = 0; $i < count($dataLapTop);$i ++){
                    	?>
              <div class="app-top-sale__day-carousel-item owl-item">
                <div class="app-top-sale__day-carousel-item-img-top-sale">
                  -40%
                </div>
                <div class="app-top-sale__day-carousel-item-img">
                  <img
                    src="./public/img/<?=$dataLapTop[$i]["thumb"]?>"
                    alt=""
                  />
                </div>

                <div class="app-top-sale__day-carousel-item-detail">
                  <div class="app-top-sale__day-carousel-item-detail-title">
                    <a href="./detail.php?slug=<?=$dataLapTop[$i]['slug']?>"><?=$dataLapTop[$i]["name"]?></a>
                  </div>
                  <div class="app-top-sale__day-carousel-item-detail-price">
                    <b><?=$dataLapTop[$i]["price_sale"]?>đ</b> <span><?=$dataLapTop[$i]["price"]?>đ</span>
                  </div>

                  <div class="sale-product">
                    <span>Giảm 100.000đ khi mua kèm iPhone 14</span>
                  </div>
                  <div class="app-top-sale__day-carousel-item-detail-bottom">
                    <div
                      class="app-top-sale__day-carousel-item-detail-bottom-vote"
                    >
                      <ul>
                        <li>
                          <i
                            class="vote-active fa fa-star"
                            aria-hidden="true"
                          ></i>
                        </li>
                        <li>
                          <i
                            class="vote-active fa fa-star"
                            aria-hidden="true"
                          ></i>
                        </li>
                        <li>
                          <i
                            class="vote-active fa fa-star"
                            aria-hidden="true"
                          ></i>
                        </li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      </ul>
                    </div>
                    <div
                      class="app-top-sale__day-carousel-item-detail-like-product"
                    >
                      <i class="fa fa-heart-o" aria-hidden="true"></i> Yêu thích
                    </div>
                  </div>
                </div>
              </div>
           	<?php
                    	}
                    	?>
            </div>
        </div>


            </div>
          </div>
        </div>
      </section>

      <section class="app-phone-suggest container-fluid">
        <div class="container">
          <div class="app-phone-suggest__title">
            <div class="app-phone-suggest__title-left">
              <div class="app-phone-suggest__title-left-icon">
                <img
                  src="https://didongthongminh.vn/images/products/cat/original/dienthoai_1637510220.svg"
                  alt=""
                />
              </div>
              <div class="app-phone-suggest__title-left-text">
                Top Tab đáng mua nhất
              </div>
            </div>
            <div class="app-phone-suggest__title-right">
              <ul>
                <li><button>iPad cũ</button></li>
                <li><button>Apple iPad</button></li>
                <li><button>Samsung Tab</button></li>
                <li><button>Máy tính bảng khác</button></li>

                <li>
                  <button class="app-phone-suggest__title-right-active">
                    Xem tất cả 148 máy tính bảng
                  </button>
                </li>
              </ul>
            </div>
          </div>
          <div class="app-phone-suggest__product-flex">
            <div class="app-top-sale__day-carousel app-information__content-four owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">

             
             	<?php
                    	//$dataAccessory
                    	for($i = 0; $i < count($dataTablet);$i ++){
                    	?>
                    	 <div class="app-top-sale__day-carousel-item owl-item">
                <div class="app-top-sale__day-carousel-item-img-top-sale">
                  -40%
                </div>
                <div class="app-top-sale__day-carousel-item-img">
                  <img
                    src="./public/img/<?=$dataTablet[$i]["thumb"]?>"
                    alt=""
                  />
                </div>

                <div class="app-top-sale__day-carousel-item-detail">
                  <div class="app-top-sale__day-carousel-item-detail-title">
                    <a href="./detail.php?slug=<?=$dataTablet[$i]['slug']?>"><?=$dataTablet[$i]["name"]?></a>
                  </div>
                  <div class="app-top-sale__day-carousel-item-detail-price">
                    <b><?=$dataTablet[$i]["price_sale"]?>đ</b> <span><?=$dataTablet[$i]["price"]?>đ</span>
                  </div>

                  <div class="sale-product">
                    <span>Giảm 100.000đ khi mua kèm iPhone 14</span>
                  </div>
                  <div class="app-top-sale__day-carousel-item-detail-bottom">
                    <div
                      class="app-top-sale__day-carousel-item-detail-bottom-vote"
                    >
                      <ul>
                        <li>
                          <i
                            class="vote-active fa fa-star"
                            aria-hidden="true"
                          ></i>
                        </li>
                        <li>
                          <i
                            class="vote-active fa fa-star"
                            aria-hidden="true"
                          ></i>
                        </li>
                        <li>
                          <i
                            class="vote-active fa fa-star"
                            aria-hidden="true"
                          ></i>
                        </li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      </ul>
                    </div>
                    <div
                      class="app-top-sale__day-carousel-item-detail-like-product"
                    >
                      <i class="fa fa-heart-o" aria-hidden="true"></i> Yêu thích
                    </div>
                  </div>
                </div>
              </div>
                    	  	<?php
                    	}
                    	?>
                  

            </div>
        </div>

            </div>
          </div>
        </div>
      </section>

      <section class="app-phone-suggest container-fluid">
        <div class="container">
          <div class="app-phone-suggest__title">
            <div class="app-phone-suggest__title-left">
              <div class="app-phone-suggest__title-left-icon">
                <img
                  src="https://didongthongminh.vn/images/products/cat/original/dienthoai_1637510220.svg"
                  alt=""
                />
              </div>
              <div class="app-phone-suggest__title-left-text">
                Đồng hồ thông minh Hot
              </div>
            </div>
            <div class="app-phone-suggest__title-right">
              <ul>
                <li><button>iPad cũ</button></li>
                <li><button>Apple iPad</button></li>
                <li><button>Samsung Tab</button></li>

                <li>
                  <button class="app-phone-suggest__title-right-active">
                    Xem tất cả 148 máy tính bảng
                  </button>
                </li>
              </ul>
            </div>
          </div>
          <div class="app-phone-suggest__product-flex">
            <div class="app-top-sale__day-carousel app-information__content-five owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">

               	<?php
                   
                    	for($i = 0; $i < count($dataWatch);$i ++){
                    	?>
                    	 <div class="app-top-sale__day-carousel-item owl-item">
                <div class="app-top-sale__day-carousel-item-img-top-sale">
                  -40%
                </div>
                <div class="app-top-sale__day-carousel-item-img">
                  <img
                    src="./public/img/<?=$dataWatch[$i]["thumb"]?>"
                    alt=""
                  />
                </div>

                <div class="app-top-sale__day-carousel-item-detail">
                  <div class="app-top-sale__day-carousel-item-detail-title">
                    <a href="./detail.php?slug=<?=$dataWatch[$i]['slug']?>"><?=$dataWatch[$i]["name"]?></a>
                  </div>
                  <div class="app-top-sale__day-carousel-item-detail-price">
                    <b><?=$dataWatch[$i]["price_sale"]?>đ</b> <span><?=$dataWatch[$i]["price"]?>đ</span>
                  </div>

                  <div class="sale-product">
                    <span>Giảm 100.000đ khi mua kèm iPhone 14</span>
                  </div>
                  <div class="app-top-sale__day-carousel-item-detail-bottom">
                    <div
                      class="app-top-sale__day-carousel-item-detail-bottom-vote"
                    >
                      <ul>
                        <li>
                          <i
                            class="vote-active fa fa-star"
                            aria-hidden="true"
                          ></i>
                        </li>
                        <li>
                          <i
                            class="vote-active fa fa-star"
                            aria-hidden="true"
                          ></i>
                        </li>
                        <li>
                          <i
                            class="vote-active fa fa-star"
                            aria-hidden="true"
                          ></i>
                        </li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      </ul>
                    </div>
                    <div
                      class="app-top-sale__day-carousel-item-detail-like-product"
                    >
                      <i class="fa fa-heart-o" aria-hidden="true"></i> Yêu thích
                    </div>
                  </div>
                </div>
              </div>
                    	  	<?php
                    	}
                    	?>
            </div>
        </div>


            </div>
          </div>
        </div>
      </section>

      <section class="app-banner-bottom container-fluid">
        <div class="container">
          <div class="app-phone-suggest__title">
            <div class="app-phone-suggest__title-left">
              <div class="app-phone-suggest__title-left-icon">
                <img
                  src="https://didongthongminh.vn/images/products/cat/original/dienthoai_1637510220.svg"
                  alt=""
                />
              </div>
              <div class="app-phone-suggest__title-left-text">
                24h công nghệ
              </div>
            </div>
            <div class="app-phone-suggest__title-right">
              <ul>
                <li>
                  <button class="app-phone-suggest__title-right-active">
                    Xem tất cả 1196 Tin
                  </button>
                </li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <img
                src="https://didongthongminh.vn/images/banners/resized/123666_1669950047.webp"
                alt=""
              />
            </div>
            <div class="col-sm-4">
              <img
                src="https://didongthongminh.vn/images/banners/resized/123jpg_1672121541.webp"
                alt=""
              />
            </div>
            <div class="col-sm-4">
              <img
                src="https://didongthongminh.vn/images/banners/resized/1234-1_1672121619.webp"
                alt=""
              />
            </div>
          </div>
        </div>
      </section>

      <section class="app-new-suggest container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-7 col-sm-12">
              <div class="app-new-suggest__top">
                <div class="app-new-suggest__top-image">
                  <img
                    src="https://didongthongminh.vn/images/news/2022/12/large/anh-bia_1672047783.webp"
                    alt=""
                  />
                </div>
                <div class="app-new-suggest__top-detail">
                  <a href=""
                    ><span class="app-new-suggest__top-detail-title"
                      >Tết Sum Vầy - Đủ Đầy Quà Tặng - Tri Ân Khách Hàng Tới 500
                      triệu</span
                    ></a
                  >

                  <a href=""
                    ><span class="app-new-suggest__top-detail-description"
                      >Dịp mua sắm tết 2023, Di Động Thông Minh tổ chức khuyến
                      mãi tết linh đình. Đây là dịp tri ân khách hàng, với mong
                      muốn đem sản ...
                    </span></a
                  >
                </div>
                <div class="app-new-suggest__top-time">
                  <span
                    ><i class="fa fa-calendar" aria-hidden="true"></i>
                    20/11/2022</span
                  >

                  <span><i class="fa fa-eye" aria-hidden="true"></i> 520</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12">
              <div class="app-new-suggest__center">
                <div class="app-new-suggest__center-item">
                  <div class="app-new-suggest__center-item-img">
                    <img
                      src="https://didongthongminh.vn/upload_images/images/2022/12/03/ro-ri-them-thong-so-ky-thuat-cua-xiaomi-13-series.jpg"
                      alt=""
                    />
                  </div>
                  <div class="app-new-suggest__center-item-detail">
                    <div class="app-new-suggest__center-item-detail-title">
                      <a href=""
                        ><span
                          >iPhone 12 Pro max có mấy màu? Màu nào đẹp nhất?
                        </span></a
                      >
                    </div>

                    <div class="app-new-suggest__center-item-detail-time">
                      <span
                        ><i class="fa fa-calendar" aria-hidden="true"></i>
                        20/11/2022</span
                      >
                      <span
                        ><i class="fa fa-eye" aria-hidden="true"></i> 520</span
                      >
                    </div>
                  </div>
                </div>
                <div class="app-new-suggest__center-item">
                  <div class="app-new-suggest__center-item-img">
                    <img
                      src="https://didongthongminh.vn/upload_images/images/2022/12/22/gia%CC%81ng_sinh_ro%CC%A3%CC%82n_ra%CC%80ng.png"
                      alt=""
                    />
                  </div>
                  <div class="app-new-suggest__center-item-detail">
                    <div class="app-new-suggest__center-item-detail-title">
                      <a href=""
                        ><span
                          >iPhone 12 Pro max có mấy màu? Màu nào đẹp nhất? Chọn
                          màu theo phong thuỷ</span
                        ></a
                      >
                    </div>

                    <div class="app-new-suggest__center-item-detail-time">
                      <span
                        ><i class="fa fa-calendar" aria-hidden="true"></i>
                        20/11/2022</span
                      >
                      <span
                        ><i class="fa fa-eye" aria-hidden="true"></i> 520</span
                      >
                    </div>
                  </div>
                </div>
                <div class="app-new-suggest__center-item">
                  <div class="app-new-suggest__center-item-img">
                    <img
                      src="https://didongthongminh.vn/upload_images/images/2022/11/28/dem-nguoc-ngay-xiaomi-13-series-ra-mat.jpg"
                      alt=""
                    />
                  </div>
                  <div class="app-new-suggest__center-item-detail">
                    <div class="app-new-suggest__center-item-detail-title">
                      <a href=""
                        ><span
                          >iPhone 12 Pro max có mấy màu? Màu nào đẹp nhất? Chọn
                          màu theo phong thuỷ</span
                        ></a
                      >
                    </div>

                    <div class="app-new-suggest__center-item-detail-time">
                      <span
                        ><i class="fa fa-calendar" aria-hidden="true"></i>
                        20/11/2022</span
                      >
                      <span
                        ><i class="fa fa-eye" aria-hidden="true"></i> 520</span
                      >
                    </div>
                  </div>
                </div>
                <div class="app-new-suggest__center-item">
                  <div class="app-new-suggest__center-item-img">
                    <img
                      src="https://didongthongminh.vn/upload_images/images/2022/12/03/Ba%CC%89n_sao_cu%CC%89a_CT_2010_(1280_%C3%97_720_px).png"
                      alt=""
                    />
                  </div>
                  <div class="app-new-suggest__center-item-detail">
                    <div class="app-new-suggest__center-item-detail-title">
                      <a href=""
                        ><span
                          >iPhone 12 Pro max có mấy màu? Màu nào đẹp nhất? Chọn
                          màu theo phong thuỷ</span
                        ></a
                      >
                    </div>

                    <div class="app-new-suggest__center-item-detail-time">
                      <span
                        ><i class="fa fa-calendar" aria-hidden="true"></i>
                        20/11/2022</span
                      >
                      <span
                        ><i class="fa fa-eye" aria-hidden="true"></i> 520</span
                      >
                    </div>
                  </div>
                </div>
                <div class="app-new-suggest__center-item">
                  <div class="app-new-suggest__center-item-img">
                    <img
                      src="https://didongthongminh.vn/upload_images/images/2022/12/28/iphone-12-pro-max-co-may-mau.jpg"
                      alt=""
                    />
                  </div>
                  <div class="app-new-suggest__center-item-detail">
                    <div class="app-new-suggest__center-item-detail-title">
                      <a href=""
                        ><span
                          >iPhone 12 Pro max có mấy màu? Màu nào đẹp nhất? Chọn
                          màu theo phong thuỷ</span
                        ></a
                      >
                    </div>

                    <div class="app-new-suggest__center-item-detail-time">
                      <span
                        ><i class="fa fa-calendar" aria-hidden="true"></i>
                        20/11/2022</span
                      >
                      <span
                        ><i class="fa fa-eye" aria-hidden="true"></i> 520</span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="app-new-suggest__top-image">
                <img
                  src="https://didongthongminh.vn/upload_images/images/he-thong-cua-hang-didongthongminh.webp"
                  alt=""
                />
              </div>
              <div class="app-new-suggest__top-detail">
                <a href=""
                  ><span class="app-new-suggest__top-detail-introduce-title"
                    ><b class="">Di Động Thông Minh</b> - Điện Thoại Chính Hãng
                    Giá Rẻ</span
                  ></a
                >
                <a href=""
                  ><span
                    class="app-new-suggest__top-detail-introduce-description"
                    >Cụm từ quen thuộc "Di Động Thông Minh" - hoá ra lại ẩn chứa
                    đạo lý vận hành của vạn vật. Hãy đọc ngay để hiểu hành trình
                    phát triển thương hiệu của chúng tôi.
                  </span></a
                >
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="app-name-product__suggest container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-md-2 col-sm-6 col-6">
              <div class="app-name-product__suggest-item">
                <ul>
                  <li class=""><a href="" class=""> Poco x4 Pro</a></li>
                  <li class=""><a href="" class=""> Iphone cũ giá rẻ</a></li>
                  <li class=""><a href="" class=""> Iphone 11 cũ</a></li>
                  <li class="">
                    <a href="" class=""> Iphone 12 Pro Max Cũ 256GB</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6">
              <div class="app-name-product__suggest-item">
                <ul>
                  <li class=""><a href="" class=""> Poco x4 Pro</a></li>
                  <li class=""><a href="" class=""> Iphone cũ giá rẻ</a></li>
                  <li class=""><a href="" class=""> Iphone 11 cũ</a></li>
                  <li class="">
                    <a href="" class=""> Iphone 12 Pro Max Cũ 256GB</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6">
              <div class="app-name-product__suggest-item">
                <ul>
                  <li class=""><a href="" class=""> Poco x4 Pro</a></li>
                  <li class=""><a href="" class=""> Iphone cũ giá rẻ</a></li>
                  <li class=""><a href="" class=""> Iphone 11 cũ</a></li>
                  <li class="">
                    <a href="" class=""> Iphone 12 Pro Max Cũ 256GB</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-smd-6 col-sm-6 col-6">
              <div class="app-name-product__suggest-item">
                <ul>
                  <li class=""><a href="" class=""> Poco x4 Pro</a></li>
                  <li class=""><a href="" class=""> Iphone cũ giá rẻ</a></li>
                  <li class=""><a href="" class=""> Iphone 11 cũ</a></li>
                  <li class="">
                    <a href="" class=""> Iphone 12 Pro Max Cũ 256GB</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="app-fixed-mobile">
        <div class="app-fixed-mobile__detail">
           <div class="app-fixed-mobile__detail-left">
                 <ul class="">
                   <li class="">
                      <img src="https://didongthongminh.vn/images/menus/dien_thoai.webp" alt="" class="">
                      <span class="">Điện thoại</span>
                   </li>

                   <li class="">
                    <img src="https://didongthongminh.vn/images/menus/untitled-3-1.webp" alt="" class="">
                    <span class="">iPad</span>
                 </li>

                 <li class="">
                  <img src="https://didongthongminh.vn/images/menus/untitled-2-1.webp" alt="" class="">
                  <span class="">Laptop</span>
               </li>
               <li class="">
                <img src="https://didongthongminh.vn/images/menus/4-658125.webp" alt="" class="">
                <span class="">Âm thanh</span>
             </li>
             <li class="">
              <img src="https://didongthongminh.vn/images/menus/adapter-sac-macbook-pro-15-inch-17-inch-magsafe-85-mc556-thumb-650x650-1.webp" alt="" class="">
              <span class="">Phụ kiện</span>
           </li>
           <li class="">
            <img src="https://didongthongminh.vn/images/menus/3-844473.webp" alt="" class="">
            <span class="">Hàng cũ</span>
         </li>
         <li class="">
          <img src="https://didongthongminh.vn/images/menus/ipad-cu-gia_re.webp" alt="" class="">
          <span class="">iPad cũ</span>
       </li>
       <li class="">
        <img src="https://didongthongminh.vn/images/menus/dh-1.webp" alt="" class="">
        <span class="">Smartwatch</span>
     </li>
     <li class="">
      <img src="https://didongthongminh.vn/images/menus/9-1.webp" alt="" class="">
      <span class="">Thu cũ</span>
   </li>
   <li class="">
    <img src="https://didongthongminh.vn/images/menus/a1-1.webp" alt="" class="">
    <span class="">Tin công nhệ</span>
 </li>
                 </ul>
           </div>
           <div class="app-fixed-mobile__detail-right ">
               <div class="app-fixed-mobile__detail-right-title">
                  <img src="https://didongthongminh.vn/images/menus/icon-dien-thoai.svg" alt="" class="">
                  <span class="">Điện thoại</span>
               </div>

               <div class="app-fixed-mobile__detail-right-content">
                <div class="app-fixed-mobile__detail-right-content-item">
                    <div class="app-fixed-mobile__detail-right-content-item-title"><span class="">
                      Chọn theo hãng
                    </span></div>

                    <div class="">
                        <ul class="">
                          <li class="">iPhone</li>
                          <li class="">Redmi</li>
                          <li class="">Samsung</li>
                          <li class="">Xiaomi</li>
                          <li class="">Tecno</li>
                          <li class="">Realme</li>
                          <li class="">Poco</li>
                          <li class="">Oppo</li>
                          <li class="">Hãng khác</li>

                        </ul>
                    </div>
                </div>

                <div class="app-fixed-mobile__detail-right-content-item">
                  <div class="app-fixed-mobile__detail-right-content-item-title"><span class="">
                    Chọn theo mức giá
                  </span></div>

                  <div class="">
                      <ul class="">
                        <li class="">Dưới 2 triệu</li>
                        <li class="">Từ 2-3 triệu</li>
                        <li class="">Từ 4-7 triệu</li>
                        <li class="">Từ 7-13 triệu</li>
                        <li class="">Từ 13-20 triệu</li>
                        <li class="">Trên 20 triều</li>
                       

                      </ul>
                  </div>
              </div>

              <div class="app-fixed-mobile__detail-right-content-item">
                <div class="app-fixed-mobile__detail-right-content-item-title"><span class="">
                  Điện Thoại Xả Hàng
                </span></div>

                <div class="">
                    <ul class="">
                      <li class="">iPad Mini 6 Rẻ Không Tưởng</li>
                      <li class="">iPhone 14 Giá Sập Sàn</li>
                      <li class="">iPhone 11 Pro Mã Cũ Siêu Rẻ</li>        

                    </ul>
                </div>
            </div>


            <div class="app-fixed-mobile__detail-right-content-item">
              <div class="app-fixed-mobile__detail-right-content-item-title"><span class="">
                Mục đích dùng
              </span></div>

              <div class="">
                  <ul class="">
                    <li class="">Chơi game / Cấu hình cao</li>
                    <li class="">Pin khủng trên 5000 mAh</li>
                    <li class="">Sạc pin nhanh</li>   
                    <li class="">Chụp ảnh đẹp</li> 
                    <li class="">Làm máy hotline</li> 
                    <li class="">Phù hợp học sinh</li>      

                  </ul>
              </div>
          </div>

          <div class="app-fixed-mobile__detail-right-content-item">
            <div class="app-fixed-mobile__detail-right-content-item-title"><span class="">
              Tình trạng
            </span></div>

            <div class="">
                <ul class="">
                  <li class="">Hàng mới</li>
                  <li class="">Cũ đẹp như mới</li>
                  <li class="">Mơí Kích Hot Sale</li>   
                  <li class="">Xước nhỏ</li> 
                  <li class="">Hàng trưng bày</li> 
                  <li class="">Đổi bảo hành</li>      
                  <li class="">Refurbished</li> 
                  <li class="">Tin đồn</li> 
                </ul>
            </div>
        </div>

               </div>
           </div>
        </div>


         <div class="app-fixed-mobile__tab-bottom">
             <ul class="">
               <a href="" class="">
                <li class="">
                   <img src="https://didongthongminh.vn/modules/products/assets/images/home.svg" alt="" class="">
                   <span class="">Trang chủ</span>
               </li>
              </a>

              <a href="javascript:;" class="show-tab-category">
                <li class="">
                   <img src="https://didongthongminh.vn/modules/products/assets/images/danhmuc.svg" alt="" class="">
                   <span class="">Danh mục</span>
               </li>
              </a>

              <a href="" class="">
                <li class="">
                   <img src="https://didongthongminh.vn/modules/products/assets/images/didongthongminh.svg" alt="" class="">
                   <span class="">Liên hệ</span>
               </li>
              </a>

              <a href="" class="">
                <li class="">
                   <img src="https://didongthongminh.vn/modules/products/assets/images/shop.svg" alt="" class="">
                   <span class="">Cửa hàng</span>
               </li>
              </a>


              <a href="" class="">
                <li class="">
                   <img src="https://didongthongminh.vn/modules/products/assets/images/news_icon.svg" alt="" class="">
                   <span class="">Tin tức</span>
               </li>
              </a>

             

             </ul>
         </div>
         
      </section>

    </main>
  <?php
require_once('./post/footer.php');
?>