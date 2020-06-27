<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'links/links.php'?>
    <link rel="stylesheet" href="style/style.css">
    <?php include 'dataconnection.php'?>
    <title>20Updates User</title>
</head>
<body id="signup-body" >
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
                            <input type="text" class="form-control" name="fname" value="<?php $myfile = fopen("id.txt", "r");
$id = fgets($myfile);
fclose($myfile);
$sql = "SELECT * FROM reg_user WHERE username='$id' AND DELETED = 0";
$result = mysqli_query($con, $sql);
$row = $result->fetch_assoc();
echo $row['fname'];?>" required>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="lname" id="lb-lname">Last Name</label>
                            <input type="text" class="form-control" name="lname" placeholder="Last Name" value="<?php $myfile = fopen("id.txt", "r");
$id = fgets($myfile);
fclose($myfile);
$sql = "SELECT * FROM reg_user WHERE username='$id' AND DELETED = 0";
$result = mysqli_query($con, $sql);
$row = $result->fetch_assoc();
echo $row['lname'];?>"required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="new_email" id="lb-new_email">Email address</label>
                            <input type="email" class="form-control" name="new_email" placeholder="New email"value="<?php $myfile = fopen("id.txt", "r");
$id = fgets($myfile);
fclose($myfile);
$sql = "SELECT * FROM reg_user WHERE username='$id' AND DELETED = 0";
$result = mysqli_query($con, $sql);
$row = $result->fetch_assoc();
echo $row['email'];?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="username1" id="lb-username1">Username</label>
                            <input type="text" class="form-control" name="username1" placeholder="Username" value="<?php $myfile = fopen("id.txt", "r");
$id = fgets($myfile);
fclose($myfile);
$sql = "SELECT * FROM reg_user WHERE username='$id' AND DELETED = 0";
$result = mysqli_query($con, $sql);
$row = $result->fetch_assoc();
echo $row['username'];?>"required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="new_pass" id="lb-new_pass">Password</label>
                            <input type="password" class="form-control" name="new_pass" placeholder="New Password"  value="<?php $myfile = fopen("id.txt", "r");
$id = fgets($myfile);
fclose($myfile);
$sql = "SELECT * FROM reg_user WHERE username='$id' AND DELETED = 0";
$result = mysqli_query($con, $sql);
$row = $result->fetch_assoc();
echo $row['pass'];?>"required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="mobileno" id="lb-mobileno"> Mobile no</label>
                            <input type="tel" class="form-control" name="mobileno" placeholder="Mobile no" pattern="[0-9]{4}-[0-9]{7}" value="<?php $myfile = fopen("id.txt", "r");
$id = fgets($myfile);
fclose($myfile);
$sql = "SELECT * FROM reg_user WHERE username='$id' AND DELETED = 0";
$result = mysqli_query($con, $sql);
$row = $result->fetch_assoc();
echo $row['mobile'];?>" required>
                            <small id="lb-format">Format: 0123-4567890</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <div class="form-group ">
                            <label for="dob" id="lb-dob">Date of birth</label>
                            <input type="date" class="form-control" name="dob"  value="<?php $myfile = fopen("id.txt", "r");
$id = fgets($myfile);
fclose($myfile);
$sql = "SELECT * FROM reg_user WHERE username='$id' AND DELETED = 0";
$result = mysqli_query($con, $sql);
$row = $result->fetch_assoc();
echo $row['dob'];?>"
"required>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="gender" id="lb-gender">Gender</label>
                            <select class="form-control" id="gender" name="gender" value="<?php $myfile = fopen("id.txt", "r");
$id = fgets($myfile);
fclose($myfile);
$sql = "SELECT * FROM reg_user WHERE username='$id' AND DELETED = 0";
$result = mysqli_query($con, $sql);
$row = $result->fetch_assoc();
echo $row['gender'];?>">
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
                            <input type="text" class="form-control" name="address" placeholder="Enter Address"  value="<?php $myfile = fopen("id.txt", "r");
$id = fgets($myfile);
fclose($myfile);
$sql = "SELECT * FROM reg_user WHERE username='$id' AND DELETED = 0";
$result = mysqli_query($con, $sql);
$row = $result->fetch_assoc();
echo $row['address'];?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="Submit" class="btn btn-warning" name="update" id="update-button" value="update">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>



<?php

if (isset($_POST['update'])) {
    $username = $_POST['username1'];
    $password = $_POST['new_pass'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $mobile = $_POST['mobileno'];
    $email = $_POST['new_email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    // echo"<h1 style='color:white;'>$address','$dob',$email,$fname,$gender,$lname,$mobile,$password,$username</h1>";
    $myfile = fopen("id.txt", "r");
    $id = fgets($myfile);
    fclose($myfile);
    $sql = "UPDATE reg_user SET  address = '$address',dob = '$dob', email='$email',fname = '$fname',
    gender='$gender',lname = '$lname',mobile='$mobile',pass='$password',username= '$username' where username ='$id' AND DELETED = '0' ";
    if (mysqli_query($con, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    ?>
    <script type="text/javascript">
        window.location = "search_update_user.php";
    </script>
<?php
}

?>
