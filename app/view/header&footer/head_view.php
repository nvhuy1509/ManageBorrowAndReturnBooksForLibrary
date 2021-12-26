<?php  ob_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Name</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link href="<?php echo FULL_SITE_ROOT ?>web/css/styleadmin.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="<?php echo FULL_SITE_ROOT ?>web/images/icon.png" type="image/x-icon" />
        <link rel="stylesheet" href="<?php echo FULL_SITE_ROOT ?>web/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo FULL_SITE_ROOT ?>web/css/fontawesome.min.css">
        <link rel="stylesheet" href="<?php echo FULL_SITE_ROOT ?>web/css/AdminLTE.min.css">
        <link rel="stylesheet" href="<?php echo FULL_SITE_ROOT ?>web/css/_all-skins.min.css">
       

    </head>
    <body class="skin-blue sidebar-mini skin-green-light">
        <div class="wrapper">
            <header class="main-header" style="background-image:url();">
                <!-- Logo -->
                <a href="#" class="logo">
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Admin</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-dark bg-primary navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-left text-uppercase text-title text-center d-sm-none">
                        <b>QUẢN LÝ THƯ VIỆN</b>
                    </div>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="hidden-xs"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <p>
                                            -- Web Developer --
                                        </p>
                                        <div class="user-footer">
                                            <div class="pull-left">
                                                <a href="" class="btn btn-default btn-flat">Đổi mật khẩu</a>
                                            </div>
                                            <div class="pull-right">
                                                <a href="" class="btn btn-default btn-flat">Đăng xuất</a>
                                            </div>
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
                <section class="sidebar sidebar-custom">
                    <!-- Sidebar user panel -->
                    <!-- search form -->
                    <form action="" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li><a href="<?php echo FULL_SITE_ROOT ?>app/controller/bookCtrl.php"><i class="fa fa-book"></i><span>Quản lý sách</span></a></li>
                        <li><a href="<?php echo FULL_SITE_ROOT ?>app/controller/userCtrl.php"><i class="fa fa-user-plus"></i><span>Người dùng</span></a></li>
                        <li><a href="<?php echo FULL_SITE_ROOT ?>app/controller/muontraCtrl.php"><i class="fa fa-th"></i><span>Mượn trả</span></a></li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper right_col" id="right1">