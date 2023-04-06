
    <footer class="app-footer container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 support-paying">
            <div class="app-footer-item">
              <ul>
                <li class="app-footer-item__title">Thông tin liên hệ</li>
                <li><a href="">Giới thiệu công ty</a></li>
                <li><a href="">Hệ thống cửa hàng</a></li>
                <li><a href="">Chính sách bảo mật</a></li>
                <li><a href="">Mail : online@dcenter.vn</a></li>
                <li class="app-footer-item__title">Hỗ trợ thanh toán</li>
                <div class="app-footer-paying__icon">
                  <div class="app-footer-paying__icon-item">
                    <img
                      src="https://didongthongminh.vn/templates/default/images/visa.svg"
                      alt=""
                    />
                  </div>
                  <div class="app-footer-paying__icon-item">
                    <img
                      src="https://didongthongminh.vn/templates/default/images/master_card.svg"
                      alt=""
                    />
                  </div>
                  <div class="app-footer-paying__icon-item">
                    <img
                      src="https://didongthongminh.vn/templates/default/images/jbc.svg"
                      alt=""
                    />
                  </div>
                  <div class="app-footer-paying__icon-item">
                    <img
                      src="https://didongthongminh.vn/templates/default/images/money.svg"
                      alt=""
                    />
                  </div>
                  <div class="app-footer-paying__icon-item">
                    <img
                      src="https://didongthongminh.vn/templates/default/images/inter.svg"
                      alt=""
                    />
                  </div>
                  <div class="app-footer-paying__icon-item">
                    <img
                      src="https://didongthongminh.vn/templates/default/images/tragop.svg"
                      alt=""
                    />
                  </div>
                </div>

                <div class="app-footer-paying__icon">
                  <div class="app-footer-paying__icon-item">
                    <img
                      src="https://didongthongminh.vn/templates/default/images/bct.svg"
                      alt=""
                    />
                  </div>
                  <div class="app-footer-paying__icon-item">
                    <img
                      src="https://images.dmca.com/Badges/_dmca_premi_badge_4.png?ID=2dc901db-8576-4fea-ac8f-709448f10282"
                      alt=""
                    />
                  </div>
                </div>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="app-footer-item">
              <ul>
                <li class="app-footer-item__title">Thông tin khác</li>
                <li><a href="">Chính sách đổi trả</a></li>
                <li><a href="">Quy chế hoạt động</a></li>
                <li><a href="">Chính sách bảo hành</a></li>
                <li><a href="">Tuyển dụng</a></li>
                <li><a href="">Khách hàng doanh nghiệp</a></li>
                <li><a href="">Tin tức</a></li>
                <li><a href="">Trade-in thu cũ lên đời</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="app-footer-item">
              <ul>
                <li class="app-footer-item__title">Thông tin hỗ trợ</li>
                <li><a href="">Mua và thanh toán Online</a></li>
                <li><a href="">Mua trả góp Online</a></li>
                <li><a href="">Trung tâm bảo hành chính hãng</a></li>
                <li><a href="">Quy định về viêc sao lưu dữ liệu</a></li>
                <li><a href="">Hướng dẫn thanh toán chuyển đổi</a></li>
                <li><a href="">Dịch vụ bảo hành điền thoại</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="app-footer-item">
              <ul>
                <li class="app-footer-item__title">Gọi tư vấn & khiếu nại</li>
                <li><a href="">Gọi mua hàng : 0855100001</a></li>
                <li><a href="">Hỗ trợ ký thuật : 18006502</a></li>
                <li><a href="">Hợp tác kinh doanh : 19006122</a></li>
                <li data-id="4" class="app-footer-item__title">Kết nối với chúng tôi</li>
                <div class="app-footer-paying__icon">
                  <div class="app-footer-paying__icon-item">
                    <img
                      src="https://didongthongminh.vn/templates/default/images/fb.svg"
                      alt=""
                    />
                  </div>
                  <div class="app-footer-paying__icon-item">
                    <img
                      src="https://didongthongminh.vn/templates/default/images/ytb.svg"
                      alt=""
                    />
                  </div>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="app-copyright container-fluid">
      <span class="app-copyright-span"
        >@ Bản quyền thuộc về Công Ty Cổ Phần Viễn Thông Di Động Thông
        Minh</span
      >
    </div>
 
    
    <script src="../public/Post/carousel/dist/owl.carousel.min.js"></script>

    <script src="../public/Post/javascript/index.js">

    </script>
    <script>
     
       var owls = $(".app-detail-top__content-carousel-bottom-detail");
       var owl = $(".app-detail-top__content-carousel-top-detail");
       
       owl.owlCarousel({
        //onDragged: callback,
        onChanged :callback,
        items: 1,
        margin: 11,
        autoplay: false,
        center : true,
        loop: true,
        dots: false,
        nav: true,
        autoplayTimeout: 5000,
        
      });

  
  
      owls.owlCarousel({
        items: 1,
        margin: 11,
        autoplay: false,
        
        loop: false,
        dots: false,
        nav: false,
        autoplayTimeout: 5000,

        responsive: {
          0: {
            items: 6,
          },
          600: {
            items: 6,
          },

          800: {
            items: 6,
          },
          1000: {
            items: 6,
          },
          1200: {
            items: 6,
          },
        },
      });

      

     

      $(".click-show-slide").click(function () {
        $(
          ".app-detail-top__content-carousel-bottom-detail .owl-item"
        ).removeClass("carousel-active-border");
        $(this).addClass("carousel-active-border");

        let point = $(this).attr("data-slide");
     
        owl.trigger("to.owl.carousel", Number(point) - 1, [300]);
      });



      function callback(event) {
        // var item     = event.item.index;
        let current =
          event.item.index + 1 - event.relatedTarget._clones.length / 2;
        let itemsCount = event.item.count;

        if (current > itemsCount) {
          current = 1;
        }

        if (current === 0) {
          current = event.item.count;
        }

   
          
         owls.trigger("to.owl.carousel", current-1, [300]);
       $('.app-detail-top__content-carousel-bottom-detail .owl-item').removeClass('carousel-active-border');
       var selectors = $('.click-show-slide');
       selectors.eq(current-1).addClass('carousel-active-border');
      }
      $(window).on('popstate', function(event) {
    if (location.href.search('slide=true') >= 0) {
    
    $('.app-click-show__library').addClass('position-carousel');
    owl.trigger("refresh.owl.carousel",  [300]);
    owls.trigger("refresh.owl.carousel",  [300]);
}
else {
    $('.app-click-show__library').removeClass('position-carousel');
    owl.trigger("refresh.owl.carousel",  [300]);
    owls.trigger("refresh.owl.carousel",  [300]);
}
});

$(".app-detail-promotion__content-flex").owlCarousel({
        items: 1,
       margin : 22,
        autoplay: false,
        
        loop: false,
        dots: false,
        nav: true,
        autoplayTimeout: 5000,
    

        responsive: {
          0: {
            items: 2,
            center: true,
            autoplay: false,
          },
          600: {
            items: 3,
          },

          800: {
            items: 3,
          },
          1000: {
            items: 4,
          },
          1200: {
            items: 4,
          },
        },
      });


    </script>
    <script >
     
      $(document).on("click", ".show-more-detail", function(){
          $('.app-detail-bottom__item-content').css('height', 'auto');
          $(this).addClass('close-more-detail');
          $(this).removeClass('show-more-detail');
          $(this).text('Thu gọn') ;
      })

     

      $(document).on("click", ".close-more-detail", function() {
        $(this).removeClass('close-more-detail');
           $(this).addClass('show-more-detail');
           $('.app-detail-bottom__item-content').css('height', '700px');
           $(this).text('Xem thêm') ;
       });
      


    </script>


  </body>
</html>
