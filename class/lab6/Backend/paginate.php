<?php
  require_once('../DbHelp/handle.php');
  $nextPage = true;
  $prevPage = false;
  $limit = 3;
  $offset = 0;
  $page = 1;
  

  if(!empty($_GET)){
     if(isset($_GET['page'])){
         $page = (int)$_GET['page'];
         if($page > 1){
            $prevPage = true;
         }
         $offset = ($page - 1) * $limit;
     }
  }
  
  $sql = "SELECT * FROM `paginate` LIMIT ".$limit." OFFSET ".$offset." ";
  $dataItem = executeResult($sql);
  $sqlTotal = "SELECT count(id) AS `total` FROM `paginate`  ";
  $dataTotal = executeSingleResult($sqlTotal);
  $total = (int)($dataTotal['total']);
  if($page >= ceil($total / $limit)){
    $nextPage = false;
  }

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
        <th>Tên</th>
        <th>Tuổi</th>
        <th>Nghề nghiệp</th>
      </tr>
    </thead>
    <tbody>
     
      <?php
        $stt = ($page * $limit) - $limit;
        foreach($dataItem as $key => $value){
      ?>
         <tr>
        <td><?=$stt + 1?></td>
        <td><?=$value['name']?></td>
        <td><?=$value['age']?></td>
        <td><?=$value['description']?></tr>

       <?php
       $stt ++;
        }
      ?>
     
    </tbody>
  </table>
</div>
<div class="container mt-3">
  <ul class="pagination">
   
  <?= $prevPage ? ' <li class="page-item"><a class="page-link" href="?page='.($page - 1).'">Previous</a></li>' : '' ?>
    <?php
        for($i = 0; $i < ceil($total/$limit); $i ++){
    ?>
          
         <li class="page-item <?=$i+1 == $page ? 'active': ''?>"><a class="page-link" href="?page=<?=$i + 1?>"><?=$i + 1?></a></li>
    <?php
         }
   ?>
    <?= $nextPage ? '<li class="page-item"><a class="page-link" href="?page='.($page + 1).'">Next</a></li>' : '' ?>
    
  </ul>
</div>

</body>
</html>
