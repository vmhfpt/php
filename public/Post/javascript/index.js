 function getTotalCart(arr){
 	  	$('.app-header__top-item-icon-cart-quantity').empty();
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


getTotalCart(JSON.parse(localStorage.getItem("carts")));

var selector = $('.item');
        var sum = selector.length;
        for (var i = 0; i < selector.length; i++) {
            $('.show-nav').append(`<li id="${i + 1}" class="nav-item" data-show=${i + 1}></li>`);
        }
        var count = 1;
        function runSlide(item, type) {
            
            $('.item').removeClass("pot-prev pot-next")
            selector.hide();
            $(".nav-item").removeClass("active-nav");
            $(`#${item}`).addClass("active-nav");
            
            $(".carousel-detail__nav-item").removeClass("carousel-detail__active");
            $(`#carousel-detail__nav-${item}`).addClass("carousel-detail__active");
          selector.eq(item - 1).css("display", "block");
 
          if(type == 1){
            selector.eq(item - 1).addClass('pot-next');
          }else {
            selector.eq(item - 1).addClass('pot-prev');
          }
      
        }
        runSlide(count, 2);


        setInterval(function () {

            count++;
            if (count > sum) {
                count = 1;
            }
            runSlide(count, 2);
        }, 4500);



        $('.button-click').click(function () {

            if ($(this).attr("data-slide") == 'next') {
                count++;
                if (count > sum) {
                    count = 1;
                }
                runSlide(count, 2);

            } else {
                count--;
                if (count <= 0) {
                    count = sum;
                }
                runSlide(count, 1);

            }
        })
        $(document).on("click", ".nav-item", function () {
            count = Number($(this).attr("data-show"));
            runSlide(count, 2);
        });

        $(document).on("click", ".carousel-detail__nav-item", function () {
            count = Number($(this).attr("data-show"));
            runSlide(count, 2);
        });      







      $(".app-information__content, .app-information__content-second, .app-information__content-third, .app-information__content-four, .app-information__content-five").owlCarousel({
        items: 1,
        margin: 11,
        autoplay: true,
        
        loop: true,
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
            autoplay: true,
            items: 5,
          },
        },
      });

      $('.show-tab-category').click(function(){
          $('.app-fixed-mobile__detail').toggleClass("hidden-custom");
      })
    $('.app-fixed-mobile__detail-left li').click(function(){
        $('.app-fixed-mobile__detail-right').toggle();
    })