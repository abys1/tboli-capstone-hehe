<?php 
    session_start();
    $user_id = $_SESSION['user_id'];
?>

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
                    <?php include('teacher_sidemenu.php')?>

                    
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
            <?php include('teacher_topbar.php')?>

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

                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                        <p class="mb-0">...</p>
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
                    

                    <!-- Settings -->
                    

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
