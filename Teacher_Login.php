<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Log In | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
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
                    <form action="Teacher_index.html" method="POST" id="login-form" onsubmit="return validateForm()">
                        <div class="mb-3">
                            <label for="emailaddress" class="form-label">Username</label>
                            <input class="form-control" type="text" id="emailaddress" name="username" required placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <a href="pages-recoverpw-2.html" class="text-muted float-end"><small>Forgot your password?</small></a>
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control" type="password" required id="password" name="password" placeholder="Enter your password"> <br> 
                            <div id="password-error" class="text-danger text-center" style="display: none;">Incorrect username or password</div>
                        </div>
                        
                        <div class="d-grid mb-0 text-center">
                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-login"></i> Log In </button>
                        </div>
                        <!-- social-->
                        
                    </form>
                    <!-- end form-->

                    <script>
                        function validateForm() {
                            var username = document.getElementById("emailaddress").value;
                            var password = document.getElementById("password").value;
                            var passwordError = document.getElementById("password-error");

                            // Perform your validation here
                            // For example, check if the password is correct
                            if (password !== "correct") {
                                passwordError.style.display = "block";
                                return false; // Prevent form submission
                            }

                            return true; // Allow form submission
                        }
                    </script>


                   

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