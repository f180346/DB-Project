<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'links/links.php' ?>
    <link rel="stylesheet" href="style/style.css">
    <?php include 'dataconnection.php' ?>
    <title>Doctor's Profile</title>
</head>


<body id="patient_reg-body">
    <div class="patient_reg_page">
        <div class="reg">
            <center>
                <h1>DOCTORS PROFILE</h1>
            </center>
        </div>
        <br><br>
        <form action="" method="post">
            <div class="container container-fluid">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="p-regno" id="lb-p-reg">Doctor's ID</label>
                            <input type="text" class="form-control" name="p-regno" placeholder="Doctor ID">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="p-name" id="lb-p-name">Doctor's Name</label>
                            <input type="text" class="form-control" name="p-name" placeholder="Doctor Name" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <div class="form-group ">
                            <label for="p-age" id="lb-p-age">Age</label>
                            <select class="form-control" id="p-age" name="p-age" placeholder="Age">
                                <?php
                                for ($i = 1; $i <= 100; $i += 1) {
                                    echo ("<option value='{$i}'>{$i}</option>");
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="p-gender" id="lb-p-gender">Gender</label>
                            <select class="form-control" id="p-gender" name="p-gender">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="p-address" id="lb-p-address">Address</label>
                            <input type="text" class="form-control" name="paddress" placeholder="Enter Address" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="p-mobileno" id="lb-p-mobileno"> Mobile no</label>
                            <input type="tel" class="form-control" name="p-mobileno" placeholder="Mobile no" pattern="[0-9]{4}-[0-9]{7}" required>
                            <small id="lb-p-format">Format: 0123-4567890 </small>
                        </div>
                    </div>


                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="doc_email" id="lb-p-mobileno"> E-mail address</label>
                            <input type="email" class="form-control" name="doc_email" placeholder="Email address" required> <small id="lb-p-format">Format: abc9@example.com </small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ward" id="lb-ward">Assigned Ward</label>
                            <select class="form-control" id="ward" name="ward">
                                <option>Quarantine Ward</option>
                                <option>Isolation Ward</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="Submit" class="btn btn-primary" name="doc_register" id="register-button" value="Submit">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>


<?php

if (isset($_POST['doc_register'])) {
    $D_ID = $_POST['p-regno'];
    $D_NAME = $_POST['p-name'];
    $AGE = $_POST['p-age'];
    $GENDER = $_POST['p-gender'];
    $MOB_NO = $_POST['p-mobileno'];
    $EMAIL  = $_POST['doc_email'];
    $ADDRESS = $_POST['paddress'];
    $WARD = $_POST['ward'];
    // echo"<h1 style='color:white;'>$address','$dob',$email,$fname,$gender,$lname,$mobile,$password,$username</h1>";

    $sql = "SELECT * FROM doc_record WHERE D_ID = '$D_ID' ";
    $result = mysqli_query($con, $sql);
    $count  = mysqli_num_rows($result);
    if ($count == 0) {

        $sql = "INSERT INTO doc_record (D_ID, D_NAME,AGE,GENDER,MOB_NO,EMAIL,ADDRESS,WARD) 
            VALUES('$D_ID','$D_NAME','$AGE','$GENDER','$MOB_NO','$EMAIL','$ADDRESS','$WARD')";
        if (mysqli_query($con, $sql)) {

?>
            <script type="text/javascript">
                window.location = "signin.php";
            </script>
<?php
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {

        $msg .= "Username Already Registered";
        echo "<h1 style='color:white;'>$msg</h1>";
    }
}

?>