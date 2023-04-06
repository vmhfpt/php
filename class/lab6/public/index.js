

$('.app-product-promotion__carousel-item-add, .app-suggest__product-item-add').click(function(){
     $('.show-detail-eye-popup-success').css('display', 'flex');
     var index = Number($('.app-suggest__product-item-add').index(this));
     var image = ( $('.get-img').eq(index).attr('src'));
     var promotion = ($('.app-suggest__product-item-sale').eq(index).text());
     var name = ($('.data-name').eq(index).text());
     var price = ($('.data-price').eq(index).text());
     var price_sale = ($('.data-price-sale').eq(index).text());
     $('.show-image').attr('src', image);
     $('.show-promotion').text(promotion);
     $('.show-name').text(name);
     $('.show-price').text(price);
     $('.show-price-sale').text(price_sale);
});  



$('.show-detail-eye-popup-success').click((e) => {
 
if ($(e.target).children(".show-detail-eye-success-add").length === 0) {
  
}else {
$('.show-detail-eye-popup-success').css('display', 'none');
}
})
$('.icon-app-close-popup-add').click(function(){
$('.show-detail-eye-popup-success').css('display', 'none');
})

