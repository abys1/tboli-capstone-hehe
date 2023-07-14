<?php
      session_start();
      $user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en" class="menuitem-active">

<head>
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

    <!-- Quill css -->
    <link href="assets/css/vendor/quill.core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/vendor/quill.snow.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-pzjw8+ua9bmDXzKrQl/Mv6D5stvOBbhddb5y3p4e9fJ8D4w5erhPvj6M2ybp7l3b"
        crossorigin="anonymous">
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
    <a href="admin_dashboard.php" class="side-nav-link">
        <i class="uil-home"></i>
        <span>Dashboard</span>
    </a>
</li>

<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false"
        aria-controls="sidebarDashboards" class="side-nav-link collapsed">
        <i class="uil-user-plus"></i>
        <span class="badge bg-success float-end"></span>
        <span> Users </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="sidebarDashboards" style="">
        <ul class="side-nav-second-level">
            <li>
                <a href="admin_addAccount.php">Admin</a>
            </li>
            <li>
                <a href="admin_student.php">Student</a>
            </li>
            <li>
                <a href="admin_teacher.php">Teacher</a>
            </li>

        </ul>
    </div>
</li>

<li class="side-nav-item">
    <a href="admin_manage_lesson.php" class="side-nav-link">
        <i class="fa fa-book"></i>
        <span>Manage Lesson</span>
    </a>
</li>

<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarDashboardsLessons" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link collapsed">
        <i class="uil-user-plus"></i>
        <span class="badge bg-success float-end"></span>
        <span> Manage Request Lessons </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="sidebarDashboardsLessons" style="">
        <ul class="side-nav-second-level">
            <li>
                <a href="admin_accepted_lessons.php">Accepted Lessons</a>
            </li>
            <li>
                <a href="admin_pending_lessons.php">Pending Lessons</a>
            </li>
            <li>
                <a href="admin_archive_lessons.php">Archive Lessons</a>
            </li>                            
            
        </ul>
    </div>
</li>

<li class="side-nav-item">
    <a href="admin_quiz.php" class="side-nav-link">
        <i class="fa fa-book"></i>
        <span>Manage Quiz</span>
    </a>
</li>

<li class="side-nav-item">
    <a href="admin_assign_lesson_to_teacher.php " class="side-nav-link">
        <i class="uil-user-plus"></i>
        <span>Assign Lesson to Teacher</span>
    </a>
</li>
<li class="side-nav-item">
    <a href="admin_manage_area.php" class="side-nav-link">
        <i class="uil-user-plus"></i>
        <span>Manage Area</span>
    </a>
</li>
<li class="side-nav-item">
    <a href="#" class="side-nav-link">
        <i class="uil-user-plus"></i>
        <span>Progress</span>
    </a>
</li>

<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false"
        aria-controls="sidebarEmail" class="side-nav-link">
        <i class="uil-folder-plus"></i>
        <span> Reports </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="sidebarEmail">
        <ul class="side-nav-second-level">
            <li>
                <a href="#">List of Teacher</a>
            </li>
            <li>
                <a href="#">List of Admin</a>
            </li>
            <li>
                <a href="#">List of Learners</a>
            </li>
            <li>
                <a href="#">List of Lesson w/Content</a>
            </li>
        </ul>
    </div>
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
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                                role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="12">
                                <span class="align-middle d-none d-sm-inline-block">English</span> <i
                                    class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1"
                                        height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12">
                                    <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12">
                                    <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12">
                                    <span class="align-middle">Russian</span>
                                </a>

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

                        <li class="dropdown notification-list d-none d-sm-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                                role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-view-apps noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

                                <div class="p-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/slack.png" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/github.png" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/g-suite.png" alt="G Suite">
                                                <span>G Suite</span>
                                            </a>
                                        </div>
                                    </div> <!-- end row-->
                                </div>

                            </div>
                        </li>

                        <li class="notification-list">
                            <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                                <i class="dripicons-gear noti-icon"></i>
                            </a>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                </span>
                                <span>
                                <?php
                                    include 'dbcon.php';

                                    if (isset($_SESSION['user_id'])) {
                                        $user_id = $_SESSION['user_id'];
                                    
                                        $sql = "SELECT tbl_userinfo.user_id, tbl_userinfo.firstname, tbl_userinfo.middlename, tbl_userinfo.lastname, tbl_user_level.level
                                                FROM tbl_admin
                                                JOIN tbl_userinfo ON tbl_admin.user_id = tbl_userinfo.user_id
                                                JOIN tbl_user_level ON tbl_admin.level_id = tbl_user_level.level_id
                                                WHERE tbl_user_level.level = 'ADMIN' AND tbl_userinfo.user_id = '$user_id'
                                                LIMIT 1;";
                                    
                                        $result = mysqli_query($conn, $sql);
                                    
                                        if ($result && mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_assoc($result);
                                    
                                    
                                        } else {
                                            echo "No records found in tbl_admin";
                                        }
                                    } else {
                                        echo "No user ID provided";
                                    }
                                    ?>
                                    <span class="account-user-name"><?php echo $row['firstname'] . ' ' . $row['lastname'] . ' ' . $row['lastname']; ?></span>
                                    <span class="account-position"><?php echo $row['level'];?></span>
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
                                <a href="login.php?logout=true" class="dropdown-item notify-item">
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
<!-- Start Content -->
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Quiz</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <a href="#" style="position: relative; display: inline-block;">
                <button type="button" class="btn btn-success mb-2" id="add-lesson-btn" data-toggle="modal"
                    data-target="#add-quiz-modal"><i class="uil-edit-alt"></i>Add Quiz</button>
            </a>
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
                <h3 class="card-choice">True or False</h3>
                <div class="d-flex justify-content-between gap-1">
                    <a class="btn btn-primary" href="#">View</a>
                    <a class="btn btn-success" href="admin_manage_lesson_update.php">Update</a>
                    <a class="btn btn-warning" href="#">Archive</a>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div><!-- end col -->

    <div class="col-md-6 col-lg-3">
        <!-- Simple card -->
        <div class="card d-block">
            <img class="card-img-top" src="assets/images/small/small-1.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Numeracy</h5>
                <h3 class="card-choice">Multiple Choice</h3>
                <div class="d-flex justify-content-between gap-1">
                    <a class="btn btn-primary" href="#">View</a>
                    <a class="btn btn-success" href="admin_manage_lesson_update.php">Update</a>
                    <a class="btn btn-warning" href="#">Archive</a>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
