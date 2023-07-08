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
    <!-- <link rel="shortcut icon" href="assets/images/users/Jillian-Ward.jpg"> -->

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
    <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" disabled="disabled">

    <!-- Quill css -->
    <link href="assets/css/vendor/quill.core.css" rel="stylesheet" type="text/css">
    <link href="assets/css/vendor/quill.snow.css" rel="stylesheet" type="text/css">

    <!-- third party css -->
    <link href="assets/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css">
    <link href="assets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css">
    <!-- third party css end -->

    <style>
    .file-container {
        display: flex;
        align-items: center;
        border: 1px solid #ccc;
        padding: 5px;
    }

    .remove-button {
        margin-left: auto;
        color: red;
        cursor: pointer;
    }
    </style>


</head>

<body class="show" data-layout-config="{&quot;leftSideBarTheme&quot;:&quot;dark&quot;,&quot;layoutBoxed&quot;:false, &quot;leftSidebarCondensed&quot;:false, &quot;leftSidebarScrollable&quot;:false,&quot;darkMode&quot;:false, &quot;showRightSidebarOnStart&quot;: true}" style="visibility: visible;" data-leftbar-theme="dark" data-leftbar-compact-mode="condensed">
    <!-- Begin page -->
    <div class="wrapper menuitem-active">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu menuitem-active show">

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

            <div class="h-100 show" id="leftside-menu-container" data-simplebar="init"><div class="simplebar-wrapper menuitem-active" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask show"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper menuitem-active" style="height: 100%; overflow: hidden;"><div class="simplebar-content show" style="padding: 0px;">

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
                                <a href="Teacher_Profile.php" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    <span>My Account</span>
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
                                <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
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
                                        
                                        <li class="breadcrumb-item active">Upload Lesson</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Upload Lesson</h4>
                            </div>
                        </div>
                    </div>    
                    <!-- end page title --> 
                    
                </div> <!-- container -->

            </div> <!-- content -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="teacher_upload_lesson.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-xl-6">
                                            <div class="mb-3">
                                                <label for="projectname" class="form-label">Name</label>
                                                <input type="text" name="name" id="projectname" class="form-control" placeholder="Enter Lesson name" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="project-overview" class="form-label">Objective</label>
                                                <textarea class="form-control" name="objective" id="project-overview" rows="5" placeholder="Enter some brief about the project.." required></textarea>
                                            </div>

                                            <div class="mb-0">
                                                <label for="project-type" class="form-label">Type of lesson</label>
                                                <select class="form-control" name="type" id="project-type" required>
                                                    <option selected disabled>Select</option>
                                                    <option value="Literacy">Literacy</option>
                                                    <option value="Numeracy">Numeracy</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 position-relative" id="datepicker2">
                                                    <br>
                                                    <input type="submit" class="form-control btn-primary" name="btnAdd">
                                                </div>

                                            </div> 
                                            <div class="col-xl-6">
                                            <div class="mb-3 mt-3 mt-xl-0">
                                                <label for="file-upload" class="form-label">Upload Files</label>
                                                <input type="file" name="lesson[]" id="file-upload" class="form-control" multiple required>
                                                <small class="text-muted">You can select multiple files. Limit: 10 files.</small>
                                                <div class="file-list-container" id="selected-files"></div>
                                            </div>
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
                            <script>document.write(new Date().getFullYear())</script>20232023 © Hyper - Coderthemes.com
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

    <script src="assets/js/vendor/dropzone.min.js"></script>
    <script src="assets/js/ui/component.fileupload.js"></script>
    
    <script>
  // Function to handle file selection and display
  function handleFileSelect(event) {
    const files = event.target.files; // Get selected files
    const fileListContainer = document.getElementById('selected-files');

    // Check if the file limit has been reached
    if (fileListContainer.children.length + files.length > 10) {
      alert('You can only upload up to 10 files.');
      return;
    }

    // Iterate through selected files
    for (let i = 0; i < files.length; i++) {
      const file = files[i];

      // Create a new container for each file
      const fileContainer = document.createElement('div');
      fileContainer.classList.add('file-container');
      fileListContainer.appendChild(fileContainer);

      // Display file name
      const fileName = document.createElement('span');
      fileName.innerText = file.name;
      fileContainer.appendChild(fileName);

      // Create remove button (x icon) for each file
      const removeButton = document.createElement('span');
      removeButton.innerHTML = '&#10006;'; // X icon
      removeButton.classList.add('remove-button');
      removeButton.addEventListener('click', function () {
        // Remove file container when the remove button is clicked
        fileContainer.remove();
      });
      fileContainer.appendChild(removeButton);
    }
  }

  // Add event listener to file input
  const fileInput = document.getElementById('file-upload');
  fileInput.addEventListener('change', handleFileSelect);
</script>



</body></html>