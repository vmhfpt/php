  <?php
require_once('./post/header.php');
require_once('./DbHelp/handle.php');
$sqlCity = "SELECT * FROM `devvn_tinhthanhpho`";
$dataCity = executeResult($sqlCity);

$user = false;
if(!empty($_SESSION["user"])){
  $user = $_SESSION["user"];
}
//var_dump($user);die();

//var_dump($dataCity);die();
?>
  <style >
     .app-cart__content-over-flow {
   
    overflow: auto;
    height : 78vh !important;
   }
  </style>
    <main>

    <div class="show-popup-state"></div>

    

    <div class="app-cart container-fluid">
        <div class="container app-cart-container__center">
            <div class="app-cart-container">
                <div class="app-cart-top__title">
                    <span class=""><i class="fa fa-angle-left" aria-hidden="true"></i> Mua thêm sản phẩm khác</span>
                    <span class=""><i class="fa fa-user-circle-o" aria-hidden="true"></i>Đăng nhập</span>
               </div>
                <!-- -->
                <div class="app-cart__content">
                    <div class="show-cart-list">
                      
                   </div>

                    <div class="app-cart__content-total">
                        <div class="app-cart__content-total-item">
                             <span class="">Tạm tính (<span class="temp-total"></span>) sản phẩm:</span>
                             <span class="app-cart__content-total-item-show"></span>
                        </div>
                        <div class="app-cart__content-total-item">
                            <span class="">Phí vận chuyển:</span>
                            <span class="">Liên hệ</span>
                       </div>
                       <div class="app-cart__content-total-item">
                        <span class="">Mã giảm giá:</span>
                        <span class="">0đ</span>
                   </div>
                    </div>

                    <div class="app-cart__content-form">
                         <form action="" class="scroll-to-here">
                             <div class="app-cart__content-form-gender">
                                <div class="app-cart__content-form-gende-item">
                                  <input type="radio" name="" id="">
                                  <label for="" class="">Anh</label> 
                                 </div>

                                 <div class="app-cart__content-form-gende-item">
                                   <input type="radio" name="" id="">
                                   <label for="" class="">Chị</label> 
                                 </div>
                             </div>
                             <div class="">
                                <div class="row">
                                  <?php
                                    if(!$user){
                                     
                                  ?>
                                   <div class="col-sm-6">
                                        <div class="form-group">
                                           
                                            <input  placeholder="Họ và tên" type="text" class="pay-input-name">
                                              <span style="margin-top : 4px;color : red; font-size : 12px" class="error-name">* Bắt buộc nhập</span>
                                       </div>
                                    </div>

                                    <?php
                                    
                                     }
                                  ?>
                                   
                                    <div class="<?=!$user ? "col-sm-6" : "col-sm-12" ?>">
                                        <div class="form-group">
                                            
                                            <input  placeholder="Số điện thoại" type="number" class="pay-input-phone">
                                            <span style="margin-top : 4px;color : red; font-size : 12px" class="error-phone-number">* Bắt buộc nhập</span>
                                       </div>
                                    </div>

                                    <?php
                                    if(!$user){
                                     
                                  ?>
                                   <div class="col-sm-12">
                                        <div class="form-group">
                                           
                                            <input  placeholder="Email" type="email" class="pay-input-email">
                                            <span style="margin-top : 4px;color : red; font-size : 12px" class="error-email">* Bắt buộc nhập</span>
                                       </div>
                                    </div>

                                    <?php
                                    
                                     }
                                  ?>
                                   
                                </div>
                              
                             </div>

                             <div class="app-cart__content-form-transport">
                                <span class="">Chọn cách thức mua hàng</span>
                                <div class="app-cart__content-form-transport-flex">
                                    <div class="app-cart__content-form-gende-item">
                                        <input type="radio" name="" id="">
                                        <label for="" class="">Giao tận nơi</label> 
                                       </div>
      
                                       <div class="app-cart__content-form-gende-item">
                                         <input type="radio" name="" id="">
                                         <label for="" class="">Nhận tại cửa hàng</label> 
                                       </div>
                                </div>

                           </div>
                           <div class="app-cart__content-form-address scroll-to-address">
                               <span class="">Chọn địa chỉ để biết thời gian và phí vận chuyển (nếu có)</span>
                               <div class="row">
                                  <div class="col-sm-6">
                                     <div class="form-group">
                                          <div class="form-group-option">
                                            <select id="select-city">
                                                <option value="null">Tỉnh/ Thành phố</option>
                                                <?php
                                                for($i = 0; $i < count($dataCity); $i ++){
                                                ?>
                                                 <option value="<?=$dataCity[$i]["matp"]?>"><?=$dataCity[$i]["name"]?></option>
                                                <?php
                                                }
                                                ?>
                                             </select>
                                          </div>
                                     </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-group-option">
                                          <select id="district-show">
                                              <option value="null"> Quận/ Huyện</option>
                                           </select>
                                        </div>
                                   </div>
                                  </div>
                                  <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <div class="form-group-option">
                                          <select name="" id="show-warge">
                                              <option value="null">Phường/ Xã</option>
                                           </select>
                                        </div>
                                   </div>
                                  </div>
                                  <div class="col-lg-6 col-sm-12">
                                      <div class="form-group">
                                          <input type="text" class="detail_address_input" placeholder="Số nhà, tên đường">
                                      </div>
                                  </div>
                               </div>
                           </div>

                           <div class="">
                               <div class="form-group">
                                  <input type="text" class="note" placeholder="Yêu cầu khác (không bắt buộc)">
                               </div>
                           </div>

                           <div class="app-cart__content-form-checkbox">
                               <div class="form-group-check-box">
                                  <input type="checkbox" name="" id="">
                                  <label for="" class="">Gọi người khác nhận hàng (nếu có)</label>
                               </div>
                               <div class="form-group-check-box">
                                <input type="checkbox" name="" id="">
                                <label for="" class="">Chuyển danh bạ, dữ liệu qua máy mới</label>
                             </div>
                             <div class="form-group-check-box">
                                <input type="checkbox" name="" id="">
                                <label for="" class="">Xuất hóa đơn công ty</label>
                             </div>
                           </div>

                           <div class="app-cart__content-form-button-coupon-content">
                                <div class="app-cart__content-form-button-coupon">
                                     <img src="https://didongthongminh.vn/modules/products/assets/images/icon_giam.svg" alt="" class="">
                                     <span class="">Dùng mã giảm giá</span>
                                     <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </div>

                                <div class="app-cart__content-form-button-coupon-add">
                                     <div class="row">
                                         <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
                                             <div class="form-group">
                                                 <input type="text" name="" id="" placeholder="Nhập mã giảm giá">
                                             </div>
                                         </div>

                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 ">
                                             <div class="form-group-btns">
                                                 <button type="button" class="">Áp dụng</button>
                                             </div>
                                         </div>
                                     </div>
                                </div>
                           </div>

                           <div class="app-cart__content-form-total-cost">
                              <span class="">Tổng tiền: </span>
                              <span class=""></span>
                           </div>

                           <div class="app-cart__content-form-button-submit">
                        
                            <button type="button" class="">Đặt hàng</button>
                           </div>
                         </form>
                    </div>

                    

                </div>

                <div class="app-cart-last"><span class="">Bằng cách đặt hàng, bạn đồng ý với Điều khoản sử dụng của Didongthongminh</span></div>
            </div>
        </div>
    </div>

     

      



     
      

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
     var errorInputEmail = true;
     var errorInputName = true;
     var errorInputPhone = true;
     if($('.pay-input-name').length == 0){
        errorInputName = false;
     }
     if($('.pay-input-email').length == 0){
        errorInputEmail = false;
     }
     


