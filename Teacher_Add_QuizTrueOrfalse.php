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

<body <?php include('dataconfig.php') ?>>
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
                                <h4 class="page-title">True or False</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                </div> <!-- container -->

            </div> <!-- content -->

            <div class="row justify-content-md-center mt-4">
                <div class="card col-sm-10">
                    <div class="card-body">



                        <div class="row mb-4">

                            <div class="col-sm-9">
                                <label for="project-overview" class="form-label">Please select subject</label>
                                <select class="form-control select2" data-toggle="select2">
                                    <option>Select Category</option>
                                    <option value="AZ">Literacy</option>
                                    <option value="CO">Numeracy</option>
                                </select>
                            </div>

                            <div class="col-sm-3 text-sm-end mt-3">
                                <input type="button" class="btn btn-primary" value="Add Question">
                            </div>

                        </div>

                        <form action="" method="POST">

                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Quiz Title</label>
                                <input type="text" id="simpleinput" class="form-control">
                            </div>

                            <div class="mb-2">
                                <label>Question #1</label>
                            </div>

                            <textarea class="form-control mb-3" name="" id="" cols="130" rows="5"
                                placeholder="Enter your Questions here"></textarea>
                            <div class="list-group"></div>


                            <div class="list-group">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" id="customRadio1" name="customRadio1"
                                                        class="form-check-input">
                                                    <label class="form-check-label" for="customRadio1">True</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" id="customRadio2" name="customRadio1"
                                                        class="form-check-input">
                                                    <label class="form-check-label" for="customRadio2">False</label>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                                <div class="row mt-4">
                                    <div class="col-sm-6">
                                        <input type="button" class="btn btn-primary" value="Create Quiz">
                                    </div>

                                </div>

                        </form>




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