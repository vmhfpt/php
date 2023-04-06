  <?php
include('./post/header.php');
require_once('./DbHelp/handle.php');
if(!empty($_GET)){
	if(isset($_GET["slug"])){
		  $slug = $_GET["slug"];
		  $sql = "SELECT * FROM `product` WHERE `slug` = '".$slug."'";
		  $data = executeSingleResult($sql);


      $sqlCmt = "SELECT * FROM `comment` WHERE `product_id` = '".$data['id']."' ORDER BY `comment`.`id` DESC";
      $dataComment = executeResult($sqlCmt);
		 // var_dump($data); die();
		 $sqlSuggest = "SELECT  `product`.`name`, `product`.`thumb`, `product`.`price`, `product`.`price_sale`, `product`.`slug` FROM `product` WHERE `category_id` = '".$data["category_id"]."' LIMIT 10 OFFSET 0";
		 $dataSuggest = executeResult($sqlSuggest);
		 
	}else {
		die();
	}
}else {
	die();
}

?>

    <main>
      <section class="app-bread-crumb container-fluid">
        <div class="container">
          <ul class="">
            <li class=""><a href="./index.php" class="">Trang chủ</a> /</li>
            <li class=""><a href="./category/?ca=dien-thoai" class="">Điện thoại</a> /</li>
              <li class=""><a href="" class=""><?=$data["name"]?></a></li>
          </ul>
        </div>
      </section>

      <section class="app-detail-title container-fluid">
        <div class="container">
          <div class="app-detail-title__content">
            <div class="app-detail-title__content-item">
              <h2 data-id="<?=$data['id']?>" class="data-product-id"><?=$data['name']?></h2>
            </div>
            <div class="app-detail-title__content-item">
              <span class="">Cam kết Zin 100%, Đẹp Như Mới</span>
            </div>
            <div class="app-detail-title__content-item">
              <div class="app-detail-title__content-item-rank">
                <ul class="">
                  <li class="">
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </li>
                  <li class="">
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </li>
                  <li class="">
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </li>
                  <li class="">
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </li>
                  <li class="">
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </li>
                </ul>
              </div>
              <div class="app-detail-title__content-item-vote">
                <span class="">25 đánh giá</span>
              </div>
              <div class="app-detail-title__content-item-sale">Trả góp 0%</div>
            </div>
          </div>
        </div>
      </section>

      <section class="app-detail-top container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12  app-click-show__library">
              <div class="app-detail-top__content">
                <div class="app-detail-top__content-carousel-top">
                  <div
                    class="app-detail-top__content-carousel-top-detail owl-carousel owl-theme owl-loaded"
                  >
                    <div class="owl-stage-outer">
                      <div class="owl-stage">
                        <div class="owl-item">
                          <a href="#slide=true"
                            ><img
                              src="./public/img/<?=$data['thumb']?>"
                              alt=""
                              class=""
                          /></a>
                        </div>
                        <div class="owl-item">
                          <a href="#slide=true"
                            ><img
                              src="./public/img/<?=$data['thumb']?>"
                              alt=""
                              class=""
                          /></a>
                        </div>
                        <div class="owl-item">
                          <a href="#slide=true"
                            ><img
                              src="https://didongthongminh.vn/images/products/anhphu/large/iphone-11-pro-max-cu-mat-lung-3-3b5e2b75-7b24-48ff-bd24-61b4d11b6566.webp?v=1635413647000"
                              alt=""
                              class=""
                          /></a>
                        </div>
                        <div class="owl-item">
                          <a href="#slide=true"
                            ><img
                              src="https://didongthongminh.vn/images/products/anhphu/large/iphone-11-pro-max-cu-camera-1.webp?v=1635413675000"
                              alt=""
                              class=""
                          /></a>
                        </div>
                        <div class="owl-item">
                          <a href="#slide=true"
                            ><img
                              src="https://didongthongminh.vn/images/products/anhphu/large/iphone-11-pro-max-cu-canh-duoi-37a31bb3-9bb1-468d-ba67-82417951e867.webp?v=1635413647000"
                              alt=""
                              class=""
                          /></a>
                        </div>
                        <div class="owl-item">
                          <a href="#slide=true"
                            ><img
                              src="https://didongthongminh.vn/images/products/anhphu/large/iphone-11-pro-max-cu-mat-lung-3-ca67e48a-8d9c-46d2-ba18-7e0b5d40ddc4.webp?v=1635413675000"
                              alt=""
                              class=""
                          /></a>
                        </div>
                        <div class="owl-item">
                          <a href="#slide=true"
                            ><img
                              src="https://didongthongminh.vn/images/products/2022/11/09/resized/green_1668007267.webp"
                              alt=""
                              class=""
                          /></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="app-detail-top__content-carousel-bottom">
                  <div
                    class="app-detail-top__content-carousel-bottom-detail owl-carousel owl-theme owl-loaded"
                  >
                    <div class="owl-stage-outer">
                      <div class="owl-stage">
                        <div
                          data-slide="1"
                          class="carousel-active-border click-show-slide owl-item"
                        >
                          <img
                            src="https://didongthongminh.vn/images/products/2022/12/23/large/gold.webp"
                            alt=""
                            class=""
                          />
                        </div>
                        <div data-slide="2" class="click-show-slide owl-item">
                          <img
                            src="https://didongthongminh.vn/images/products/anhphu/large/36957-apple-iphone-11-pro-256gb-1-5.webp?v=1635413638000"
                            alt=""
                            class=""
                          />
                        </div>
                        <div data-slide="3" class="click-show-slide owl-item">
                          <img
                            src="https://didongthongminh.vn/images/products/anhphu/large/iphone-11-pro-max-cu-mat-lung-3-3b5e2b75-7b24-48ff-bd24-61b4d11b6566.webp?v=1635413647000"
                            alt=""
                            class=""
                          />
                        </div>
                        <div data-slide="4" class="click-show-slide owl-item">
                          <img
                            src="https://didongthongminh.vn/images/products/anhphu/large/iphone-11-pro-max-cu-camera-1.webp?v=1635413675000"
                            alt=""
                            class=""
                          />
                        </div>
                        <div data-slide="5" class="click-show-slide owl-item">
                          <img
                            src="https://didongthongminh.vn/images/products/anhphu/large/iphone-11-pro-max-cu-canh-duoi-37a31bb3-9bb1-468d-ba67-82417951e867.webp?v=1635413647000"
                            alt=""
                            class=""
                          />
                        </div>
                        <div data-slide="6" class="click-show-slide owl-item">
                          <img
                            src="https://didongthongminh.vn/images/products/anhphu/large/iphone-11-pro-max-cu-mat-lung-3-ca67e48a-8d9c-46d2-ba18-7e0b5d40ddc4.webp?v=1635413675000"
                            alt=""
                            class=""
                          />
                        </div>
                        <div data-slide="7" class="click-show-slide owl-item">
                          <img
                              src="https://didongthongminh.vn/images/products/2022/11/09/resized/green_1668007267.webp"
                              alt=""
                              class=""
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
              <div class="app-detail-top__center">

                <div class="app-detail-top__center-cost">
                     <div class="">
                        <span class="">Giá tại:</span>
                        <select name="" id="" class="">
                            <option value="" class="">Hà Nội</option>
                            <option value="" class="">TP Hồ Chí Minh</option>
                            <option value="" class="">Đà Nẵng</option>
                        </select>
                     </div>
                     <div class="">
                        <b class="app-detail-top__center-cost-sale">11.190.000đ</b>
                        <span class="app-detail-top__center-cost-promotion">18.590.000đ</span>
                     </div>
                     
                </div>

                <div class="app-detail-top__center-filter">
                    <div class="app-detail-top__center-filter-attribute">
                         <div class="app-detail-top__center-filter-attribute-item">
                            <b class="">64GB</b>
                            <span class="">11.190.000đ</span>
                        </div>
                        <div class="app-detail-top__center-filter-attribute-item">
                            <b class="">256GB</b>
                            <span class="">12.690.000đ</span>
                        </div>
                        <div class="app-detail-top__center-filter-attribute-item">
                            <b class="">512GB</b>
                            <span class="">19.390.000đ</span>
                        </div>
                    </div>
                    <div class="app-detail-top__center-filter-color">
                         <div class="app-detail-top__center-filter-color-item item_same-active">
                            <div class="">
                                <img src="https://didongthongminh.vn/images/products/2022/11/09/resized/green_1668007267.webp" alt="" class="">
                            </div>
                            <div class="app-detail-top__center-filter-color-item-detail">
                                <span class="">Xám</span>
                                <span class="">11.190.000đ</span>
                            </div>
                         </div>
                         <div class="app-detail-top__center-filter-color-item">
                            <div class="">
                                <img src="https://didongthongminh.vn/images/products/2022/11/09/resized/green_1668007267.webp" alt="" class="">
                            </div>
                            <div class="app-detail-top__center-filter-color-item-detail">
                                <span class="">Xám</span>
                                <span class="">11.190.000đ</span>
                            </div>
                         </div>
                         <div class="app-detail-top__center-filter-color-item">
                            <div class="">
                                <img src="https://didongthongminh.vn/images/products/2022/11/09/resized/green_1668007267.webp" alt="" class="">
                            </div>
                            <div class="app-detail-top__center-filter-color-item-detail">
                                <span class="">Xám</span>
                                <span class="">11.190.000đ</span>
                            </div>
                         </div>
                         <div class="app-detail-top__center-filter-color-item">
                            <div class="">
                                <img src="https://didongthongminh.vn/images/products/2022/11/09/resized/green_1668007267.webp" alt="" class="">
                            </div>
                            <div class="app-detail-top__center-filter-color-item-detail">
                                <span class="">Xám</span>
                                <span class="">11.190.000đ</span>
                            </div>
                         </div>
                         
                    </div>
                </div>

                <div class="app-detail-top__center-promotion">
                    <div class="app-detail-top__center-promotion-title-tab">
                        <span class="">Khuyến mãi</span>
                    </div>
                    <div class="app-detail-top__center-promotion-detail">
                        <ul class="">
                            <li class=""><i class="fa fa-check-circle" aria-hidden="true"></i> Tặng bảo hành toàn diện 6 tháng <a href="" class="link-to-detail">chi tiết</a></li>
                            <li class=""><i class="fa fa-check-circle" aria-hidden="true"></i> Tặng que chọc sim từ thép không gỉ</li>
                            <li class=""><i class="fa fa-check-circle" aria-hidden="true"></i>  Tặng ốp lưng thời trang trị giá 150.000vnđ</li>
                        </ul>
                    </div>
                </div>

                <div class="app-detail-top__center-promotion">
                    <div class="app-detail-top__center-promotion-title-tab">
                        <span class="">Quà tặng kèm</span>
                    </div>
                    <div class="app-detail-top__center-promotion-detail">
                        <div class="app-detail-top__center-promotion-product-detail">
                            <div class="app-detail-top__center-promotion-product-detail-img">
                                <img src="https://didongthongminh.vn/images/products/anhphu/resized/sa-c-bwoo-mofit.jpg?v=1625122025000" alt="" class="">
                            </div>
                            <div class="app-detail-top__center-promotion-product-detail-title">
                                
                                    <a href="" class=""><b class="">Cáp Sạc Nhanh 1M veger VP-312T Type C to Lighting</b></a>

                                    <a href="" class=""><span class="">Giá : <b class="">150.000đ</b></span>

                                    </a>
                               
                            </div>
                        </div>
                    </div>
                </div>


              

                <div class="app-detail-top__center-promotion">
                    <div class="app-detail-top__center-promotion-title-tab">
                        <span class="">Bảo hành cơ bản</span>
                    </div>
                    <div class="app-detail-top__center-promotion-detail">
                        <ul class="">
                            <li class=""><i class="fa fa-check-circle" aria-hidden="true"></i> Bảo hành 6 tháng tại hệ thống Di Động Thông Minh<a href="" class="link-to-detail">chi tiết</a></li>
                            <li class=""><i class="fa fa-check-circle" aria-hidden="true"></i>Bảo hành toàn diện cả nguồn, màn hình, vân tay</li>
                            <li class=""><i class="fa fa-check-circle" aria-hidden="true"></i>  1 đổi 1 trong 30 ngày nếu máy có lỗi từ nhà sản xuất</li>
                        </ul>
                    </div>
                </div>

                <div class="app-detail-top__center-payload">
                    <div class="row">
                        <div class="col-sm-12">
                            <div data-sale="<?=$data["price_sale"]?>" data-price="<?=$data["price"]?>" data-thumb="<?=$data["thumb"]?>" data-id="<?=$data["id"]?>" data-name="<?=$data["name"]?>" class="add-cart app-detail-top__center-payload-btn app-detail-top__center-payload-btn-orange">
                                <span class="">mua ngay</span>
                                <span class="">Giao tận nơi hoặc nhận tại cửa hàng</span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="delete-local app-detail-top__center-payload-btn app-detail-top__center-payload-btn-green">
                            	
                            	
                                <span class="">mua trả góp 0%</span>
                                <span class="">Duyệt hồ sơ trong 5 phút</span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="app-detail-top__center-payload-btn app-detail-top__center-payload-btn-green">
                                <span class="">trả góp qua thẻ</span>
                                <span class="">Visa, Mastercard, JCB, Amex</span>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="app-detail-top__center-last">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="app-detail-top__center-last-tab">
                              <div class="app-detail-top__center-last-tab-call">
                                <span class="">Gọi đặt mua : </span>
                                <i class="fa fa-phone-square" aria-hidden="true"></i>
                                <span class="">085 5100 001 (Miễn phí 7:30 - 21:30)</span>
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                                <div class="app-detail-top__center-last-tab">
                                    <div class="app-detail-top__center-last-tab-share">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                        <span class="">Sao chép đường dẫn</span>
                                    </div>
                                </div>
                    
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="app-detail-top__center-last-tab">
                                <div class="app-detail-top__center-last-tab-share">
                                    <i class="fa fa-clipboard" aria-hidden="true"></i>
                                    <span class="">Sao chép thông tin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

              </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
              <div class="app-detail-top__content-right">
                 <div class="app-detail-top__content-right-address">
                  <span class="">Có 2 cửa hàng có sẵn sản phẩm</span>
                   <div class="app-detail-top__content-right-address-list">
                    <div class="app-detail-top__content-right-address-item">
                      <div class="app-detail-top__content-right-address-item-title">
                           <img src="https://didongthongminh.vn/modules/products/assets/images/icon_store.svg" alt="" class="" />
                           <span class="">119 Thái Thịnh Đống Đa Hà Nội</span>
                           <img src="https://didongthongminh.vn/modules/products/assets/images/icon_link.svg" alt="" class=""/>
                      </div>


                      <div class="app-detail-top__content-right-address-item-detail">
                        <div class="app-detail-top__content-right-address-item-detail-phone">
                            <div class="app-detail-top__content-right-address-item-detail-phone-item">
                               <img src="https://didongthongminh.vn/modules/products/assets/images/icon_phone.svg" alt="" class="" />
                               <span class="app-detail-top__content-right-address-item-detail-phone-text">096611995</span>
                            </div>
                            <div class="app-detail-top__content-right-address-item-detail-phone-item">
                               <img src="https://didongthongminh.vn/modules/products/assets/images/conhang.svg" alt="" class="" />
                               <span class="app-detail-top__content-right-address-item-detail-phone-item-active">Còn hàng</span>
                            </div>
                        </div>
                        <div class="app-detail-top__content-right-address-item-detail-map">
                           <div class="app-detail-top__content-right-address-item-detail-map-item">
                             <img src="https://didongthongminh.vn/modules/products/assets/images/icon_map.svg" alt="" class="" />
                             <span class="">Xem bản đồ</span>
                           </div>
                           <div class="app-detail-top__content-right-address-item-detail-map-item">
                            <img src="https://didongthongminh.vn/modules/products/assets/images/icon_save.svg" alt="" class="" />
                            <span class="app-detail-top__content-right-address-item-detail-map-text">Đặt giữ hàng</span>
                           </div>
                        </div>
                      </div>


                    </div>
                    <div class="app-detail-top__content-right-address-item">
                      <div class="app-detail-top__content-right-address-item-title">
                           <img src="https://didongthongminh.vn/modules/products/assets/images/icon_store.svg" alt="" class="" />
                           <span class="">119 Thái Thịnh Đống Đa Hà Nội</span>
                           <img src="https://didongthongminh.vn/modules/products/assets/images/icon_link.svg" alt="" class=""/>
                      </div>


                      <div class="app-detail-top__content-right-address-item-detail">
                        <div class="app-detail-top__content-right-address-item-detail-phone">
                            <div class="app-detail-top__content-right-address-item-detail-phone-item">
                               <img src="https://didongthongminh.vn/modules/products/assets/images/icon_phone.svg" alt="" class="" />
                               <span class="app-detail-top__content-right-address-item-detail-phone-text">096611995</span>
                            </div>
                            <div class="app-detail-top__content-right-address-item-detail-phone-item">
                               <img src="https://didongthongminh.vn/modules/products/assets/images/hethang.svg" alt="" class="" />
                               <span class="">Chưa về hàng</span>
                            </div>
                        </div>
                        <div class="app-detail-top__content-right-address-item-detail-map">
                           <div class="app-detail-top__content-right-address-item-detail-map-item">
                             <img src="https://didongthongminh.vn/modules/products/assets/images/icon_map.svg" alt="" class="" />
                             <span class="">Xem bản đồ</span>
                           </div>
                           <div class="app-detail-top__content-right-address-item-detail-map-item">
                            <img src="https://didongthongminh.vn/modules/products/assets/images/notification.svg" alt="" class="" />
                            <span class="app-detail-top__content-right-address-item-detail-map-text">Nhận thông báo</span>
                           </div>
                        </div>
                      </div>


                    </div>
                    <div class="app-detail-top__content-right-address-item">
                      <div class="app-detail-top__content-right-address-item-title">
                           <img src="https://didongthongminh.vn/modules/products/assets/images/icon_store.svg" alt="" class="" />
                           <span class="">119 Thái Thịnh Đống Đa Hà Nội</span>
                           <img src="https://didongthongminh.vn/modules/products/assets/images/icon_link.svg" alt="" class=""/>
                      </div>


                      <div class="app-detail-top__content-right-address-item-detail">
                        <div class="app-detail-top__content-right-address-item-detail-phone">
                            <div class="app-detail-top__content-right-address-item-detail-phone-item">
                               <img src="https://didongthongminh.vn/modules/products/assets/images/icon_phone.svg" alt="" class="" />
                               <span class="app-detail-top__content-right-address-item-detail-phone-text">096611995</span>
                            </div>
                            <div class="app-detail-top__content-right-address-item-detail-phone-item">
                               <img src="https://didongthongminh.vn/modules/products/assets/images/hethang.svg" alt="" class="" />
                               <span class="">Chưa về hàng</span>
                            </div>
                        </div>
                        <div class="app-detail-top__content-right-address-item-detail-map">
                           <div class="app-detail-top__content-right-address-item-detail-map-item">
                             <img src="https://didongthongminh.vn/modules/products/assets/images/icon_map.svg" alt="" class="" />
                             <span class="">Xem bản đồ</span>
                           </div>
                           <div class="app-detail-top__content-right-address-item-detail-map-item">
                            <img src="https://didongthongminh.vn/modules/products/assets/images/notification.svg" alt="" class="" />
                            <span class="app-detail-top__content-right-address-item-detail-map-text">Nhận thông báo</span>
                           </div>
                        </div>
                      </div>


                    </div>
                    <div class="app-detail-top__content-right-address-item">
                      <div class="app-detail-top__content-right-address-item-title">
                           <img src="https://didongthongminh.vn/modules/products/assets/images/icon_store.svg" alt="" class="" />
                           <span class="">119 Thái Thịnh Đống Đa Hà Nội</span>
                           <img src="https://didongthongminh.vn/modules/products/assets/images/icon_link.svg" alt="" class=""/>
                      </div>


                      <div class="app-detail-top__content-right-address-item-detail">
                        <div class="app-detail-top__content-right-address-item-detail-phone">
                            <div class="app-detail-top__content-right-address-item-detail-phone-item">
                               <img src="https://didongthongminh.vn/modules/products/assets/images/icon_phone.svg" alt="" class="" />
                               <span class="app-detail-top__content-right-address-item-detail-phone-text">096611995</span>
                            </div>
                            <div class="app-detail-top__content-right-address-item-detail-phone-item">
                               <img src="https://didongthongminh.vn/modules/products/assets/images/hethang.svg" alt="" class="" />
                               <span class="">Chưa về hàng</span>
                            </div>
                        </div>
                        <div class="app-detail-top__content-right-address-item-detail-map">
                           <div class="app-detail-top__content-right-address-item-detail-map-item">
                             <img src="https://didongthongminh.vn/modules/products/assets/images/icon_map.svg" alt="" class="" />
                             <span class="">Xem bản đồ</span>
                           </div>
                           <div class="app-detail-top__content-right-address-item-detail-map-item">
                            <img src="https://didongthongminh.vn/modules/products/assets/images/notification.svg" alt="" class="" />
                            <span class="app-detail-top__content-right-address-item-detail-map-text">Nhận thông báo</span>
                           </div>
                        </div>
                      </div>


                    </div>
                    <div class="app-detail-top__content-right-address-item">
                      <div class="app-detail-top__content-right-address-item-title">
                           <img src="https://didongthongminh.vn/modules/products/assets/images/icon_store.svg" alt="" class="" />
                           <span class="">119 Thái Thịnh Đống Đa Hà Nội</span>
                           <img src="https://didongthongminh.vn/modules/products/assets/images/icon_link.svg" alt="" class=""/>
                      </div>


                      <div class="app-detail-top__content-right-address-item-detail">
                        <div class="app-detail-top__content-right-address-item-detail-phone">
                            <div class="app-detail-top__content-right-address-item-detail-phone-item">
                               <img src="https://didongthongminh.vn/modules/products/assets/images/icon_phone.svg" alt="" class="" />
                               <span class="app-detail-top__content-right-address-item-detail-phone-text">096611995</span>
                            </div>
                            <div class="app-detail-top__content-right-address-item-detail-phone-item">
                               <img src="https://didongthongminh.vn/modules/products/assets/images/hethang.svg" alt="" class="" />
                               <span class="">Chưa về hàng</span>
                            </div>
                        </div>
                        <div class="app-detail-top__content-right-address-item-detail-map">
                           <div class="app-detail-top__content-right-address-item-detail-map-item">
                             <img src="https://didongthongminh.vn/modules/products/assets/images/icon_map.svg" alt="" class="" />
                             <span class="">Xem bản đồ</span>
                           </div>
                           <div class="app-detail-top__content-right-address-item-detail-map-item">
                            <img src="https://didongthongminh.vn/modules/products/assets/images/notification.svg" alt="" class="" />
                            <span class="app-detail-top__content-right-address-item-detail-map-text">Nhận thông báo</span>
                           </div>
                        </div>
                      </div>


                    </div>
                    <div class="app-detail-top__content-right-address-tab">
                       Khu vực khác
                    </div>
                    <div class="app-detail-top__content-right-address-item">
                      <div class="app-detail-top__content-right-address-item-title">
                           <img src="https://didongthongminh.vn/modules/products/assets/images/icon_store.svg" alt="" class="" />
                           <span class="">119 Thái Thịnh Đống Đa Hà Nội</span>
                           <img src="https://didongthongminh.vn/modules/products/assets/images/icon_link.svg" alt="" class=""/>
                      </div>


                      <div class="app-detail-top__content-right-address-item-detail">
                        <div class="app-detail-top__content-right-address-item-detail-phone">
                            <div class="app-detail-top__content-right-address-item-detail-phone-item">
                               <img src="https://didongthongminh.vn/modules/products/assets/images/icon_phone.svg" alt="" class="" />
                               <span class="app-detail-top__content-right-address-item-detail-phone-text">096611995</span>
                            </div>
                            <div class="app-detail-top__content-right-address-item-detail-phone-item">
                               <img src="https://didongthongminh.vn/modules/products/assets/images/hethang.svg" alt="" class="" />
                               <span class="">Chưa về hàng</span>
                            </div>
                        </div>
                        <div class="app-detail-top__content-right-address-item-detail-map">
                           <div class="app-detail-top__content-right-address-item-detail-map-item">
                             <img src="https://didongthongminh.vn/modules/products/assets/images/icon_map.svg" alt="" class="" />
                             <span class="">Xem bản đồ</span>
                           </div>
                           <div class="app-detail-top__content-right-address-item-detail-map-item">
                            <img src="https://didongthongminh.vn/modules/products/assets/images/notification.svg" alt="" class="" />
                            <span class="app-detail-top__content-right-address-item-detail-map-text">Nhận thông báo</span>
                           </div>
                        </div>
                      </div>


                    </div>
                    <div class="app-detail-top__content-right-address-item">
                      <div class="app-detail-top__content-right-address-item-title">
                           <img src="https://didongthongminh.vn/modules/products/assets/images/icon_store.svg" alt="" class="" />
                           <span class="">119 Thái Thịnh Đống Đa Hà Nội</span>
                           <img src="https://didongthongminh.vn/modules/products/assets/images/icon_link.svg" alt="" class=""/>
                      </div>


                      <div class="app-detail-top__content-right-address-item-detail">
                        <div class="app-detail-top__content-right-address-item-detail-phone">
                            <div class="app-detail-top__content-right-address-item-detail-phone-item">
                               <img src="https://didongthongminh.vn/modules/products/assets/images/icon_phone.svg" alt="" class="" />
                               <span class="app-detail-top__content-right-address-item-detail-phone-text">096611995</span>
                            </div>
                            <div class="app-detail-top__content-right-address-item-detail-phone-item">
                               <img src="https://didongthongminh.vn/modules/products/assets/images/hethang.svg" alt="" class="" />
                               <span class="">Chưa về hàng</span>
                            </div>
                        </div>
                        <div class="app-detail-top__content-right-address-item-detail-map">
                           <div class="app-detail-top__content-right-address-item-detail-map-item">
                             <img src="https://didongthongminh.vn/modules/products/assets/images/icon_map.svg" alt="" class="" />
                             <span class="">Xem bản đồ</span>
                           </div>
                           <div class="app-detail-top__content-right-address-item-detail-map-item">
                            <img src="https://didongthongminh.vn/modules/products/assets/images/notification.svg" alt="" class="" />
                            <span class="app-detail-top__content-right-address-item-detail-map-text">Nhận thông báo</span>
                           </div>
                        </div>
                      </div>


                    </div>
                    <div class="app-detail-top__content-right-address-item">
                      <div class="app-detail-top__content-right-address-item-title">
                           <img src="https://didongthongminh.vn/modules/products/assets/images/icon_store.svg" alt="" class="" />
                           <span class="">119 Thái Thịnh Đống Đa Hà Nội</span>
                           <img src="https://didongthongminh.vn/modules/products/assets/images/icon_link.svg" alt="" class=""/>
                      </div>


                      <div class="app-detail-top__content-right-address-item-detail">
                        <div class="app-detail-top__content-right-address-item-detail-phone">
                            <div class="app-detail-top__content-right-address-item-detail-phone-item">
                               <img src="https://didongthongminh.vn/modules/products/assets/images/icon_phone.svg" alt="" class="" />
                               <span class="app-detail-top__content-right-address-item-detail-phone-text">096611995</span>
                            </div>
                            <div class="app-detail-top__content-right-address-item-detail-phone-item">
                               <img src="https://didongthongminh.vn/modules/products/assets/images/hethang.svg" alt="" class="" />
                               <span class="">Chưa về hàng</span>
                            </div>
                        </div>
                        <div class="app-detail-top__content-right-address-item-detail-map">
                           <div class="app-detail-top__content-right-address-item-detail-map-item">
                             <img src="https://didongthongminh.vn/modules/products/assets/images/icon_map.svg" alt="" class="" />
                             <span class="">Xem bản đồ</span>
                           </div>
                           <div class="app-detail-top__content-right-address-item-detail-map-item">
                            <img src="https://didongthongminh.vn/modules/products/assets/images/notification.svg" alt="" class="" />
                            <span class="app-detail-top__content-right-address-item-detail-map-text">Nhận thông báo</span>
                           </div>
                        </div>
                      </div>


                    </div>
                    <div class="app-detail-top__content-right-address-item">
                      <div class="app-detail-top__content-right-address-item-title">
                           <img src="https://didongthongminh.vn/modules/products/assets/images/icon_store.svg" alt="" class="" />
                           <span class="">119 Thái Thịnh Đống Đa Hà Nội</span>
                           <img src="https://didongthongminh.vn/modules/products/assets/images/icon_link.svg" alt="" class=""/>
                      </div>


                      <div class="app-detail-top__content-right-address-item-detail">
                        <div class="app-detail-top__content-right-address-item-detail-phone">
                            <div class="app-detail-top__content-right-address-item-detail-phone-item">
                               <img src="https://didongthongminh.vn/modules/products/assets/images/icon_phone.svg" alt="" class="" />
                               <span class="app-detail-top__content-right-address-item-detail-phone-text">096611995</span>
                            </div>
                            <div class="app-detail-top__content-right-address-item-detail-phone-item">
                               <img src="https://didongthongminh.vn/modules/products/assets/images/hethang.svg" alt="" class="" />
                               <span class="">Chưa về hàng</span>
                            </div>
                        </div>
                        <div class="app-detail-top__content-right-address-item-detail-map">
                           <div class="app-detail-top__content-right-address-item-detail-map-item">
                             <img src="https://didongthongminh.vn/modules/products/assets/images/icon_map.svg" alt="" class="" />
                             <span class="">Xem bản đồ</span>
                           </div>
                           <div class="app-detail-top__content-right-address-item-detail-map-item">
                            <img src="https://didongthongminh.vn/modules/products/assets/images/notification.svg" alt="" class="" />
                            <span class="app-detail-top__content-right-address-item-detail-map-text">Nhận thông báo</span>
                           </div>
                        </div>
                      </div>


                    </div>
                   </div>
                 </div>

                 <div class="app-detail-top__content-right-center">
                    <ul class="">
                      <li class="">- Máy mới nguyên seal, fullbox, kích hoạt online 23/9/2022</li>
                      <li class="">- Bảo hành tại Apple đến 22/9/2023</li>
                      <li class="">- Quá hạn bảo hành Apple được bảo hành tao Di động thông minh đủ 12 tháng, kể từ ngày mua máy.</li>
                    </ul>
                 </div>
                 

                 <div class="app-detail-top__content-right-product">
                    <div class="app-detail-top__content-right-product-item">
                      <div class="app-detail-top__content-right-product-item-img">
                          <img src="https://didongthongminh.vn/images/products/2022/11/24/resized/1_1649230516.webp" alt="" class="" />
                      </div>
                      <div class="app-detail-top__content-right-product-item-detail">
                         <span class=""> iPhone 13 Pro Cũ Đẹp 128GB</span>
                          <span class="">Giá: <b class="">20.890.000đ</b></span>
                      </div>
                    </div>
                    <div class="app-detail-top__content-right-product-item">
                      <div class="app-detail-top__content-right-product-item-img">
                          <img src="https://didongthongminh.vn/images/products/2022/12/15/resized/iPhone-13-Pro-Max_(2)(3).webp" alt="" class="" />
                      </div>
                      <div class="app-detail-top__content-right-product-item-detail">
                         <span class=""> iPhone 13 Pro Max Cũ Đẹp 128GB</span>
                          <span class="">Giá: <b class="">20.890.000đ</b></span>
                      </div>
                    </div>
                 </div>


              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="app-detail-promotion container-fluid">
        <div class="container">
          <div class="app-detail-promotion__tab">
          
              <img data-src="https://didongthongminh.vn/modules/products/assets/images/icon_pk.svg" alt="icon" class="img-responsive icon_cat lazy-loaded" width="42" height="36" src="https://didongthongminh.vn/modules/products/assets/images/icon_pk.svg">
              <span>Ưu đãi khi mua phụ kiện</span>
          
          </div>
          <div class="app-detail-promotion__content">
            <div class="row">
              <div class="col-lg-9 ">
                  <div class="app-detail-promotion__content-flex owl-carousel owl-theme owl-loaded">

                    <div class="owl-stage-outer">
                      <div class="owl-stage">
                    <div class="app-detail-promotion__content-flex-item owl-item">
                        <div class="app-detail-promotion__content-flex-item-top">
                           <input type="checkbox" class="" />
                        </div>
                        <div class="app-detail-promotion__content-flex-center">
                          <img src="https://didongthongminh.vn/images/products/2022/12/17/resized/3_1650730116.webp" alt="" class="" />
                        </div>
                        <div class="app-detail-promotion__content-flex-bottom">
                            <a href="" class="">Tai nghe chống ồn BWOO DPOD MAX (BW45)</a>
                            <a href="" class=""><b class="">450.000 đ</b> <span class="">900.000 đ</span></a>
                        </div>
                        <div class="app-detail-promotion__content-flex-add"> + </div>
                    </div>
                    <div class="app-detail-promotion__content-flex-item owl-item">
                      <div class="app-detail-promotion__content-flex-item-top">
                         <input type="checkbox" class="" />
                      </div>
                      <div class="app-detail-promotion__content-flex-center">
                        <img src="https://didongthongminh.vn/images/products/2022/05/05/resized/a5_1651719947.webp" alt="" class="" />
                      </div>
                      <div class="app-detail-promotion__content-flex-bottom">
                          <a href="" class="">Tai nghe chống ồn BWOO DPOD MAX (BW45)</a>
                          <a href="" class=""><b class="">450.000 đ</b> <span class="">900.000 đ</span></a>
                      </div>

                      <div class="app-detail-promotion__content-flex-add"> + </div>
                  </div>
                  <div class="app-detail-promotion__content-flex-item owl-item">
                    <div class="app-detail-promotion__content-flex-item-top">
                       <input type="checkbox" class="" />
                    </div>
                    <div class="app-detail-promotion__content-flex-center">
                      <img src="https://didongthongminh.vn/images/products/2022/12/30/resized/dTime-Gold.webp" alt="" class="" />
                    </div>
                    <div class="app-detail-promotion__content-flex-bottom">
                        <a href="" class="">Tai nghe chống ồn BWOO DPOD MAX (BW45)</a>
                        <a href="" class=""><b class="">450.000 đ</b> <span class="">900.000 đ</span></a>
                    </div>
                    <div class="app-detail-promotion__content-flex-add"> + </div>
                </div>
                <div class="app-detail-promotion__content-flex-item owl-item">
                  <div class="app-detail-promotion__content-flex-item-top">
                     <input type="checkbox" class="" />
                  </div>
                  <div class="app-detail-promotion__content-flex-center">
                    <img src="https://didongthongminh.vn/images/products/2022/07/16/resized/2_1650877525.webp" alt="" class="" />
                  </div>
                  <div class="app-detail-promotion__content-flex-bottom">
                      <a href="" class="">Tai nghe chống ồn BWOO DPOD MAX (BW45)</a>
                      <a href="" class=""><b class="">450.000 đ</b> <span class="">900.000 đ</span></a>
                  </div>
                  <div class="app-detail-promotion__content-flex-add"> + </div>
              </div>
                <div class="app-detail-promotion__content-flex-item owl-item">
                  <div class="app-detail-promotion__content-flex-item-top">
                     <input type="checkbox" class="" />
                  </div>
                  <div class="app-detail-promotion__content-flex-center">
                    <img src="https://didongthongminh.vn/images/products/anhphu/resized/quy-chua-n-to-ng-quan-ve-ca-c-die-m-ma-nh-cu-a-sa-n-pha-m.webp?v=1624490682000" alt="" class="" />
                  </div>
                  <div class="app-detail-promotion__content-flex-bottom">
                      <a href="" class="">Tai nghe chống ồn BWOO DPOD MAX (BW45)</a>
                      <a href="" class=""><b class="">450.000 đ</b> <span class="">900.000 đ</span></a>
                  </div>
              </div>
            </div>
          </div>


                  </div>
              </div>
              <div class="col-lg-3 ">
                  <div class="app-detail-promotion__content-right">
                      <div class="app-detail-promotion__content-right-item">
                        <span class="">Thành tiền</span>
                      </div>
                      <div class="app-detail-promotion__content-right-item">
                        <span class="">10.720.000đ</span>
                        <span class="">19.700.000đ</span>
                      </div>
                      <div class="app-detail-promotion__content-right-item">
                         <button class=""> Thêm vào giỏ hàng</button>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="app-detail-promotion container-fluid">
        <div class="container">
          <div class="app-detail-promotion__tab">
          
              <img data-src="https://didongthongminh.vn/modules/products/assets/images/icon_wan.svg" alt="icon" class="img-responsive icon_cat lazy-loaded" width="42" height="36" src="https://didongthongminh.vn/modules/products/assets/images/icon_pk.svg">
              <span>An tâm hơn khi chọn gói bảo hành</span>
          
          </div>
          <div class="app-detail-promotion__content">
            <div class="row">
              <div class="col-lg-9 ">
                
              </div>
              <div class="col-lg-3 ">
                  <div class="app-detail-promotion__content-right">
                      <div class="app-detail-promotion__content-right-item">
                        <span class="">Tổng tiền</span>
                      </div>
                      <div class="app-detail-promotion__content-right-item">
                        <span class="">7.490.000đ</span>
                        <span ></span>
                       
                      </div>
                      <div class="app-detail-promotion__content-right-item">
                         <button class=""> Mua gói bảo hành này
                  </div>
              </div>
            </div>
          </div>
        </div>
       
      </section>

      <section class="app-detail-bottom container-fluid">
        <div class="container">
          <div class="app-detail-bottom__content">
            <div class="app-detail-bottom__item ">
              <div class="app-detail-promotion__tab">
          
                <img data="https://didongthongminh.vn/modules/products/assets/images/danhgia.svg" alt="icon" class="img-responsive icon_cat lazy-loaded" width="42" height="36" src="https://didongthongminh.vn/modules/products/assets/images/icon_pk.svg">
                <span>Bài viết đánh giá</span>
            
            </div>

             <div class="app-detail-bottom__item-content">
                  <?=$data['content']?>
             </div>

             <div class="app-detail-bottom__item-content-btn"><button class="show-more-detail">Xem thêm </button></div>
            
            </div>
            <div class="app-detail-bottom__item ">
              <div class="app-detail-promotion__tab">
          
                <img  alt="icon" class="img-responsive icon_cat lazy-loaded" width="42" height="36" src="https://didongthongminh.vn/modules/products/assets/images/thongso.svg">
                <span>Thông số kỹ thuật</span>
            
            </div>
               <div class="app-detail-bottom__item-product-right">
                <table>
                 
                  <tr>
                    <td>Độ phân giải</td>
                    <td>2360 x 1640 Pixels</td>
                  
                  </tr>
                  <tr>
                    <td>Màn hình rộng</td>
                    <td>10,9 inch</td>
                    
                  </tr>
                  <tr>
                    <td>Hệ điều hành</td>
                    <td>iPadOS 16</td>
                    
                  </tr>
                  <tr>
                    <td>Chip xử lý</td>
                    <td>A14 Bionic với CPU 6 lõi, GPU 4 lõi và Neural Engine 16 lõi</td>
                   
                  </tr>
                  <tr>
                    <td>Độ phân giải camera sau</td>
                    <td>12MP</td>
                   
                  </tr>
                  <tr>
                    <td>Độ phân giải camera trước</td>
                    <td>12MP</td>
                    
                  </tr>

                  <tr>
                    <td>Thực hiện cuộc gọi</td>
                    <td>Facetime</td>
                    
                  </tr>
                  <tr>
                    <td>Dung lượng pin</td>
                    <td>28.6 Wh</td>
                    
                  </tr>
                  <tr>
                    <td>Loại pin</td>
                    <td>Li-lon</td>
                    
                  </tr>
                </table>
                 
                <div class="app-detail-bottom__item-product-right-btn">
                  <button class="">Xem cấu hình chi tiết</button>
                </div>
                
                


                <div class=" app-detail-bottom__item-product-right-new">
                  <div class="app-detail-promotion__tab">
          
                    <img  alt="icon" class="img-responsive icon_cat lazy-loaded" width="42" height="36" src="https://didongthongminh.vn/modules/products/assets/images/new.svg">
                    <span>tin tức</span>
                
                </div>

                  <div class="">
                    <div class="app-new-suggest__center">
                      <div class="app-new-suggest__center-item">
                        <div class="app-new-suggest__center-item-img">
                          <img src="https://didongthongminh.vn/upload_images/images/2022/12/03/ro-ri-them-thong-so-ky-thuat-cua-xiaomi-13-series.jpg" alt="">
                        </div>
                        <div class="app-new-suggest__center-item-detail">
                          <div class="app-new-suggest__center-item-detail-title">
                            <a href=""><span>iPhone 12 Pro max có mấy màu? Màu nào đẹp nhất?
                              </span></a>
                          </div>
      
                          <div class="app-new-suggest__center-item-detail-time">
                            <span><i class="fa fa-calendar" aria-hidden="true"></i>
                              20/11/2022</span>
                            <span><i class="fa fa-eye" aria-hidden="true"></i> 520</span>
                          </div>
                        </div>
                      </div>
                      <div class="app-new-suggest__center-item">
                        <div class="app-new-suggest__center-item-img">
                          <img src="https://didongthongminh.vn/upload_images/images/2022/12/22/gia%CC%81ng_sinh_ro%CC%A3%CC%82n_ra%CC%80ng.png" alt="">
                        </div>
                        <div class="app-new-suggest__center-item-detail">
                          <div class="app-new-suggest__center-item-detail-title">
                            <a href=""><span>iPhone 12 Pro max có mấy màu? Màu nào đẹp nhất? Chọn
                                màu theo phong thuỷ</span></a>
                          </div>
      
                          <div class="app-new-suggest__center-item-detail-time">
                            <span><i class="fa fa-calendar" aria-hidden="true"></i>
                              20/11/2022</span>
                            <span><i class="fa fa-eye" aria-hidden="true"></i> 520</span>
                          </div>
                        </div>
                      </div>
                      <div class="app-new-suggest__center-item">
                        <div class="app-new-suggest__center-item-img">
                          <img src="https://didongthongminh.vn/upload_images/images/2022/11/28/dem-nguoc-ngay-xiaomi-13-series-ra-mat.jpg" alt="">
                        </div>
                        <div class="app-new-suggest__center-item-detail">
                          <div class="app-new-suggest__center-item-detail-title">
                            <a href=""><span>iPhone 12 Pro max có mấy màu? Màu nào đẹp nhất? Chọn
                                màu theo phong thuỷ</span></a>
                          </div>
      
                          <div class="app-new-suggest__center-item-detail-time">
                            <span><i class="fa fa-calendar" aria-hidden="true"></i>
                              20/11/2022</span>
                            <span><i class="fa fa-eye" aria-hidden="true"></i> 520</span>
                          </div>
                        </div>
                      </div>
                      <div class="app-new-suggest__center-item">
                        <div class="app-new-suggest__center-item-img">
                          <img src="https://didongthongminh.vn/upload_images/images/2022/12/03/Ba%CC%89n_sao_cu%CC%89a_CT_2010_(1280_%C3%97_720_px).png" alt="">
                        </div>
                        <div class="app-new-suggest__center-item-detail">
                          <div class="app-new-suggest__center-item-detail-title">
                            <a href=""><span>iPhone 12 Pro max có mấy màu? Màu nào đẹp nhất? Chọn
                                màu theo phong thuỷ</span></a>
                          </div>
      
                          <div class="app-new-suggest__center-item-detail-time">
                            <span><i class="fa fa-calendar" aria-hidden="true"></i>
                              20/11/2022</span>
                            <span><i class="fa fa-eye" aria-hidden="true"></i> 520</span>
                          </div>
                        </div>
                      </div>
                      <div class="app-new-suggest__center-item">
                        <div class="app-new-suggest__center-item-img">
                          <img src="https://didongthongminh.vn/upload_images/images/2022/12/28/iphone-12-pro-max-co-may-mau.jpg" alt="">
                        </div>
                        <div class="app-new-suggest__center-item-detail">
                          <div class="app-new-suggest__center-item-detail-title">
                            <a href=""><span>iPhone 12 Pro max có mấy màu? Màu nào đẹp nhất? Chọn
                                màu theo phong thuỷ</span></a>
                          </div>
      
                          <div class="app-new-suggest__center-item-detail-time">
                            <span><i class="fa fa-calendar" aria-hidden="true"></i>
                              20/11/2022</span>
                            <span><i class="fa fa-eye" aria-hidden="true"></i> 520</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              

               </div>
            </div>
            <div class="app-detail-bottom__item ">
              <div class="app-detail-bottom__item-review-title">
                <b class="">Đánh giá iPad Gen 10 256GB 5G Chính hãng</b>
              </div>

              <div class="app-detail-bottom__item-review-content">
                <div class="app-detail-bottom__item-review-content-item ">
                   <div class="app-detail-bottom__item-review-content-item-total">
                         <div class="app-detail-bottom__item-review-content-item-total-top">
                          <span class="">4.7</span>
                          <span class="">/5</span>
                         </div>
                         <div class="app-detail-bottom__item-review-content-item-total-center">
                          <ul class="">
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          </ul>
                         </div>
                         <div class="app-detail-bottom__item-review-content-item-total-bottom">
                          <span class="">(26 đánh giá )</span>

                         </div>
                   </div>
                </div>
                <div class="app-detail-bottom__item-review-content-item ">
                   <div class="app-detail-bottom__item-review-content-item-vote">

                    <div class="app-detail-bottom__item-review-content-item-vote-flex">
                      <div class="app-detail-bottom__item-review-content-item-vote-flex-item ">
                           <ul class="">
                             <li><i class="fa fa-star fa-star-active" aria-hidden="true"></i></li>
                             <li><i class="fa fa-star fa-star-active" aria-hidden="true"></i></li>
                             <li><i class="fa fa-star fa-star-active" aria-hidden="true"></i></li>
                             <li><i class="fa fa-star fa-star-active" aria-hidden="true"></i></li>
                             <li><i class="fa fa-star fa-star-active" aria-hidden="true"></i></li>
                           </ul>
                      </div>
                      <div class="app-detail-bottom__item-review-content-item-vote-flex-item ">
                         <div class="app-detail-bottom__item-review-content-item-vote-flex-item-process">
                            <div style="width : 20%" class="app-detail-bottom__item-review-content-item-vote-flex-item-process-detail"></div>
                         </div>
                      </div>
                      <div class="app-detail-bottom__item-review-content-item-vote-flex-item ">
                         <span class="">85%</span>
                      </div>
                    </div>

                    <div class="app-detail-bottom__item-review-content-item-vote-flex">
                      <div class="app-detail-bottom__item-review-content-item-vote-flex-item ">
                           <ul class="">
                             <li><i class="fa fa-star fa-star-active" aria-hidden="true"></i></li>
                             <li><i class="fa fa-star fa-star-active" aria-hidden="true"></i></li>
                             <li><i class="fa fa-star fa-star-active" aria-hidden="true"></i></li>
                             <li><i class="fa fa-star fa-star-active" aria-hidden="true"></i></li>
                             <li><i class="fa fa-star " aria-hidden="true"></i></li>
                           </ul>
                      </div>
                      <div class="app-detail-bottom__item-review-content-item-vote-flex-item ">
                         <div class="app-detail-bottom__item-review-content-item-vote-flex-item-process">
                            <div style="width : 50%" class="app-detail-bottom__item-review-content-item-vote-flex-item-process-detail"></div>
                         </div>
                      </div>
                      <div class="app-detail-bottom__item-review-content-item-vote-flex-item ">
                         <span class="">50%</span>
                      </div>
                    </div>
                    <div class="app-detail-bottom__item-review-content-item-vote-flex">
                      <div class="app-detail-bottom__item-review-content-item-vote-flex-item ">
                           <ul class="">
                             <li><i class="fa fa-star fa-star-active" aria-hidden="true"></i></li>
                             <li><i class="fa fa-star fa-star-active" aria-hidden="true"></i></li>
                             <li><i class="fa fa-star fa-star-active" aria-hidden="true"></i></li>
                             <li><i class="fa fa-star " aria-hidden="true"></i></li>
                             <li><i class="fa fa-star " aria-hidden="true"></i></li>
                           </ul>
                      </div>
                      <div class="app-detail-bottom__item-review-content-item-vote-flex-item ">
                         <div class="app-detail-bottom__item-review-content-item-vote-flex-item-process">
                            <div style="width : 74%" class="app-detail-bottom__item-review-content-item-vote-flex-item-process-detail"></div>
                         </div>
                      </div>
                      <div class="app-detail-bottom__item-review-content-item-vote-flex-item ">
                         <span class="">74%</span>
                      </div>
                    </div>
                    <div class="app-detail-bottom__item-review-content-item-vote-flex">
                      <div class="app-detail-bottom__item-review-content-item-vote-flex-item ">
                           <ul class="">
                             <li><i class="fa fa-star fa-star-active" aria-hidden="true"></i></li>
                             <li><i class="fa fa-star fa-star-active" aria-hidden="true"></i></li>
                             <li><i class="fa fa-star " aria-hidden="true"></i></li>
                             <li><i class="fa fa-star " aria-hidden="true"></i></li>
                             <li><i class="fa fa-star " aria-hidden="true"></i></li>
                           </ul>
                      </div>
                      <div class="app-detail-bottom__item-review-content-item-vote-flex-item ">
                         <div class="app-detail-bottom__item-review-content-item-vote-flex-item-process">
                            <div style="width : 12%" class="app-detail-bottom__item-review-content-item-vote-flex-item-process-detail"></div>
                         </div>
                      </div>
                      <div class="app-detail-bottom__item-review-content-item-vote-flex-item ">
                         <span class="">12%</span>
                      </div>
                    </div>
                    <div class="app-detail-bottom__item-review-content-item-vote-flex">
                      <div class="app-detail-bottom__item-review-content-item-vote-flex-item ">
                           <ul class="">
                             <li><i class="fa fa-star fa-star-active" aria-hidden="true"></i></li>
                             <li><i class="fa fa-star " aria-hidden="true"></i></li>
                             <li><i class="fa fa-star " aria-hidden="true"></i></li>
                             <li><i class="fa fa-star " aria-hidden="true"></i></li>
                             <li><i class="fa fa-star " aria-hidden="true"></i></li>
                           </ul>
                      </div>
                      <div class="app-detail-bottom__item-review-content-item-vote-flex-item ">
                         <div class="app-detail-bottom__item-review-content-item-vote-flex-item-process">
                            <div style="width : 32%" class="app-detail-bottom__item-review-content-item-vote-flex-item-process-detail"></div>
                         </div>
                      </div>
                      <div class="app-detail-bottom__item-review-content-item-vote-flex-item ">
                         <span class="">32%</span>
                      </div>
                    </div>


                   </div>
                </div>
                <div class="app-detail-bottom__item-review-content-item">
                    <button class="">viết đánh giá</button>
                </div>
              </div>




              <div class="app-detail-bottom__item-comment-content ">

                 <div class="show-comment-ajax">
                  
                  <?php
                      foreach($dataComment as $key => $value){
                  ?>
                    <div class="app-detail-bottom__item-comment-content-item">
                    <div class="app-detail-bottom__item-comment-content-item-top">
                      <div class="app-detail-bottom__item-comment-content-item-top-left">
                          <span class=""><?=$value['name']?></span>
                          <ul class="">
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          </ul>
                      </div>
                      <div class="app-detail-bottom__item-comment-content-item-top-right">
                        <span class=""><?=$value['created_at']?></span>
                      </div>
                    </div>
                    <div class="app-detail-bottom__item-comment-content-item-bottom">
                      <p class=""><?=$value['content']?></p>
                    </div>
                </div>
                  <?php
                      }
                  ?>
                 </div>
                

                 <div class="app-detail-bottom__item-comment-content-btn">
                   <button class="">Xem thêm</button>
                 </div>

                 <div class="app-detail-bottom__item-comment-content-form">
                  <div class=""> <span class="">Để lại bình luận của bạn</span></div>
                                <div class="row">
                                                                     <div class="col-sm-6">
                                        <div class="form-group">
                                           
                                            <input placeholder="Họ và tên" type="text" class="pay-input-name">
                                              <span style="margin-top : 4px;color : red; font-size : 12px" class="error-name">* Bắt buộc nhập</span>
                                       </div>
                                    </div>

                                                                       
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            
                                            <input placeholder="Số điện thoại" type="number" class="pay-input-phone">
                                            <span style="margin-top : 4px;color : red; font-size : 12px" class="error-phone-number">* Bắt buộc nhập</span>
                                       </div>
                                    </div>

                                                                       <div class="col-sm-12">
                                        <div class="form-group">
                                           
                                            <input placeholder="Email" type="email" class="pay-input-email">
                                            <span style="margin-top : 4px;color : red; font-size : 12px" class="error-email">* Bắt buộc nhập</span>
                                       </div>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                           
                                            <textarea class="pay-input-content" placeholder="Nhập nội dung ..." name="" id="" cols="30" rows="10"></textarea>
                                            <span style="margin-top : 4px;color : red; font-size : 12px" class="error-content">* Bắt buộc nhập</span>
                                       </div>
                                    </div>

                                    <div class="col-sm-2">
                                    <div class="form-group-btns submit-cmt"  >
                                                 <button type="button" class="">Gửi</button>
                                             </div>
                                    </div>
                                                                       
                                </div>
                              
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
                <img src="https://didongthongminh.vn/images/products/cat/original/dienthoai_1637510220.svg" alt="">
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
            <div class="app-top-sale__day-carousel app-information__content-four owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="width: 3577px; transform: translate3d(-1192px, 0px, 0px); transition: all 0s ease 0s;">
                    	
                    	<?php
                    	 for($i = 0; $i < count($dataSuggest); $i ++){
                    	?>
                    	
                    	  <div class="app-top-sale__day-carousel-item owl-item " >
                <div class="app-top-sale__day-carousel-item-img-top-sale">
                  -40%
                </div>
                <div class="app-top-sale__day-carousel-item-img">
                  <img src="./public/img/<?=$dataSuggest[$i]['thumb']?>" alt="">
                </div>

                <div class="app-top-sale__day-carousel-item-detail">
                  <div class="app-top-sale__day-carousel-item-detail-title">
                    <a href="./detail.php?slug=<?=$dataSuggest[$i]['slug']?>"><?=$dataSuggest[$i]['name']?></a>
                  </div>
                  <div class="app-top-sale__day-carousel-item-detail-price">
                    <b><?=$dataSuggest[$i]['price_sale']?>đ</b> <span><?=$dataSuggest[$i]['price']?>đ</span>
                  </div>

                  <div class="sale-product">
                    <span>Giảm 100.000đ khi mua kèm iPhone 14</span>
                  </div>
                  <div class="app-top-sale__day-carousel-item-detail-bottom">
                    <div class="app-top-sale__day-carousel-item-detail-bottom-vote">
                      <ul>
                        <li>
                          <i class="vote-active fa fa-star" aria-hidden="true"></i>
                        </li>
                        <li>
                          <i class="vote-active fa fa-star" aria-hidden="true"></i>
                        </li>
                        <li>
                          <i class="vote-active fa fa-star" aria-hidden="true"></i>
                        </li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      </ul>
                    </div>
                    <div class="app-top-sale__day-carousel-item-detail-like-product">
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

            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
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
    <script>
var errorInputName = true;
var errorInputContent = true;
var errorInputEmail = true;
var errorInputPhone = true;

$('.submit-cmt>button').on('click', function () {
   if(errorInputName == false && errorInputContent == false && errorInputEmail == false && errorInputPhone == false){
    $.ajax({
            method: "POST",
            url: "./postcomment.php",
            data: { 
                id : $('.data-product-id').attr("data-id"),
                name : $('.pay-input-name').val(),
                content : $('.pay-input-content').val(),
                phone : $('.pay-input-phone').val(),
                email : $('.pay-input-email').val(),
            }
        })
        .done(function(msg) {
          msg = JSON.parse(msg);
          const cmtDiv = `<div class="app-detail-bottom__item-comment-content-item">
                <div class="app-detail-bottom__item-comment-content-item-top">
                  <div class="app-detail-bottom__item-comment-content-item-top-left">
                      <span class="">${msg.name}</span>
                      <ul class="">
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      </ul>
                  </div>
                  <div class="app-detail-bottom__item-comment-content-item-top-right">
                    <span class="">${msg.created_at}</span>
                  </div>
                </div>
                <div class="app-detail-bottom__item-comment-content-item-bottom">
                  <p class="">${msg.content}</p>
                </div>
            </div>`;
            $('.show-comment-ajax').prepend(cmtDiv);
            
            $([document.documentElement, document.body]).animate({
               scrollTop: $(".app-detail-bottom__item-review-content-item-total-bottom").offset().top
            }, 600);

            $('.pay-input-name').val("")
            $('.pay-input-content').val("")
            $('.pay-input-phone').val("")
            $('.pay-input-email').val("")
             errorInputName = true;
             errorInputContent = true;
            errorInputEmail = true;
            errorInputPhone = true;


        });
       
   }else {
    $([document.documentElement, document.body]).animate({
        scrollTop: $(".app-detail-bottom__item-comment-content-form").offset().top
    }, 600);
   }
});
$('.pay-input-content').on('input keyup paste', function () {
	text = $(this).val();
   


  if(/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềếểỄỆỈỊỌỎỐỒỔỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]{4,})+$/.test(text)){
    errorInputContent = false;
  	$('.error-content').text('');
  }else {
    errorInputContent = true;
  	$('.error-content').text('* Nội dung quá ngắn');
  	
  }
});



