<?php

require_once('../../DbHelp/handle.php');

if (!empty($_POST)) {
    if (isset($_POST["id"]) && $_POST['type'] == 'get') {
        $id = $_POST["id"];
        $sql = "SELECT * FROM `users` WHERE id = '" . $id . "'";
        $data = executeSingleResult($sql);
       


        echo '<div class="form-group">
        <label for="" class="">username :</label>
        <input value="'.$data['username'].'" name="username" type="text" placeholder="Enter username" class="" />
        <span></span>
</div>
<div class="form-group">
        <label for="" class="">email:</label>
        <input value="'.$data['email'].'" name="email" type="email" placeholder="Enter email" class="" />
        <span></span>
</div>
<div class="form-group">
        <label for="" class="">password :</label>
        <input value="" name="password" type="password" placeholder="Enter password" class="" />
        <span></span>
</div>

<div data-save="'.$data['id'].'" class="submit submit-product">
     <button  class="" type="button">Save</button>
</div>';
    }else if($_POST['type'] == 'update'){
   
       
      
        if(isset($_POST['id'])){
            $id = $_POST['id'];
        }
       
        if(isset($_POST['email'])){
            $email = $_POST['email'];
        }
        if(isset($_POST['username'])){
            $username = $_POST['username'];
        }
        if(isset($_POST['password'])){
            $password = $_POST['password'];
        }
       
        $sql = "UPDATE `users` SET `username` = '".$username."', `email` = '".$email."' , `password` = '".md5($password)."'   WHERE `users`.`id` = '".$id."'";

        execute($sql);
        echo json_encode([
            'status' => 'success',
            'data' => (object)[
                'id' => $id,
                'username' => $username,
                'email' => $email
            ]
        ]);

    }else if($_POST['type'] == 'delete'){
        if(isset($_POST['id'])){
            $id = $_POST['id'];
           

            $sql = "DELETE FROM `users` WHERE `id` = '".$id."'";
            execute($sql);
            
            echo json_encode([
                'state' => 'success'
            ]);
        }
    }
}
