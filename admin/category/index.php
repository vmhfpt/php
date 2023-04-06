<?php

define('ROOT_PATH', dirname(__DIR__) . '/layout/');

require_once(ROOT_PATH . "header.php");
//SELECT `product`.`name`, `category`.`name`, `business-platform`.`name` FROM `product`  JOIN `category` JOIN `business-platform` WHERE `category`.`id` = `product`.`category_id` AND `category`.`business_platform_id` = `business-platform`.`id`;
 $sql = "SELECT `category`.`id`,`category`.`name`,`category`.`slug`,`category`.`active`,`category`.`created_at`,`category`.`parent_id`, `business-platform`.`name` as 'type' FROM `category` JOIN `business-platform` WHERE `category`.`business_platform_id` = `business-platform`.`id`";
 $data = executeResult($sql);
 $menuTree = createMenuTree($data, 0, 0);
?>


<div class="content-wrapper" style="min-height: 2646.44px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách danh mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh mục</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <section class="content">
        <?php
   //print_r(json_encode($data))
  ?>
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Danh mục</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                STT
                            </th>
                            <th style="width: 20%">
                                Tên
                            </th>
                            <th style="width: 30%">
                                Nền tảng
                            </th>
                            <th>
                                Slug
                            </th>
                            <th style="width: 8%" class="text-center">
                                Trạng thái
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                 foreach($menuTree as $key => $value){
                 ?>
                        <tr id="remove-<?= $value["id"]?>">
                            <td>
                                <?= $key+1?>
                            </td>
                            <td>
                                <a>
                                    <?= str_repeat("--", $value['lever']) . " " . $value['name'] ?>
                                </a>
                                <br>
                                <small>
                                    <?=$value['created_at']?>
                                </small>
                            </td>
                            <td>
                                <a>
                                    <?=$value['type']?>
                                </a>
                            </td>
                            <td class="project_progress">
                                <?=$value['slug']?>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Kích hoạt</span>
                            </td>
                            <td class="project-actions text-right">

                                <a class="btn btn-info btn-sm" href="./edit.php?slug=<?=$value['slug']?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a data-delete="<?=$value['id']?>" class="delete btn btn-danger btn-sm"
                                    href="javascript:;">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <?php
                   }
                 ?>

                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->

        </div>
        <div class="row">
            <div class="col-12">

                <a href="./add.php"><button class="btn btn-success float-right">Thêm danh mục</button></a>
            </div>
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
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