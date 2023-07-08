<?php 
    session_start();
    $user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en" class="menuitem-active"><head>
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
                <ul class="side-nav">


                                        <li class="side-nav-item menuitem">
                                            <a href="Teacher_index.php" class="side-nav-link ">
                                                <i class="uil-home"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>

                                        <li class="side-nav-item">
                                            <a data-bs-toggle="collapse" href="#sidebarUsers" aria-expanded="false" aria-controls="sidebarUsers" class="side-nav-link collapsed">
                                                <i class="uil-user-plus"></i>
                                                <span class="badge bg-success float-end"></span>
                                                <span> Manage Users</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="sidebarUsers" style="">
                                                <ul class="side-nav-second-level">

                                                    <li>
                                                        <a href="Teacher_Learners.php"> <i class=" uil-user-circle" ></i> Learner</a>
                                                    </li>
                                                    

                                                    <li>
                                                        <a href="Teacher_batchUpload.php"> <i class=" uil-list-ul" ></i> Student Batch Upload</a>
                                                    </li>
                                                    

                                                </ul>
                                            </div>
                                        </li>

                                        <li class="side-nav-item">
                                            <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link collapsed">
                                                <i class="uil-user-plus"></i>
                                                <span class="badge bg-success float-end"></span>
                                                <span> Enrolment Services </span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="sidebarDashboards" style="">
                                                <ul class="side-nav-second-level">
                                                    <li>
                                                        <a href="Teacher_AddStudent.php"><i class=" uil-plus-circle"></i> Add Students</a>
                                                    </li>

                                                    <li>
                                                        <a href="Teacher_Add_Parents.php"><i class=" uil-plus-circle"></i> Add Parents</a>
                                                    </li>

                                                    
                                                    

                                                </ul>
                                            </div>
                                        </li>


                                        <li class="side-nav-item">
                                            <a data-bs-toggle="collapse" href="#sidebarLessons" aria-expanded="false" aria-controls="sidebarLessons" class="side-nav-link collapsed">
                                                <i class="dripicons-document-edit"></i>
                                                <span class="badge bg-success float-end"></span>
                                                <span> Manage Lesson </span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="sidebarLessons" style="">
                                                <ul class="side-nav-second-level">

                                                    <li>
                                                        <a href="Teacher_uploadlesson.php"><i class=" uil-plus-circle"></i> Upload Lesson</a>
                                                    </li>
                                                    <li>
                                                        <a href="Teacher_manage_lesson.php"><i class="uil-edit-alt"></i> Edit Lesson</a>
                                                    </li>

                                                    <li>
                                                        <a href="Teacher_CreateModule.php"><i class=" uil-plus-circle"></i> Add Module</a>
                                                    </li>

                                                    
                                                    

                                                </ul>
                                            </div>
                                        </li>
                                        

                                        <li class="side-nav-item">
                                            <a href="Teacher_ManageContent.php" class="side-nav-link">
                                                <i class="uil-file-upload-alt"></i>
                                                <span>Manage Content</span>
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
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>
                        

                        <li class="notification-list">
                            <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                                <i class="dripicons-gear noti-icon"></i>
                            </a>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar"> 
                                    <img src="assets/images/users/Jillian-Ward.jpg" alt="user-image" class="rounded-circle">
                                </span>
                                <span>
                                    <?php
                                    include 'dbcon.php';

                                    if (isset($_SESSION['user_id'])) {
                                        $user_id = $_SESSION['user_id'];
                                    
                                        $sql = "SELECT tbl_userinfo.user_id, tbl_userinfo.firstname, tbl_userinfo.middlename, tbl_userinfo.lastname, tbl_user_level.level
                                                FROM tbl_teachers
                                                JOIN tbl_userinfo ON tbl_teachers.user_id = tbl_userinfo.user_id
                                                JOIN tbl_user_level ON tbl_teachers.level_id = tbl_user_level.level_id
                                                WHERE tbl_user_level.level = 'TEACHER' AND tbl_userinfo.user_id = '$user_id'
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
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
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
                                <a href="Teacher_Login.php?logout=true" class="dropdown-item notify-item">
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
                                <input type="text" class="form-control dropdown-toggle" placeholder="Search..." id="top-search">
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
                                <h6 class="text-overflow mb-2 text-uppercase">Enrollment Services</h6>
                            </div>

                            <div class="notification-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Erwin Brown</h5>
                                            <span class="font-12 mb-0">UI Designer</span>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
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
                                        <li class="breadcrumb-item"><a href="Teacher_Module.php">Dashboard</a></li>
                                        
                                        <li class="breadcrumb-item active">Manage Quiz</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Manage Quiz</h4>
                            </div>
                        </div>
                    </div>    
                    <!-- end page title --> 
                    
                </div> <!-- container -->

            </div> <!-- content -->

            <div class="modal-header">
                
                  <!-- Standard modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#standard-modal-add"><i class="mdi mdi-plus-circle me-2"></i>Add</button>
                    <div id="standard-modal-add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel-add" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="standard-modalLabel-add">Modal Heading</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="list-group">
                                        
                                        
                                        <button type="button" class="list-group-item list-group-item-action">
                                            
                                                <i class="uil-users-alt"></i>
                                                <h6 class="text-primary">  &emsp13; Attendance</h6>
                                                <span>Award points base on attendance</span>
                                            
                                        </button>

                                        <button type="button" class="list-group-item list-group-item-action">
                                            
                                                <i class="uil-wifi"></i>
                                                <h6 class="text-primary">&emsp13; Offline Quiz</h6>
                                                <span>Take an Online Quiz</span>
                                            
                                        </button>

                                        <button type="button" class="list-group-item list-group-item-action">
                                            
                                                <i class="uil-wifi-slash"></i>
                                                <h6 class="text-primary">&emsp13; Quiz</h6>
                                                <span>Take an Offline Quiz</span>
                                            
                                        </button>
                                        
                                        
                                        
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
            </div>

            

            <ul class="nav nav-tabs nav-justified nav-bordered mb-3">
                <li class="nav-item">
                    <a href="#Assignment" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                        <i class="mdi mdi-home-variant d-md-none d-block"></i>
                        <span class="d-none d-md-block">Assignment</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#Questions" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                        <i class="mdi mdi-account-circle d-md-none d-block"></i>
                        <span class="d-none d-md-block">Questions</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#Grades" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                        <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                        <span class="d-none d-md-block">Grades</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#Submission" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                        <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                        <span class="d-none d-md-block">Submission Status</span>
                    </a>
                </li>

               
            </ul>
            
            <div class="tab-content">
                <!-- Assignment -->
                <div class="tab-pane  show active" id="Assignment">

                   

                    

                    <table class="table table-centered mb-0">
                        <thead>
                            <tr>
                                <th><input type="checkbox" class="form-check-input" id="customCheckcolor1"> &emsp; All</th>
                                <th>Assignment</th>
                                <th>Start date</th>
                                <th>Due</th>
                                <th>Status</th>
                                <th>Max score</th>
                                <th>%Of Overall</th>
                                <th>To Grade/Submitted</th>
                                <th>Grade Release</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" class="form-check-input" id="customCheckcolor1"></td>
                                <td>
                                    <h6>
                                        <Span>08 Quiz 1</Span>
                                    </h6>
                                    <Span>Literacy</Span>
                                </td>
                                <td>Apr 12</td>
                                <td>Apr 10</td>
                                <td><span><i class="uil-check-circle"></i></span></td>
                                <td><span>100</span></td>
                                <td><span>6.7</span></td>
                                <td><span>17</span></td>
                                <td><span>Instant</span></td>
                                
                            
                        </tbody>
                    </table>





                </div>
                <!-- Questions -->
                <div class="tab-pane" id="Questions">
                   
                    

                    
                    <!-- Center modal -->
<div class="col- float-end modal-header">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#centermodal">Add quiz assignment</button>
<div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myCenterModalLabel">Add quiz Assignment</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-content">


            
                <div class="modal-body">
    
                    
                    <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            
                                            
                            
                                            <ul class="nav nav-tabs nav-bordered mb-3">
                                                <li class="nav-item">
                                                    <a href="#display-headings-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">Overview</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#display-headings-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">Options</a>
                                                </li>
                                            </ul> <!-- end nav-->
                                            <div class="tab-content">
                                                <div class="tab-pane show active" id="display-headings-preview">
                                                    
                                                    
            
                                                    
            
    
            
                                                    
                                                    <div class="row g-2"> 
                                                        <div class="mb-3 col-"> 
                                                            <label for="inpuTtitle" class="form-label">Title</label> 
                                                            <input type="text" class="form-control" id="inputTtile"> 
                                                    </div>
                                                     <div class="mb-3 col-md-2"> 
                                                        <label for="inputZip" class="form-label">Max Score</label> 
                                                        <input type="text" class="form-control" id="inputscore"> 
                                                        <label for="inputZip" class="form-label">Allow late?</label> 
                                                        <input type="checkbox" class="form-check-input" id="inputscore"> 
                                                    </div>
                                                     <div class="mb-3 col-md-3"> <div class="mb-3 col-md-8"> 
                                                        <label for="Category" class="form-label">Category</label> 
                                                        <select id="Category" class="form-select"> 
                                                            <option>None</option> 
                                                            <option>Literacy</option> 
                                                            <option>Numeracy</option>
                                                         </select> </div> <div class="mb-3 col-md-8"> 
                                                            <label for="Grading" class="form-label">Grading</label> 
                                                            <select id="Grading" class="form-select"> 
                                                                <option>None</option> 
                                                                <option>Normal</option>
                                                             </select> 
                                                            </div> 
                                                    </div> 
                                                    <div class="mb-3 col-sm-3"> 
                                                        <div class="mb-3"> 
                                                            <label for="example-date" class="form-label">Start</label> 
                                                            <input class="form-control" id="example-date" type="datetime" name="date">
                                                         </div>
                                                     <div class="mb-3">
                                                         <label for="example-date" class="form-label">Due</label> 
                                                         <input class="form-control" id="example-date" type="date" name="date"> 
                                                        </div> 
                                                    </div>
                                                     <div class="mb-3 col-md-3"> 
                                                        <div class="mb-3 col-md-8"> 
                                                            <label for="Module" class="form-label">Module</label> 
                                                            <select id="Module" class="form-select"> <option>None</option> 
                                                                <option>Literacy</option> </select> </div>
                                                     <div class="mb-3 col-md-8"> 
                                                        <label for="Grading" class="form-label">Grading Score</label>
                                                         <select id="Grading" class="form-select"> 
                                                            <option>None</option> <option>Default</option>
                                                         </select> </div> 
                                                    </div> 
                                                     
                                                   
                                                    <p>Instructions</p> 
                                                    <!-- HTML --> 
                                                    <div id="snow-editor" style="height: 300px;">
                                                    
                                                    
                                                    
                                                    </div>
                                                     
    
    
                                                    
                                                    
                                                     </div>  
                                                </div> <!-- end preview-->
                                            
                                                <div class="tab-pane" id="display-headings-code">
                                                    <div class="mt-2">
                                                    <span>Release Grade &nbsp; &nbsp; &nbsp; &nbsp;</span> 
                                                <div class="form-check form-check-inline">
                                                        <input type="radio" id="customRadio3" name="customRadio1" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio3">Instant</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" id="customRadio4" name="customRadio1" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio4">Manual</label>
                                                    </div>
                                                </div> <div class="mt-2">
                                                    <div class="form-check form-check-inline">
                                                        <input type="checkbox" class="form-check-input" id="customCheck3">
                                                        <label class="form-check-label" for="customCheck3">Timed</label>
                                                    </div>
                                                
                                                    
                                                    <div class="form-check form-check-inline float-end">
                                                        <input type="checkbox" class="form-check-input" id="customCheck4">
                                                        <label class="form-check-label" for="customCheck4">Randomize Order</label>
                                                    </div>
                                                </div><div class="mt-2">
                                                    <div class="form-check form-check-inline">
                                                        <input type="checkbox" class="form-check-input" id="customCheck3">
                                                        <label class="form-check-label" for="customCheck3">Instant Feedback</label>
                                                    </div>
                                                
                                                    
                                                    <div class="form-check form-check-inline float-end">
                                                        <input type="checkbox" class="form-check-input" id="customCheck4">
                                                        <label class="form-check-label" for="customCheck4">Allow Review</label>
                                                    </div>
                                                </div><div class="mt-2">
                                                    <span>Grading &nbsp; &nbsp; &nbsp; &nbsp;</span> 
                                                <div class="form-check form-check-inline">
                                                        <input type="radio" id="customRadio3" name="customRadio1" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio3">Use Latest Score</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" id="customRadio4" name="customRadio1" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio4">Use Best Score</label>
                                                    </div>
                                                </div>
    <!-- end highlight-->
                                                </div> <!-- end preview code-->
                                            </div> <!-- end tab-content-->
                                        </div> <!-- end card-body -->
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
                            </div>
                        
                        
    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div> 
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>


                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                Multiple Choice
                            </div>
                            <div class="card-body">
                                <blockquote class="card-bodyquote col-md-3">
                                    <img class="card-img-top " src="assets/images/multiple.png" alt="Card image cap">
                                </blockquote>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    








                </div>
                <!-- Grades -->
                <div class="tab-pane" id="Grades">
                    <p>...</p>
                </div>

                <div class="tab-pane" id="Submission">
                    <p>...</p>
                </div>
            </div>

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>document.write(new Date().getFullYear())</script>2023 © Hyper - Coderthemes.com
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

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
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
                    <label class="form-check-label" for="light-mode-check">Light Mode</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check">
                    <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                </div>
   

                <!-- Width -->
                <h5 class="mt-4">Width</h5>
                <hr class="mt-1">
                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check" checked="">
                    <label class="form-check-label" for="fluid-check">Fluid</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                    <label class="form-check-label" for="boxed-check">Boxed</label>
                </div>
    

                <!-- Left Sidebar-->
                <h5 class="mt-4">Left Sidebar</h5>
                <hr class="mt-1">
                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
                    <label class="form-check-label" for="default-check">Default</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check" checked="">
                    <label class="form-check-label" for="light-check">Light</label>
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                    <label class="form-check-label" for="dark-check">Dark</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check" checked="">
                    <label class="form-check-label" for="fixed-check">Fixed</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="compact" value="condensed" id="condensed-check">
                    <label class="form-check-label" for="condensed-check">Condensed</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="compact" value="scrollable" id="scrollable-check">
                    <label class="form-check-label" for="scrollable-check">Scrollable</label>
                </div>

                <div class="d-grid mt-4">
                    <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
        
                    <a href="../../product/hyper-responsive-admin-dashboard-template/index.htm" class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                </div>
            </div> <!-- end padding-->

        </div></div></div></div><div class="simplebar-placeholder" style="width: 280px; height: 755px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 671px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>
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
    


</body></html>