<?php
include('common/config.php');
if (!empty($_SESSION['id'])) {
	echo '<script>setTimeout(function(){location.href="index.php"},1000)</script>';
 }
 if ($_SESSION['admin_id']) {
    $admin_id = $_SESSION['admin_id'];
   }else{
    header("Location: index.php");
   }
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="assets/plugins/morris/morris.css">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        </head>
 <body class="fixed-left">
<!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>
<!-- Begin page -->
        <div id="wrapper">
<!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>
<div class="left-side-logo d-block d-lg-none">
                    <div class="text-center">
                    <a href="dashboard.php" class="logo"><img src="assets/images/logo-dark.png" height="20" alt="logo"></a>
                    </div>
                </div>
<div class="sidebar-inner slimscrollleft">
                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Main</li>
                            <li>
                                <a href="dashboard.php" class="waves-effect">
                                    <i class="dripicons-meter"></i>
                                    <span> Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="show_category.php" class="waves-effect">
                                <i class="dripicons-suitcase"></i>
                                    <span> Category</span>
                                </a>
                            </li>
                            <li>
                                <a href="show_subcategory.php" class="waves-effect">
                                <i class="dripicons-store"></i>
                                    <span> Sub-category</span>
                                </a>
                            </li>
                            <li>
                                <a href="show_products.php" class="waves-effect">
                                <i class="dripicons-star"></i>
                                    <span> Products</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="show_blog.php" class="waves-effect">
                                <i class="dripicons-tag"></i>
                                    <span> Blog</span>
                                </a>
                            </li>
                            <li>
                                <a href="show_banner.php" class="waves-effect">
                                <i class="dripicons-time-reverse"></i>
                                    <span> Banner</span>
                                </a>
                            </li>
                            <li>
                                <a href="show_contact.php" class="waves-effect">
                                <i class="dripicons-user"></i>
                                    <span> User Contact</span>
                                </a>
                            </li>
                         </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->
            <!-- Start right Content here -->
       <div class="content-page">
                <!-- Start content -->
                <div class="content">
                <!-- Top Bar Start -->
                    <div class="topbar">
<div class="topbar-left	d-none d-lg-block">
                            <div class="text-center">
                                <a href="dashboard.php" class="logo"><img src="assets/images/logo.png" height="20" alt="logo"></a>
                            </div>
                        </div>
             <nav class="navbar-custom">
<ul class="list-inline float-right mb-0">
                                <li class="list-inline-item notification-list dropdown d-none d-sm-inline-block">
                                    <form role="search" class="app-search">
                                        <div class="form-group mb-0"> 
                                            <input type="text" class="form-control" placeholder="Search..">
                                            <button type="submit"><i class="fa fa-search text-white"></i></button>
                                        </div>
                                    </form> 
                                </li>
                                <li class="list-inline-item">
                                <a  href="logout.php" style="color:#fff;"><i class="mdi mdi-logout m-r-5"></i> Logout</a>
                             </li>
                          </ul>
                        <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                            </ul>
            <div class="clearfix"></div>
                       </nav>
                    </div>
                    <!-- Top Bar End -->