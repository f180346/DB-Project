<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'links/links.php' ?>
    <link rel="stylesheet" href="style/style.css">
    <?php include 'dataconnection.php' ?>
    <title>signup</title>
</head>

<body id="signup-body">
    <div class="signup_page">
        <div class="up">
            <h1>Sign Up</h1>
        </div>
        <form action="" method="post">
            <div class="container container-fluid">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="fname" id="lb-fname">First Name</label>
                            <input type="text" class="form-control" name="fname" placeholder="First Name" required>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="lname" id="lb-lname">Last Name</label>
                            <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="new_email" id="lb-new_email">Email address</label>
                            <input type="email" class="form-control" name="new_email" placeholder="New email" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="username1" id="lb-username1">Username</label>
                            <input type="text" class="form-control" name="username1" placeholder="Username" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="new_pass" id="lb-new_pass">Password</label>
                            <input type="password" class="form-control" name="new_pass" placeholder="New Password" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="mobileno" id="lb-mobileno"> Mobile no</label>
                            <input type="tel" class="form-control" name="mobileno" placeholder="Mobile no" pattern="[0-9]{4}-[0-9]{7}" required>
                            <small id="lb-format">Format: 0123-4567890</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <div class="form-group ">
                            <label for="dob" id="lb-dob">Date of birth</label>
                            <input type="date" class="form-control" name="dob" required>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="gender" id="lb-gender">Gender</label>
                            <select class="form-control" id="gender" name="gender">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">

                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="address" id="lb-address">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Enter Address">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="Submit" class="btn btn-warning" name="signup" id="signup-button" value="Sign up">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>

<?php

if (isset($_POST['signup'])) {
    $username = $_POST['username1'];
    $password = $_POST['new_pass'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $mobile = $_POST['mobileno'];
    $email  = $_POST['new_email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    // echo"<h1 style='color:white;'>$address','$dob',$email,$fname,$gender,$lname,$mobile,$password,$username</h1>";

    $sql = "SELECT * FROM reg_user WHERE username = '$username' AND pass = '$password' ";
    $result = mysqli_query($con, $sql);
    $count  = mysqli_num_rows($result);
    if ($count == 0) {

        $sql = "INSERT INTO reg_user ( address,dob,email,fname,gender,lname,mobile,pass,username) 
            VALUES('$address','$dob','$email','$fname','$gender','$lname','$mobile','$password','$username')";
        if (mysqli_query($con, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        ?>
            <script type="text/javascript">
                window.location = "signin.php";
            </script>
        <?php

    } else {

        $msg .= "Username Already Registered";
        echo "<h1 style='color:white;'>$msg</h1>";
    }
}

?>