<?php

require_once('../DbHelp/handle.php');
$key = "";
  if(!empty($_GET)){
    if(isset($_GET['key'])){
        $key = $_GET['key'];
        $sql = "SELECT * FROM  `category` WHERE `name` LIKE '%".$key."%'";
    }
  }else {
        $sql = "SELECT * FROM  `category`";
  }
  $dataItem = executeResult($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lab7 Bài 2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>
<body>

<style>
    .container-fluid-form {
        width : 100%;
        display : flex;
        justify-content: center;
        align-items: center;
        height : 100vh;
    }
    .container-form {
        overflow: auto;
        
        padding : 20px;
        background: white;
        width : 450px;
    }
    .form-group {
        gap : 5px;
        padding : 10px 0px;
        display : flex;
        flex-direction: column;
    }
    .form-group select {
        padding : 10px 10px;
        
        background: white;
        border : 1px solid #eee;
    }
    .form-group input{
        padding : 10px 10px;
        background: white;
       
        border : 1px solid #eee;
    }
    .form-group span {
        color :red;
    }
    select:focus {
        outline : none;
    }
    input:focus {
        outline: none;
    }
    .submit {
        display : flex;
        justify-content: center;
    }
    .submit button {
        padding : 10px;
    }
    .submit-product button {
        background : blue;
        color : white;
        border : none;
        cursor: pointer;
    }
    .rounded {
        width : 150px;
        height : 210px;
        object-fit: cover;
        margin-top : 30px;
    }


    .container-fluid {
  width : 100%;
  display : flex;
  justify-content: center;
  align-items: center;
}
.container {
	width : 100%;
}
.popup-success {
    font-size: 17px;
    padding : 10px 0px;
    color : white;
    background: #5cb85c;
    width : 100%;
    text-align: center;
}

@keyframes identifier-in {
    0% {
        opacity: 0.0;
        top : 30px;
    }
    100% {
        opacity: 1.0;
        top : 0px;
    }
}

@keyframes identifier-out {
    0% {
        opacity: 1.0;
        top : 0px;
       
    }
    100% {
        opacity: 0.0;
        top : -100vh;
    }
}

  .app-popup{
   display : none;
    animation: identifier-in 0.5s ease-in-out;
    animation-fill-mode: forwards;
    z-index: 9999 !important;
    position: fixed;
    top : 0px;
    left : 0px;
    width : 100%;
    height : 100vh !important;
    background: rgba(9, 9, 9, 0.733);
    
    align-items: center;
    justify-content: center;
   
  }
  .app-popup-delete{
   display : none;
    z-index: 9999 !important;
    position: fixed;
    top : 0px;
    left : 0px;
    width : 100%;
    height : 100vh !important;
    background: rgba(9, 9, 9, 0.733);
    padding : 140px 0px;
    align-items: flex-start;
    justify-content: center;
    
   
  }
  .container-popup-delete {
    width : 350px;
    background: red;
    padding : 20px;
  }
  .container-popup-delete__tab {
    color : white;
    font-weight: 600;
    display : flex;
    gap : 15px;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
  }
  .container-popup-delete__tab span:first-child{
    font-size: 20px;
  }
  .container-popup-delete__btn {
    display : flex;
    padding : 20px 0px;
    
    justify-content:space-evenly;
  }
  .container-popup-delete__btn button:first-child {
    background: black;
    color : white;
    padding : 10px 15px;
    border: none;
    cursor: pointer;
  }

  .container-popup-delete__btn button:last-child {
    background: #5cb85c;
    color : white;
    padding : 10px 15px;
    border: none;
    cursor: pointer;
  }

  .container-popup-delete__tab img {
    object-fit: cover;
  }
  @keyframes alert {
     0% {
       
        transform:rotate(15deg)
     }
     50% {
      transform:rotate(-15deg)
     }
     100% {
      transform:rotate(0deg)
     }
  }
  @keyframes popup-in {
     0% {
        opacity: 0.0;
        transform: scale(0.0);
     }
     50% {
        opacity: 0.5;
        transform: scale(1.3);
     }
     100% {
        opacity: 1.0;
        transform: scale(1);
     }
  }
  @keyframes popup-out {
     0% {
        opacity: 1.0;
        transform: scale(1);
        
     }
     50% {
        opacity: 0.5;
        transform: scale(1.3);
     }
     100% {
        opacity: 0.0;
        transform: scale(0.0);
     }
  }
  tr {
    overflow: hidden;
  }
 
  
</style>

<section class="container-fluid app-popup-delete">
    <div class="container container-popup-delete remove-animation">
        <div class="container-popup-delete__tab">
             <span class="">Bạn có chắc muốn xóa ?</span>
             <span class="container-popup-delete__tab-name">
                
             </span>
            
        </div>
        <div class="container-popup-delete__btn">
            
        </div>
    </div>

</section>

<section class="container-fluid app-popup">
    <div class="container container-popup">

    <div class="container-fluid-form">
         <div class="container-form">
         <div class="popup-success">
                 <span class="title-edit"></span>
            </div>
             
               <form enctype="multipart/form-data" action="" id="form" method="POST" class="show-form">
                    
               </form>

            
         </div>
     </div>


    </div>

</section>
<div class="container mt-3">
<div class="input-group mb-3">
<h2>List Categories</h2>
   
  </div>

   <form action="" method="GET" class="input-group mb-3">

   <input value="<?=$key?>" name="key" type="text" class="form-control" placeholder="Enter key ...">
    <button class="btn btn-success" type="submit">Search</button> 
   </form>
  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
     
      <?php
        foreach($dataItem as $key => $value){
      ?>
         <tr id="product-<?=$value['id']?>" >
        <td><?=$key + 1?></td>
        <td class="name-temp"><?=$value['name']?></td>
        <td><button type="button" data-edit="<?=$value['id']?>" class="btn btn-warning btn-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></td>
        <td><button data-delete="<?=$value['id']?>" type="button" class="btn btn-danger btn-delete"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button></td>
      </tr>

       <?php
        }
      ?>
     
    </tbody>
  </table>
</div>
<script>
     $(document).on("click", ".confirm", function(e){
      var that = this;
       if($(this).attr("data-click") == 'true'){
            
        $.ajax({
            method: "POST",
            url: "./ajax/category.php",
            data: { 
                type : 'delete',
                id: $(this).attr("data-delete")
            }
        })
        .done(function(msg) {
           // console.log(msg);
           msg = JSON.parse(msg);
           if(msg.state == 'success'){
            $('#product-' + $(that).attr('data-delete')).css('background', 'rgba(207, 7, 7, 0.383)');
            $('#product-' + $(that).attr('data-delete')).fadeOut(420);
            $('.app-popup-delete').css('animation', '0.5s ease-in-out 0s 1 normal forwards running popup-out');
           }
          
        });

            
            
       }else {
        $('.app-popup-delete').css('animation', '0.5s ease-in-out 0s 1 normal forwards running popup-out');
       }


    });
      $(document).on("click", ".submit-product", function(){
       
        $.ajax({
            method: "POST",
            url: "./ajax/category.php",
            data: { 
                type : 'update',
                id: $(this).attr("data-save"),
                name :  $("input[name=name]").val()
            }
        })
        .done(function(msg) {
            msg = (JSON.parse(msg));
           
           if(msg.status == 'success'){
            $('#product-' + msg.data.id).empty();
            $('#product-' + msg.data.id).append(` <td>✔</td>
            <td class="name-temp">${msg.data.name}</td>
            <td><button type="button" data-edit="${msg.data.id}" class="btn btn-warning btn-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></td>
            <td><button data-delete="${msg.data.id}" type="button" class="btn btn-danger btn-delete"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button></td>`);
        $('#product-' + msg.data.id).css('background', 'rgba(28, 214, 112, 0.483)');
        $('.app-popup').css('animation', '0.5s ease-in-out 0s 1 normal forwards running identifier-out');
           }
        });
      });
    

$(document).on("click", ".app-popup", function(e){
if ($(e.target).children(".container-form").length === 0) {
   
}else {
    $('.app-popup').css('animation', '0.5s ease-in-out 0s 1 normal forwards running identifier-out');
}
});

$(document).on("click", ".btn-delete", function(){
    var id = ($(this).attr('data-delete'));
   
    $('.container-popup-delete__tab-name').text($(this).closest('#product-' + id ).find('.name-temp').first().text());
    $('.container-popup-delete__btn').html(`<button data-delete="${id}" data-click="true" class="confirm">Có</button>
            <button data-click="false" class="confirm">Hủy</button>`);

  // console.log($(this).closest('#product-' + id ).find('img').first().attr("src"));
  // console.log($(this).closest('#product-' + id ).find('.name-temp').first().text());



   
     
   $('.app-popup-delete').css('display', 'flex');
   $('.app-popup-delete').css('animation', '0.5s ease-in-out 0s 1 normal forwards running popup-in');
  
  
});
$(document).on("click", ".app-popup-delete", function(e){
if ($(e.target).children(".container-popup-delete").length === 0) {

}else {
  $('.remove-animation').removeAttr('style');
  $('.remove-animation').removeClass('container-popup-delete');
  window.requestAnimationFrame(function() {
    $('.remove-animation').addClass('container-popup-delete');
    $('.container-popup-delete').css('animation', '0.5s ease-in-out 0s 1 normal forwards running alert');
  });
  
  
  
   // $('.app-popup-delete').css('animation', '0.5s ease-in-out 0s 1 normal forwards running popup-out');
}
});


$(document).on("click", ".btn-edit", function(){
      
     
        $.ajax({
            method: "POST",
            url: "./ajax/category.php",
            data: { 
                type : 'get',
                id: $(this).attr("data-edit")
            }
        })
        .done(function(msg) {
           // console.log(msg);
            $('.show-form').html(msg);
            $('.app-popup').css('display', 'flex');
            $('.app-popup').css('animation', '0.5s ease-in-out 0s 1 normal forwards running identifier-in');
            $('.title-edit').text(`Sửa danh mục ${$("input[name=name]").val()}`);
        });
    
    
});
</script>

</body>
</html>
