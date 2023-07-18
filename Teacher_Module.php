<?php
session_start();
$user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en" class="menuitem-active">

<head>
    <meta charset="utf-8">
    <!-- <title>Starter Page | Hyper - Responsive Bootstrap 5 Admin Dashboard</title> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <!-- App favicon -->
    <!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
    <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" disabled="disabled">

</head>

<body class="show"
    data-layout-config="{&quot;leftSideBarTheme&quot;:&quot;dark&quot;,&quot;layoutBoxed&quot;:false, &quot;leftSidebarCondensed&quot;:false, &quot;leftSidebarScrollable&quot;:false,&quot;darkMode&quot;:false, &quot;showRightSidebarOnStart&quot;: false}"
    style="visibility: visible;" data-leftbar-theme="dark" data-leftbar-compact-mode="condensed">
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu menuitem-active">

            <!-- LOGO -->
            <a href="index.php" class="logo text-center logo-light">
                <span class="logo-lg">
                    <img src="assets/images/logo.png" alt="" height="16">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/logo_sm.png" alt="" height="16">
                </span>
            </a>

            <!-- LOGO -->
            <a href="index.php" class="logo text-center logo-dark">
                <span class="logo-lg">
                    <img src="assets/images/logo-dark.png" alt="" height="16">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/logo_sm_dark.png" alt="" height="16">
                </span>
            </a>

            <div class="h-100 show" id="leftside-menu-container" data-simplebar="init">
                <div class="simplebar-wrapper" style="margin: 0px;">
                    <div class="simplebar-height-auto-observer-wrapper">
                        <div class="simplebar-height-auto-observer"></div>
                    </div>
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;">
                                <div class="simplebar-content" style="padding: 0px;">

                                    <!--- Sidemenu -->
                                    <?php include('teacher_sidemenu.php') ?>

                                    <!-- Help Box -->

                                    <!-- end Help Box -->
                                    <!-- End Sidebar -->

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="simplebar-placeholder" style="width: 260px; height: 234px;"></div>
                </div>
                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                </div>
                <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                    <div class="simplebar-scrollbar"
                        style="height: 0px; transform: translate3d(0px, 0px, 0px); display: none;"></div>
                </div>
            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        hello
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <?php include('teacher_topbar.php') ?>

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashbaord</a></li>

                                        <li class="breadcrumb-item active">Module</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Module</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                </div> <!-- container -->

            </div> <!-- content -->


            <div class="col-">
                <div class="card">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-2">
                            <img src="assets/images/small/small-4.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">Lesson 1-Literacy</h3>
                                <p class="card-text">Modules and sections can be completed in any order.</p>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="collapse-preview1">
                                        <p>
                                            <a class="btn btn-primary collapsed" data-bs-toggle="collapse"
                                                href="#collapseExample1" aria-expanded="false"
                                                aria-controls="collapseExample1">
                                                View Content
                                            </a>
                                        </p>
                                        <div class="collapse" id="collapseExample1" style="">
                                            <div class="card card-body mb-0">
                                                <span>
                                                    <a href="#" download>01 Handout</a>
                                                </span>
                                                <span>
                                                    <a href="#" download>01 Quiz 1</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="collapse-code1">
                                        <pre class="mb-0">                                            <!-- Your code here -->
                                        </pre>
                                    </div> <!-- end preview code-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-">
                <div class="card">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-2">
                            <img src="assets/images/small/small-4.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">Lesson 2-Literacy</h3>
                                <p class="card-text">Modules and sections can be completed in any order.</p>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="collapse-preview2">
                                        <p>
                                            <a class="btn btn-primary collapsed" data-bs-toggle="collapse"
                                                href="#collapseExample2" aria-expanded="false"
                                                aria-controls="collapseExample2">
                                                View Content
                                            </a>
                                        </p>
                                        <div class="collapse" id="collapseExample2" style="">
                                            <div class="card card-body mb-0">
                                                <span>
                                                    <a href="#">01 Handout</a>
                                                </span>
                                                <span>
                                                    <a href="#">01 Quiz 1</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="collapse-code2">
                                        <pre class="mb-0">                                            <!-- Your code here -->
                                        </pre>
                                    </div> <!-- end preview code-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>







            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>document.write(new Date().getFullYear())</script>20232023202320232023 © Hyper -
                            Coderthemes.com
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->



            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->



            <!-- END wrapper -->


            <!-- Start right sidebar -->
            <?php include('Teacher_Settings.php'); ?>
            <!-- End right side bar -->


            <!-- bundle -->
            <script src="assets/js/vendor.min.js"></script>
            <script src="assets/js/app.min.js"></script>



</body>

</html>