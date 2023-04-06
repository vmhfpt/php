<?php

define('ROOT_PATH', dirname(__DIR__) . '/layout/');

require_once(ROOT_PATH . "header.php");

if(!empty($_GET)){
    if(isset($_GET['order'])){

        $id = $_GET['order'];
        $sql = "SELECT `oder_detail`.*, `product`.`name` AS `name_product`, `product`.`price_sale`, `product`.`thumb` FROM `oder_detail` JOIN `product` WHERE `product`.`id` = `oder_detail`.`color_id` AND `oder_id` = '".$id."'";
        $dataItem = executeResult(($sql));
      
        $sqlName = "SELECT `oder`.`name`  FROM `oder` WHERE `oder`.`id` = '".$id."'";
        $nameOrder = executeSingleResult(($sqlName));
      
    }
}
?>


<div class="content-wrapper" style="min-height: 2069px;">
    <!-- Content Header (Page header) -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Danh sách Đơn hàng anh chị <?=$nameOrder['name']?></h3>
                </div>
    <div class="wrapper">



        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Chi tiết đơn hàng</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Chi tiết đơn hàng</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <!-- /.card -->

                        <div class="card">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">

                                        <!-- /.card-header -->
                                        <div class="card-body table-responsive p-0">
                                            <table class="table table-hover text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Ảnh</th>
                                                        <th>Tên</th>
                                                     
                                                        <th>Giá</th>
                                                        <th>Số lượng</th>
                                                        <th>Tổng</th>
                                                        <th> Xóa</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                  $totalProduct = 0;
                                                  $totalPrice = 0;
                                                    foreach($dataItem as $key => $value){
                                                  $totalProduct = $totalProduct  + $value['quantity'];
                                                  $totalPrice =  $totalPrice + ($value['quantity'] * $value['price_sale']);
                                                ?>
                                                    <tr>
                                                            <td><?=$key+1?></td>
                                                            <td> <img src="../../public/img/<?=$value['thumb']?>" width="80" height="80"></td>
                                                            <td><?=$value['name_product']?></td>
                                                           
                                                            <td><?=$value['price_sale']?>VND</td>
                                                            <td><?=$value['quantity']?></td>
                                                            <td> <?=$value['quantity'] * $value['price_sale']?> VND
                                                            </td>

                                                            <td><a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                                                        </tr>

                                                <?php

                                                    }
                                                ?>
                                                     <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th>Tổng sản phẩm <?=$totalProduct?>
                                                        </th>
                                                        <th>Tổng tiền :<?=$totalPrice?>VND</th>
                                                        <th></th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->

        <!-- /.content-wrapper -->


    <div id="sidebar-overlay"></div></div>
  
              </div>


              </div>
          </div>
        </div>
      </section>
  </div>


<?php
require_once(ROOT_PATH . "footer.php");
?>