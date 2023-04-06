<?php
session_start();
ob_start();
$user = $_SESSION["user"];
if (is_null($user)) {
  header('Location: login.php');
}

if (!empty($_GET)) {
  if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_destroy();
    header('Location: index.php');
  }
}
//var_dump($user);
require_once('./DbHelp/handle.php');
require_once('./post/header.php');
$sql = "SELECT * FROM `oder` WHERE `user_id` = '" . $user['id'] . "'";
$data = executeResult($sql);



?>
<main>
  <style>
    .app-user-content__table table {
      background: red;
    }

    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    th {
      font-size: 16px;
    }

    td,
    th {

      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }

    .app-user-content__table-btn-edit {
      text-align: center;
      color: orange;
      cursor: pointer;
    }

    .app-user-content__table-btn-delete {
      text-align: center;
      color: red;
      cursor: pointer;
    }

    .app-user-popup__cart {
      display : none;
      animation: identifier-cart 0.4s ease-in-out;
      position: fixed;
      top: 0px;
      left: 0px;
      background: rgba(43, 43, 43, 0.536);
      z-index: 9999;
      width: 100vw;
      height: 100vh;
    }
    @keyframes identifier-cart {
      0% {
        opacity: 0.0;
        top : 40px;
      }
      100% {
        opacity: 1.0;
        top : 0px;
      }
    }

    .app-user-popup__cart-container {
      background: white;
      width: 790px;
      height: 75vh;
    }

    .app-user-popup__cart-tab {
      border-bottom: 1px solid #eee;
      font-weight: 500;
      font-size: 19px;
      display: flex;
      justify-content: space-between;
      padding: 10px 20px;
    }
    .app-user-content__table img {
      width : 45px; 
      height : 45px;
    }
    .app-user-popup__cart-tab-close {
      cursor: pointer;
    }
  </style>
  <section class="app-user-popup__cart container-fluid">
    <div class="app-user-popup__cart-container">
      <div class="app-user-popup__cart-tab">
        <span class="">Chi tiết đơn hàng </span>
        <span class="app-user-popup__cart-tab-close">&times;</span>
      </div>
      <div class="app-user-content__table show-app-user-content__table">
      
      </div>
    </div>
  </section>
  <section class="app-user container-fluid ">
    <div class="container">
      <div class="app-user-content">
        <div class="app-user-content__item ">
          <div class="app-user-content__item-content">
            <div class="app-user-content__item-content-tab">
              <?php
              if ($user['picture']) {
                echo ' <img style="border-radius : 100%; width : 50px; height : 50px;" src=' . $user['picture'] . ' alt="" class="">';
              } else {
                echo ' <i class="fa fa-user" aria-hidden="true"></i>';
              }
              ?>


              <span class="">Xin chào,</span>
              <b class=""><?= $user['name'] ?></b>
            </div>

            <div class="app-user-content__item-content-list">
              <div class="app-user-content__item-content-list-item">
                <div class="">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <div class="">
                  <span class="">Thông tin tài khoản</span>
                </div>
              </div>
              <div class="app-user-content__item-content-list-item">
                <div class="">
                  <i class="fa fa-file-text" aria-hidden="true"></i>
                </div>
                <div class="">
                  <span class="">Quản lý đơn hàng</span>
                </div>
              </div>
              <div class="app-user-content__item-content-list-item">
                <div class="">
                  <i class="fa fa-lock" aria-hidden="true"></i>
                </div>
                <div class="">
                  <span class="">Mật khẩu</span>
                </div>
              </div>
              <div class="app-user-content__item-content-list-item app-user-content__item-content-list-item-active">
                <div class="">
                  <i class="fa fa-address-card-o" aria-hidden="true"></i>
                </div>
                <div class="">
                  <span class="">Sổ địa chỉ</span>
                </div>
              </div>
              <div class="app-user-content__item-content-list-item">
                <div class="">
                  <i class="fa fa-power-off" aria-hidden="true"></i>
                </div>
                <div class="">
                  <a href="?action=logout" class=""> <span class="">Đăng xuất</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="app-user-content__item ">
          <div class="app-user-content__item-detail">
            <div class="app-user-content__item-detail-title">
              <h3 class="">Quản lý đơn hàng</h3>
            </div>

            <div class="app-user-content__item-detail-content">
              <?php
              if (!$data) {


              ?>
                <span class="">Bạn chưa thực hiện bất kỳ đơn đặt hàng nào trước đó!</span>
              <?php
              } else {
              ?>



                <div class="app-user-content__table">
                  <table>
                    <tr>
                      <th>STT</th>
                      <th>Tổng tiền</th>
                      <th>SĐT</th>
                      <th>Ngày đặt</th>
                      <th>Trạng thái</th>
                      <th></th>
                      <th></th>
                    </tr>

                    <?php
                    foreach ($data as $key => $value) {
                    ?>
                      <tr id="<?=$value['id']?>">
                        <td>#<?= $key + 1 ?></td>
                        <td><?= $value['total'] ?>VND</td>
                        <td><?= $value['phone_number'] ?></td>
                        <td><?= $value['created_at'] ?></td>
                        <td><?php
                            if ($value['active'] == 6) {
                              echo '<span class="badge badge-danger">Chưa tiếp nhận</span>';
                            }
                            if ($value['active'] == 5) {
                              echo '<span class="badge badge-warning">Đã tiếp nhận</span>';
                            }
                            if ($value['active'] == 4) {
                              echo '<span class="badge badge-warning">Đã rời kho</span>';
                            }
                            if ($value['active'] == 3) {
                              echo '<span class="badge badge-danger">Đang vận chuyển</span>';
                            }
                            if ($value['active'] == 2) {
                              echo '<span class="badge badge-warning">Đã đến nơi</span>';
                            }
                            if ($value['active'] == 1) {
                              echo '<span class="badge badge-success">Hoàn thành</span>';
                            }
                            if ($value['active'] == 0) {
                              echo '<span class="badge badge-dark">Đã hủy</span>';
                            }
                            ?></td>
                        <td class="app-user-content__table-btn-edit"><i class="fa fa-pencil-square-o click-render-show" data-id="<?=$value['id']?>" aria-hidden="true"></i></td>
                        <td class="app-user-content__table-btn-delete"><i class="fa fa-trash click-render-delete" data-id="<?=$value['id']?>" aria-hidden="true"></i></td>
                      </tr>
                    <?php
                    }
                    ?>




                  </table>
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
  <script>
$(document).on("click", ".click-render-delete", function(){
       var id = $(this).attr('data-id');
        $('#' + id).remove();
        
      $.ajax({
            method: "POST",
            url: "./showcart.php",
            data: { 
                type : 'delete_all',
                id: id
            }
        })
        .done(function(msg) {
            
        });
    });



    $(document).on("click", ".click-btn-delete", function(){
      var id = $(this).attr('data-item');
      $('#data-delete-'+ $(this).attr('data-item') ).remove();
      $.ajax({
            method: "POST",
            url: "./showcart.php",
            data: { 
                type : 'delete',
                id: id
            }
        })
        .done(function(msg) {
            
        });
    });
    $(document).on("click", ".app-user-popup__cart-tab-close", function(){
      $('.app-user-popup__cart').css('display', 'none');
    });
    $(document).on("click", ".click-render-show", function(){  
        $.ajax({
            method: "POST",
            url: "./showcart.php",
            data: { 
                type : 'show',
                id: $(this).attr('data-id')
            }
        })
        .done(function(msg) {
          msg = JSON.parse(msg);
          var template = '';
          for(var i = 0; i < msg.length; i ++){
             
           template = template + ` <tr id="data-delete-${msg[i].id}">
              <td>#${i + 1}</td>
              <td>${msg[i].name_product}VND</td>
              <td><img src="./public/img/${msg[i].thumb}" alt="" /></td>
              <td>${msg[i].total} VND</td>
              <td>${msg[i].quantity}</td>
              <td>${msg[i].quantity * msg[i].total} VND</td>
              <td class="app-user-content__table-btn-delete"><i class="fa fa-trash click-btn-delete" data-item="${msg[i].id}"  aria-hidden="true"></i></td>
            </tr>`; 
          }
 
        template = `<table>
          <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ảnh</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
            <th></th>
          </tr>` + template + `</table>`;
         // console.log(template);
         $('.show-app-user-content__table').html(template);
         $('.app-user-popup__cart').css('display', 'flex');
        });
    });
  </script>
</main>


<?php

require_once('./post/footer.php');
ob_end_flush();
?>