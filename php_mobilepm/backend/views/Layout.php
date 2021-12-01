<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mobile Pro Max</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="assets/backend/layout1/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/backend/layout1/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/backend/layout1/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="assets/backend/layout1/css/_all-skins.min.css">
     <link rel="stylesheet" href="assets/backend/layout1/css/style.css">
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<!--  -->
    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>M</b>PM</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Mobile</b> PM</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
<!--  -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="assets/backend/layout1/images/1.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">Mobile PM</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="assets/backend/layout1/images/1.jpg" class="img-circle" alt="User Image">
<!--  -->
                                <p>
                                    Mobile PM
                                    <small>Web developer</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="assets/backend/layout1/images/1.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <a href="#"><i class="fa fa-user text-success"></i> Online</a>
                    <p> </p>
                    <p>Mobile PM</p>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Menu</li>
<!--  -->
                <li>
                    <a href="index.php?controller=home">
                        <i class="fa fa-th"></i> <span>Trang chủ</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?controller=categories">
                        <i class="fa fa-th"></i> <span>Danh mục hãng</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?controller=products">
                        <i class="fa fa-th"></i> <span>Danh sách sản phẩm</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?controller=news">
                        <i class="fa fa-th"></i> <span>Tin tức</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-wpforms"></i> <span>Form</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-table"></i> <span>Table</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?controller=users">
                        <i class="fa fa-users"></i> <span>Quản lý user</span>
                        <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
            </span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
<!--  -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <section class="content">
            <?php echo $this->view; ?>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b><a href="index.php?controller=login&action=logout">Logout</a></b> 
        </div>
        <strong>Phone PP &copy; 2014-2019 <a href="#">Mobile PM</a>.</strong>
    </footer>
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="assets/backend/layout1/js/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/backend/layout1/js/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/backend/layout1/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/backend/layout1/js/adminlte.min.js"></script>

</body>
</html>
