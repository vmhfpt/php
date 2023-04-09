<?php
if(!session_id()){
    session_start();
  }
 ob_start();
 $user = $_SESSION["lab8"];
 if (is_null($user)) {
   header('Location: ../login');
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Session user</h2>
  
  <div class="card" style="width:400px">
    <img class="card-img-top" src="https://static.vecteezy.com/system/resources/previews/000/439/863/original/vector-users-icon.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title"><?= $user['username']?></h4>
      <p class="card-text">Email : <?= $user['email']?></p>
      <p class="card-text">Password : <?= $user['password']?></p>
      <a href="logout" class="btn btn-primary">Log out</a>
    </div>
  </div>
  

</div>

</body>
</html>