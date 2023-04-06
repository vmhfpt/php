<?php

define('ROOT_PATH', dirname(__DIR__) . '/layout/');

require_once(ROOT_PATH . "header.php");
//SELECT `product`.`name`, `category`.`name`, `business-platform`.`name` FROM `product`  JOIN `category` JOIN `business-platform` WHERE `category`.`id` = `product`.`category_id` AND `category`.`business_platform_id` = `business-platform`.`id`;
 $sql = "SELECT * FROM `oder` ORDER BY `oder`.`created_at` DESC";
 $data = executeResult($sql);

 // badge-dark // badge-danger //  badge-warning //  badge-success
?>


<div class="content-wrapper" style="min-height: 861px;">
    <!-- Content Header (Page header) -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Danh sách Đơn hàng</h3>
                </div>
<table id="example2" class="table table-bordered table-hover">
    <thead>
    <tr>
      <th>STT</th>
      <th>Tên</th>
      <th>SĐT</th>
      <th>Địa chỉ</th>
      <th>Tổng</th>
      <th>Trạng thái</th>
      <th>Ngày đặt</th>
      <th>Chi tiết</th>
    </tr>
    </thead>
    <tbody>
             <?php
              foreach($data as $key => $value){
             ?>
                  <tr>
          <td><?=$key+1?></td>
          <td><?=$value["name"]?></td>
          <td><?=$value["phone_number"]?></td>
          <td><?=$value["address_detail"]?></td>
          <td><?=$value["total"]?>VNĐ</td>
          <td>
            <?php
                if($value['active'] == 6){
                    echo '<span class="badge badge-danger">Chưa tiếp nhận</span>';
                }
                if($value['active'] == 5){
                    echo '<span class="badge badge-warning">Đã tiếp nhận</span>';
                }
                if($value['active'] == 4){
                    echo '<span class="badge badge-warning">Đã rời kho</span>';
                }
                if($value['active'] == 3){
                    echo '<span class="badge badge-danger">Đang vận chuyển</span>';
                }
                if($value['active'] == 2){
                    echo '<span class="badge badge-warning">Đã đến nơi</span>';
                }
                if($value['active'] == 1){
                    echo '<span class="badge badge-success">Hoàn thành</span>';
                }
                if($value['active'] == 0){
                    echo '<span class="badge badge-dark">Đã hủy</span>';
                }
            ?>
          </td>
          <td>
            <div class="sparkbar"><?=$value["created_at"]?></div>
          </td>
          <td><a href="./oderdetail.php?order=<?=$value["id"]?>" class="btn btn-info"><i class="fas fa-eye"></i></a></td>
        </tr>
             <?php
              }
             ?>

            </tbody>
  </table>

              </div>


              </div>
          </div>
        </div>
      </section>
  </div>

<script>
$('.delete').click(function() {
  var id = $(this).attr("data-delete");
    //alert($(this).attr("data-delete"));
    $.ajax({
            method: "POST",
            url: "./delete.php",
            data: {
             
                id: Number(id),
                
            }
        })
        .done(function(msg) {
          msg = JSON.parse(msg);
            //alert("Data Saved: " + msg.state);
           // console.log(msg.status);
            if(msg.status == "success"){
               $('#remove-' + id).remove();
            }
        });
})
</script>
<?php
require_once(ROOT_PATH . "footer.php");
?>