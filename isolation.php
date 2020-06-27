<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'links/links.php' ?>
    <?php include 'dataconnection.php' ?>
    <link rel="stylesheet" href="style/style.css">
    <title>Isolation ward</title>
</head>

<body id="patient_reg-body">
    <div class="patient_reg_page">
        <div class="reg">
            <center>
                <h1>ISOLATION WARD</h1>
            </center>
            <marquee>enter isolation ward details</marquee>
        </div>
        <br><br>
        <form action="" method="post">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="bedno" id="lb-bedno">Bed No</label>
                        <select class="form-control" id="p-bedno" name="p-bedno" placeholder="Bed No">
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
                        <label for="symptoms" id="lb-p-reg">Symtoms</label>
                        <input type="text" class="form-control" name="symptoms" placeholder="Registration No" required>
                    </div>
                </div>
            </div>

            <h1 id="lb-p-address">
                <center>CLINICL PARAMETERS </center>
            </h1>

            <h5 id="lb-p-address">
                <center>Temperature Measuremets </center>
            </h5>

            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3">
                    <div class="form-group ">
                        <label id="lb-p-age">Temperature status</label>
                        <select class="form-control" id="p-gender" name="temp-status">
                            <option>Low</option>
                            <option>Normal</option>
                            <option>High</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="temp-m" id="lb-p-age">Temprature Measurements</label>
                        <input type="text" class="form-control" name="temp-m" placeholder="Please type" required>
                    </div>
                </div>
            </div>

            <h5 id="lb-p-address">
                <center>Breath Measuremets </center>
            </h5>

            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3">
                    <div class="form-group ">
                        <label id="lb-p-age">Breath Measurements</label>
                        <select class="form-control" name="b-status" id="p-gender">
                            <option>Low</option>
                            <option>Normal</option>
                            <option>High</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group" for="p-age" id="lb-p-age">Specify</label>
                        <input type="text" class="form-control" name="b-m" placeholder="Please type" required>
                    </div>
                </div>
            </div>

            <h5 for="p-address" id="lb-p-address">
                <center>Heart Measuremets </center>
            </h5>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3">
                    <div class="form-group ">
                        <label for="p-heart" id="lb-p-age">Heart rate Status</label>
                        <select class="form-control" name="hr-status" id="p-gender">
                            <option>Low</option>
                            <option>Normal</option>
                            <option>High</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="p-age" id="lb-p-age">Heart rate Measurements</label>
                        <input type="text" class="form-control" name="hr-m" placeholder="Please type" required>
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
                        <label id="lb-p-age">Blood Pressure Status</label>
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
            <h1 for="p-address" id="lb-p-address">
                <center>Chest Examinations </center>
            </h1>

            <div class="row">
                <div class="col-sm-3"></div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="p-travel" id="lb-p-travel">CT Scan Status</label>
                        <select class="form-control" name="cts-s" id="p-travel">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="p-age" id="lb-p-age">CT Scan Changes :</label>
                        <input type="text" class="form-control" name="cts-c" placeholder="Please type" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3"></div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="p-travel" id="lb-p-travel">X ray Status</label>
                        <select class="form-control" name="x-s" id="p-travel">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="p-age" id="lb-p-age">X ray Changes :</label>
                        <input type="text" class="form-control" name="x-c" placeholder="Please type" required>
                    </div>
                </div>
            </div>

            <h1 for="p-address" id="lb-p-address">
                <center>LABORATORY PARAMETERS </center>
            </h1>

            <div class="row">
                <div class="col-sm-3"></div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="p-age" id="lb-p-age">White Cell Count</label>
                        <input type="text" class="form-control" name="wcc" placeholder="Please type" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="p-age" id="lb-p-age">Platelets count</label>
                        <input type="text" class="form-control" name="pc" placeholder="Please type" required>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="p-address" id="lb-p-address">Corona Test no</label>
                        <input type="text" class="form-control" name="ctn" placeholder="Enter Address" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="p-travel" id="lb-p-travel">Corona test Status</label>
                        <select class="form-control" name="cts" id="p-travel">
                            <option>Negative</option>
                            <option>Positive</option>
                        </select>
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
                <input type="text" class="form-control" name="doc-id" placeholder="Doctor ID" required>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
            <div class="form-group">
                <input type="Submit" class="btn btn-primary" name="i-ward" id="register-button" value="Submit">
            </div>
        </div>
    </div>
    </div>
    </form>
    </div>
</body>

</html>
<?php

if (isset($_POST['i-ward'])) {
    $bedno = $_POST['p-bedno'];
    $p_status = $_POST['p-status'];
    $symptoms = $_POST['symptoms'];
    $temp_s = $_POST['temp-status'];
    $temp_m = $_POST['temp-m'];
    $breath_s  = $_POST['b-status'];
    $breath_m = $_POST['b-m'];
    $heart_rate = $_POST['hr-status'];
    $heart_rate_m = $_POST['hr-m'];
    $bp = $_POST['bp'];
    $bp_d = $_POST['bp-d'];
    $bp_s = $_POST['bp-s'];
    $oxy_s = $_POST['oxy-s'];
    $oxy_m  = $_POST['oxy-m'];
    $cts_s = $_POST['cts-s'];
    $cts_c = $_POST['cts-c'];
    $xray_s = $_POST['x-s'];
    $xray_c = $_POST['x-c'];
    $wcc = $_POST['wcc'];
    $platelets_c = $_POST['pc'];
    $corona_test_no = $_POST['ctn'];
    $corona_test_s  = $_POST['cts'];
    $travel = $_POST['pt'];
    $doc_id = $_POST['doc-id'];
    $myfile = fopen("id.txt", "r");
    $regno = fgets($myfile);
    fclose($myfile);
    // echo "<h1 style='color:white;'>'$symptoms','$bedno','$travel','$p_status','$temp_s','$temp_m ','$bp','$bp_s','$bp_d','$oxy_s','$oxy_m',' $breath_s',
    // '$breath_m','$heart_rate','$heart_rate_m','$cts_s','$cts_c','$xray_s','$xray_c','$wcc','$platelets_c','$corona_test_no','$corona_test_s','$doc_id'</h1>";
    $sql = "INSERT INTO i_ward (REG_NO,SYMTOMS,BED_NO,T_HISTORY,P_STATUS,TEMP_STATUS,TEMP_MEASUREMENT,BP_STATUS,BP_SYSTOLIC,
    BP_DIASTOLIC,OXY_STATUS,OXY_SAT_LEVEL,B_RATE_STATUS,B_MEASUREMENT,HR_STATUS,HR_MEASUREMENT,C_SCAN_STATUS,
    C_SCAN_CHANGES,X_RAY_STATUS,X_RAY_CHANGES,W_CELL_COUNT,PLATELETS_COUNT,CORONA_TEST_NO,CORONA_TEST_STATUS,DOC_ID) 
    VALUES('$regno','$symptoms','$bedno','$travel','$p_status','$temp_s','$temp_m ','$bp','$bp_s','$bp_d','$oxy_s','$oxy_m',' $breath_s',
    '$breath_m','$heart_rate','$heart_rate_m','$cts_s','$cts_c','$xray_s','$xray_c','$wcc','$platelets_c','$corona_test_no','$corona_test_s','$doc_id')";

    if (mysqli_query($con, $sql) == true) {

?>
        <script type="text/javascript">
            window.location = "wards.php";
        </script>
<?php
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>