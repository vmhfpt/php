<?php



if(!session_id()){
  session_start();
  
}
ob_start();
//  session_destroy();
//  die();



require_once('./DbHelp/handle.php');
require_once('./post/header.php');
require './admin/google/vendor/autoload.php';



require_once './admin/Facebook/autoload.php';
use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;

$email = '';
$password = '';

$errorPassWord = false;
$errorEmail = false;
$state = false;
if (!empty($_POST)) {
  
    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
    $regexPassword = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        
        if (!preg_match($regex, $email)) {
            $errorEmail = "Email không hợp lệ !";
        }

       
    }

    if (isset($_POST['password'])) {
        $password = $_POST['password'];
        if (!preg_match($regexPassword, $password)) {
            $errorPassWord = "Mật khẩu phải chứa chữ cái thường, in hoa và số !";
        }
       
    }


   
    if (!$errorEmail && !$errorPassWord) {
       
        $sql = "SELECT * FROM `users` WHERE `password` = '" . md5($password) . "' AND `email` = '" . $email . "'";
        $data = executeSingleResult($sql);
        if (($data == null)) {
            session_unset();
            session_destroy();
            $state = "Email hoặc mật khẩu không chính xác !";
        
        } else {
          
            $_SESSION["user"] =  [
                'id' => $data['id'],
                'name' => $data['name'],
                'email' => $data['email'],
                'picture' => false
              ];
              header('Location: dashboard.php');
        }
    }
  }




/******************Config login facebook*************** */
$fb = new Facebook(array(
  'app_id' => '540652344880063',
  'app_secret' => '259436cafd3faacc91f51fc61a7621a2',
  'default_graph_version' => 'v3.2',
));
$helper = $fb->getRedirectLoginHelper();


if(!isset($_GET['prompt'])){
  try {
    if(isset($_SESSION['facebook_access_token'])){
        $accessToken = $_SESSION['facebook_access_token'];
    }else{
          $accessToken = $helper->getAccessToken();
    }
  } catch(FacebookResponseException $e) {
     echo 'Graph returned an error: ' . $e->getMessage();
      exit;
  } catch(FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
      exit;
  }
}

if(isset($accessToken) && !isset($_GET['prompt'])){
  if(isset($_SESSION['facebook_access_token'])){
      $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
  }else{
      // Put short-lived access token in session
      $_SESSION['facebook_access_token'] = (string) $accessToken;
      
        // OAuth 2.0 client handler helps to manage access tokens
      $oAuth2Client = $fb->getOAuth2Client();
      
      // Exchanges a short-lived access token for a long-lived one
      $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
      $_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
      
      // Set default access token to be used in script
      $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
  }
  
  // Redirect the user back to the same page if url has "code" parameter in query string
 
  
  // Getting user's profile info from Facebook
  try {
      $graphResponse = $fb->get('/me?fields=name,first_name,last_name,email,link,gender,picture');
      $fbUser = $graphResponse->getGraphUser();
  } catch(FacebookResponseException $e) {
      echo 'Graph returned an error: ' . $e->getMessage();
      session_destroy();
      // Redirect user back to app login page
      header("Location: ./login.php");
      exit;
  } catch(FacebookSDKException $e) {
      echo 'Facebook SDK returned an error: ' . $e->getMessage();
      exit;
  }
  
  // Initialize User class
  echo $fbUser['name'] . "<br/>";
  echo $fbUser['email'] . "<br/>";
  echo $fbUser['picture']['url'] . "<br/>";
   
 
  $sql = "SELECT * FROM users WHERE email = '".$fbUser['email']."' AND login_type = 3";
  $dataItem = executeSingleResult($sql);
 // var_dump($dataItem); die();
  if($dataItem == null){
     $sql = "INSERT INTO `users` (`name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `city_id`, `district_id`, `wards_id`, `detail_address`, `phone_number`, `google_id`, `facebook_id`, `login_type`) VALUES ( '".$fbUser['name'] ."', '".$fbUser['email']."', NULL, '', NULL, '".date("y-m-d h:m:s")."', '".date("y-m-d h:m:s")."', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3')";
     $idUser = insertAndGetLastId($sql);

     $_SESSION["user"] =  [
      'id' =>  $idUser,
      'name' => $fbUser['name'],
      'email' =>$fbUser['email'],
      'picture' =>$fbUser['picture']['url']
    ];
     header('Location: dashboard.php');
  }else {
    $_SESSION["user"] =  [
      'id' =>  $dataItem['id'],
      'name' => $fbUser['name'],
      'email' =>$fbUser['email'],
      'picture' =>$fbUser['picture']['url']
    ];
    header('Location: dashboard.php');
  }
  
 die();
  
  // Render Facebook profile data

}else{
$permissions = ['email']; // Optional permissions
$loginURL = $helper->getLoginUrl('http://localhost:84/login.php', $permissions);
}




