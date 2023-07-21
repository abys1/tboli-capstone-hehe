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

                                    <!--- Side Menu -->

                                    <?php include('teacher_sidemenu.php') ?>

                                    <!-- Help Box -->

                                    <!-- end Help Box -->
                                    <!-- End Sidebar -->

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="simplebar-required placeholder" style="width: 260px; height: 234px;"></div>
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
                                        <li class="breadcrumb-item"><a href="Teacher_index.php">Dashboard</a></li>

                                        <li class="breadcrumb-item active">Enrollment Services</li>
                                        <li class="breadcrumb-item active">Add Student</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Student Account Registration</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                </div> <!-- container -->

            </div> <!-- content -->


            <div class="col-">
                <div class="card">
                    <div class="card-body">

                        <h3>Student Information</h3>

                        <form action="teacher_add_student.php" method="POST">
                            <div class="row g-2">

                                <div class="mb-3">
                                    <label for="InputID" class="form-label">LRN<sup>*</sup></label>
                                    <input type="text" class="form-control" id="InputID" required
                                        placeholder="02000221026" name="lrn">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="FName" class="form-label">First Name <sup>*</sup></label>
                                    <input type="text" class="form-control" id="FName" required placeholder="First Name"
                                        name="firstname">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="MiddleName" class="form-label">Middle Name <sup>*</sup></label>
                                    <input type="text" class="form-control" id="MiddleName" required
                                        placeholder="MiddleName" name="middlename">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="LName" class="form-label">Last Name <sup>*</sup></label>
                                    <input type="text" class="form-control" id="LName" required placeholder="Last Name"
                                        name="lastname">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="inputbday" class="form-label">Birthdate <sup>*</sup></label>
                                    <input type="date" class="form-control" id="inputbday" name="birthday">
                                </div>


                            </div>

                            <div class="row g-2">

                                <div class="mb-3 col-md-4">
                                    <label for="inputGender" class="form-label">Gender <sup>*</sup></label>
                                    <select id="inputGender" class="form-select" name="gender">
                                        <option>Choose</option>
                                        <option>Female</option>
                                        <option>Male</option>
                                    </select>
                                </div>
                            </div>

                            <h4>Location</h4>

                            <div class="mb-3">
                                <label for="inputAddress" class="form-label">Full address (street, barangay, city)
                                    <sup>*</sup></label>
                                <input type="text" class="form-control" id="inputAddress" required
                                    placeholder="Enter Address" name="address">
                            </div>

                            <h4>Contact Information</h4>
                            <div class="row g-2">
                                <div class="mb-3 col-md-5">
                                    <label for="inputCity" class="form-label">Email Address <sup>*</sup></label>
                                    <input type="text" class="form-control" id="inputCity" name="email">
                                </div>
                                <div class="mb-3 col-md-5">
                                    <label for="inputBarangay" class="form-label">Phone Number <sup>*</sup></label>
                                    <input type="text" class="form-control" id="inputBarangay" name="phone">
                                </div>
                            </div>




                            <h3>Parents Information</h3>

                            <div class="row g-2">



                                <div class="mb-3 col-md-6">
                                    <label for="FName" class="form-label">First Name <sup>*</sup></label>
                                    <input type="text" class="form-control" id="FName" required placeholder="First Name"
                                        name="gfirstname">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="MiddleName" class="form-label">Middle Name <sup>*</sup></label>
                                    <input type="text" class="form-control" id="MiddleName" required
                                        placeholder="MiddleName" name="gmiddlename">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="LName" class="form-label">Last Name <sup>*</sup></label>
                                    <input type="text" class="form-control" id="LName" required placeholder="Last Name"
                                        name="glastname">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="inputbday" class="form-label">Birthdate <sup>*</sup></label>
                                    <input type="date" class="form-control" id="inputbday" name="gbirthday">
                                </div>


                            </div>

                            <div class="row g-2">

                                <div class="mb-3 col-md-4">
                                    <label for="inputGender" class="form-label">Gender <sup>*</sup></label>
                                    <select id="inputGender" class="form-select" name="ggender">
                                        <option>Choose</option>
                                        <option>Female</option>
                                        <option>Male</option>
                                    </select>
                                </div>
                            </div>

                            <h4>Location</h4>

                            <div class="mb-3">
                                <label for="inputAddress" class="form-label">Full address (street, barangay, city)
                                    <sup>*</sup></label>
                                <input type="text" class="form-control" id="inputAddress" required
                                    placeholder="Enter Address" name="gaddress">
                            </div>

                            <h4>Contact Information</h4>
                            <div class="row g-2">
                                <div class="mb-3 col-md-5">
                                    <label for="inputCity" class="form-label">Email Address <sup>*</sup></label>
                                    <input type="text" class="form-control" id="inputCity" name="gemail">
                                </div>
                                <div class="mb-3 col-md-5">
                                    <label for="inputBarangay" class="form-label">Phone Number <sup>*</sup></label>
                                    <input type="text" class="form-control" id="inputBarangay" name="gphoneNumber">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Create Account" name="submit"></input>
                        </form>
                        <div class="table-responsive">
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div>







            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>document.write(new Date().getFullYear())</script>202320232023202320232023 © Hyper -
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

        </div>
    </div>
</body>

</html>