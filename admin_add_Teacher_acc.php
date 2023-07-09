<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<link rel="stylesheet" href="admin_add_Teacher_acc.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<!------ Include the above in your HEAD tag ---------->

<div class="container">
<?php
include 'dbcon.php';

if (isset($_POST['btnAdd'])) {

    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $contact = $_POST['phoneNumber'];
    $address = $_POST['address'];

    $valid = $_FILES['valid'];
    if (!empty($valid['name'])) {
        $file_name = $valid['name'];
        $file_tmp = $valid['tmp_name'];
        $file_size = $valid['size'];
        $file_error = $valid['error'];

        // Check for any upload errors
        if ($file_error !== UPLOAD_ERR_OK) {
            
        }

        // Check the file size
        if ($file_size > 10000000) {
            die ("File size is too big");
        }

        // Generate a unique name for the uploaded image
        $image_name = uniqid() . "_" . $file_name;

        // Move the uploaded image to the desired directory
        $target_dir = "images/";
        $target_path = $target_dir . $image_name;
        if (!move_uploaded_file($file_tmp, $target_path)) {
            die ("Error moving the uploaded image. Please try again.");
        }
    } 

    $password = $lastname . $birthday;
    $encrypted = password_hash($password, PASSWORD_DEFAULT);

    // Insert user info
    $sql = "INSERT INTO tbl_userinfo (firstname, middlename, lastname, birthday, gender) 
            VALUES ('$firstname', '$middlename', '$lastname', '$birthday', '$gender')";
    if ($conn->query($sql) === TRUE) {
        $user_info_id = $conn->insert_id;

        // Insert user credentials
        $sql = "INSERT INTO tbl_usercredentials (email, contact) 
                VALUES ('$email', '$contact')";
        if ($conn->query($sql) === TRUE) {
            $credentials_id = $conn->insert_id;

            // Insert address
            $sql = "INSERT INTO tbl_address (address) 
                    VALUES ('$address')";
            if ($conn->query($sql) === TRUE) {
                $address_id = $conn->insert_id;

                // Insert user level
                $sql = "INSERT INTO tbl_user_level (level) 
                        VALUES ('TEACHER')";
                if ($conn->query($sql) === TRUE) {
                    $level_id = $conn->insert_id;

                    // Insert user status
                    $sql = "INSERT INTO tbl_user_status (status) 
                            VALUES ('1')";
                    if ($conn->query($sql) === TRUE) {
                        $status_id = $conn->insert_id;

                        // Insert teacher valid
                        $sql = "INSERT INTO tbl_teacher_valid (id) 
                                VALUES ('$image_name')";
                        if ($conn->query($sql) === TRUE) {
                            $valid_id = $conn->insert_id;

                            // Insert account
                            $sql = "INSERT INTO tbl_accounts (email, password) 
                                    VALUES ('$email', '$encrypted')";
                            if ($conn->query($sql) === TRUE) {
                                $account_id = $conn->insert_id;

                                // Insert teacher
                                $sql = "INSERT INTO tbl_teachers (user_id, credentials_id, address_id, level_id, status_id, account_id, valid_id) 
                                        VALUES ('$user_info_id', '$credentials_id', '$address_id', '$level_id', '$status_id', '$account_id', '$valid_id')";
                                if ($conn->query($sql) === TRUE) {
                                    header("Location: admin_teacher.php?msg=Account added successfully");
                                    exit();
                                } 
                            } 
                        }
                    } 
                }
            } 
        }
    } 
}
?>

<!-- Your HTML code here -->

<!-- 
    <table class="table table-striped">
        <tbody>
            <tr>
                <td colspan="1">
                    <form class="well form-horizontal" method="POST" enctype="multipart/form-data">
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-4 control-label">First Name</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-user"></i></span><input id="fullName"
                                            name="firstname" placeholder="First Name" class="form-control" required="true"
                                            value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Last Name</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-user"></i></span><input id="fullName"
                                            name="lastname" placeholder="Last Name" class="form-control" required="true"
                                            value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Gender</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-venus-mars"></i>
                                        </span>
                                        <select id="gender" name="gender" class="form-control" required="true">
                                            <option value="">Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Phone Number</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber"
                                            name="phoneNumber" placeholder="Phone Number" class="form-control"
                                            required="true" value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-4 control-label">Upload Valid ID</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-file-upload"></i>
                                    </span>
                                    <input id="valid" name="valid" type="file" class="form-control" required="true">
                                </div>
                            </div>
                        </div>
                        </td>
                        <td colspan="1">
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Middle Name</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-user"></i></span><input id="fullName"
                                            name="middlename" placeholder="Middle Name" class="form-control" required="true"
                                            value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Birthday</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                        <input id="birthday" name="birthday" placeholder="Select Birthday"
                                            class="form-control" required="true" type="date">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Email Address</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-envelope"></i></span><input id="email"
                                            name="email" placeholder="Email" class="form-control" required="true"
                                            value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Full address (street, barangay, city)</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-home"></i></span><input id="address"
                                            name="address" placeholder="address" class="form-control" required="true"
                                            value="" type="text"></div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group text-center">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary" name="btnAdd">Add Teacher</button>
                    </div>
                </div>
                    </form>
                </td>
            </tr>
        </tbody>
    </table> -->

    <div class="wrapper rounded bg-white">
    <div class="h3" id="teacher-info">Teacher Information</div>

<div class="form">
    <div class="row">
  
        <div class="col-md-6 mt-md-0 mt-3">
            <label for="first-name">First Name</label>
            <input type="text" id="first-name" class="form-control" required>
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label for="middle-name">Middle Name</label>
            <input type="text" id="middle-name" class="form-control" required>
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label for="last-name">Last Name</label>
            <input type="text" id="last-name" class="form-control" required>
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label for="phone-number">Phone Number</label>
            <input type="tel" id="phone-number" class="form-control" required>
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control" required>
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
                <label for="valid-id">Valid ID</label>
                <input type="file" id="valid-id" class="form-control" required>
            </div>
    </div>
    <div class="row">
        <div class="col-md-6 mt-md-0 mt-3">
            <label for="birthday">Birthday</label>
            <input type="date" id="birthday" class="form-control" required>
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label for="gender">Gender</label>
            <select id="gender" class="form-control" required>
                <option value="" selected hidden>Choose Option</option>
                <option value="female">Female</option>
                <option value="male">Male</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="my-md-2 my-3">
            <label for="full-address">Full Address (street, barangay, city)</label>
            <input type="address" id="full-address" class="form-control" required>
        </div>
    </div>
    <input type="submit" class="btn btn-primary mt-3" value="Add Account">
</div>
</div>
</div>



</div>