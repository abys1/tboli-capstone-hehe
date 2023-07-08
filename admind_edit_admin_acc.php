<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<!------ Include the above in your HEAD tag ---------->

<div class="container">

<?php
include 'dbcon.php';

if(isset($_GET['admin_id'])) {
  
    $admin_id = $_GET['admin_id'];

    $sql = "SELECT tbl_admin.admin_id, tbl_userinfo.firstname, tbl_userinfo.middlename, tbl_userinfo.lastname, tbl_userinfo.birthday, tbl_userinfo.gender, tbl_usercredentials.email, tbl_usercredentials.contact, tbl_address.address, tbl_accounts.password FROM tbl_admin
    JOIN tbl_userinfo ON tbl_admin.user_id = tbl_userinfo.user_id
    JOIN tbl_usercredentials ON tbl_admin.credentials_id = tbl_usercredentials.usercredentials_id
    JOIN tbl_address ON tbl_admin.address_id = tbl_address.address_id
    JOIN tbl_accounts on tbl_admin.account_id = tbl_accounts.account_id
    WHERE tbl_userinfo.user_id = (SELECT user_id FROM tbl_admin WHERE admin_id = '$admin_id')";

    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "No records found in tbl_admin";
        exit();
    }
} else {
    echo "No admin id provided";
    exit();
}
?>

        <table class="table table-striped">
            <tbody>
                <tr>
                    <td colspan="1">
                        <form class="well form-horizontal" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">First Name</label>
                                    <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group"><span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-user"></i></span><input id="firstName"
                                                name="firstname" placeholder="First Name" class="form-control"
                                                required="true" value="<?php $row['firstname']?>" type="text"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Last Name</label>
                                    <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group"><span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-user"></i></span><input id="lastName"
                                                name="lastname" placeholder="Last Name" class="form-control"
                                                required="true" value="" type="text"></div>
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
                                                name="phone" placeholder="Phone Number" class="form-control"
                                                required="true" value="" type="text"></div>
                                    </div>
                                </div>
                            </fieldset>
                    </td>
                    <td colspan="1">
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Middle Name</label>
                                    <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group"><span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-user"></i></span><input id="middleName"
                                                name="middlename" placeholder="Middle Name" class="form-control"
                                                required="true" value="" type="text"></div>
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
                                                name="address" placeholder="Address" class="form-control"
                                                required="true" value="" type="text"></div>
                                    </div>
                                </div>
                                <!-- Add Admin Button -->
                                <div class="form-group text-center">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary" name="btnAdd">Add Admin</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

                </td>
            </tr>
        </tbody>
    </table>
</div>