/***************End Config login facebook ****************** */







/***************Config login Google****************** */

 $client = new Google_Client();


// Enter your Client ID
$client->setClientId('361358319183-iruhsb51i3uublcu06dfp5gmqj42o5ga.apps.googleusercontent.com');
// Enter your Client Secrect
$client->setClientSecret('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');
// Enter the Redirect URL
$client->setRedirectUri('http://localhost:84/login.php');

// Adding those scopes which we want to get (email & profile Information)
$client->addScope("email");
$client->addScope("profile");


if(isset($_GET['code']) && isset($_GET['prompt']) ){

  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

  if(!isset($token["error"])){

      $client->setAccessToken($token['access_token']);

      // getting profile information
      $google_oauth = new Google_Service_Oauth2($client);
      $google_account_info = $google_oauth->userinfo->get();



    //  echo $google_account_info->name . "<br/>";
   //   echo $google_account_info->email . "<br/>";
   //   echo $google_account_info->picture . "<br/>";

    //  var_dump( $google_account_info);
 
      $sql = "SELECT * FROM users WHERE email = '".$google_account_info->email."' AND login_type = 2";
      $dataItem = executeSingleResult($sql);
     // var_dump($dataItem); die();
      if($dataItem == null){
         $sql = "INSERT INTO `users` (`name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `city_id`, `district_id`, `wards_id`, `detail_address`, `phone_number`, `google_id`, `facebook_id`, `login_type`) VALUES ( '".$google_account_info->name ."', '".$google_account_info->email."', NULL, '', NULL, '".date("y-m-d h:m:s")."', '".date("y-m-d h:m:s")."', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2')";
         
         $userId = insertAndGetLastId($sql);

         $_SESSION["user"] =  [
          'id' => $userId,
          'name' => $google_account_info->name,
          'email' =>$google_account_info->email,
          'picture' =>$google_account_info->picture
        ];
         header('Location: dashboard.php');
      }else {
        $_SESSION["user"] =  [
          'id' => $dataItem['id'],
          'name' => $google_account_info->name,
          'email' =>$google_account_info->email,
          'picture' =>$google_account_info->picture
        ];
        header('Location: dashboard.php');
      }
     die();
      

  }
  else{
     // header('Location: login.php');
     echo "redirect";
      die();
  }
}
 

/***************End Config login Google****************** */



