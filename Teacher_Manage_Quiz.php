<!DOCTYPE html>
<html lang="en">
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
        <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">

                <!-- Quill css -->
        <link href="assets/css/vendor/quill.core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/vendor/quill.snow.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": false}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">
    
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
    
                <div class="h-100" id="leftside-menu-container" data-simplebar="">

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
                        <a href="Teacher_AssignLesson.php" class="side-nav-link">
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
                                        <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name">Soeng Souy</span>
                                        <span class="account-position">Founder</span>
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                            <li class="breadcrumb-item active">Starter</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add quiz assignment</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        
                    </div> <!-- container -->

                </div> <!-- content -->



                <div class="row">
                    <div class="col-sm-3 mb-2 mb-sm-0">
                        <div class="nav flex-column nav-pills h5" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active show" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                aria-selected="true">
                                <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                <span class="d-none d-md-block"> <i class="uil-plus-circle" ></i> &nbsp; Create Assignment</span>
                            </a>
                            <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                aria-selected="false">
                                <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                <span class="d-none d-md-block"> <i class="uil-plus-circle" ></i> &nbsp; Create Multiple Choice Quiz</span>
                            </a>
                            <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                aria-selected="false">
                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                <span class="d-none d-md-block">Settings</span>
                            </a>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-sm-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="row" >
                                    <div class="card-header">

                                        <h3>Add Assignment</h3>

                                        <div class="card-body" >

                                        <!-- form start -->
                                    <form action="#">


                                    <div class="mb-3 me-5 ms-4">
                                            <label for="simpleinput" class="form-label">Title</label>
                                            <input type="text" id="simpleinput" class="form-control">
                                        </div>

                                        <div class="row" >
                                            <div class="col-lg-2 ms-4" >
                                                <div class="mb-3">
                                                    <label for="Max Score" class="form-label">Max Score</label>
                                                    <input type="text" id="Max Score" class="form-control"> 
                                                </div>
                                            </div>
                                            <div class="col-lg-3 me-4" >
                                                <div class="mb-3">
                                                    <label for="inputState" class="form-label">Category</label>
                                                    <select id="inputState" class="form-select">
                                                        <option>Choose</option>
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3" >
                                                <div class="mb-3 position-relative" id="datepicker1">
                                                            <label class="form-label">Start</label>
                                                            <input type="text" class="form-control" data-provide="datepicker" data-date-container="#datepicker1">
                                                    </div>
                                            </div>

                                            <div class="col-lg-2 me-5" >
                                                    <div class="mb-3">
                                                        <label for="inputState" class="form-label">Module</label>
                                                        <select id="inputState" class="form-select">
                                                            <option>Choose</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row" >
                                                <div class="col-lg-2 ms-4 mt-4" >
                                                    <div class="mb-3  p-0">
                                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                                        <label for="customCheck1" class="form-check-label">Allow Late?</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 me-4" >
                                                    <div class="mb-3">
                                                        <label for="Grading" class="form-label">Grading</label>
                                                        <select id="Grading" class="form-select">
                                                            <option>Choose</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            <div class="col-lg-3" >
                                                <div class="mb-3 position-relative" id="datepicker1">
                                                            <label class="form-label">Due</label>
                                                            <input type="text" class="form-control" data-provide="datepicker" data-date-container="#datepicker1">
                                                    </div>
                                            </div>

                                            <div class="col-lg-2 me-4" >
                                                <div class="mb-3">
                                                    <label for="inputState" class="form-label">Grading Score</label>
                                                    <select id="inputState" class="form-select">
                                                        <option>Choose</option>
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <h3 class="ms-4 mt-3 mb-3" >Options</h3>

                                            <!-- start options -->
                                            <div class="row" >



                                            <div class="mb-1 me-5 ms-4">
                                            <label for="simpleinput" class="form-label">Release Grade</label>
                                        </div>


                                        <div class="mb-3 me-5 ms-4">
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="customRadio3" name="release" class="form-check-input">
                                                <label class="form-check-label" for="customRadio3">Instant</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="customRadio4" name="release" class="form-check-input">
                                                <label class="form-check-label" for="customRadio4">Manual</label>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-6 ms-4 mb-2">
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="customCheck3">
                                                    <label class="form-check-label" for="customCheck3">Timed</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="customCheck4">
                                                    <label class="form-check-label" for="customCheck4">Randomize Order</label>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 ms-4 mb-3">
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="customCheck5">
                                                    <label class="form-check-label" for="customCheck5">Instant Feedback</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="customCheck6">
                                                    <label class="form-check-label" for="customCheck6">Allow Review</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="mb-1 me-5 ms-4">
                                            <label for="simpleinput" class="form-label">Grading</label>
                                        </div>


                                        <div class="mb-3 me-5 ms-4">
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="customRadio5" name="grading" class="form-check-input">
                                                <label class="form-check-label" for="customRadio5">Use Latest Score</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="customRadio6" name="grading" class="form-check-input">
                                                <label class="form-check-label" for="customRadio6">Use Best Score</label>
                                            </div>
                                        </div>


                                                
                                            </div>
                                            <!-- end options -->


                                            </div>
                                            <!-- start editor -->
                                            <div class="row me-5 ms-4" >

                                            <h3 class="mt-4 mb-4" >Instractions</h3>
                                                
                                            <!-- HTML -->
                                            <div id="snow-editor" style="height: 300px;">
                                                
                                                <br>
                                                <br>
                                                <h3>Type your text here........</h3>
                                                
                                            </div>

                                            </div>
                                            <!-- end-editor -->


                                            <div class="card-footer col-sm-4 ms-2 mt-2 d-grid">
                                    <div class="row" >
                                    <div class="col-sm-3" >
                                            <input type="reset" class="btn btn-primary text-center"  Value="Clear"/>
                                        </div>
                                        <div class="col-sm-3" >
                                            <input type="submit" class="btn btn-primary " value="Submit"/>
                                        </div>
                                        
                                    </div>


                                 

                                    
                                    
                                    
                                    </div>

                                        </form>
                                        <!-- endd form -->
                                
                            

                                        

                                        </div>
                                        <!-- end card-body-->

                                    </div>
                                    <!--end card header -->

                                    
                                </div>

                                
                                    
                                        
                                    
                                




                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <!-- start content heade -->


                                
                                

                                <div class="row" >
                                    <div class="card-header">

                                        <h3>Create multiple choice</h3>

                                        <div class="card-body" >

                                        <!-- form start -->
                                    <form action="#">


                                        <div class="mb-3 me-5 ms-4">
                                            <label for="simpleinput" class="form-label">Questions</label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="Enter questions">
                                        </div>


                                        <div class="row me-5 ms-2" >
                                            <!-- Radios--> 


                                                <div class="mt-3">
                                                    <div class="form-check form-radio-info mb-2">
                                                        <input type="radio" id="customRadio1" name="customRadio" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio1">A: is correct?</label>
                                                        <input type="text" id="simpleinput" class="form-control" placeholder="Enter your text"> 
                                                    </div>
                                                    <div class="form-check form-radio-info mb-2">
                                                    <input type="radio" id="customRadio1" name="customRadio" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio1">B: is correct?</label>
                                                        <input type="text" id="simpleinput" class="form-control" placeholder="Enter your text"> 
                                                    </div>
                                                    <div class="form-check form-radio-info mb-2">
                                                    <input type="radio" id="customRadio1" name="customRadio" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio1">C: is correct?</label>
                                                        <input type="text" id="simpleinput" class="form-control" placeholder="Enter your text"> 
                                                    </div>
                                                    <div class="form-check form-radio-info mb-2">
                                                    <input type="radio" id="customRadio1" name="customRadio" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio1">D: is correct?</label>
                                                        <input type="text" id="simpleinput" class="form-control" placeholder="Enter your text"> 
                                                    </div>
                                                </div> 

                                        </div>

                                        
                                            


                                 

                                    
                                    
                                    
                                    </div>

                                    <div class="card-footer" >
                                        <input type="button" class=" btn btn-info" value="Submit">
                                        <input type="reset" class=" btn btn-info" value="reset">
                                    </div>

                                        </form>
                                        <!-- endd form -->
                                
                            

                                        

                                        </div>
                                        <!-- end card-body-->

                                    </div>
                                    <!--end card header -->

                                    

                                    
                                </div>













                                
                                <!-- end content here -->
                            </div>
                            <!-- <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <p class="mb-0">...</p>
                            </div> -->
                        </div> <!-- end tab-content-->
                    </div> <!-- end col-->
                </div>
                <!-- end row-->




                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
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

            <div class="rightbar-content h-100" data-simplebar="">

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
