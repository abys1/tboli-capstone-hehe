<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <!-- <title>Log In | Hyper - Responsive Bootstrap 5 Admin Dashboard</title> -->
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

<body class="authentication-bg pb-0" data-layout-config="{&quot;darkMode&quot;:false}" style="visibility: visible;">

    <div class="auth-fluid">
        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box">
            <div class="align-items-center d-flex h-100">
                <div class="card-body">

                    <!-- Logo -->
                    <div class="auth-brand text-center text-lg-start">
                        <a href="index.html" class="logo-dark">
                            <span><!-- <img src="assets/images/logo-dark.png" alt="" height="18"> --><h1>Logo Ni Sya</h1></span>
                        </a>
                        <a href="index.html" class="logo-light">
                            <span><img src="assets/images/logo.png" alt="" height="18"></span>
                        </a>
                    </div>

                    <!-- title-->
                    <h4 class="mt-0">Log In</h4>
                    <p class="text-muted mb-4">Enter your username and password to access account.</p>

                                        <!-- form -->
                    <form  method="POST">
                        <?php 
                        session_start();
                        include 'dbcon.php';

                        if (isset($_POST['btnLogin'])) {
                            $email = $_POST['email'];
                            $password = $_POST['password'];

                            if (empty($email)) {
                                header("Location: login.php?error=Email must be filled");
                                exit();
                            } elseif (empty($password)) {
                                header("Location: login.php?error=Password must be filled");
                                exit();
                            } else {
                                $sql = "SELECT tbl_userinfo.user_id, tbl_accounts.email, tbl_accounts.password, tbl_user_level.level, tbl_user_status.status
                                FROM tbl_teachers 
                                JOIN tbl_userinfo ON tbl_teachers.user_id = tbl_userinfo.user_id
                                JOIN tbl_accounts ON tbl_teachers.account_id = tbl_accounts.account_id
                                JOIN tbl_user_level ON tbl_teachers.level_id = tbl_user_level.level_id
                                JOIN tbl_user_status ON tbl_teachers.status_id = tbl_user_status.status_id
                                WHERE tbl_accounts.email = '$email'
                                AND tbl_user_status.status = 1 AND tbl_user_level.level = 'TEACHER'";

                                $result = mysqli_query($conn, $sql);

                                if ($result && mysqli_num_rows($result) > 0) {
                                    $row = mysqli_fetch_assoc($result);
                                    $storedPassword = $row['password'];
                                    $level = $row['level'];

                                    if (password_verify($password, $storedPassword) && $row['status'] == 1) {
                                        $_SESSION['user_id'] = $row['user_id'];
                                        $_SESSION['email'] = $email;
                                        $_SESSION['user_level'] = $level;

                                        if ($level === 'Teacher') {
                                            header("Location: Teacher_index.php?Login Sucessfully");
                                            exit();
                                        }
                                    }
                                }
                                header("Location: Teacher_Login.php?error=Invalid email or password");
                                exit();
                            }

                        }

                        ?>
                        <div class="mb-3">
                            <label for="emailaddress" class="form-label">Email</label>
                            <input class="form-control" type="text" id="emailaddress" name="email" required placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <a href="pages-recoverpw-2.html" class="text-muted float-end"><small>Forgot your password?</small></a>
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control" type="password" required id="password" name="password" placeholder="Enter your password"> <br> 
                            <div id="password-error" class="text-danger text-center" style="display: none;">Incorrect username or password</div>
                        </div>
                        
                        <div class="d-grid mb-0 text-center">
                            <button class="btn btn-primary" type="submit" name="btnLogin"><i class="mdi mdi-login"></i> Log In </button>
                        </div>
                        <!-- social-->
                        
                    </form>
                    <!-- end form-->

                </div> <!-- end .card-body -->
            </div> <!-- end .align-items-center.d-flex.h-100-->
        </div>
        <!-- end auth-fluid-form-box-->

        <!-- Auth fluid right content -->
        <div class="auth-fluid-right text-center">
            <div class="auth-user-testimonial">
                <h2 class="mb-3">I love the color!</h2>
                <p class="lead"><i class="mdi mdi-format-quote-open"></i> It's a elegent templete. I love it very much! . <i class="mdi mdi-format-quote-close"></i>
                </p>
                <p>
                    - Hyper Admin User
                </p>
            </div> <!-- end auth-user-testimonial-->
        </div>
        <!-- end Auth fluid right content -->
    </div>
    <!-- end auth-fluid-->

    <!-- bundle -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>



</body></html>