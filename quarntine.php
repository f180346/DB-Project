<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'links/links.php' ?>
    <link rel="stylesheet" href="style/style.css">
    <?php include 'dataconnection.php' ?>
    <title>Quarantine ward</title>
</head>

<body id="patient_reg-body">
    <div class="patient_reg_page">
        <div class="reg">
            <center>
                <h1>QUARANTINE WARDS</h1>
            </center>
            <marquee>enter quarantine ward details</marquee>
        </div>
        <br><br>
        <form action="" method="post">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="bedno" id="lb-bedno">Bed No</label>
                        <select class="form-control" name="p-bedno" id="p-bedno" placeholder="Bed No">
                            <?php
                            for ($i = 1; $i <= 500; $i += 1) {
                                echo ("<option value='{$i}'>{$i}</option>");
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="p-status" id="lb-p-status">Patient Status</label>
                        <select class="form-control" name="p-status" id="p-status">
                            <option>Recovered</option>
                            <option>Active</option>
                            <option>Death</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">

                    <div class="form-group">
                        <label for="p-regno" id="lb-p-reg">Symtoms</label>
                        <input type="text" class="form-control" name="symptoms" placeholder="Registration No" required>
                    </div>
                </div>
            </div>


            <h1 for="p-address" id="lb-p-address">
                <center>CLINICL PARAMETERS </center>
            </h1>

            <h5 for="p-address" id="lb-p-address">
                <center>Temperature Measuremets </center>
            </h5>


            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3">
                    <div class="form-group ">
                        <label for="p-heart" id="lb-p-age">Temperature status</label>
                        <select class="form-control" name="temp-status" id="p-gender">
                            <option>Low</option>
                            <option>Normal</option>
                            <option>High</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="p-age" id="lb-p-age">Temprature Measurements</label>
                        <input type="text" class="form-control" name="temp-m" placeholder="Please type" required>
                    </div>
                </div>
            </div>





            <h1 for="p-address" id="lb-p-address">
                <center>Blood Pressure Measurements </center>
            </h1>

            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3">
                    <div class="form-group ">
                        <label for="p-heart" id="lb-p-age">Blood Pressure Status</label>
                        <select class="form-control" name="bp" id="p-gender">
                            <option>Low</option>
                            <option>Normal</option>
                            <option>High</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3">
                    <div class="form-group ">
                        <label for="p-heart" id="lb-p-age">Blood Pressure (diastolic)</label>
                        <select class="form-control" name="bp-d" id="p-age" placeholder="breathrate">
                            <?php
                            for ($i = 60; $i <= 100; $i += 1) {
                                echo ("<option value='{$i}'>{$i}</option>");
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group ">
                        <label for="p-heart" id="lb-p-age">Blood Pressure (systolic)</label>
                        <select class="form-control" name="bp-s" id="p-age" placeholder="breathrate">
                            <?php
                            for ($i = 110; $i <= 140; $i += 1) {
                                echo ("<option value='{$i}'>{$i}</option>");
                            }
                            ?>
                        </select>
                    </div>
                </div>






            </div>
            <h1 for="p-address" id="lb-p-address">
                <center>Oxygen level in blood </center>
            </h1>

            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3">

                    <div class="form-group ">
                        <label for="p-heart" id="lb-p-age">Oxygen Status</label>
                        <select class="form-control" name="oxy-s" id="p-gender">
                            <option>Low</option>
                            <option>Normal</option>
                            <option>High</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="p-age" id="lb-p-age">Oxygen Status Level</label>
                        <input type="text" class="form-control" name="oxy-m" placeholder="Please type" required>
                    </div>
                </div>
            </div>

    </div>
    <h1 for="p-address" id="lb-p-address">
        <center>SOCIAL PARAMETERS </center>
    </h1>

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
            <div class="form-group">
                <label for="p-travel" id="lb-p-travel">Patient Travel History</label>
                <select class="form-control" name="pt" id="p-travel">
                    <option>No</option>
                    <option>Yes</option>
                </select>
            </div>
        </div>
    </div>
    <h1 for="p-address" id="lb-p-address">
        <center>DOCTOR </center>
    </h1>

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
            <div class="form-group">
                <label for="p-regno" id="lb-p-reg">Doctor's ID</label>
                <input type="text" class="form-control" name="doc-id" placeholder="Registration No" required>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
            <div class="form-group">
                <input type="Submit" class="btn btn-primary" name="q_ward" id="register-button" value="Register">
            </div>
        </div>
    </div>

    </form>
    </div>
</body>

</html>



<?php
if (isset($_POST['q_ward'])) {
    $bedno = $_POST['p-bedno'];
    $p_status = $_POST['p-status'];
    $symptoms = $_POST['symptoms'];
    $temp_s = $_POST['temp-status'];
    $temp_m = $_POST['temp-m'];
    $bp = $_POST['bp'];
    $bp_d = $_POST['bp-d'];
    $bp_s = $_POST['bp-s'];
    $oxy_s = $_POST['oxy-s'];
    $oxy_m  = $_POST['oxy-m'];
    $travel = $_POST['pt'];
    $doc_id = $_POST['doc-id'];
    echo "<h1 style='color:white;'>'$symptoms','$bedno','$travel','$p_status','$temp_s','$temp_m ','$bp','$bp_s','$bp_d','$oxy_s','$oxy_m','$doc_id'</h1>";
    $sql = "INSERT INTO q_ward (SYMTOMS,BED_NO,T_HISTORY,P_STATUS,TEMP_STATUS,TEMP_MEASUREMENT,BP_STATUS,BP_SYSTOLIC,
    BP_DIASTOLIC,OXY_STATUS,OXY_SAT_LEVEL,DOC_ID) 
    VALUES('$symptoms','$bedno','$travel','$p_status','$temp_s','$temp_m ','$bp','$bp_s','$bp_d','$oxy_s','$oxy_m','$doc_id')";

    if (mysqli_query($con, $sql) == true) {

?>
        <script type="text/javascript">
            window.location = "signin.php";
        </script>
<?php
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>