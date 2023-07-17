<?php
      session_start();
      $user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en" class="menuitem-active"><head>
    <meta charset="utf-8">
    <title>Admin Teacher</title>
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

<body class="show" data-layout-config="{&quot;leftSideBarTheme&quot;:&quot;dark&quot;,&quot;layoutBoxed&quot;:false, &quot;leftSidebarCondensed&quot;:false, &quot;leftSidebarScrollable&quot;:false,&quot;darkMode&quot;:false, &quot;showRightSidebarOnStart&quot;: true}" data-leftbar-theme="dark" data-leftbar-compact-mode="condensed" style="visibility: visible;">
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

            <div class="h-100 show" id="leftside-menu-container" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">

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
    <a data-bs-toggle="collapse" href="#sidebarclass" aria-expanded="false"
        aria-controls="sidebarclass" class="side-nav-link">
        <i class="uil-folder-plus"></i>
        <span> Manage Class/Section </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="sidebarclass">
        <ul class="side-nav-second-level">
            <li>
                <a href="admin_class.php">Create Class/Section</a>
            </li>
            <li>
                <a href="admin_assign_teacher_class.php">Assign Teacher to Class</a>
            </li>
        </ul>
    </div>
</li>
<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarArea" aria-expanded="false"
        aria-controls="sidebarArea" class="side-nav-link">
        <i class="uil-folder-plus"></i>
        <span> Manage Area </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="sidebarArea">
        <ul class="side-nav-second-level">
            <li>
                <a href="admin_manage_area.php">Create/Register Area</a>
            </li>
            <li>
                <a href="admin_assign_teacher_lesson.php">Assign Teacher to Area</a>
            </li>
            <li>
                <a href="admin_assign_class_area.php">Assign Class to Area</a>
            </li>
        </ul>
    </div>
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

            </div></div></div></div><div class="simplebar-placeholder" style="width: 70px; height: 1150px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>
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
                                <a href="admin_profile.php" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    <span>My Account</span>
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
                                                       
                                    </ol>
                                </div>
                                <h4 class="page-title">Manage Teacher</h4>
                            </div>
                        </div>
                    </div>     
                    <!-- end page title --> 
                    
                </div> <!-- container -->

            </div> <!-- content -->
              
            <table id="basic-datatable" class="table table-centered mb-0">
            <div class="row mb-2">
    <div class="col-sm-4">
        <a href="admin_add_Teacher_acc.php" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add New Teacher</a>
    </div>     
    <div class="col-sm-4">
        <a href="#" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#batchUploadModal"><i class="mdi mdi-upload me-2"></i> Batch Upload</a>
    </div>       
</div>

<!-- Modal -->
<div class="modal fade" id="batchUploadModal" tabindex="-1" role="dialog" aria-labelledby="batchUploadModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="batchUploadModalLabel">Batch Upload Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
    <div class="mb-3">
        <label for="excelFile" class="form-label">Upload Excel File:</label>
        <input type="file" class="form-control" id="excelFile" accept=".xlsx, .xls">
    </div>
</div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Upload</button>
            </div>
        </div>
    </div>
</div>
                <thead>
                    <tr>
                        <th class="">
                            <div class="form-check form-checkbox-success mb-2">
                                <input type="checkbox" class="form-check-input" id="customCheckAll">
                                <label class="form-check-label" for="customCheckAll">Select All</label>
                            </div>
                        </th>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email Address</th>
                        <th>Contact Number</th>
                        <th>Action</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                include "dbcon.php";

                // SQL query
                $sql = "SELECT tbl_teachers.teacher_id, tbl_userinfo.firstname, tbl_userinfo.middlename, tbl_userinfo.lastname,
                            tbl_usercredentials.email, tbl_usercredentials.contact, tbl_user_level.level, tbl_user_status.status
                        FROM tbl_teachers
                        JOIN tbl_userinfo ON tbl_teachers.user_id = tbl_userinfo.user_id
                        JOIN tbl_usercredentials ON tbl_teachers.credentials_id = tbl_usercredentials.usercredentials_id
                        JOIN tbl_user_level ON tbl_teachers.level_id = tbl_user_level.level_id
                        JOIN tbl_user_status ON tbl_teachers.status_id = tbl_user_status.status_id
                        WHERE tbl_user_level.level = 'TEACHER' AND tbl_user_status.status = 1";

                // Execute the query and get the result
                $result = mysqli_query($conn, $sql);

                // Check if the query was successful
                if (!$result) {
                    die("Error executing the query: " . mysqli_error($conn));
                }


     if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td>
                    <div class="form-check form-checkbox-success">
                        <input type="checkbox" class="form-check-input customCheckbox" id="customCheckcolor2">
                        <label class="form-check-label" for="customCheckcolor2"></label>
                    </div>
                </td>
                <td><?php echo $row['teacher_id']; ?></td>
                <td><?php echo $row['firstname'] . ' ' . $row['middlename'] . ' ' . $row['lastname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td>
                            <a href="admin_subject_edit.php?teacher_id=<?php echo $row['teacher_id'] ?>">
                                <button type="button" class="btn btn-primary"><i class="mdi mdi-pencil"></i> </button>
                            </a>
                            <a href="admin_teacher_deactivate.php?teacher_id=<?php echo $row['teacher_id'] ?>" class="decline">
                                <button type="button" class="btn btn-danger"><i class="mdi mdi-archive"></i> </button>
                            </a>
                            </td>
                            <td>
                                <?php
                                if ($row['status'] == 1) {
                                    echo '<span class="badge bg-success">Active</span>';
                                } else {
                                    echo '<span class="badge bg-success">Inactive</span>';
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                            }
                        } else {
                            echo "<tr><td colspan='6'>No records found</td></tr>";
                        }
                        ?>
                    </td>
                </tbody>
            </table>

    <!-- Right Sidebar -->
  


    <!-- bundle -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>

    <!-- quill js -->
    <script src="assets/js/vendor/quill.min.js"></script>
    <!-- quill Init js-->
    <script src="assets/js/pages/demo.quilljs.js"></script>
    


</body></html>