</div> <!-- container -->

<!-- Add Quiz Modal -->
<div class="modal fade" id="add-quiz-modal" tabindex="-1" role="dialog" aria-labelledby="add-quiz-modal-label"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add-quiz-modal-label">Add Quiz</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="quiz-type">Quiz Type:</label>
                    <div class="btn-group" role="group" aria-label="Quiz Type">
                        <a href="admin_true_false.php" class="btn btn-primary" role="button" data-choice="true-false">True or False</a><br>
                        <a href="admin_multiple_choice.php" class="btn btn-primary" role="button" data-choice="multiple-choice">Multiple Choice</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Ud0QD2JyKn2tv8U+X9s70gcS4lSAwiGgFA1fJp6jRX4UX5"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-pzjw8+ua9bmDXzKrQl/Mv6D5stvOBbhddb5y3p4e9fJ8D4w5erhPvj6M2ybp7l3b"
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('#add-lesson-btn').click(function () {
                $('#add-quiz-modal').modal('show');
            });
        });
    </script>

    <!-- Right Sidebar -->
    <div class="end-bar">

        <div class="rightbar-title">
            <a href="javascript:void(0);" class="end-bar-toggle float-end">
                <i class="dripicons-cross noti-icon"></i>
            </a>
            <h5 class="m-0">Settings</h5>
        </div>

        <div class="rightbar-content h-100" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                            <div class="simplebar-content" style="padding: 0px;">

                                <div class="p-3">
                                    <div class="alert alert-warning" role="alert">
                                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                                    </div>

                                    <!-- Settings -->
                                    <h5 class="mt-3">Color Scheme</h5>
                                    <hr class="mt-1">

                                    <div class="form-check form-switch mb-1">
                                        <input class="form-check-input" type="checkbox" name="color-scheme-mode"
                                            value="light" id="light-mode-check" checked="">
                                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                                    </div>

                                    <div class="form-check form-switch mb-1">
                                        <input class="form-check-input" type="checkbox" name="color-scheme-mode"
                                            value="dark" id="dark-mode-check">
                                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                                    </div>


                                    <!-- Width -->
                                    <h5 class="mt-4">Width</h5>
                                    <hr class="mt-1">
                                    <div class="form-check form-switch mb-1">
                                        <input class="form-check-input" type="checkbox" name="width" value="fluid"
                                            id="fluid-check" checked="">
                                        <label class="form-check-label" for="fluid-check">Fluid</label>
                                    </div>

                                    <div class="form-check form-switch mb-1">
                                        <input class="form-check-input" type="checkbox" name="width" value="boxed"
                                            id="boxed-check">
                                        <label class="form-check-label" for="boxed-check">Boxed</label>
                                    </div>


                                    <!-- Left Sidebar-->
                                    <h5 class="mt-4">Left Sidebar</h5>
                                    <hr class="mt-1">
                                    <div class="form-check form-switch mb-1">
                                        <input class="form-check-input" type="checkbox" name="theme" value="default"
                                            id="default-check">
                                        <label class="form-check-label" for="default-check">Default</label>
                                    </div>

                                    <div class="form-check form-switch mb-1">
                                        <input class="form-check-input" type="checkbox" name="theme" value="light"
                                            id="light-check" checked="">
                                        <label class="form-check-label" for="light-check">Light</label>
                                    </div>

                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" name="theme" value="dark"
                                            id="dark-check">
                                        <label class="form-check-label" for="dark-check">Dark</label>
                                    </div>

                                    <div class="form-check form-switch mb-1">
                                        <input class="form-check-input" type="checkbox" name="compact" value="fixed"
                                            id="fixed-check" checked="">
                                        <label class="form-check-label" for="fixed-check">Fixed</label>
                                    </div>

                                    <div class="form-check form-switch mb-1">
                                        <input class="form-check-input" type="checkbox" name="compact" value="condensed"
                                            id="condensed-check">
                                        <label class="form-check-label" for="condensed-check">Condensed</label>
                                    </div>

                                    <div class="form-check form-switch mb-1">
                                        <input class="form-check-input" type="checkbox" name="compact"
                                            value="scrollable" id="scrollable-check">
                                        <label class="form-check-label" for="scrollable-check">Scrollable</label>
                                    </div>

                                    <div class="d-grid mt-4">
                                        <button class="btn btn-primary" id="resetBtn">Reset to Default</button>

                                        <a href="../../product/hyper-responsive-admin-dashboard-template/index.htm"
                                            class="btn btn-danger mt-3" target="_blank"><i
                                                class="mdi mdi-basket me-1"></i> Purchase Now</a>
                                    </div>
                                </div> <!-- end padding-->

                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: 280px; height: 755px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar"
                    style="height: 671px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
            </div>
        </div>
    </div>

    <div class="rightbar-overlay"></div>
    <!-- /End-bar -->


    <!-- bundle -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>

    <!-- quill js -->
    <script src="assets/js/vendor/quill.min.js"></script>
    <!-- quill Init js-->
    <script src="assets/js/pages/demo.quilljs.js"></script>



</body>

</html>