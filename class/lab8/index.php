<?php

require_once ('controller/UserController.php');
require_once ('function/function.php');

$view = new Helper();
$routeUser = new UserController();
$request = $_SERVER['REQUEST_URI'];
$request = strpos($request, '?') ? substr($request, 0, strpos($request, '?')) : $request;

switch ($request) {
    case '/class/lab8/delete' : {
        if(!empty($_POST)){
            if(isset($_POST['id'])){
               return $routeUser->remove($_POST);
            }
        }
       
        break;
    }
    case '/class/lab8/edit.php' : {
        
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            if(empty($_GET) || !isset($_GET['id'])){
                return $view->View([], 'error404');
            }
            $routeUser->showDetai($_GET);
        } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $routeUser->update($_POST);
        } 
        break;
    }
    case '/class/lab8/index.php' : {
        if(!empty($_GET) && isset($_GET['key'])){
            return  $routeUser->searchItem($_GET);
        }
        $routeUser->showList();
        break;
    }
    case '/class/lab8/' : {
        if(!empty($_GET) && isset($_GET['key'])){
            return  $routeUser->searchItem($_GET);
        }
        $routeUser->showList();
        break;
    }
    case '/class/lab8/user/dashboard' : {
      
        return $view->View([], 'dashboard');
        break;
    }
    case '/class/lab8/user/logout' : {
        $routeUser->Logout();
        break;
    }
    case '/class/lab8/login' :{
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $routeUser->showLogin();
        } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           $routeUser->login($_POST);
        } 
        break;
    }
    case '/class/lab8/add' :{
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            return $view->View([], 'add');
        } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return  $routeUser->create($_POST);
        } 
        break;
    }
    default: {
        return $view->View([], 'error404');
        break;
    }
        
}
?>