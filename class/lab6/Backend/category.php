<?php
  require_once('../DbHelp/handle.php');
  $sql = "SELECT * FROM `category`";
  $dataItem = executeResult($sql);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lab6</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Danh sách danh mục</h2>
           
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
         <tr>
        <td><?=$key + 1?></td>
        <td><?=$value['name']?></td>
        <td><button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa</button></td>
        <td><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</button></td>
      </tr>

       <?php
        }
      ?>
     
    </tbody>
  </table>
</div>

</body>
</html>
