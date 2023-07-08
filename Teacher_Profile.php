<!DOCTYPE html>
<html lang="en" class="menuitem-active"><head>
    <meta charset="utf-8">
    <title>Starter Page | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
    <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" disabled="disabled">

</head>

<body class="show" data-layout-config="{&quot;leftSideBarTheme&quot;:&quot;dark&quot;,&quot;layoutBoxed&quot;:false, &quot;leftSidebarCondensed&quot;:false, &quot;leftSidebarScrollable&quot;:false,&quot;darkMode&quot;:false, &quot;showRightSidebarOnStart&quot;: true}" style="visibility: visible;" data-leftbar-theme="dark" data-leftbar-compact-mode="condensed">
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

            <div class="h-100 show" id="leftside-menu-container" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">

                <!--- Sidemenu -->
                

                    
                <!--- Sidemenu -->
                <ul class="side-nav">


                                        <li class="side-nav-item ">
                                            <a href="Teacher_index.php" class="side-nav-link">
                                                <i class="uil-home"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>

                                        <li class="side-nav-item">
                                            <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link collapsed">
                                                <i class="uil-user-plus"></i>
                                                <span class="badge bg-success float-end"></span>
                                                <span> Enrollment Services </span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="sidebarDashboards" style="">
                                                <ul class="side-nav-second-level">
                                                <li>
                                                        <a href="Teacher_AddStudent.php"><i class=" uil-plus-circle"></i> Add Student</a>
                                                    </li>

                                                    <li>
                                                        <a href="Teacher_batchUpload.php"> <i class=" uil-list-ul" ></i> Student Batch Upload</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </li>


                                        <li class="side-nav-item">
                                            <a href="Teacher_manage_lesson.php" class="side-nav-link">
                                                <i class="dripicons-document-edit"></i>
                                                <span>Manage Lesson</span>
                                            </a>
                                        </li>

                                        <li class="side-nav-item">
                                            <a href="Teacher_uploadlesson.php" class="side-nav-link">
                                                <i class="uil-file-upload-alt"></i>
                                                <span>Upload Lesson</span>
                                            </a>
                                        </li>

                                        <li class="side-nav-item">
                                            <a href="Teacher_quiz.php" class="side-nav-link">
                                            <i class="dripicons-document-edit"></i>
                                                <span>Manage Quiz</span>
                                            </a>
                                        </li>

                                        <li class="side-nav-item">
                                            <a href="#" class="side-nav-link">
                                                <i class="uil-user-plus"></i>
                                                <span>Assign Lesson to Student</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="#" class="side-nav-link">
                                                <i class="uil-user-plus"></i>
                                                <span>Progress</span>
                                            </a>
                                        </li>

                                        <li class="side-nav-item">
                                            <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                                                <i class="uil-folder-plus"></i>
                                                <span> Reports </span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="sidebarEmail">
                                                <ul class="side-nav-second-level">
                                                    <li>
                                                        <a href="Teacher_list_of_teacher.php">List of Teacher</a>
                                                    </li>
                                                    <li>
                                                        <a href="Teacher_studentlist.php">List of Learners</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">List of Lesson w/Content</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                    </ul>

                    

                    

                    

                <!-- Help Box -->
                
                <!-- end Help Box -->
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div></div></div></div><div class="simplebar-required placeholder" style="width: 260px; height: 234px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        hello
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topbar-menu float-end mb-0">
                        <li class="dropdown notification-list d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" required="" placeholder="Search ..." aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>
                        

                        

                        

                        <li class="notification-list">
                            <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                                <i class="dripicons-gear noti-icon"></i>
                            </a>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="Teacher_Profile.php" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar"> 
                                    <img src="assets/images/users/Jillian-Ward.jpg" alt="user-image" class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name">Jillian Ward</span>
                                    <span class="account-position">Teacher</span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="Teacher_Profile.php" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="Teacher_Login.php" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>

                    </ul>
                    <button class="button-menu-mobile open-left">
                        <i class="mdi mdi-menu"></i>
                    </button>
                    <div class="app-search dropdown d-none d-lg-block">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control dropdown-toggle" required="" placeholder="Search..." id="top-search">
                                <span class="mdi mdi-magnify search-icon"></span>
                                <button class="input-group-text btn-primary" type="submit">Search</button>
                            </div>
                        </form>

                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-notes font-16 me-1"></i>
                                <span>Analytics Report</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-life-ring font-16 me-1"></i>
                                <span>How can I help you?</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-cog font-16 me-1"></i>
                                <span>User profile settings</span>
                            </a>

                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                            </div>

                            <div class="notification-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-2.jpg" alt="Generic required placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Erwin Brown</h5>
                                            <span class="font-12 mb-0">UI Designer</span>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-5.jpg" alt="Generic required placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Jacob Deo</h5>
                                            <span class="font-12 mb-0">Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">
                    
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    
                                </div>
                                <h3 class="page-title"> Teacher Profile</h3>
                            </div>
                        </div>
                    </div>     
                    <!-- end page title --> 
                    
                </div> <!-- container -->

            </div> <!-- content -->

            
            <div class="row">
                <div class="col-sm-12">
                    <!-- Profile -->
                    <div class="card bg-dark">
                        <div class="card-body profile-user-box">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="avatar-lg">
                                                <img src="assets/images/users/Jillian-Ward.jpg" alt="" class="rounded-circle img-thumbnail">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div>
                                                <h4 class="mt-1 mb-1 text-white">Jillian Ward</h4>
                                                <p class="font-13 text-white-50"> Authorised Teacher</p>

                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col-->

                                <div class="col-sm-4">
                                    <div class="text-center mt-sm-0 mt-3 text-sm-end">

                                    <span class="badge badge-outline-info">Teacher</span> <br> <br> <br>

                                        <button type="button" class="btn btn-light">
                                            <i class="mdi mdi-account-edit me-1"></i> Edit Profile
                                        </button>
                                    </div>
                                </div> <!-- end col-->
                            </div> <!-- end row -->

                        </div> <!-- end card-body/ profile-user-box-->
                    </div><!--end profile/ card -->
                </div> <!-- end col-->
            </div>

            <div class="row">
                <div class="col-xl-4">
                    <!-- Personal-Information -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-3">Teacher Information</h4>
                            <p class="text-muted font-13">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores iusto dignissimos doloribus architecto, quas tenetur libero rerum accusamus. Quibusdam, porro voluptatum sint voluptatibus corrupti id ullam eaque illum aut nulla alias est eum, cumque aliquid? Eos illum eaque quisquam provident dicta accusamus odit nulla, qui fugiat odio neque omnis et pariatur dolorum ut repellendus adipisci. Dignissimos, cum cumque quo error excepturi a veniam qui ducimus animi, accusamus eos iste repellat quaerat aliquid labore sint, voluptatum facilis placeat repudiandae reiciendis modi esse! Placeat, amet voluptas autem ipsum ullam rem incidunt. Dolorem nostrum laboriosam quis illo distinctio. A corrupti provident minima esse?
                            </p>

                            <hr>

                            <div class="text-start">
                                <p class="text-muted"><strong>Full Name :</strong> <span class="ms-2">Jhyllianne Wardë Penzon</span></p>

                                <p class="text-muted"><strong>Mobile :</strong><span class="ms-2">(+12) 123 1234 567</span></p>

                                <p class="text-muted"><strong>Email :</strong> <span class="ms-2">Jhyllianne@gmail.com</span></p>

                                <p class="text-muted"><strong>Location :</strong> <span class="ms-2">Phillipines</span></p>

                                <p class="text-muted"><strong>Languages :</strong>
                                    <span class="ms-2"> English, German, Spanish </span>
                                </p>
                                <p class="text-muted mb-0" id="tooltip-container"><strong>Elsewhere :</strong>
                                    <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container" data-bs-placement="top" data-bs-toggle="tooltip" href="" title="Facebook"><i class="mdi mdi-facebook"></i></a>
                                    <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container" data-bs-placement="top" data-bs-toggle="tooltip" href="" title="Twitter"><i class="mdi mdi-twitter"></i></a>
                                    <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container" data-bs-placement="top" data-bs-toggle="tooltip" href="" title="Skype"><i class="mdi mdi-skype"></i></a>
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-- Personal-Information -->

                    
                     <!-- end card-->

                </div> <!-- end col-->

                <div class="col-xl-8">

                </div>
                <!-- end col -->

            </div>
            

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>document.write(new Date().getFullYear())</script>202320232023202320232023 © Hyper - Coderthemes.com
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


    <!-- Right Sidebar -->
    <div class="end-bar">

        <div class="rightbar-title">
            <a href="javascript:void(0);" class="end-bar-toggle float-end">
                <i class="dripicons-cross noti-icon"></i>
            </a>
            <h5 class="m-0">Settings</h5>
        </div>

        <div class="rightbar-content h-100" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">

            <div class="p-3">
                <div class="alert alert-warning" role="alert">
                    <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                </div>

                <!-- Settings -->
                <h5 class="mt-3">Color Scheme</h5>
                <hr class="mt-1">

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light" id="light-mode-check" checked="">
                    <label class="form-check-label" for="light-mode-check">Light Mode <sup>*</sup></label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check">
                    <label class="form-check-label" for="dark-mode-check">Dark Mode <sup>*</sup></label>
                </div>
   

                <!-- Width -->
                <h5 class="mt-4">Width</h5>
                <hr class="mt-1">
                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check" checked="">
                    <label class="form-check-label" for="fluid-check">Fluid <sup>*</sup></label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                    <label class="form-check-label" for="boxed-check">Boxed <sup>*</sup></label>
                </div>
    

                <!-- Left Sidebar-->
                <h5 class="mt-4">Left Sidebar</h5>
                <hr class="mt-1">
                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
                    <label class="form-check-label" for="default-check">Default <sup>*</sup></label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check" checked="">
                    <label class="form-check-label" for="light-check">Light <sup>*</sup></label>
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                    <label class="form-check-label" for="dark-check">Dark <sup>*</sup></label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check" checked="">
                    <label class="form-check-label" for="fixed-check">Fixed <sup>*</sup></label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="compact" value="condensed" id="condensed-check">
                    <label class="form-check-label" for="condensed-check">Condensed <sup>*</sup></label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="compact" value="scrollable" id="scrollable-check">
                    <label class="form-check-label" for="scrollable-check">Scrollable <sup>*</sup></label>
                </div>

                <div class="d-grid mt-4">
                    <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
        
                    <a href="../../product/hyper-responsive-admin-dashboard-template/index.htm" class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                </div>
            </div> <!-- end padding-->

        </div></div></div></div><div class="simplebar-required placeholder" style="width: 280px; height: 755px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 671px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>
    </div>

    <div class="rightbar-overlay"></div>
    <!-- /End-bar -->


    <!-- bundle -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>

</div>
    </div>
        </body>
    
    </html>