$('.pay-input-name').on('input keyup paste', function () {
	text = $(this).val();
   


  if(/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềếểỄỆỈỊỌỎỐỒỔỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]{4,})+$/.test(text)){
    errorInputName = false;
  	$('.error-name').text('');
  }else {
    errorInputName = true;
  	$('.error-name').text('* Tên không hợp lệ');
  	
  }
});
$('.pay-input-email').on('input keyup paste', function () {
	text = $(this).val();

   if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(text)){
  	$('.error-email').text('');
  	errorInputEmail = false;
  }else {
  	$('.error-email').text('* Email không hợp lệ');
  	errorInputEmail = true;
  	
  }
});

$(document).on("click", ".tab-memo-close", function(){  
    $('.popup-success-cart').css('animation', 'popup-delay-out 0.5s ease-in-out');
  });

$('.pay-input-phone').on('input keyup paste', function () {
	text = $(this).val();
   if(/(84|0[3|5|7|8|9])+([0-9]{8})\b/g.test(text)){
  	$('.error-phone-number').text('');
  	errorInputPhone = false;
  }else {
  	errorInputPhone = true;
  	$('.error-phone-number').text('* Số điện thoại không hợp lệ');
  	
  }
});





    $('.delete-local').click(function(){
    	localStorage.removeItem("carts");
    	alert('deleter carts success');
    })
    $('.add-cart').click(function(){
  	 	var object = {
  	 		id : $(this).attr("data-id"),
  	 		name : $(this).attr("data-name"),
  	 		thumb : $(this).attr("data-thumb"),
  	 		price : $(this).attr("data-price"),
  	 		price_sale : $(this).attr("data-sale"),
  	 		quantity : 1
  	 	}
  	 	
  	 	var shopCart = JSON.parse(localStorage.getItem("carts"));
  	 	
  	 	if(shopCart == null){
  	 	
  	 		localStorage.setItem("carts", JSON.stringify([object]));
  	 	}else {
  	 		//console.log('add');
  	 		function checkArray(arr, id){
  	 			for(var i = 0; i < arr.length; i ++){
  	 				if(arr[i].id == id){
  	 					return(true);
  	 				}
  	 			}
  	 			return (false);
  	 		}
  	 		if(checkArray(shopCart, object.id) == true){
  	 			 		var newArr = shopCart.map((value, key) => {
  	 			 if(value.id == object.id){
  	 			 	 return {
  	 			 	 	 ...value,
  	 			 	   quantity : (Number((value.quantity)) + 1)
  	 			 	 }
  	 			 }else {
  	 			  	return (value);
  	 			 }
  	 		});
  	 			localStorage.setItem("carts", JSON.stringify(newArr));
  	 		}else {
  	 				localStorage.setItem("carts", JSON.stringify([...shopCart, object]));
  	 		}
  	 	}
  	// 	alert('add cart success');
  	 	getTotalCart(JSON.parse(localStorage.getItem("carts")));
  	 //	console.log(JSON.parse(localStorage.getItem("carts")));
     
     window.location.replace("cart.php");
  	 });
  	 
  	 
  	 
    </script>
     <?php
require_once('./post/footer.php');
?>