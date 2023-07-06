<!DOCTYPE html>
<html lang="en" class="menuitem-active">

<head>
    <meta charset="utf-8">
    <title>Access Lesson</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">


    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
    <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" disabled="disabled">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Quill css -->
    <link href="assets/css/vendor/quill.core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/vendor/quill.snow.css" rel="stylesheet" type="text/css" />

</head>

<body class="show"
    data-layout-config="{&quot;leftSideBarTheme&quot;:&quot;dark&quot;,&quot;layoutBoxed&quot;:false, &quot;leftSidebarCondensed&quot;:false, &quot;leftSidebarScrollable&quot;:false,&quot;darkMode&quot;:false, &quot;showRightSidebarOnStart&quot;: true}"
    data-leftbar-theme="dark" data-leftbar-compact-mode="condensed" style="visibility: visible;">
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu menuitem-active">

            <!-- LOGO -->
            <a href="index.html" class="logo text-center logo-light">
                <span class="logo-lg">
                    <img src="assets/images/logo.png" alt="" height="16">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/logo_sm.png" alt="" height="16">
                </span>
            </a>

            <!-- LOGO -->
            <a href="index.html" class="logo text-center logo-dark">
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
                                    <ul class="side-nav">


                                        <li class="side-nav-item">
                                            <a href="learner_dashboard.php" class="side-nav-link">
                                                <i class="uil-home"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>

                                        <li class="side-nav-item">
                                            <a href="learner_access_lesson.php" class="side-nav-link">
                                                <i class="fa fa-book"></i>
                                                <span>Access Lesson</span>
                                            </a>
                                        </li>

                                        <li class="side-nav-item">
                                            <a href="learner_answer_activity.php" class="side-nav-link">
                                                <i class="fa fa-book"></i>
                                                <span>Answer Activity</span>
                                            </a>
                                        </li>

                                        <li class="side-nav-item">
                                            <a href="#" class="side-nav-link">
                                                <i class="uil-user-plus"></i>
                                                <span>Progress</span>
                                            </a>
                                        </li>

       

                                    </ul>


                                    <!-- End Sidebar -->

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="simplebar-placeholder" style="width: 70px; height: 1150px;"></div>
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
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topbar-menu float-end mb-0">
                        <li class="dropdown notification-list d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                                role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>
                       
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                                role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-bell noti-icon"></i>
                                <span class="noti-icon-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">

                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">
                                        <span class="float-end">
                                            <a href="javascript: void(0);" class="text-dark">
                                                <small>Clear All</small>
                                            </a>
                                        </span>Notification
                                    </h5>
                                </div>

                                <div style="max-height: 230px;" data-simplebar="init">
                                    <div class="simplebar-wrapper" style="margin: 0px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper"
                                                    style="height: auto; overflow: hidden;">
                                                    <div class="simplebar-content" style="padding: 0px;">
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                            <div class="notify-icon bg-primary">
                                                                <i class="mdi mdi-comment-account-outline"></i>
                                                            </div>
                                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                                <small class="text-muted">1 min ago</small>
                                                            </p>
                                                        </a>

                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                            <div class="notify-icon bg-info">
                                                                <i class="mdi mdi-account-plus"></i>
                                                            </div>
                                                            <p class="notify-details">New user registered.
                                                                <small class="text-muted">5 hours ago</small>
                                                            </p>
                                                        </a>

                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                            <div class="notify-icon">
                                                                <img src="assets/images/users/avatar-2.jpg"
                                                                    class="img-fluid rounded-circle" alt="">
                                                            </div>
                                                            <p class="notify-details">Cristina Pride</p>
                                                            <p class="text-muted mb-0 user-msg">
                                                                <small>Hi, How are you? What about our next
                                                                    meeting</small>
                                                            </p>
                                                        </a>

                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                            <div class="notify-icon bg-primary">
                                                                <i class="mdi mdi-comment-account-outline"></i>
                                                            </div>
                                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                                <small class="text-muted">4 days ago</small>
                                                            </p>
                                                        </a>

                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                            <div class="notify-icon">
                                                                <img src="assets/images/users/avatar-4.jpg"
                                                                    class="img-fluid rounded-circle" alt="">
                                                            </div>
                                                            <p class="notify-details">Karen Robinson</p>
                                                            <p class="text-muted mb-0 user-msg">
                                                                <small>Wow ! this admin looks good and awesome
                                                                    design</small>
                                                            </p>
                                                        </a>

                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                            <div class="notify-icon bg-info">
                                                                <i class="mdi mdi-heart"></i>
                                                            </div>
                                                            <p class="notify-details">Carlos Crouch liked
                                                                <b>Admin</b>
                                                                <small class="text-muted">13 days ago</small>
                                                            </p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                    </div>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item text-center text-primary notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>


                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name">Ann Watapampam</span>
                                    <span class="account-position">IT student 77%</span>
                                </span>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-edit me-1"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lifebuoy me-1"></i>
                                    <span>Support</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lock-outline me-1"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
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
                                <input type="text" class="form-control dropdown-toggle" placeholder="Search..."
                                    id="top-search">
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
                                        <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-2.jpg"
                                            alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Erwin Brown</h5>
                                            <span class="font-12 mb-0">UI Designer</span>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-5.jpg"
                                            alt="Generic placeholder image" height="32">
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
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tboli</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Teacher Dashboard</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Projects</h4>
                            </div>
                        </div>
                    </div>     
                    <!-- end page title --> 

                    <div class="row">
                        <div class="col-md-6 col-lg-3">
            
                            <!-- Simple card -->
                            <div class="card d-block">
                                <img class="card-img-top" src="assets/images/small/small-1.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Literacy</h5>
                                    <p class="card-text">When: Feb 13 - June 2024</p><a href="Teacher_Module.html" class="btn btn-primary">View Module</a>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div>

                        

                        


                        <div class="col-md-6 col-lg-3">
            
                            <!-- Simple card -->
                            <div class="card d-block">
                                <img class="card-img-top" src="assets/images/small/small-1.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Numeracy</h5>
                                    <p class="card-text">When: Feb 13 - June 2024</p><a href="Teacher_Module.html" class="btn btn-primary">View Module</a>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div><!-- end col -->
                    </div>

                    
                </div> <!-- container -->

            </div> <!-- content -->


                <!-- bundle -->
                <script src="assets/js/vendor.min.js"></script>
                <script src="assets/js/app.min.js"></script>

                <!-- quill js -->
                <script src="assets/js/vendor/quill.min.js"></script>
                <!-- quill Init js-->
                <script src="assets/js/pages/demo.quilljs.js"></script>



</body>

</html>