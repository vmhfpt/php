<?php
require_once('./post/header.php');
require_once('./DbHelp/handle.php');

  //$data = executeResult($sql);
  $data = array();
?>

    <main>
      <section class="app-bread-crumb container-fluid">
        <div class="container">
          <ul class="">
            <li class=""><a href="" class="">Trang chủ</a> /</li>
            
            <li class=""><a href="" class="bread-crumb-bu"></a> /</li>
            
            <li class=""><a href="" class="bread-crumb-ca"></a> </li>
            
          </ul>
        </div>
      </section>
      <section class="app-carousel-category container-fluid">
        <div class="container">
          <div class="app-carousel-category__content">
            <div class="app-carousel-category__content-item">
              <div class="">
                <img
                  src="https://didongthongminh.vn/images/banners/resized/xiaomi-chinh-hang_1670476494.webp"
                  alt=""
                  class=""
                />
              </div>
              <div class="">
                <img
                  src="https://didongthongminh.vn/images/banners/resized/samsung_1670476132.webp"
                  alt=""
                  class=""
                />
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="app-category-filter__brand container-fluid">
        <div class="container">
          <div class="container-filter__brand">
            <div class="container-filter__brand-content">
              
              <div class="container-filter__brand-content-list">
                <ul>
                  <a class="select-category" href="javascript:;" data-filter="iphone-chinh-hang">
                    <li>
                    <div class="container-filter__brand-content-list-btn">
                        <img src="https://didongthongminh.vn/images/products/cat/original/image-117_1669949402.svg" alt="" class="">
                    </div>
                </li>
                  </a>
                  <a class="select-category" href="javascript:;" data-filter="samsung-tab" >
                    <li>   <div class="container-filter__brand-content-list-btn">
                       Tab SAMSUNG
                    </div></li>
                  </a>
                  <a class="select-category" href="javascript:;" data-filter="samsung" >
                    <li> <div class="container-filter__brand-content-list-btn">
                        <img src="https://didongthongminh.vn/images/products/cat/original/image-117-1_1669949433.svg" alt="" class="">
                    </div></li>
                  </a>
                  <a  class="select-category" href="javascript:;" data-filter="xiaomi">
                    <li> <div class="container-filter__brand-content-list-btn">
                        <img src="https://didongthongminh.vn/images/products/cat/original/image-117-2_1669949465.svg" alt="" class="">
                    </div></li>
                  </a>
                  <a class="select-category" href="javascript:;" data-filter="ipad-ios" >
                    <li> <div class="container-filter__brand-content-list-btn">
                        Tab IOS
                    </div></li>
                  </a>
                  <a href="">
                    <li> <div class="container-filter__brand-content-list-btn">
                        <img src="https://didongthongminh.vn/images/products/cat/original/vivo42-b-50-1_1669949509.svg" alt="" class="">
                    </div></li>
                  </a>
                  <a class="select-category" href="javascript:;" data-filter="tai-nghe" >
                    <li> <div class="container-filter__brand-content-list-btn">
                       Tai Nghe
                    </div></li>
                  </a>
                  <a href="">
                    <li> <div class="container-filter__brand-content-list-btn">
                        <img src="https://didongthongminh.vn/images/products/cat/original/image-118_1669949533.svg" alt="" class="">
                    </div></li>
                  </a>
                  <a href="">
                    <li> <div class="container-filter__brand-content-list-btn">
                        <img src="https://didongthongminh.vn/images/products/cat/original/image-119_1669949559.svg" alt="" class="">
                    </div></li>
                  </a>
                  <a class="select-category" href="javascript:;" data-filter="all">
                    <li> <div class="container-filter__brand-content-list-btn">
                      Tất Cả
                    </div></li>
                  </a>
                 
                </ul>
              </div>
            
            </div>
          </div>
        </div>
      </section>

      <section class="app-category-filter__attribute container-fluid">
        <div class="container">
            <div class="container-filter__attribute">
                <div class="container-filter__attribute-content">
              
                    <div class="container-filter__attribute-content-list">
                      <ul>
                        <a href="">
                          <li>
                          <div class="container-filter__attribute-content-list-btn">
                            <div class=""><i class="fa fa-filter" aria-hidden="true"></i> Bộ lọc</div>
                          </div>
                      </li>
                        </a>

                        <a href="">
                            <li>
                            <div class="container-filter__attribute-content-list-btn">
                              <div class=""><i class="fa fa-cart-plus" aria-hidden="true"></i> Sẵn hàng</div>
                            </div>
                        </li>
                          </a>
                          <a href="">
                            <li>
                            <div class="container-filter__attribute-content-list-btn">
                              <span class="">Danh mục</span>
                              <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </div>
                        </li>
                          </a>
                          <a href="">
                            <li>
                            <div class="container-filter__attribute-content-list-btn">
                              <span class="">Giá</span>
                              <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </div>
                        </li>
                          </a>

                          <a href="">
                            <li>
                            <div class="container-filter__attribute-content-list-btn">
                              <span class="">RAM</span>
                              <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </div>
                        </li>
                          </a>
                          <a href="">
                            <li>
                            <div class="container-filter__attribute-content-list-btn">
                              <span class="">Bộ nhớ trong</span>
                              <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </div>
                        </li>
                          </a>
                          <a href="">
                            <li>
                            <div class="container-filter__attribute-content-list-btn">
                              <span class="">Mục đích dùng</span>
                              <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </div>
                        </li>
                          </a>

                          <a href="">
                            <li>
                            <div class="container-filter__attribute-content-list-btn">
                              <span class="">Màn hình</span>
                              <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </div>
                        </li>
                          </a>

                          <a href="">
                            <li>
                            <div class="container-filter__attribute-content-list-btn">
                              <span class="">Tình trạng</span>
                              <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </div>
                        </li>
                          </a>

                          <a href="">
                            <li>
                            <div class="container-filter__attribute-content-list-btn">
                              <span class="">Loại điện thoại</span>
                              <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </div>
                        </li>
                          </a>
                      </ul>
                    </div>
                  
                  </div>
            </div>
        </div>
      </section>
     <section class="app-category-sort container-fluid">
        <div class="container">
            <div class="app-category-sort__content">
                <div class="app-category-sort__content-item "><span class=""><?=count($data)?></span> <b class="">sản phẩm</b>
                </div>



                <div class="app-category-sort__content-item ">
                    <div class="app-category-sort__content-item-icon"><i class="fa fa-bolt" aria-hidden="true"></i><span class="">Flashsale</span></div>
                    <div class="app-category-sort__content-item-icon"><i class="fa fa-star-o" aria-hidden="true"></i> <span class="">Hàng mới</span></div>
                    <div class="app-category-sort__content-item-icon">
                        <i class="fa fa-bullseye" aria-hidden="true"></i> <span class="">Hàng cũ</span>
                    </div>
                </div>




                <div class="app-category-sort__content-item "><span class="">Sắp xếp </span><i class="fa fa-angle-down" aria-hidden="true"></i></div>
            </div>
        </div>
     </section>


     <section class="app-phone-suggest container-fluid ">
        <div class="container">
         

          <div class="app-phone-suggest__product show-products">
          	
             
             
          </div>

          <div class="app-phone-suggest__product-paginate">
              
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
   
    function	renderProduct(paginateType = false){
    	
     $('.show-products').empty();
    	$.ajax({
            method: "GET",
            url: "./DbHelp/product.php"+ window.location.search,
        })
        .done(function(msg) {
        	
          msg = JSON.parse(msg);
          
          
           
           if(msg.bread_crumb.business != false){
             	$('.bread-crumb-ca').text(msg.bread_crumb.category);
              $('.bread-crumb-bu').text(msg.bread_crumb.business);
           }else {
           	  $('.bread-crumb-ca').text("");
              $('.bread-crumb-bu').text(msg.bread_crumb.category);
           }
           
          const dataItem = msg.data;
       
          dataItem.map((value, key) => {
          	 $('.show-products').append(`<div class="app-phone-suggest__product-item temp-product">
                <div class="app-top-sale__day-carousel-item-img">
                  <img
                    src="./public/img/${value.thumb}"
                    alt=""
                  />
                  <div class="app-top-sale__day-carousel-item-img-bottom-gift">
                    <img
                      src="https://didongthongminh.vn/modules/products/assets/images/icon-gift.svg"
                      alt=""
                    />
                  </div>
                </div>
  
                <div class="app-top-sale__day-carousel-item-detail">
                  <div class="app-top-sale__day-carousel-item-detail-title">
                    <a href="detail.php?slug=${value.slug}">${value.name}</a>
                  </div>
                  <div class="app-top-sale__day-carousel-item-detail-price">
                    <b>${value.price_sale}đ</b> <span>${value.price}đ</span>
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
                      class="app-top-plush-category__add"
                    >
                      <i class="fa fa-plus-circle" aria-hidden="true"></i> So sánh
                    </div>
                  </div>
                </div>
                <div class="app-top-sale__day-carousel-item-img-top-sale">
                  -${Math.ceil(100 - ((value.price_sale * 100) / value.price ))}% 
                </div>
              </div>`);
          });
          
          const paginate = msg.paginate ;
        $('.app-phone-suggest__product-paginate').empty();
        
        if(paginate.next_page != false){
        	$('.app-phone-suggest__product-paginate').html(`<button data-page="${paginate.next_page}" class="show-paginate-more">Xem thêm <span> ${paginate.total - paginate.total_view} sản phẩm</span><i class="fa fa-angle-double-right" aria-hidden="true"></i></button>`);
        }

        if(paginateType){
        
          $(".temp-product").get(Number($('.temp-product').length) - 5).scrollIntoView({behavior: 'smooth'});
        
        }
        });
        
        
    	
    }
    renderProduct(true);
    
    function addQSParm(name, value, myUrl = '') {
  if(myUrl == ''){
    var myUrl = window.location.origin+''+window.location.pathname;
    
  }

  var re = new RegExp("([?&]" + name + "=)[^&]+", "");

  function add(sep) {
      myUrl += sep + name + "=" + encodeURIComponent(value);
  }

  function change() {
      myUrl = myUrl.replace(re, "$1" + encodeURIComponent(value));
  }
  if (myUrl.indexOf("?") === -1) {
      add("?");
  } else {
      if (re.test(myUrl)) {
          change();
      } else {
          add("&");
      }
  }
  return myUrl;
}


     $(document).on("click", ".show-paginate-more", function(){  

   	 	   const nextPage = Number($(this).attr("data-page"));
   	 	   window.history.replaceState( {} , '', addQSParm('page', nextPage, window.location.search) );
   	 	 renderProduct(true);
    
    //      $([document.documentElement, document.body]).animate({
    //     scrollTop: $(".app-phone-suggest__product-paginate").offset().top
    // }, 600);
   	 	   
   	 });
   	 $('.select-category').click(function(){
   	 	 
   	 	  
   	 	   if($(this).attr("data-filter") != 'all'){
   	 	   	window.history.replaceState({}, document.title, window.location.pathname);
   	 	   	window.history.replaceState( {} , '', addQSParm('ca', $(this).attr("data-filter"), window.location.search) );
   	 	      	  renderProduct();
   	 	   }else {
   	 	   	window.history.replaceState({}, document.title, window.location.pathname);
   	 	     renderProduct();
   	 	   }
   	 	   $([document.documentElement, document.body]).animate({
        scrollTop: $(".show-products").offset().top
    }, 600);
   	 });
    
    
    </script>
   <?php
require_once('./post/footer.php');
?>