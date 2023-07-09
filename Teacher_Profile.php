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
                              <a href="Teacher_Learners.php">
                                <i class=" uil-user-circle"></i> Learner </a>
                            </li>
                            <li>
                              <a href="Teacher_batchUpload.php">
                                <i class=" uil-list-ul"></i> Student Batch Upload </a>
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
                              <a href="Teacher_AddStudent.php">
                                <i class=" uil-plus-circle"></i> Add Students </a>
                            </li>
                            <li>
                              <a href="Teacher_Add_Parents.php">
                                <i class=" uil-plus-circle"></i> Add Parents </a>
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
                              <a href="Teacher_uploadlesson.php">
                                <i class=" uil-plus-circle"></i> Upload Lesson </a>
                            </li>
                            <li>
                              <a href="Teacher_manage_lesson.php">
                                <i class="uil-edit-alt"></i> Edit Lesson </a>
                            </li>
                            <li>
                              <a href="Teacher_CreateModule.php">
                                <i class=" uil-plus-circle"></i> Add Module </a>
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
            <div class="simplebar-scrollbar" style="height: 0px; transform: translate3d(0px, 0px, 0px); display: none;"></div>
          </div>
        </div>
        <!-- Sidebar -left -->
      </div>
      <!-- Left Sidebar End -->
      <!-- ============================================================== --> hello
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
                  <span> <?php
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
                                    ?> <span class="account-user-name"> <?php echo $row['firstname'] . ' ' . $row['middlename'] . ' ' . $row['lastname']; ?> </span>
                    <span class="account-position"> <?php echo $row['level'];?> </span>
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
                  <input type="text" class="form-control dropdown-toggle" required="" placeholder="Search..." id="top-search">
                  <span class="mdi mdi-magnify search-icon"></span>
                  <button class="input-group-text btn-primary" type="submit">Search</button>
                </div>
              </form>
            </div>
          </div>
          <!-- end Topbar -->
          <!-- Start Content-->
          <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
              <div class="col-12">
                <div class="page-title-box">
                  <div class="page-title-right"></div>
                  <h3 class="page-title"> Teacher Profile</h3>
                </div>
              </div>
            </div>
            <!-- end page title -->
          </div>
          <!-- container -->
        </div>
        <!-- content -->
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
                  </div>
                  <!-- end col-->
                  <div class="col-sm-4">
                    <div class="text-center mt-sm-0 mt-3 text-sm-end">
                      <span class="badge badge-outline-info">Teacher</span>
                      <br>
                      <br>
                      <br>
                      <a href="Teacher_Edit_Profile.php">
                        <button type="button" class="btn btn-info">
                          <i class="mdi mdi-account-edit me-1"></i> Edit Profile </button>
                      </a>
                    </div>
                  </div>
                  <!-- end col-->
                </div>
                <!-- end row -->
              </div>
              <!-- end card-body/ profile-user-box-->
            </div>
            <!--end profile/ card -->
          </div>
          <!-- end col-->
        </div>
        <div class="row">
          <div class="col-sm-4 mb-2 mb-sm-0">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active show" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                <i class="mdi mdi-home-variant d-md-none d-block"></i>
                <span class="d-none d-md-block">Overview</span>
              </a>
              <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                <i class="mdi mdi-account-circle d-md-none d-block"></i>
                <span class="d-none d-md-block">Contact and basic Info</span>
              </a>
              <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                <span class="d-none d-md-block">Achivements</span>
              </a>
            </div>
          </div>
          <!-- end col-->
          <div class="col-sm-8">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <h2>Overview</h2>
                <br>
                <br>
                <span class="h4">
                  <i class=" uil-graduation-hat"></i> &nbsp;Studied at Mindanao Polytechnic College </span>
                <br>
                <br>
                <span class="h4">
                  <i class=" uil-building"></i> &nbsp;Lives in General Santos, General Santos, Philippines </span>
                <br>
                <br>
                <span class="h4">
                  <i class="  uil-location"></i> &nbsp;From Laguilayan, Sultan Kudarat, Philippines </span>
                <br>
                <br>
                <span class="h4">
                  <i class="  uil-heart"></i> &nbsp;Single</span>
                <br>
                <br>
                <span class="h4">
                  <i class="mdi mdi-cellphone-android"></i> &nbsp;09217381873 </span>
                <br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile<br>
                <br>
              </div>
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                

              <h2>Contact and basic Info</h2>
                <br>
                
                <p class="h3 text-info" >Contact</p>
                <br>
                <span class="h4">
                <i class="mdi mdi-cellphone-android"></i> &nbsp;09217381873 </span>
                <br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile<br>
                <br>

                <span class="h4">
                <i class="mdi mdi-email"></i> &nbsp;Jillianxward@gmail.com </span>
                <br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email<br>
                <br>

                <p class="h3 text-info" >Websites and social links</p><br>
                
                <span class="h4">
                <i class="mdi mdi-facebook"></i> &nbsp;Jillian Ward  </span>
                <br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facebook<br>
                <br>
                <span class="h4">
                <i class="mdi mdi-instagram"></i> &nbsp;Jillianxdward</span>
                <br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Instagram<br>
                <br>

                <p class="h3 text-info" >Basic info</p><br>

                <span class="h4">
                <i class="dripicons-user"></i> &nbsp;Female</span>
                <br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender<br>
                <br>
                <span class="h4">
                  <i class="mdi mdi-cake-variant"></i> &nbsp;February 23, 2005 </span>
                <br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Birth-date<br>
                <br>



              </div>
              <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                
                <div class="card ribbon-box">
                    <div class="card-body">
                        <div class="ribbon ribbon-info float-end"><i class="mdi mdi-trophy-award" ><span>Certified</span> </i> </div>
                        <p class="mb-0">Certificate of Eligibility from the Professional Regulation Commission (PRC). 
                            This certificate confirms that they have met the basic qualifications and prerequisites for the licensure examination.
                        </p>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card ribbon-box">
                    <div class="card-body">
                        <div class="ribbon ribbon-success float-end"><i class="mdi mdi-trophy-award" ><span>Certified</span> </i> </div>
                        <p class="mb-0">"This year, the esteemed accolade of 'Best Teacher of the Year' was rightfully bestowed upon our exceptional educator, as their 
                                        unwavering dedication, passion, and profound impact on students' lives made them stand out as the epitome of excellence in the teaching profession."
                        </p>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card ribbon-box">
                    <div class="card-body">
                        <div class="ribbon ribbon-warning float-end"><i class="mdi mdi-trophy-award" ><span>Certified</span> </i> </div>
                        <p class="mb-0">"With a rare blend of expertise, compassion, and creativity, our teacher has left an indelible mark on the hearts and minds of students, leading to their well-deserved
                             distinction as the 'Best Teacher of the Year' and exemplifying the pinnacle of educational excellence."
                        </p>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->



                
              
              </div>
            </div>
            <!-- end tab-content-->
          </div>
          <!-- end col-->
        </div>
        <!-- end row-->



        <!-- Footer Start -->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">
                <script>
                  document.write(new Date().getFullYear())
                </script>202320232023202320232023 © Hyper - Coderthemes.com
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
                          <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light" id="light-mode-check" checked="">
                          <label class="form-check-label" for="light-mode-check">Light Mode <sup>*</sup>
                          </label>
                        </div>
                        <div class="form-check form-switch mb-1">
                          <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check">
                          <label class="form-check-label" for="dark-mode-check">Dark Mode <sup>*</sup>
                          </label>
                        </div>
                        <!-- Width -->
                        <h5 class="mt-4">Width</h5>
                        <hr class="mt-1">
                        <div class="form-check form-switch mb-1">
                          <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check" checked="">
                          <label class="form-check-label" for="fluid-check">Fluid <sup>*</sup>
                          </label>
                        </div>
                        <div class="form-check form-switch mb-1">
                          <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                          <label class="form-check-label" for="boxed-check">Boxed <sup>*</sup>
                          </label>
                        </div>
                        <!-- Left Sidebar-->
                        <h5 class="mt-4">Left Sidebar</h5>
                        <hr class="mt-1">
                        <div class="form-check form-switch mb-1">
                          <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
                          <label class="form-check-label" for="default-check">Default <sup>*</sup>
                          </label>
                        </div>
                        <div class="form-check form-switch mb-1">
                          <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check" checked="">
                          <label class="form-check-label" for="light-check">Light <sup>*</sup>
                          </label>
                        </div>
                        <div class="form-check form-switch mb-3">
                          <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                          <label class="form-check-label" for="dark-check">Dark <sup>*</sup>
                          </label>
                        </div>
                        <div class="form-check form-switch mb-1">
                          <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check" checked="">
                          <label class="form-check-label" for="fixed-check">Fixed <sup>*</sup>
                          </label>
                        </div>
                        <div class="form-check form-switch mb-1">
                          <input class="form-check-input" type="checkbox" name="compact" value="condensed" id="condensed-check">
                          <label class="form-check-label" for="condensed-check">Condensed <sup>*</sup>
                          </label>
                        </div>
                        <div class="form-check form-switch mb-1">
                          <input class="form-check-input" type="checkbox" name="compact" value="scrollable" id="scrollable-check">
                          <label class="form-check-label" for="scrollable-check">Scrollable <sup>*</sup>
                          </label>
                        </div>
                        <div class="d-grid mt-4">
                          <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
                        </div>
                      </div>
                      <!-- end padding-->
                    </div>
                  </div>
                </div>
              </div>
              <div class="simplebar-required placeholder" style="width: 280px; height: 755px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
              <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
              <div class="simplebar-scrollbar" style="height: 671px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
            </div>
          </div>
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