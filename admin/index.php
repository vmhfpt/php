<?php

session_start();
ob_start();
$user = $_SESSION["user"];
if (is_null($user)) {
  header('Location: "/../form/login.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <meta name="description" content="Web site created using create-react-app" />

  <!--
      manifest.json provides metadata used when your web app is installed on a
      user's mobile device or desktop. See https://developers.google.com/web/fundamentals/web-app-manifest/
    -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->

  <link rel="stylesheet" href="../public/Admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../public/Admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->

  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="../public/Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../public/Admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/Admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../public/Admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../public/Admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../public/Admin/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="../public/Admin/dist/css/custom.css">


  <title>Dashboard Admin</title>
</head>

<body class="sidebar-mini layout-fixed sidebar-closed sidebar-collapse" data-panel-auto-height-mode="height" style="height: auto;">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="./form/logout.php" class="nav-link">Đăng xuất</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="https://nucuoimekong.com/wp-content/uploads/buc-anh-dep-can-bang-sang-tot-1.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="https://nucuoimekong.com/wp-content/uploads/buc-anh-dep-can-bang-sang-tot-1.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="https://nucuoimekong.com/wp-content/uploads/buc-anh-dep-can-bang-sang-tot-1.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><?= $_SESSION["user"]['name'] ?></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition">
        <div class="os-resize-observer-host observed">
          <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
        </div>
        <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
          <div class="os-resize-observer"></div>
        </div>
        <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 830px;"></div>
        <div class="os-padding">
          <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
            <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
              <!-- Sidebar user panel (optional) -->
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                  <img src="https://nucuoimekong.com/wp-content/uploads/buc-anh-dep-can-bang-sang-tot-1.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                  <a href="#" class="d-block"><?= $_SESSION["user"]['name'] ?></a>
                </div>
              </div>

              <!-- SidebarSearch Form -->
              <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-sidebar">
                      <i class="fas fa-search fa-fw"></i>
                    </button>
                  </div>
                </div>
                <div class="sidebar-search-results">
                  <div class="list-group"><a href="#" class="list-group-item">
                      <div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div>
                      <div class="search-path"></div>
                    </a></div>
                </div>
              </div>

              <!-- Sidebar Menu -->
              <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item menu-is-opening menu-open">
                    <a href="./category/index.php" class="nav-link">
                      <i class="nav-icon fas fa-edit"></i>
                      <p>
                        Danh mục
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>

                  </li>

                  <li class="nav-item menu-is-opening menu-open">
                    <a href="./product/index.php" class="nav-link">
                      <i class="nav-icon fas fa-edit"></i>
                      <p>
                        Sản phẩm
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>

                  </li>
                  <li class="nav-item menu-is-opening menu-open">
            <a href="./order/index.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                  Đơn hàng
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
           
          </li>
                </ul>
              </nav>
              <!-- /.sidebar-menu -->
            </div>
          </div>
        </div>
        <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
          <div class="os-scrollbar-track">
            <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
          </div>
        </div>
        <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
          <div class="os-scrollbar-track">
            <div class="os-scrollbar-handle" style="height: 17.2909%; transform: translate(0px, 0px);"></div>
          </div>
        </div>
        <div class="os-scrollbar-corner"></div>
      </div>
      <!-- /.sidebar -->
    </aside>

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
                  <h3 class="card-title">DashBoard</h3>
                </div>

                <div class="content-header">
                  <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-6">
                        <h1 class="m-0">Thông tin</h1>
                      </div><!-- /.col -->
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Thông tin</li>
                        </ol>
                      </div><!-- /.col -->
                    </div><!-- /.row -->
                  </div><!-- /.container-fluid -->
                </div>
                <section class="content">
                  <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                      <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                          <div class="inner">
                            <h3>6</h3>

                            <p>Đơn hàng thành công</p>
                          </div>
                          <div class="icon">
                            <i class="ion ion-bag"></i>
                          </div>
                          <a href="#" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                          <div class="inner">
                            <h3>22<sup style="font-size: 20px"></sup></h3>

                            <p>Số đơn hàng đang xử lý</p>
                          </div>
                          <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                          </div>
                          <a href="#" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                          <div class="inner">
                            <h3>418.520.000 VNĐ</h3>

                            <p>Doanh thu hệ thống</p>
                          </div>
                          <div class="icon">
                            <i class="ion ion-person-add"></i>
                          </div>
                          <a href="#" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                          <div class="inner">
                            <h3>14</h3>

                            <p>Số đơn hàng đã hủy</p>
                          </div>
                          <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                          </div>
                          <a href="#" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                      <!-- ./col -->
                    </div>

                    <div class="content">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-6">

                            <!-- /.card -->

                            <div class="card">
                              <div class="card-header border-transparent">
                                <h3 class="card-title">Đơn hàng đầu tiên</h3>

                                <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                  </button>
                                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                  </button>
                                </div>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body p-0">
                                <div class="table-responsive">
                                  <table class="table m-0">
                                    <thead>
                                      <tr>
                                        <th>STT</th>
                                        <th>Họ và tên</th>
                                        <th>Trạng thái</th>
                                        <th>Ngày</th>
                                        <th>Chi tiết</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>1</td>
                                        <td>Khứa thành</td>
                                        <td><span class="badge badge-dark">Đã hủy</span></td>
                                        <td>
                                          <div class="sparkbar">2023-02-23 11:37:24</div>
                                        </td>
                                        <td><a href="/admin/oder/detail/45" class="btn btn-info"><i class="fas fa-eye"></i></a></td>
                                      </tr>

                                      <tr>
                                        <td>2</td>
                                        <td>anh ba</td>
                                        <td><span class="badge badge-danger">Chưa tiếp nhận</span></td>
                                        <td>
                                          <div class="sparkbar">2023-02-23 11:32:43</div>
                                        </td>
                                        <td><a href="/admin/oder/detail/44" class="btn btn-info"><i class="fas fa-eye"></i></a></td>
                                      </tr>

                                      <tr>
                                        <td>3</td>
                                        <td>Hung Vu</td>
                                        <td><span class="badge badge-warning">Đã tiếp nhận</span></td>
                                        <td>
                                          <div class="sparkbar">2023-01-02 18:18:24</div>
                                        </td>
                                        <td><a href="/admin/oder/detail/43" class="btn btn-info"><i class="fas fa-eye"></i></a></td>
                                      </tr>

                                      <tr>
                                        <td>4</td>
                                        <td>Channel VMH</td>
                                        <td><span class="badge badge-danger">Chưa tiếp nhận</span></td>
                                        <td>
                                          <div class="sparkbar">2022-12-07 20:59:32</div>
                                        </td>
                                        <td><a href="/admin/oder/detail/42" class="btn btn-info"><i class="fas fa-eye"></i></a></td>
                                      </tr>

                                      <tr>
                                        <td>5</td>
                                        <td>fgdsafasdf</td>
                                        <td><span class="badge badge-dark">Đã hủy</span></td>
                                        <td>
                                          <div class="sparkbar">2022-12-07 20:53:48</div>
                                        </td>
                                        <td><a href="/admin/oder/detail/41" class="btn btn-info"><i class="fas fa-eye"></i></a></td>
                                      </tr>

                                      <tr>
                                        <td>6</td>
                                        <td>Hung Vu</td>
                                        <td><span class="badge badge-danger">Chưa tiếp nhận</span></td>
                                        <td>
                                          <div class="sparkbar">2022-10-04 23:20:05</div>
                                        </td>
                                        <td><a href="/admin/oder/detail/40" class="btn btn-info"><i class="fas fa-eye"></i></a></td>
                                      </tr>

                                      <tr>
                                        <td>7</td>
                                        <td>Vũ Minh Hùng</td>
                                        <td><span class="badge badge-danger">Chưa tiếp nhận</span></td>
                                        <td>
                                          <div class="sparkbar">2022-10-04 23:16:35</div>
                                        </td>
                                        <td><a href="/admin/oder/detail/39" class="btn btn-info"><i class="fas fa-eye"></i></a></td>
                                      </tr>

                                      <tr>
                                        <td>8</td>
                                        <td>Hung Vu</td>
                                        <td><span class="badge badge-danger">Chưa tiếp nhận</span></td>
                                        <td>
                                          <div class="sparkbar">2022-10-04 23:13:58</div>
                                        </td>
                                        <td><a href="/admin/oder/detail/38" class="btn btn-info"><i class="fas fa-eye"></i></a></td>
                                      </tr>

                                      <tr>
                                        <td>9</td>
                                        <td>Vũ Minh Hùng</td>
                                        <td><span class="badge badge-danger">Chưa tiếp nhận</span></td>
                                        <td>
                                          <div class="sparkbar">2022-10-04 23:10:40</div>
                                        </td>
                                        <td><a href="/admin/oder/detail/37" class="btn btn-info"><i class="fas fa-eye"></i></a></td>
                                      </tr>

                                      <tr>
                                        <td>10</td>
                                        <td>thằng ml</td>
                                        <td><span class="badge badge-danger">Chưa tiếp nhận</span></td>
                                        <td>
                                          <div class="sparkbar">2022-09-12 14:14:46</div>
                                        </td>
                                        <td><a href="/admin/oder/detail/36" class="btn btn-info"><i class="fas fa-eye"></i></a></td>
                                      </tr>


                                    </tbody>
                                  </table>
                                </div>
                                <!-- /.table-responsive -->
                              </div>
                              <!-- /.card-body -->
                              <div class="card-footer clearfix">
                                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Xem tất cả đơn hàng</a>
                              </div>
                              <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                          </div>
                          <!-- /.col-md-6 -->
                          <div class="col-lg-6">

                            <!-- /.card -->

                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title">Người dùng mới</h3>

                                <div class="card-tools">
                                  <span class="badge badge-danger">Tổng 13 thành viên</span>
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                  </button>
                                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                  </button>
                                </div>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body p-0">
                                <ul class="users-list clearfix">

                                  <li>
                                    <img width="95" height="95" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="User Image">
                                    <a class="users-list-name" href="#">Nguyễn Thị Chải</a>
                                    <span class="users-list-date">Login with Facebook</span>
                                    <span class="users-list-date">2022-06-05 23:29:47</span>
                                  </li>
                                  <li>
                                    <img width="95" height="95" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="User Image">
                                    <a class="users-list-name" href="#">đang tô hữu</a>
                                    <span class="users-list-date">Sign by Google</span>
                                    <span class="users-list-date">2022-05-28 01:08:19</span>
                                  </li>
                                  <li>
                                    <img width="95" height="95" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="User Image">
                                    <a class="users-list-name" href="#">Cán Bộ Xã</a>
                                    <span class="users-list-date">Sign by Google</span>
                                    <span class="users-list-date">2022-05-28 01:07:37</span>
                                  </li>
                                  <li>
                                    <img width="95" height="95" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="User Image">
                                    <a class="users-list-name" href="#">EIAK N</a>
                                    <span class="users-list-date">Sign by Google</span>
                                    <span class="users-list-date">2022-05-20 00:08:11</span>
                                  </li>
                                  <li>
                                    <img width="95" height="95" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="User Image">
                                    <a class="users-list-name" href="#">Minh Hùng Vũ</a>
                                    <span class="users-list-date">Sign by Google</span>
                                    <span class="users-list-date">2022-05-17 09:40:30</span>
                                  </li>
                                  <li>
                                    <img width="95" height="95" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="User Image">
                                    <a class="users-list-name" href="#">Dung Vu</a>
                                    <span class="users-list-date">Sign by Google</span>
                                    <span class="users-list-date">2022-05-15 17:44:10</span>
                                  </li>
                                  <li>
                                    <img width="95" height="95" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="User Image">
                                    <a class="users-list-name" href="#">Vu Minh Hung (FPL DN)</a>
                                    <span class="users-list-date">Sign by Google</span>
                                    <span class="users-list-date">2022-05-15 17:38:19</span>
                                  </li>
                                  <li>
                                    <img width="95" height="95" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="User Image">
                                    <a class="users-list-name" href="#">Channel VMH</a>
                                    <span class="users-list-date">Sign by Google</span>
                                    <span class="users-list-date">2022-04-11 01:23:01</span>
                                  </li>
                                  <li>
                                    <img width="95" height="95" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="User Image">
                                    <a class="users-list-name" href="#">Vũ Minh Hùng</a>
                                    <span class="users-list-date">Login with Facebook</span>
                                    <span class="users-list-date">2022-04-11 01:17:12</span>
                                  </li>
                                  <li>
                                    <img width="95" height="95" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="User Image">
                                    <a class="users-list-name" href="#">Trần Văn Hoàng</a>
                                    <span class="users-list-date">Sign by Accrount</span>
                                    <span class="users-list-date">2022-04-09 14:01:12</span>
                                  </li>
                                  <li>
                                    <img width="95" height="95" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="User Image">
                                    <a class="users-list-name" href="#">Nguyễn Văn Phúc</a>
                                    <span class="users-list-date">Sign by Accrount</span>
                                    <span class="users-list-date">2022-04-09 14:01:12</span>
                                  </li>
                                  <li>
                                    <img width="95" height="95" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="User Image">
                                    <a class="users-list-name" href="#">Vũ Minh Hùng</a>
                                    <span class="users-list-date">Sign by Accrount</span>
                                    <span class="users-list-date">2022-02-17 07:23:46</span>
                                  </li>
                                  <li>
                                    <img width="95" height="95" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="User Image">
                                    <a class="users-list-name" href="#">Trịnh Văn Khánh</a>
                                    <span class="users-list-date">Sign by Accrount</span>
                                    <span class="users-list-date"></span>
                                  </li>
                                </ul>
                                <!-- /.users-list -->
                              </div>
                              <!-- /.card-body -->
                              <div class="card-footer text-center">
                                <a href="javascript:">Xem tất cả người dùng</a>
                              </div>
                              <!-- /.card-footer -->
                            </div>
                          </div>
                          <!-- /.col-md-6 -->
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.container-fluid -->
                    </div>

                    <!-- /.row -->
                    <!-- Main row -->
                   
                             

                            </div>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                    </div>
                    <!-- /.row (main row) -->
                  </div><!-- /.container-fluid -->
                </section>
              </div>


            </div>
          </div>
        </div>
      </section>
    </div>


    <footer class="main-footer">
      <strong>Copyright © 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>


    <aside class="control-sidebar control-sidebar-dark" style="display: none; bottom: 57px; top: 57px; height: 831px;">

      <div class="p-3 control-sidebar-content os-host os-theme-light os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition" style="height: 831px;">
        <div class="os-resize-observer-host observed">
          <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
        </div>
        <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
          <div class="os-resize-observer"></div>
        </div>
        <div class="os-content-glue" style="margin: -16px; width: 0px; height: 0px;"></div>
        <div class="os-padding">
          <div class="os-viewport os-viewport-native-scrollbars-invisible">
            <div class="os-content" style="padding: 16px; height: 100%; width: 100%;">
              <h5>Customize AdminLTE</h5>
              <hr class="mb-2">
              <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Dark Mode</span></div>
              <h6>Header Options</h6>
              <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div>
              <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Dropdown Legacy Offset</span></div>
              <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>No border</span></div>
              <h6>Sidebar Options</h6>
              <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Collapsed</span></div>
              <div class="mb-1"><input type="checkbox" value="1" checked="checked" class="mr-1"><span>Fixed</span></div>
              <div class="mb-1"><input type="checkbox" value="1" checked="checked" class="mr-1"><span>Sidebar Mini</span></div>
              <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini MD</span></div>
              <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini XS</span></div>
              <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Flat Style</span></div>
              <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Legacy Style</span></div>
              <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Compact</span></div>
              <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child Indent</span></div>
              <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child Hide on Collapse</span></div>
              <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Disable Hover/Focus Auto-Expand</span></div>
              <h6>Footer Options</h6>
              <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div>
              <h6>Small Text Options</h6>
              <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Body</span></div>
              <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Navbar</span></div>
              <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Brand</span></div>
              <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Nav</span></div>
              <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Footer</span></div>
              <h6>Navbar Variants</h6>
              <div class="d-flex"><select class="custom-select mb-3 text-light border-0 bg-white">
                  <option class="bg-primary">Primary</option>
                  <option class="bg-secondary">Secondary</option>
                  <option class="bg-info">Info</option>
                  <option class="bg-success">Success</option>
                  <option class="bg-danger">Danger</option>
                  <option class="bg-indigo">Indigo</option>
                  <option class="bg-purple">Purple</option>
                  <option class="bg-pink">Pink</option>
                  <option class="bg-navy">Navy</option>
                  <option class="bg-lightblue">Lightblue</option>
                  <option class="bg-teal">Teal</option>
                  <option class="bg-cyan">Cyan</option>
                  <option class="bg-dark">Dark</option>
                  <option class="bg-gray-dark">Gray dark</option>
                  <option class="bg-gray">Gray</option>
                  <option class="bg-light">Light</option>
                  <option class="bg-warning">Warning</option>
                  <option class="bg-white">White</option>
                  <option class="bg-orange">Orange</option>
                </select></div>
              <h6>Accent Color Variants</h6>
              <div class="d-flex"></div><select class="custom-select mb-3 border-0">
                <option>None Selected</option>
                <option class="bg-primary">Primary</option>
                <option class="bg-warning">Warning</option>
                <option class="bg-info">Info</option>
                <option class="bg-danger">Danger</option>
                <option class="bg-success">Success</option>
                <option class="bg-indigo">Indigo</option>
                <option class="bg-lightblue">Lightblue</option>
                <option class="bg-navy">Navy</option>
                <option class="bg-purple">Purple</option>
                <option class="bg-fuchsia">Fuchsia</option>
                <option class="bg-pink">Pink</option>
                <option class="bg-maroon">Maroon</option>
                <option class="bg-orange">Orange</option>
                <option class="bg-lime">Lime</option>
                <option class="bg-teal">Teal</option>
                <option class="bg-olive">Olive</option>
              </select>
              <h6>Dark Sidebar Variants</h6>
              <div class="d-flex"></div><select class="custom-select mb-3 text-light border-0 bg-primary">
                <option>None Selected</option>
                <option class="bg-primary">Primary</option>
                <option class="bg-warning">Warning</option>
                <option class="bg-info">Info</option>
                <option class="bg-danger">Danger</option>
                <option class="bg-success">Success</option>
                <option class="bg-indigo">Indigo</option>
                <option class="bg-lightblue">Lightblue</option>
                <option class="bg-navy">Navy</option>
                <option class="bg-purple">Purple</option>
                <option class="bg-fuchsia">Fuchsia</option>
                <option class="bg-pink">Pink</option>
                <option class="bg-maroon">Maroon</option>
                <option class="bg-orange">Orange</option>
                <option class="bg-lime">Lime</option>
                <option class="bg-teal">Teal</option>
                <option class="bg-olive">Olive</option>
              </select>
              <h6>Light Sidebar Variants</h6>
              <div class="d-flex"></div><select class="custom-select mb-3 border-0">
                <option>None Selected</option>
                <option class="bg-primary">Primary</option>
                <option class="bg-warning">Warning</option>
                <option class="bg-info">Info</option>
                <option class="bg-danger">Danger</option>
                <option class="bg-success">Success</option>
                <option class="bg-indigo">Indigo</option>
                <option class="bg-lightblue">Lightblue</option>
                <option class="bg-navy">Navy</option>
                <option class="bg-purple">Purple</option>
                <option class="bg-fuchsia">Fuchsia</option>
                <option class="bg-pink">Pink</option>
                <option class="bg-maroon">Maroon</option>
                <option class="bg-orange">Orange</option>
                <option class="bg-lime">Lime</option>
                <option class="bg-teal">Teal</option>
                <option class="bg-olive">Olive</option>
              </select>
              <h6>Brand Logo Variants</h6>
              <div class="d-flex"></div><select class="custom-select mb-3 border-0">
                <option>None Selected</option>
                <option class="bg-primary">Primary</option>
                <option class="bg-secondary">Secondary</option>
                <option class="bg-info">Info</option>
                <option class="bg-success">Success</option>
                <option class="bg-danger">Danger</option>
                <option class="bg-indigo">Indigo</option>
                <option class="bg-purple">Purple</option>
                <option class="bg-pink">Pink</option>
                <option class="bg-navy">Navy</option>
                <option class="bg-lightblue">Lightblue</option>
                <option class="bg-teal">Teal</option>
                <option class="bg-cyan">Cyan</option>
                <option class="bg-dark">Dark</option>
                <option class="bg-gray-dark">Gray dark</option>
                <option class="bg-gray">Gray</option>
                <option class="bg-light">Light</option>
                <option class="bg-warning">Warning</option>
                <option class="bg-white">White</option>
                <option class="bg-orange">Orange</option><a href="#">clear</a>
              </select>
            </div>
          </div>
        </div>
        <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
          <div class="os-scrollbar-track">
            <div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div>
          </div>
        </div>
        <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable os-scrollbar-auto-hidden">
          <div class="os-scrollbar-track">
            <div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div>
          </div>
        </div>
        <div class="os-scrollbar-corner"></div>
      </div>
    </aside>

    <div id="sidebar-overlay"></div>
  </div>



</body>


<script src="../public/Admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../public/Admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../public/Admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../public/Admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../public/Admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->


<!-- jQuery Knob Chart -->
<script src="../public/Admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../public/Admin/plugins/moment/moment.min.js"></script>
<script src="../public/Admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../public/Admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../public/Admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../public/Admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../public/Admin/dist/js/adminlte.js"></script>

</html>





<?php

ob_end_flush();
?>