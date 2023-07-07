<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<!------ Include the above in your HEAD tag ---------->


<div class="container">
<?php
include 'dbcon.php';

if (isset($_POST['btnAdd'])) {

    $learnersid = $_POST['learner'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];;
    $gfirstname = $_POST['gfirstname'];
    $gmiddlename = $_POST['gmiddlename'];
    $glastname = $_POST['glastname'];
    $gbirthday = $_POST['gbirthday'];
    $ggender = $_POST['ggender'];
    $gnumber = $_POST['gphoneNumber'];
    $gemail = $_POST['gemail'];
    $gaddress = $_POST['gaddress'];
    $password = $lastname . $birthday; 
    $encrypted = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO tbl_learner_id (lrn) VALUES ('$learnersid')";

    if ($conn->query($sql) === TRUE) {
        $learner_id = $conn->insert_id;
        $sql = "INSERT INTO tbl_userinfo (firstname, middlename, lastname, birthday, gender) VALUES ('$firstname', '$middlename', '$lastname', '$birthday' ,'$gender')";

        if ($conn->query($sql) === TRUE) {
            $user_info_id = $conn->insert_id;
            $sql = "INSERT INTO tbl_learner_guardian_info (firstname, middlename, lastname, birthday, gender) VALUES ('$gfirstname', '$gmiddlename', '$glastname', '$gbirthday', '$ggender')";

            if ($conn->query($sql) === TRUE) {
                $guardian_info_id = $conn->insert_id;
                $sql = "INSERT INTO tbl_learner_guardian_contact (contact_num, email, address) VALUES ('$gnumber', '$gemail', '$gaddress')";

                if ($conn->query($sql) === TRUE) {
                    $guardian_contact_id = $conn->insert_id;
                    $sql = "INSERT INTO tbl_address (address) VALUES ('$address')";

                    if ($conn->query($sql) === TRUE) {
                        $address_id = $conn->insert_id;
                        $sql = "INSERT INTO tbl_user_level (level) VALUES ('LEARNER')";

                        if($conn->query($sql) === TRUE) {
                            $level_id = $conn->insert_id;
                            $sql = "INSERT INTO tbl_user_status (status) VALUES ('0')";

                            if ($conn->query($sql) === TRUE) {
                                $status_id = $conn->insert_id;
                                $sql = "INSERT INTO tbl_accounts (email, password) VALUES ('$email', '$encrypted')";
                       
                                if ($conn->query($sql) === TRUE) {
                                    $account_id = $conn->insert_id;
                                    $sql = "INSERT INTO tbl_learner (lrn, user_id, guardian_info_id, guardian_contact_id, address_id, level_id, status_id, account_id) VALUES ('$learner_id', '$user_info_id', '$guardian_info_id', '$guardian_contact_id', '$address_id', '$level_id', '$status_id', '$account_id')";

                                    if ($conn->query($sql) === TRUE) {
                                        header("Location:admin_student.php?msg=Account added successfully");
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
}
?>


    <table class="table table-striped">
        <tbody>
            <tr>
                <td colspan="1">
                    <form class="well form-horizontal" method="POST">
                        <fieldset>
                        <div class="form-group">
                           <h1>Register Learner</h1>
                                <label class="col-md-4 control-label">LRN</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-user"></i></span><input id="learner"
                                            name="learner" placeholder="learner id" class="form-control" required="true"
                                            value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">First Name</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-user"></i></span><input id="firstname"
                                            name="firstname" placeholder="Full Name" class="form-control" required="true"
                                            value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Middle Name</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-user"></i></span><input id="middlename"
                                            name="middlename" placeholder="middle Name" class="form-control" required="true"
                                            value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Last Name</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-user"></i></span><input id="lastname"
                                            name="lastname" placeholder="Full Name" class="form-control" required="true"
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
                                        </select>
                                    </div>
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
                                <label class="col-md-4 control-label">Email</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-earphone"></i></span><input id="email"
                                            name="email" placeholder="Email" class="form-control"
                                            required="true" value="" type="text"></div>
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
                                <label class="col-md-4 control-label">Full address (street, barangay, city)</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-home"></i></span><input id="address"
                                            name="address" placeholder="address" class="form-control" required="true"
                                            value="" type="text"></div>
                                </div>
  
                        </fieldset>
                </td>
                <td colspan="1">
  
                        
                        <div class="form-group text-center">
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary" name="btnAdd">Add Student</button>
    </div>
</div>
                    </form>
  

                </td>
            </tr>
        </tbody>
    </table>
</div>