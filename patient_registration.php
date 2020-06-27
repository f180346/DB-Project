<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'links/links.php'?>
    <?php include 'dataconnection.php'?>
    <link rel="stylesheet" href="style/style.css">
    <title>patient_registration</title>

</head>

<body id="patient_reg-body">

    <div class="patient_reg_page">

        <div class="reg">
            <center>
                <h1>Patient Registration Form</h1>
            </center>
        </div>
        <br><br>
        <form action="" method="post">
            <div class="container container-fluid">
            <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="p-reg" id="lb-p-reg">Registration NO</label>
                            <input type="text" class="form-control" name="p-reg" placeholder="Enter Reg. no" pattern="[0-9]+" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="p-name" id="lb-p-name">Patient Name</label>
                            <input type="text" class="form-control" name="p-name" placeholder="Patient Name" required>
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
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="p-city" id="lb-p-city">City</label>
                            <input type="text" class="form-control" name="p-city" placeholder="City" required>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="p-mobileno" id="lb-p-mobileno"> Mobile no</label>
                            <input type="tel" class="form-control" name="p-mobileno" placeholder="Mobile no" pattern="[0-9]{4}-[0-9]{7}" required>
                            <small id="lb-p-format">Format: 0123-4567890 </small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <div class="form-group ">
                            <label for="p-age" id="lb-p-age">Age</label>
                            <select class="form-control" name="p-age" id="p-age" placeholder="Age">
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
                            <label for="ward" id="lb-ward">Ward Assign</label>
                            <select class="form-control" id="ward" name="p-ward">
                                <option>Quarantine Ward</option>
                                <option>Isolation Ward</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="Submit" class="btn btn-primary" name="Register" id="register-button" value="Register">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>


<?php

if (isset($_POST['Register'])) {

    $p_regno = $_POST['p-reg'];
    $p_name = $_POST['p-name'];
    $p_address = $_POST['paddress'];
    $p_city = $_POST['p-city'];
    $p_mobileno = $_POST['p-mobileno'];
    $p_age = $_POST['p-age'];
    $p_gender = $_POST['p-gender'];
    $p_ward = $_POST['p-ward'];
    $myfile = fopen("id.txt", "w");
    fwrite($myfile, $p_regno);
    fclose($myfile);

    $sql = "SELECT * FROM `patient_record`  where REG_NO = $p_regno";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
echo $count;
    if ($count == 0) {
        //  echo $p_name,'$p_address','$p_city','$p_mobileno','$p_age','$p_gender','$p_ward';
        $sql = "INSERT INTO patient_record (REG_NO, P_NAME,P_ADDRESS,P_CITY,MOB_NO,AGE,GENDER,WARD)
            VALUES('$p_regno','$p_name','$p_address','$p_city','$p_mobileno','$p_age','$p_gender','$p_ward')";
        if (mysqli_query($con, $sql)) {
            if($p_ward == "Quarantine Ward")
            {
                ?>
                <script>
                    // alert('Heelllo');
                     window.location.href ="quarntine.php";
                </script>
                 <?php
            }
            else
            {
                ?>
                <script>
                    // alert('Heelllo');
                     window.location.href ="isolation.php";
                </script>
                 <?php
            }
       
        }
       
    } else {
        $msg .= "Username Already Registered";
        echo "<h1 style='color:white;'>$msg</h1>";

    }

}

?>