?>
   <style >
      .popup-wrong-user {
        text-align: center;
        
        background : rgb(220, 18, 18);
        width: 100%;
    padding: 12px 0px;
    border-radius: 5px;
    font-size: 16px;
    border: none;
    color: white;
   
    font-weight: 600;
      }
   </style>
    <main>
      <section class="app-bread-crumb container-fluid">
        <div class="container">
          <ul class="">
            <li class=""><a href="" class="">Trang chủ</a> /</li>
            <li class=""><a href="" class="">Tin tức & Sự kiện</a></li>
          </ul>
        </div>
      </section>

      <div class="app-form container-fluid">
        <div class="container form-center">
             <div class="app-form-container">
                 <div class="app-form-container__left ">
                     <div class="app-form-container__left-img">
                        <img src="https://didongthongminh.vn/modules/members/assets/images/log.svg" alt="" class="">
                     </div>

                     <div class="app-form-container__left-list">
                        <span class="">QUYỀN LỢI THÀNH VIÊN</span>
                        <ul class="">
                            <li class=""><i class="fa fa-check-circle-o" aria-hidden="true"></i> <span class="">Mua hàng khắp thế giới cực dễ dàng, nhanh chóng</span></li>
                            <li class=""><i class="fa fa-check-circle-o" aria-hidden="true"></i><span class="">Theo dõi chi tiết đơn hàng, địa chỉ thanh toán dễ dàng</span></li>
                            <li class=""><i class="fa fa-check-circle-o" aria-hidden="true"></i> <span class="">Nhận nhiều chương trình ưu đãi hấp dẫn từ chúng tôi</span></li>
                        </ul>
                     </div>
                 </div>
                 <style >
                  .force-background {
                    position: relative;
                    background: white;
                    width : 390px;
                    padding : 45px 20px 20px 20px;
                  }
                  .popup-force {
                    padding : 0px 0px;
                    display : flex;
                    align-items: center;
                    justify-content: center;
                    z-index: 1000;
    position: absolute;
    top : 0px;
    left : 0px;
    width : 100%;
    height : 100%;
    background: rgba(0, 0, 0, 0.704);
}
.popup-force-tab {
  cursor: pointer;
  position: absolute;
  top : 0px;
  left : 0px;
  width : 100%;
  display : flex;
  justify-content: space-between;
  padding : 10px 20px;
}
                 </style>
                 <div style="position : relative" class="app-form-container__right ">
                 <div class="show-force"></div>
                 
                    <div class="app-form-container__right-tab">
                         <span class="app-form-container__right-tab-active"><a href="login.php" class="">Đăng nhập</a></span>
                         <span class=""><a href="register.php" class="">Đăng ký</a></span>
                    </div>

                    <div class="app-form-container__right-form">
                   
                        <form action="" method="post">
                            <div class="app-form-container__right-form-content">
                                <div class="app-form-container__right-form-item">
                                     <input value="<?=$email?>" placeholder="Email đăng nhập*" type="email" class="" name="email">
                                   

                                     <?php
                            if ($errorEmail != false) {
                                ?>
                             
                                <span style="font-size : 13px; color : red;" class=""><?= $errorEmail ?></span>

                            <?php
                            }
                            ?>
                                </div>
                                <div class="app-form-container__right-form-item">
                                    <input value="<?=$password?>" placeholder="Mật khẩu*" type="password" class="" name="password">
                                    <?php
                            if ($errorPassWord != false) {
                                ?>
                             
                               
                                <span style="font-size : 13px; color : red;" class=""><?= $errorPassWord ?></span>
                            <?php
                            }
                            ?>
                                
                               </div>
                             
                              <?php
                                if ($state != false) {
                                    ?>
                                     <div class="popup-wrong-user"><?= $state ?></div>
                                  
                                <?php
                                }
                                ?>
                               <div class="app-form-container__right-form-item app-form-container__right-form-item-right">
                                 <span class="onclick-force">Quên mật khẩu?</span>
                           </div>

                           <div class="app-form-container__right-form-item">
                           <button  class="bg-login"> Đăng nhập</button>
                       </div>

                        <div class="wrapper">
                             <span class=""></span>
                             <span class="">Hoặc đăng nhập bằng</span>
                             <span class=""></span>
                        </div>

                        <div class="app-form-container__right-form-item">
                            <a href="<?php echo $client->createAuthUrl(); ?>" class=""><button type="button" class="bg-google"> Google</button></a>
                        </div>

                        <div class="app-form-container__right-form-item">
                          <a href="<?=htmlspecialchars($loginURL)?>" class="">  <button type="button" class="bg-facebook"> Facebook</button></a>
                          
                        </div>

                            </div>
                        </form>

                        <div class="app-form-container__right-form-policy">
                            <p class="">Di Động Thông Minh cam kết bảo mật và sẽ không bao giờ đăng hay chia sẻ thông tin mà chưa có được sự đồng ý của bạn.</p>
                        </div>
                    </div>


                 </div>
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
      var errorInputOTP = true;
      var errorPassword = true;
      var emailOTP = '';

      $(document).on("input keyup paste", ".password-force-input", function(){   
     
      
     var text = $(this).val();

if(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/.test(text)){
$('.error-password-force').text('');
errorPassword = false;
}else {
$('.error-password-force').text('* Mật khẩu phải bao gồm chữ cái in hoa, thường và số');
errorPassword = true;

}
  });




      $(document).on("input keyup paste", ".otp-input", function(){   
     
      
     var text = $(this).val();

if(/^[0-9]{6}$/.test(text)){
$('.error-otp-force').text('');
errorInputOTP = false;
}else {
$('.error-otp-force').text('* Mã OTP chỉ bao gồm 6 số');
errorInputOTP = true;

}
  });



       $(document).on("input keyup paste", ".force-input", function(){   
     
      
        var text = $(this).val();

if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(text)){
 $('.error-email-force').text('');
 errorInputEmail = false;
}else {
 $('.error-email-force').text('* Email không hợp lệ');
 errorInputEmail = true;
 
}
     });

     $(document).on("click", ".auth-otp", function(){ 
        if(errorPassword == false && errorInputOTP == false){
          $.ajax({
            method: "POST",
            url: "./DbHelp/force.php",
            data: {
                type : "send-otp",
                password : $('.password-force-input').val(),
                otp : $('.otp-input').val(),
                email : emailOTP 
            }
        })
        .done(function(msg) {
          msg = JSON.parse(msg);
           console.log(msg);
           if(msg.status == 'error'){
              $('.error-otp-force').text(msg.message);
           }else {
            window.location.replace("dashboard.php");
           }

        });
        }
     });


     $(document).on("click", ".ajax-force", function(){ 
      var that = this;  
     
     



       if(  errorInputEmail == false){
        $(this).html(`<i style="font-size : 23px !important" class=" fa fa-spinner fa-spin"></i>`);
      $(this).css('pointer-events', 'none');
        $.ajax({
            method: "POST",
            url: "./DbHelp/force.php",
            data: {
                type : "authentication",
                email: $('.force-input').val(),
                
            }
        })
        .done(function(msg) {
          $(that).html(`Xác thực`);
          $(that).css('pointer-events', 'auto');
          msg = JSON.parse(msg);
            
            if(msg.status == 'error'){
              $('.error-email-force').text(msg.message);
            }else {

              $('.ajax-force').addClass('auth-otp');
              $('.ajax-force').removeClass('ajax-force');
              

              emailOTP = $('.force-input').val();
              $('.show-input-list').empty();
      var template = `  <div class="app-form-container__right-form-item">
                                 <input  placeholder="Mã OTP*" type="number" class="otp-input" >
                               
 
                                 <span style="font-size : 13px; color : red;" class="error-otp-force">* Bắt buộc nhập</span>
                            </div> <br/>
                            <div class="app-form-container__right-form-item">
                                 <input  placeholder="Mật khẩu*" type="password" class="password-force-input" >
                               
 
                                 <span style="font-size : 13px; color : red;" class="error-password-force">* Bắt buộc nhập</span>
                            </div> `;
       $('.show-input-list').append(template);
            }

        });


       }
     });


     $(document).on("click", ".onclick-force", function(){   
        $('.show-force').after(`<div class="popup-force">
                  
                  <div class="app-form-container__right-form">
                    
                    <form class="force-background" action="" >
                       <div class="popup-force-tab">
                          <span class="">Quên mật khẩu</span>
                          <span class="close-force">&times;</span>
                       </div>
                     
                        <div class="app-form-container__right-form-content">
                         <div class="show-input-list">
                         <div class="app-form-container__right-form-item">
                                 <input  placeholder="Email khôi phục*" type="email" class="force-input" name="email">
                               
 
                                 <span style="font-size : 13px; color : red;" class="error-email-force">* Bắt buộc nhập</span>
                            </div>
                         </div>
                
                        
                         
                           
                           
 
                       <div class="app-form-container__right-form-item">
                       <button type="button" class="bg-login ajax-force"> Xác thực</button>
                   </div>
 
                        </div>
                    </form>
 
                   
                </div>
                  </div>`);
     });
     $(document).on("click", ".close-force", function(){
      $('.popup-force').remove();
     });
    </script>
    <?php
   
require_once('./post/footer.php');
ob_end_flush(); 
?>