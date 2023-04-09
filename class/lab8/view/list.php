

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lab8</title>
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




<div class="container mt-3">
<div class="input-group mb-3">
<h2>List Users</h2>
   
  </div>

   <form action="" method="GET" class="input-group mb-3">

   <input value="" name="key" type="text" class="form-control" placeholder="Enter key ...">
    <button class="btn btn-success" type="submit">Search</button> 
   </form>
  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Username</th>
        <th>Email</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
     
      <?php
        foreach($data as $key => $value){
      ?>
         <tr id="product-<?=$value['id']?>" >
        <td><?=$key + 1?></td>
        <td class="name-temp"><?=$value['username']?></td>
        <td ><?=$value['email']?></td>
        <td><a href="edit.php?id=<?=$value['id']?>" class=""><button type="button" class="btn btn-warning btn-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a></td>
        <td><button data-delete="<?=$value['id']?>" type="button" class="btn btn-danger btn-delete"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button></td>
      </tr>

       <?php
        }
      ?>
     
    </tbody>
  </table>
</div>
<div class="container mt-3">
  <a href="login" class=""> <button type="button" class="btn btn-primary">Login</button></a>
  <a href="add" class="">  <button type="button" class="btn btn-success">Add user</button></a>
    
</div>

</body>
<script>
    $(document).on("click", ".btn-delete", function(){
      var id = $(this).attr('data-delete');
      const response = confirm("Are you sure you want to delete ?");
       if(response){
        $.ajax({
            method: "POST",
            url: "delete",
            data: { 
                id: id
            }
        })
        .done(function(msg) {
           msg = JSON.parse(msg);
           if(msg.status == 'success'){
             $('#product-' + id).remove();
           }
        });
       }

     
    });
</script>
</html>
