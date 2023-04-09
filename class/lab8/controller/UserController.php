<?php
  session_start();
  ob_start();
  define('ROOT_PATH', dirname(__DIR__) . '/');
  require_once(ROOT_PATH . "model/User.php");
  require_once('function/function.php');

  class UserController {
    public $user;
    public $view;
    private $username;
    private $password;
    private $confirmPassWord;
    private $email;

    function __construct()
    {
        $this->user = new User();
        $this->view  = new Helper();
    }

    public function remove($request){
        $id= $request['id'];
        $this->user->Destroy($id);
        echo json_encode([
            'status' => 'success'
        ]);
    }
    public function create($request){
        $errorUserName = false;
        $errorPassWord = false;
        $errorConfirmPassWord = false;
        $errorEmail = false;
        $this->confirmPassWord = $request['confirm-password'];
        $this->password = $request['password'];
        $this->email = $request['email'];
        $this->username = $request['user-name'];

        $regexEmail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
        $regexPassword = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';
        $regexUserName = '/^[A-Za-z][A-Za-z0-9]{5,31}$/';
         
            if (!preg_match($regexUserName,  $this->username)) {
                $errorUserName = "* Tên đăng nhập không hợp lệ !";
            } 
            if (!preg_match($regexEmail, $this->email)) {
                $errorEmail = "* Email không hợp lệ !";
            }
            if (!preg_match($regexPassword, $this->password)) {
                $errorPassWord = "* Mật khẩu phải chứa chữ cái thường, in hoa và số !";
            }
            if (!preg_match($regexPassword, $this->confirmPassWord)) {
                $errorConfirmPassWord = "* Mật khẩu xác thực phải chứa chữ cái thường, in hoa và số !";
            }
            if ($errorConfirmPassWord == false && $errorPassWord == false ) {
                if($this->password != $this->confirmPassWord){
                        $errorConfirmPassWord = "* Mật khẩu xác thực không khớp!";
                }
            }

       if( $errorUserName == false && $errorPassWord == false && $errorConfirmPassWord == false && $errorEmail == false){
         $this->user->Insert($this->username, $this->email, md5($this->password));
         header("Location: ". 'index.php');
       }else {
            $data = [
                'errorUserName' => $errorUserName,
                'errorEmail' => $errorEmail,
                'errorPassWord' => $errorPassWord,
                'errorConfirmPassWord' => $errorConfirmPassWord,
                'username' => $this->username,
                'email' => $this->email,
                'password' => $this->password,
                'confirmPassWord' => $this->confirmPassWord,
                
            ];
           return $this->view->View( $data, 'add');
       }
        
    }
    public function update($request){
        $errorUserName = false;
        $errorPassWord = false;
        $errorConfirmPassWord = false;
        $errorEmail = false;
        $state = false;
        $this->confirmPassWord = $request['confirm-password'];
        $this->password = $request['password'];
        $this->email = $request['email'];
        $this->username = $request['user-name'];

        $regexEmail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
        $regexPassword = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';
        $regexUserName = '/^[A-Za-z][A-Za-z0-9]{5,31}$/';
         
            if (!preg_match($regexUserName,  $this->username)) {
                $errorUserName = "* Tên đăng nhập không hợp lệ !";
            } 
            if (!preg_match($regexEmail, $this->email)) {
                $errorEmail = "* Email không hợp lệ !";
            }
            if (!preg_match($regexPassword, $this->password)) {
                $errorPassWord = "* Mật khẩu phải chứa chữ cái thường, in hoa và số !";
            }
            if (!preg_match($regexPassword, $this->confirmPassWord)) {
                $errorConfirmPassWord = "* Mật khẩu xác thực phải chứa chữ cái thường, in hoa và số !";
            }
            if ($errorConfirmPassWord == false && $errorPassWord == false ) {
                if($this->password != $this->confirmPassWord){
                        $errorConfirmPassWord = "* Mật khẩu xác thực không khớp!";
                }
            }

       if( $errorUserName == false && $errorPassWord == false && $errorConfirmPassWord == false && $errorEmail == false){
          $this->user->Update($_GET['id'], $this->username,$this->email, md5($this->password));
          $data = [
            
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password,
            'confirmPassWord' => $this->confirmPassWord,
            'state' => "Cập nhật thành công : ". $this->username
        ];
       return $this->view->View( $data, 'edit');


       }else {
            $data = [
                'errorUserName' => $errorUserName,
                'errorEmail' => $errorEmail,
                'errorPassWord' => $errorPassWord,
                'errorConfirmPassWord' => $errorConfirmPassWord,
                'username' => $this->username,
                'email' => $this->email,
                'password' => $this->password,
                'confirmPassWord' => $this->confirmPassWord,
                'state' => $state
            ];
           return $this->view->View( $data, 'edit');
       }


     
    }

    public function searchItem($request) {
       
       $key = $request['key'];
       $data = $this->user->Find($key);
       return ($this->view->View( $data, 'list'));
    }
    public function showList() {
         $data = $this->user->GetAll();
         return($this->view->View( $data, 'list'));
    }
    public function showDetai($request) {
        $id =  $request['id'];
        $data = $this->user->GetOne('id', $id);
        return($this->view->View( [$data], 'edit'));

    }
    public function showLogin(){
        return($this->view->View( [], 'login'));
    }
    public function login($request){
 
     
        $errorUserName = false;
        $errorPassWord = false;
        $state = false;
        $regexPassword = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';
        $regexUserName = '/^[A-Za-z][A-Za-z0-9]{5,31}$/';

        $this->username = $request['user-name'];
        $this->password = $request['password'];
          
        if (!preg_match($regexUserName,  $this->username)) {
            $errorUserName = "* Tên đăng nhập không hợp lệ !";
        }
        
        if (!preg_match($regexPassword, $this->password)) {
            $errorPassWord = "* Mật khẩu phải chứa chữ cái thường, in hoa và số !";
        }       

        if( $errorUserName == false && $errorPassWord == false){
            $check = $this->user->Login(  $this->username, md5( $this->password) );
            if(count($check) == 0){
                $state = true;
                $data = [
                    "errorUserName" => $errorUserName,
                    "errorPassword" => $errorPassWord,
                    "username" =>  $this->username,
                    "password" => $this->password,
                    "state" =>  $state
                  ];
                return ($this->view->View( $data, 'login'));
            }else {
                $_SESSION["lab8"] =  [
                    'id' => $check[0]['id'],
                    'username' => $check[0]['username'],
                    'email' => $check[0]['email'],
                    'password' => $check[0]['password']
                  ];
                  header("Location: ". 'user/dashboard');
            }
        }

       $data = [
         "errorUserName" => $errorUserName,
         "errorPassword" => $errorPassWord,
         "username" =>  $this->username,
         "password" => $this->password,
         "state" =>  $state
       ];
        return ($this->view->View( $data, 'login'));
    }

    public function Logout(){
        unset($_SESSION["lab8"]); 
        header("Location: ". '../login');
    }
  }
  ob_end_flush(); 
?>