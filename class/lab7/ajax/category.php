<?php

require_once('../../DbHelp/handle.php');

if (!empty($_POST)) {
    if (isset($_POST["id"]) && $_POST['type'] == 'get') {
        $id = $_POST["id"];
        $sql = "SELECT * FROM `category` WHERE id = '" . $id . "'";
        $data = executeSingleResult($sql);
       


        echo '<div class="form-group">
        <label for="" class="">Product Name:</label>
        <input value="'.$data['name'].'" name="name" type="text" placeholder="Enter name" class="" />
        <span></span>
</div>


<div data-save="'.$data['id'].'" class="submit submit-product">
     <button  class="" type="button">Save</button>
</div>';
    }else if($_POST['type'] == 'update'){
   
       
      
        if(isset($_POST['id'])){
            $id = $_POST['id'];
        }
       
        if(isset($_POST['name'])){
            $name = $_POST['name'];
        }
       
        $sql = "UPDATE `category` SET `name` = '".$name."' WHERE `category`.`id` = '".$id."'";

        execute($sql);
        echo json_encode([
            'status' => 'success',
            'data' => (object)[
                'id' => $id,
                'name' => $name
            ]
        ]);

    }else if($_POST['type'] == 'delete'){
        if(isset($_POST['id'])){
            $id = $_POST['id'];
           
            $sqlDeleteProduct = "DELETE FROM `products` WHERE `category_id` = '".$id."'";
            execute($sqlDeleteProduct);

            $sql = "DELETE FROM `category` WHERE `id` = '".$id."'";
            execute($sql);
            
            echo json_encode([
                'state' => 'success'
            ]);
        }
    }
}