$('.pay-input-name').on('input keyup paste', function () {
	text = $(this).val();
   if(text.length <= 5 || text.length > 20){
   	errorInputName = true;
  	$('.error-name').text('* Tên không hợp lệ');
  	
  }else {
  	errorInputName = false;
  	$('.error-name').text('');
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

$('.app-cart__content-form-button-submit>button').click(function(){
  
	 if(errorInputEmail == false && errorInputName == false && errorInputPhone == false){

	 	  
	 	  if($('#select-city').val() == 'null' || $('#district-show').val() == 'null' || $('#show-warge').val() == 'null'){
	 	  	
	 	  	  $([document.documentElement, document.body]).animate({
        scrollTop: $(".scroll-to-address").offset().top
          }, 600);
	 	  }else {
        $(this).html(`<i style="font-size : 23px !important" class=" fa fa-spinner fa-spin"></i>`);
        $(this).css('pointer-events', 'none');
        const payName = $('.pay-input-name').val();
        const payEmail = $('.pay-input-email').val();
        const payPhone = $('.pay-input-phone').val();
        const payNote = $('.note').val();
	 	  	   $.ajax({
            method: "POST",
            url: "./DbHelp/checkcount.php",
            data: {
                carts : JSON.parse(localStorage.getItem("carts")),
                detail_user : {
                	name : $('.pay-input-name').val(),
                	email : $('.pay-input-email').val(),
                	phone : $('.pay-input-phone').val(),
                	note : $('.note').val(),
                	address_code : {
                		city : $('#select-city').val(),
                		district : $('#district-show').val(),
                		aware : $('#show-warge').val()
                	},
                	address : $('.detail_address_input').val()
                },
                
            }
        })
        .done(function(msg) {
          msg = JSON.parse(msg);

      



          if(msg.status == 'success'){
          //	 localStorage.removeItem("carts");
          	 $('.app-cart__content').remove();

             $('.app-cart-top__title').after(` <div class="empty-cart-container">
                   <img src="https://cdn-icons-png.flaticon.com/512/2038/2038854.png" alt="" class="">
                   <span class="">Không còn gì trong giỏ hàng !</span>
                   <a href="index.php" class=""><button class="">Quay về  trang chủ</button></a>
                 </div>`);
          	//alert('oder buy products success !!');
             
            var dataItem = JSON.parse(localStorage.getItem("carts"));
 
  var templateProduct = '';
  var totalProduct = 0;
  var totalCost = 0;
  dataItem.map((value, key) => {
    totalProduct = totalProduct + Number(value.quantity);
    totalCost = totalCost + ((Number(value.quantity) * Number(value.price_sale)) );
    templateProduct = templateProduct + `<div class="app-cart__content-item">
                             <div class="app-cart__content-item-first ">
                                 <img src="./public/img/${value.thumb}" alt="" class="">
                               
                             </div>
                             <div class="app-cart__content-item-second ">
    
    
                                   <div class="app-cart__content-item-second-name">
                                        <a href="" class=""><b class="">${value.name}</b></a>
                                   </div>
                                   <div class="app-cart__content-item-second-title-promotion">
                                      <span class="">Khuyến mại: </span>
                                   </div>
    
                                   <div class="app-cart__content-item-second-gift">
                                       <div class="app-cart__content-item-second-gift-item">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        <span class="">Tặng Bảo hành mở rộng Samsung Care+ 6 tháng </span>
                                       </div>
                                       <div class="app-cart__content-item-second-gift-item">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        <span class="">Tặng 1.700.000đ ưu đãi Phòng Chờ Thương Gia </span>
                                       </div>
                                       <div class="app-cart__content-item-second-gift-item">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        <span class="">Trả góp 0% thời hạn đến 24 tháng qua thẻ tín dụng.  </span>
                                       </div>
                                       <div class="app-cart__content-item-second-gift-item">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        <span class="">Trả góp 0%, trả trước từ 2.500.000đ qua Nhà Tài Chính FE Credit và Home Credit. </span>
                                       </div>
                                   </div>
                                  
                                   <div class="app-cart__content-item-second-color">
                                       <span class="">Và 2 khuyến mại khác <i class="fa fa-caret-down" aria-hidden="true"></i></span>
    
                                       <span class="">Màu: Xanh <i class="fa fa-caret-down" aria-hidden="true"></i>
                                       <div class="app-cart__content-item-second-color-detail">
                                            <div class="app-cart__content-item-second-color-detail-item">
                                                <img src="https://didongthongminh.vn/images/products/2022/11/10/resized/z-fold-4-den_1668074382.jpg" alt="" class="">
                                                <span class="">Đen</span>
                                            </div>
                                            <div class="app-cart__content-item-second-color-detail-item">
                                                <img src="https://didongthongminh.vn/images/products/2022/11/10/resized/z-fold-4-den_1668074382.jpg" alt="" class="">
                                                <span class="">Xanh</span>
                                            </div>
                                            <div class="app-cart__content-item-second-color-detail-item">
                                                <img src="https://didongthongminh.vn/images/products/2022/11/10/resized/z-fold-4-den_1668074382.jpg" alt="" class="">
                                                <span class="">Đỏ</span>
                                            </div>
                                       </div>
                                    </span>
                                   </div>
    
    
                             </div>
                             <div class="app-cart__content-item-third">
                                <div class="app-cart__content-item-third-item">
                                    <span class="">${value.price_sale}đ</span>
                                    <span class="">${value.price}đ</span>
                                </div>
                                <div class="app-cart__content-item-third-item">
                                    <p>x${value.quantity}</p>
                                </div>
                             </div>
                        </div>`;
  });
  
            var template = `<section class="popup-success-cart">
         <div class="popup-success-cart__content">
          <div class="tab-memo">
              <div class=""><span class="">Đặt hàng thành công</span></div>
              <div class="tab-memo-close">&times;</div>
          </div>
         <div class="app-cart__content app-cart__content-over-flow">
                    <div class="">
                       ${templateProduct}       
                   </div>

                    <div class="app-cart__content-total">
                        <div class="app-cart__content-total-item">
                             <span class="">Tổng (${totalProduct}) sản phẩm:</span>
                             <span class="">${totalCost}đ</span>
                        </div>
                        <div class="app-cart__content-total-item">
                            <span class="">Phí vận chuyển:</span>
                            <span class="">Liên hệ</span>
                       </div>
                       <div class="app-cart__content-total-item">
                        <span class="">Mã giảm giá:</span>
                        <span class="">0đ</span>
                   </div>
                    </div>

                    <div class="app-cart__content-form app-cart__content-form-detail-oder">
                        <ul class="">
                           <li class=""><b class="">Họ và tên</b> : ${msg.name}</li>
                           <li class=""><b class="">SĐT</b> : ${payPhone}</li>
                           <li class=""><b class="">Email</b> : ${msg.email}</li>
                           <li class=""><b class="">Địa chỉ nhận hàng</b> : ${msg.address}</li>
                           <li class=""><b class="">Ghi chú</b> : ${payNote}</li>

                        </ul>
                    </div>

                    

                </div>
         </div>
     </section> `;


     $('.show-popup-state').empty();
     $('.show-popup-state').append(template);
     localStorage.removeItem("carts");

          }
        }); 
      
	 	  	 
          
	 	  }
	 }else {
	 	   $([document.documentElement, document.body]).animate({
        scrollTop: $(".scroll-to-here").offset().top
    }, 600);
	 }
})
   function renderCart(){
   	$('.show-cart-list').empty();
   	
   	var arrCart = JSON.parse(localStorage.getItem("carts"));
   	if(arrCart == null || arrCart.length == 0){
   		arrCart = [];
   		$('.app-cart__content').remove();
      $('.app-cart-top__title').after(` <div class="empty-cart-container">
                   <img src="https://cdn-icons-png.flaticon.com/512/2038/2038854.png" alt="" class="">
                   <span class="">Không còn gì trong giỏ hàng !</span>
                   <a href="index.php" class=""><button class="">Quay về  trang chủ</button></a>
                 </div>`);
   	}
   	arrCart.map((value, key) => {
   		 $('.show-cart-list').append(`<div data-id="${value.id}" class="app-cart__content-item">
                            <div class="app-cart__content-item-first ">
                                <img src="./public/img/${value.thumb}" alt="" class="">
                                <span data-delete=${value.id} class="delete-cart">
                                <i class="fa fa-times-circle-o" aria-hidden="true"></i> Xóa</span>
                            </div>
                            <div class="app-cart__content-item-second ">
    
    
                                  <div class="app-cart__content-item-second-name">
                                       <a href="" class=""><b class="">${value.name}</b></a>
                                  </div>
                                  <div class="app-cart__content-item-second-title-promotion">
                                     <span class="">Khuyến mại: </span>
                                  </div>
    
                                  <div class="app-cart__content-item-second-gift">
                                      <div class="app-cart__content-item-second-gift-item">
                                       <i class="fa fa-check-circle" aria-hidden="true"></i>
                                       <span class="">Tặng Bảo hành mở rộng Samsung Care+ 6 tháng </span>
                                      </div>
                                      <div class="app-cart__content-item-second-gift-item">
                                       <i class="fa fa-check-circle" aria-hidden="true"></i>
                                       <span class="">Tặng 1.700.000đ ưu đãi Phòng Chờ Thương Gia </span>
                                      </div>
                                      <div class="app-cart__content-item-second-gift-item">
                                       <i class="fa fa-check-circle" aria-hidden="true"></i>
                                       <span class="">Trả góp 0% thời hạn đến 24 tháng qua thẻ tín dụng.  </span>
                                      </div>
                                      <div class="app-cart__content-item-second-gift-item">
                                       <i class="fa fa-check-circle" aria-hidden="true"></i>
                                       <span class="">Trả góp 0%, trả trước từ 2.500.000đ qua Nhà Tài Chính FE Credit và Home Credit. </span>
                                      </div>
                                  </div>
                                 
                                  <div class="app-cart__content-item-second-color">
                                      <span class="">Và 2 khuyến mại khác <i class="fa fa-caret-down" aria-hidden="true"></i></span>
    
                                      <span class="">Màu: Xanh <i class="fa fa-caret-down" aria-hidden="true"></i>
                                      <div class="app-cart__content-item-second-color-detail">
                                           <div class="app-cart__content-item-second-color-detail-item">
                                               <img src="https://didongthongminh.vn/images/products/2022/11/10/resized/z-fold-4-den_1668074382.jpg" alt="" class="">
                                               <span class="">Đen</span>
                                           </div>
                                           <div class="app-cart__content-item-second-color-detail-item">
                                               <img src="https://didongthongminh.vn/images/products/2022/11/10/resized/z-fold-4-den_1668074382.jpg" alt="" class="">
                                               <span class="">Xanh</span>
                                           </div>
                                           <div class="app-cart__content-item-second-color-detail-item">
                                               <img src="https://didongthongminh.vn/images/products/2022/11/10/resized/z-fold-4-den_1668074382.jpg" alt="" class="">
                                               <span class="">Đỏ</span>
                                           </div>
                                      </div>
                                   </span>
                                  </div>
    
    
                            </div>
                            <div class="app-cart__content-item-third">
                               <div class="app-cart__content-item-third-item">
                                   <span class="">${value.price_sale}đ</span>
                                   <span class="">${value.price}đ</span>
                               </div>
                               <div class="app-cart__content-item-third-item">
                                   <button class="decrease">-</button>
                                   <input type="number" class="cart-input" value="${value.quantity}">
                                   <button class="increase">+</button>
                               </div>
                            </div>
                       </div>`);
   	});
   	//temp-total
   	$('.temp-total').text(arrCart.length);
   		$('.app-cart__content-total-item-show').text(getTotalCartDetail(arrCart) + 'đ');
   }
   renderCart();
   	 function getTotalCartDetail(arr){
   	 	  var sum = 0;
   	 	  for(var i = 0; i < arr.length; i ++){
  	 			 sum = sum + Number(Number(arr[i].quantity) * Number(arr[i].price_sale));
  	 		}
  	 		return (sum);
   	 }
   	 function changeCart(id, quantityValue){
   	 	
   	 	shopCart = JSON.parse(localStorage.getItem("carts"));
   	 			var newArr = shopCart.map((value, key) => {
  	 			 if(value.id == id){
  	 			 	 return {
  	 			 	 	 ...value,
  	 			 	   quantity : quantityValue
  	 			 	 }
  	 			 }else {
  	 			  	return (value);
  	 			 }
  	 		});
  	 		localStorage.setItem("carts", JSON.stringify(newArr));
  	 		getTotalCarts(JSON.parse(localStorage.getItem("carts")));
  	 		
  
  	 		$('.app-cart__content-total-item-show').text(getTotalCartDetail(newArr) + 'đ');
   	 }
   	 function getTotalCarts(arr){
 	  
 	  if(arr == null){
 	  		$('.app-header__top-item-icon-cart-quantity').text(0)
 	  }else {
 	  	var sum = 0;
 	  	for(var i = 0; i < arr.length; i ++){
 	  		 sum = sum + Number(arr[i].quantity);
 	  	}
 	  	$('.app-header__top-item-icon-cart-quantity').text( String(sum));
 	  }
 }

  $(document).on("click", ".delete-cart", function(){  
  	var dataItem = JSON.parse(localStorage.getItem("carts"));
  	const id = ($(this).attr("data-delete"));
  	  var arrDelete = dataItem.filter(
                (item) => item.id !== id
       );
   
    localStorage.setItem("carts", JSON.stringify(arrDelete));
    renderCart();
    getTotalCarts(JSON.parse(localStorage.getItem("carts")));
  });
   	 
   	 $(document).on("click", ".increase", function(){   
   	 	    var index = ($('.increase').index(this));
   	 	    $('.cart-input').eq(Number(index)).val(Number($('.cart-input').eq(Number(index)).val()) + 1);
   	 	    
   	 	    var product_id = ($('.app-cart__content-item').eq(index).attr("data-id"));
   	 	    var quantityChange =  $('.cart-input').eq(Number(index)).val();
   	 	    changeCart(product_id, quantityChange);
   	 });
   	 
   	  $(document).on("change", ".cart-input", function(){   
   	 	    var index = ($('.cart-input').index(this));
   	 	   var product_id = ($('.app-cart__content-item').eq(index).attr("data-id"));
   	 	    var quantityChange =  $('.cart-input').eq(Number(index)).val();
   	 	     changeCart(product_id, quantityChange);
   	 });
   	 
   	  $(document).on("click", ".decrease", function(){   
   	 	    var index = ($('.decrease').index(this));
   	 	    $('.cart-input').eq(Number(index)).val(Number($('.cart-input').eq(Number(index)).val()) - 1);
   	 	    
   	 	    var product_id = ($('.app-cart__content-item').eq(index).attr("data-id"));
   	 	    var quantityChange =  $('.cart-input').eq(Number(index)).val();
   	 	   changeCart(product_id, quantityChange);
   	 });
   	 $('#select-city').change(function(){
   	 	if($(this).val() == 'null'){
   	 		     $('#show-warge').empty();
             $('#show-warge').append(` <option value="null">Phường/ Xã</option>`);
               $('#district-show').empty();
             $('#district-show').append(`<option value="null"> Quận/ Huyện</option>`);
   	 	}else {
   	 		   $('#show-warge').empty();
             $('#show-warge').append(` <option value="null">Phường/ Xã</option>`);
   	 		$.ajax({
            method: "POST",
            url: "./DbHelp/loadAddress.php",
            data: {
                type : "district",
                id: String($(this).val()),
                
            }
        })
        .done(function(msg) {
          msg = JSON.parse(msg);
            $('#district-show').empty();
             $('#district-show').append(`<option value="null"> Quận/ Huyện</option>`);
            msg.map(( value, key) => {
            	  $('#district-show').append(`<option value=${value.maqh}>${value.name}</option>`);
            })
        });
   	 	}
   	     
   	 });
   	 $('#district-show').change(function(){
   	 	    $.ajax({
            method: "POST",
            url: "./DbHelp/loadAddress.php",
            data: {
                type : "diferent",
                id: String($(this).val()),
                
            }
        })
        .done(function(msg) {
        	/*<select name="" id="show-warge">
                                              <option value="">Phường/ Xã</option>
                                           </select>*/
          msg = JSON.parse(msg);
          
              $('#show-warge').empty();
             $('#show-warge').append(` <option value="null">Phường/ Xã</option>`);
            msg.map(( value, key) => {
            	  $('#show-warge').append(`<option value=${value.xaid}>${value.name}</option>`);
            })
        });
   	 })
   </script>
      <?php
require_once('./post/footer.php');
?>
   