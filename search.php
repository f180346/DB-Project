<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'links/links.php'; ?>
    <?php include 'dataconnection.php' ?>
    <link rel="stylesheet" href="style/style.css">

    <title>Search</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: monospace;
            font-size: 14px;
            text-align: center;
        }

        th {
            background-color: #588c7e;
            color: white;
            font-size: 18px;

        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>

</head>

<body>

    <form action="" method="post">
        <div class="container container-fluid">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-5">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <select name="table" id="table" value="table">
                                <option value="User">User</option>
                                <option value="Paient">Patient Record</option>
                                <option value="Doctor">Doctor Doctor</option>
                                <option value="Isolation">Isolation Ward</option>
                                <option value="Quarantine">Quarantine Ward</option>
                            </select>
                            <select name="choice" id="choice" value="choice">
                                <option value="ID">ID</option>
                                <option value="Name">First Name</option>
                                <option value="City">City</option>
                                <option value="ALL">ALL Data</option>
                            </select>
                            <input type="search" class="form-control" name="search" placeholder="ID/Name/City" aria-label="" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <div class="col-sm-7"></div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <input type="Submit" class="btn btn-warning" id="btn-search" name="btn-search" value="Search">
                    </div>
                </div>

            </div>
    </form>


</body>

</html>

<?php


if (isset($_POST['btn-search'])) {
    $ID = $_POST['search'];
    if ($_POST['table'] == 'User') {
        if ($_POST['choice'] == 'ALL') {
            $sql = "SELECT * FROM reg_user WHERE DELETED = 0";
            $result = mysqli_query($con, $sql);
            if ($result->num_rows > 0) {
                echo "<table><tr>
                <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Gender</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Date of Birth</th>
                  <th>Address</th>
                </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row['fname'] . "</td><td>" . $row['lname'] . "</td><td>" . $row['username'] . "</td><td>" . $row['pass'] . "</td><td>" . $row['gender'] . "</td><td>" . $row['mobile'] . "</td><td>" . $row['email'] . "</td><td>" . $row['dob'] . "</td><td>" . $row['address'] . "</td></tr>";
                }
                echo "</table>";
            }
        } elseif ($_POST['choice'] == 'Name') {
            $sql = "SELECT * FROM reg_user WHERE fname ='$ID' AND DELETED = 0";
            $result = mysqli_query($con, $sql);
            if ($result->num_rows > 0) {
                echo "<table><tr>
                <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Gender</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Date of Birth</th>
                  <th>Address</th>
                </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row['fname'] . "</td><td>" . $row['lname'] . "</td><td>" . $row['username'] . "</td><td>" . $row['pass'] . "</td><td>" . $row['gender'] . "</td><td>" . $row['mobile'] . "</td><td>" . $row['email'] . "</td><td>" . $row['dob'] . "</td><td>" . $row['address'] . "</td></tr>";
                }
                echo "</table>";
            }
        } elseif ($_POST['choice'] == 'ID') {
            $myfile = fopen("id.txt", "w");
            fwrite($myfile, $ID);
            fclose($myfile);
            $sql = "SELECT * FROM reg_user WHERE username ='$ID' AND DELETED = 0";
            $result = mysqli_query($con, $sql);
            if ($result->num_rows > 0) {
                echo "<table><tr>
                    <th>First Name</th>
                      <th>Last Name</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Gender</th>
                      <th>Mobile</th>
                      <th>Email</th>
                      <th>Date of Birth</th>
                      <th>Address</th>
                    </tr>";
                $row = $result->fetch_assoc();
                echo "<tr><td>" . $row['fname'] . "</td><td>" . $row['lname'] . "</td><td>" . $row['username'] . "</td><td>" . $row['pass'] . "</td><td>" . $row['gender'] . "</td><td>" . $row['mobile'] . "</td><td>" . $row['email'] . "</td><td>" . $row['dob'] . "</td><td>" . $row['address'] . "</td></tr>";

                echo "</table>";
                echo '<form action="" method="post">';
                echo '<div class="form-group" style="padding-top:1rem;">
                <input type="Submit" class="btn btn-warning" id="btn-user-update" name="btn-user-update" value="Update">
                <input type="Submit" class="btn btn-warning" id="btn-user-delete" name="btn-user-delete" value="Delete">
            </div>';
                echo "</form>";
            }
        } elseif ($_POST['choice'] == 'City') {
            $sql = "SELECT * FROM reg_user WHERE username ='$ID' AND DELETED = 0";
            $result = mysqli_query($con, $sql);
            if ($result->num_rows > 0) {
                echo "<table><tr>
                    <th>First Name</th>
                      <th>Last Name</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Gender</th>
                      <th>Mobile</th>
                      <th>Email</th>
                      <th>Date of Birth</th>
                      <th>Address</th>
                    </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row['fname'] . "</td><td>" . $row['lname'] . "</td><td>" . $row['username'] . "</td><td>" . $row['pass'] . "</td><td>" . $row['gender'] . "</td><td>" . $row['mobile'] . "</td><td>" . $row['email'] . "</td><td>" . $row['dob'] . "</td><td>" . $row['address'] . "</td></tr>";
                }
                echo "</table>";
            }
        }
    } elseif ($_POST['table'] == 'Paient') {
        if ($_POST['choice'] == 'ALL') {
            $sql = "SELECT * FROM patient_record where DELETED = 0";
            $result = mysqli_query($con, $sql);
            if ($result->num_rows > 0) {
                echo "<table><tr>
                <th>Reristration no</th>
                  <th>Registration Date</th>
                  <th>Patient Name</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>Mobile no</th>
                  <th>Patient Address</th>
                  <th>Patient City</th>
                  <th>Ward Admitted</th>
                </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row['REG_NO'] . "</td><td>" . $row['REG_DATE'] . "</td><td>" . $row['P_NAME'] . "</td><td>" . $row['AGE'] . "</td><td>" . $row['GENDER'] . "</td><td>" . $row['MOB_NO'] . "</td><td>" . $row['P_ADDRESS'] . "</td><td>" . $row['P_CITY'] . "</td><td>" . $row['WARD']  . "</td></tr>";
                }
                echo "</table>";
            }
        } elseif ($_POST['choice'] == 'Name') {
            $sql = "SELECT * FROM patient_record WHERE fname ='$ID%' AND DELETED = 0";
            $result = mysqli_query($con, $sql);
            if ($result->num_rows > 0) {
                echo "<table><tr>
            <th>Reristration no</th>
              <th>Registration Date</th>
              <th>Patient Name</th>
              <th>Age</th>
              <th>Gender</th>
              <th>Mobile no</th>
              <th>Patient Address</th>
              <th>Patient City</th>
              <th>Ward Admitted</th>
            </tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row['REG_NO'] . "</td><td>" . $row['REG_DATE'] . "</td><td>" . $row['P_NAME'] . "</td><td>" . $row['AGE'] . "</td><td>" . $row['GENDER'] . "</td><td>" . $row['MOB_NO'] . "</td><td>" . $row['P_ADDRESS'] . "</td><td>" . $row['P_CITY'] . "</td><td>" . $row['WARD'] . "</td><td>" . $row['SYMTOMS'] . "</td></tr>";
                }
            }
        } elseif ($_POST['choice'] == 'ID') {
            $myfile = fopen("id.txt", "w");
            fwrite($myfile, $ID);
            fclose($myfile);
            $sql = "SELECT * FROM patient_record WHERE username ='$ID' AND DELETED = 0";
            $result = mysqli_query($con, $sql);
            if ($result->num_rows > 0) {
                echo "<table><tr>
                <th>Reristration no</th>
                  <th>Registration Date</th>
                  <th>Patient Name</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>Mobile no</th>
                  <th>Patient Address</th>
                  <th>Patient City</th>
                  <th>Ward Admitted</th>
                </tr>";
                $row = $result->fetch_assoc();
                echo "<tr><td>" . $row['REG_NO'] . "</td><td>" . $row['REG_DATE'] . "</td><td>" . $row['P_NAME'] . "</td><td>" . $row['AGE'] . "</td><td>" . $row['GENDER'] . "</td><td>" . $row['MOB_NO'] . "</td><td>" . $row['P_ADDRESS'] . "</td><td>" . $row['P_CITY'] . "</td><td>" . $row['WARD'] . "</td></tr>";
                echo "</table>";
                echo '<form action="" method="post">';
                echo '<div class="form-group" style="padding-top:1rem;">
                <input type="Submit" class="btn btn-warning" id="btn-patient-update" name="btn-patient-update" value="Update">
                <input type="Submit" class="btn btn-warning" id="btn-patient-delete" name="btn-patient-delete" value="Delete">
            </div>';
                echo "</form>";
            }
        } elseif ($_POST['choice'] == 'City') {
            $sql1 = "SELECT CAST((count(*) / (SELECT count(*) From patient_record) * 100) AS DECIMAL(8,2)) as percentage  from patient_record where P_CITY = '$ID' group by P_CITY";
            $result = mysqli_query($con, $sql1);


            if (mysqli_query($con, $sql1)) {
                $row = $result->fetch_assoc();
                $percentage = $row['percentage'];
                echo $percentage;
            } else {
                echo "error";
            }

            $sql = "SELECT * FROM patient_record WHERE P_CITY = '$ID' AND DELETED = 0";
            $result = mysqli_query($con, $sql);
            if ($result->num_rows > 0) {
                echo "<table><tr>
                  <th>Reristration no</th>
                  <th>Registration Date</th>
                  <th>Patient Name</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>Mobile no</th>
                  <th>Patient Address</th>
                  <th>Patient City</th>
                  <th>Ward Admitted</th>
                </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row['REG_NO'] . "</td><td>" . $row['REG_DATE'] . "</td><td>" . $row['P_NAME'] . "</td><td>" . $row['AGE'] . "</td><td>" . $row['GENDER'] . "</td><td>" . $row['MOB_NO'] . "</td><td>" . $row['P_ADDRESS'] . "</td><td>" . $row['P_CITY'] . "</td><td>" . $row['WARD'] . "</td><td>" . $row['SYMTOMS'] . "</td></tr>";
                }
                echo "</table>";
            }
        }
    }
    elseif ($_POST['table'] == 'Doctor') {
        if ($_POST['choice'] == 'ALL') {
            $sql = "SELECT * FROM doc_record where DELETED = 0";
            $result = mysqli_query($con, $sql);
            if ($result->num_rows > 0) {
                echo "<table><tr>
                <th>Doctor ID</th>
                  <th>Doctor Name</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>Mobile no</th>
                  <th>Email address</th>
                  <th>Address</th>
                  <th>City</th>
                  <th>Ward Duty</th>
                  
                </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row['D_ID'] . "</td><td>" . $row['D_NAME'] . "</td><td>" . $row['AGE'] . "</td><td>" . $row['GENDER'] . "</td><td>" . $row['MOB_NO'] . "</td><td>" . $row['EMAIL'] . "</td><td>" . $row['ADDRESS'] . "</td><td>" . $row['city'] . "</td><td>" . $row['WARD']  . "</td></tr>";
                }
                echo "</table>";
            }
        } elseif ($_POST['choice'] == 'Name') {
            $sql = "SELECT * FROM doc_record where D_NAME like'$ID%' AND DELETED = 0";            $result = mysqli_query($con, $sql);
            if ($result->num_rows > 0) {
                echo "<table><tr>
                <th>Doctor ID</th>
                  <th>Doctor Name</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>Mobile no</th>
                  <th>Email address</th>
                  <th>Address</th>
                  <th>City</th>
                  <th>Ward Duty</th>
                  
                </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row['D_ID'] . "</td><td>" . $row['D_NAME'] . "</td><td>" . $row['AGE'] . "</td><td>" . $row['GENDER'] . "</td><td>" . $row['MOB_NO'] . "</td><td>" . $row['EMAIL'] . "</td><td>" . $row['ADDRESS'] . "</td><td>" . $row['city'] . "</td><td>" . $row['WARD']  . "</td></tr>";
                }
                echo "</table>";
            }
        } elseif ($_POST['choice'] == 'ID') {
            $myfile = fopen("id.txt", "w");
            fwrite($myfile, $ID);
            fclose($myfile);
            $sql = "SELECT * FROM doc_record  where D_ID= '$ID' AND DELETED = 0";
            $result = mysqli_query($con, $sql);
            if ($result->num_rows > 0) {
                echo "<table><tr>
                <th>Doctor ID</th>
                  <th>Doctor Name</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>Mobile no</th>
                  <th>Email address</th>
                  <th>Address</th>
                  <th>City</th>
                  <th>Ward Duty</th>
                  
                </tr>";
                
                    echo "<tr><td>" . $row['D_ID'] . "</td><td>" . $row['D_NAME'] . "</td><td>" . $row['AGE'] . "</td><td>" . $row['GENDER'] . "</td><td>" . $row['MOB_NO'] . "</td><td>" . $row['EMAIL'] . "</td><td>" . $row['ADDRESS'] . "</td><td>" . $row['city'] . "</td><td>" . $row['WARD']  . "</td></tr>";
                
                echo "</table>";
                echo '<form action="" method="post">';
                echo '<div class="form-group" style="padding-top:1rem;">
                <input type="Submit" class="btn btn-warning" id="btn-doc-update" name="btn-doc-update" value="Update">
                <input type="Submit" class="btn btn-warning" id="btn-doc-delete" name="btn-doc-delete" value="Delete">
            </div>';
                echo "</form>";
            }
        } elseif ($_POST['choice'] == 'City') {
            $sql = "SELECT * FROM doc_record  where city= '$ID' AND DELETED = 0";
            $result = mysqli_query($con, $sql);
            if ($result->num_rows > 0) {
                echo "<table><tr>
                <th>Doctor ID</th>
                  <th>Doctor Name</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>Mobile no</th>
                  <th>Email address</th>
                  <th>Address</th>
                  <th>City</th>
                  <th>Ward Duty</th>
                  
                </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row['D_ID'] . "</td><td>" . $row['D_NAME'] . "</td><td>" . $row['AGE'] . "</td><td>" . $row['GENDER'] . "</td><td>" . $row['MOB_NO'] . "</td><td>" . $row['EMAIL'] . "</td><td>" . $row['ADDRESS'] . "</td><td>" . $row['city'] . "</td><td>" . $row['WARD']  . "</td></tr>";
                }
                echo "</table>";
            }
    }
}
    elseif ($_POST['table'] == 'Isolation') {
        if ($_POST['choice'] == 'ALL') {
            
            $sql = "SELECT * FROM i_ward INNER JOIN patient_record on patient_record.REG_NO = i_ward.REG_NO inner join doc_record on i_ward.DOC_ID = doc_record.D_ID AND patient_record.DELETED = 0 AND i_ward.DELETED = 0";
            $result = mysqli_query($con, $sql);
            if ($result->num_rows > 0) {
                echo "<table><tr>
                <th>Reristration no</th>
                  <th>Registration Date</th>
                  <th>Patient Name</th>
                  <th>Symptoms</th>
                  <th>Patient Status</th>
                  <th>Bed no</th>
                  <th>Patient Status</th>
                  <th>Temp. Condition</th>
                  <th>Temp. Measurement</th>
                  <th>BP Condition</th>
                  <th>BP Systolic</th>
                  <th>BP Diastolic</th>
                  <th>Oxygen Condition</th>
                  <th>Oxy. Sat. Level</th>
                  <th>Breath Rate Condition</th>
                  <th>Breath Rate Measurements</th>
                  <th>Heart Condition</th>
                  <th>HR Measurement(b/s)</th>
                  <th>City Scan Status </th>
                  <th>City Scan Changes</th>
                  <th>X-Ray Status</th>
                  <th>X-Ray Changes</th>
                  <th>WBC Count</th>
                  <th>Platelets Count</th>
                  <th>Corona Test No</th>
                  <th>Corona Test Status</th>
                  <th>Doctor</th>
                </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row['REG_NO'] . "</td><td>" . $row['REG_DATE'] . "</td><td>" . $row['P_NAME'] . "</td><td>" . $row['SYMTOMS'] . "</td><td>". $row['P_STATUS'] . "</td><td>"  . $row['BED_NO'] . "</td><td>" . $row['T_HISTORY'] . "</td><td>" . $row['TEMP_STATUS'] . "</td><td>" . $row['TEMP_MEASUREMENT'] . "</td><td>" . $row['BP_STATUS'] ."</td><td>" . $row['BP_SYSTOLIC'] ."</td><td>" . $row['BP_DIASTOLIC'] ."</td><td>" . $row['OXY_STATUS'] ."</td><td>" . $row['OXY_SAT_LEVEL'] ."</td><td>" . $row['B_RATE_STATUS'] ."</td><td>" . $row['B_MEASUREMENT'] ."</td><td>" . $row['HR_STATUS'] ."</td><td>" . $row['HR_MEASUREMENT']."</td><td>" . $row['C_SCAN_STATUS'] ."</td><td>" . $row['C_SCAN_CHANGES'] ."</td><td>" . $row['X_RAY_STATUS'] ."</td><td>" . $row['X_RAY_CHANGES'] ."</td><td>" . $row['W_CELL_COUNT'] ."</td><td>" . $row['PLATELETS_COUNT'] . "</td><td>" . $row['CORONA_TEST_NO'] ."</td><td>" . $row['CORONA_TEST_STATUS'] ."</td><td>" . $row['D_NAME'] ."</td></tr>";
                }
                echo "</table>";
            }
        } elseif ($_POST['choice'] == 'Name') {
            $sql = "SELECT * FROM i_ward INNER JOIN patient_record on patient_record.REG_NO = i_ward.REG_NO inner join doc_record on i_ward.DOC_ID = doc_record.D_ID AND patient_record.DELETED = 0 AND i_ward.DELETED = 0 And P_NAME like '$ID%'";
            $result = mysqli_query($con, $sql);
            if ($result->num_rows > 0) {
                echo "<table><tr>
                <th>Reristration no</th>
                  <th>Registration Date</th>
                  <th>Patient Name</th>
                  <th>Symptoms</th>
                  <th>Patient Status</th>
                  <th>Bed no</th>
                  <th>Patient Status</th>
                  <th>Temp. Condition</th>
                  <th>Temp. Measurement</th>
                  <th>BP Condition</th>
                  <th>BP Systolic</th>
                  <th>BP Diastolic</th>
                  <th>Oxygen Condition</th>
                  <th>Oxy. Sat. Level</th>
                  <th>Breath Rate Condition</th>
                  <th>Breath Rate Measurements</th>
                  <th>Heart Condition</th>
                  <th>HR Measurement(b/s)</th>
                  <th>City Scan Status </th>
                  <th>City Scan Changes</th>
                  <th>X-Ray Status</th>
                  <th>X-Ray Changes</th>
                  <th>WBC Count</th>
                  <th>Platelets Count</th>
                  <th>Corona Test No</th>
                  <th>Corona Test Status</th>
                  <th>Doctor</th>
                </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row['REG_NO'] . "</td><td>" . $row['REG_DATE'] . "</td><td>" . $row['P_NAME'] . "</td><td>" . $row['SYMTOMS'] . "</td><td>". $row['P_STATUS'] . "</td><td>"  . $row['BED_NO'] . "</td><td>" . $row['T_HISTORY'] . "</td><td>" . $row['TEMP_STATUS'] . "</td><td>" . $row['TEMP_MEASUREMENT'] . "</td><td>" . $row['BP_STATUS'] ."</td><td>" . $row['BP_SYSTOLIC'] ."</td><td>" . $row['BP_DIASTOLIC'] ."</td><td>" . $row['OXY_STATUS'] ."</td><td>" . $row['OXY_SAT_LEVEL'] ."</td><td>" . $row['B_RATE_STATUS'] ."</td><td>" . $row['B_MEASUREMENT'] ."</td><td>" . $row['HR_STATUS'] ."</td><td>" . $row['HR_MEASUREMENT']."</td><td>" . $row['C_SCAN_STATUS'] ."</td><td>" . $row['C_SCAN_CHANGES'] ."</td><td>" . $row['X_RAY_STATUS'] ."</td><td>" . $row['X_RAY_CHANGES'] ."</td><td>" . $row['W_CELL_COUNT'] ."</td><td>" . $row['PLATELETS_COUNT'] . "</td><td>" . $row['CORONA_TEST_NO'] ."</td><td>" . $row['CORONA_TEST_STATUS'] ."</td><td>" . $row['D_NAME'] ."</td></tr>";
                }
                echo "</table>";
            }
        } elseif ($_POST['choice'] == 'ID') {
            $myfile = fopen("id.txt", "w");
            fwrite($myfile, $ID);
            fclose($myfile);
            $sql = "SELECT * FROM i_ward INNER JOIN patient_record on patient_record.REG_NO = i_ward.REG_NO inner join doc_record on i_ward.DOC_ID = doc_record.D_ID AND patient_record.DELETED = 0 AND i_ward.DELETED = 0 And REG_NO = '$ID'";
            $result = mysqli_query($con, $sql);
            if ($result->num_rows > 0) {
                echo "<table><tr>
                <th>Reristration no</th>
                  <th>Registration Date</th>
                  <th>Patient Name</th>
                  <th>Symptoms</th>
                  <th>Patient Status</th>
                  <th>Bed no</th>
                  <th>Patient Status</th>
                  <th>Temp. Condition</th>
                  <th>Temp. Measurement</th>
                  <th>BP Condition</th>
                  <th>BP Systolic</th>
                  <th>BP Diastolic</th>
                  <th>Oxygen Condition</th>
                  <th>Oxy. Sat. Level</th>
                  <th>Breath Rate Condition</th>
                  <th>Breath Rate Measurements</th>
                  <th>Heart Condition</th>
                  <th>HR Measurement(b/s)</th>
                  <th>City Scan Status </th>
                  <th>City Scan Changes</th>
                  <th>X-Ray Status</th>
                  <th>X-Ray Changes</th>
                  <th>WBC Count</th>
                  <th>Platelets Count</th>
                  <th>Corona Test No</th>
                  <th>Corona Test Status</th>
                  <th>Doctor</th>
                </tr>";
                $row = $result->fetch_assoc();
                    echo "<tr><td>" . $row['REG_NO'] . "</td><td>" . $row['REG_DATE'] . "</td><td>" . $row['P_NAME'] . "</td><td>" . $row['SYMTOMS'] . "</td><td>". $row['P_STATUS'] . "</td><td>"  . $row['BED_NO'] . "</td><td>" . $row['T_HISTORY'] . "</td><td>" . $row['TEMP_STATUS'] . "</td><td>" . $row['TEMP_MEASUREMENT'] . "</td><td>" . $row['BP_STATUS'] ."</td><td>" . $row['BP_SYSTOLIC'] ."</td><td>" . $row['BP_DIASTOLIC'] ."</td><td>" . $row['OXY_STATUS'] ."</td><td>" . $row['OXY_SAT_LEVEL'] ."</td><td>" . $row['B_RATE_STATUS'] ."</td><td>" . $row['B_MEASUREMENT'] ."</td><td>" . $row['HR_STATUS'] ."</td><td>" . $row['HR_MEASUREMENT']."</td><td>" . $row['C_SCAN_STATUS'] ."</td><td>" . $row['C_SCAN_CHANGES'] ."</td><td>" . $row['X_RAY_STATUS'] ."</td><td>" . $row['X_RAY_CHANGES'] ."</td><td>" . $row['W_CELL_COUNT'] ."</td><td>" . $row['PLATELETS_COUNT'] . "</td><td>" . $row['CORONA_TEST_NO'] ."</td><td>" . $row['CORONA_TEST_STATUS'] ."</td><td>" . $row['D_NAME'] ."</td></tr>";
                
                
                echo "</table>";
                echo '<form action="" method="post">';
                echo '<div class="form-group" style="padding-top:1rem;">
                <input type="Submit" class="btn btn-warning" id="btn-user-update" name="btn-user-update" value="Update">
                <input type="Submit" class="btn btn-warning" id="btn-user-delete" name="btn-user-delete" value="Delete">
            </div>';
                echo "</form>";
            }
        } elseif ($_POST['choice'] == 'City') {
            $sql1 = "SELECT CAST((count(*) / (SELECT count(*) From patient_record where WARD = 'Isolation Ward') * 100) AS DECIMAL(8,2)) as percentage  from patient_record where P_CITY = '$ID' AND WARD = 'Isolation Ward' group by P_CITY";
            $result = mysqli_query($con, $sql1);


            if (mysqli_query($con, $sql1)) {
                $row = $result->fetch_assoc();
                $percentage = $row['percentage'];
                echo $percentage;
            } else {
                echo "error";
            }

            $sql = "SELECT * FROM i_ward INNER JOIN patient_record on patient_record.REG_NO = i_ward.REG_NO inner join doc_record on i_ward.DOC_ID = doc_record.D_ID AND patient_record.DELETED = 0 AND i_ward.DELETED = 0 And P_CITY = '$ID'";
            $result = mysqli_query($con, $sql);
            if ($result->num_rows > 0) {
                echo "<table><tr>
                <th>Reristration no</th>
                  <th>Registration Date</th>
                  <th>Patient Name</th>
                  <th>Symptoms</th>
                  <th>Patient Status</th>
                  <th>Bed no</th>
                  <th>Patient Status</th>
                  <th>Temp. Condition</th>
                  <th>Temp. Measurement</th>
                  <th>BP Condition</th>
                  <th>BP Systolic</th>
                  <th>BP Diastolic</th>
                  <th>Oxygen Condition</th>
                  <th>Oxy. Sat. Level</th>
                  <th>Breath Rate Condition</th>
                  <th>Breath Rate Measurements</th>
                  <th>Heart Condition</th>
                  <th>HR Measurement(b/s)</th>
                  <th>City Scan Status </th>
                  <th>City Scan Changes</th>
                  <th>X-Ray Status</th>
                  <th>X-Ray Changes</th>
                  <th>WBC Count</th>
                  <th>Platelets Count</th>
                  <th>Corona Test No</th>
                  <th>Corona Test Status</th>
                  <th>Doctor</th>
                </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row['REG_NO'] . "</td><td>" . $row['REG_DATE'] . "</td><td>" . $row['P_NAME'] . "</td><td>" . $row['SYMTOMS'] . "</td><td>". $row['P_STATUS'] . "</td><td>"  . $row['BED_NO'] . "</td><td>" . $row['T_HISTORY'] . "</td><td>" . $row['TEMP_STATUS'] . "</td><td>" . $row['TEMP_MEASUREMENT'] . "</td><td>" . $row['BP_STATUS'] ."</td><td>" . $row['BP_SYSTOLIC'] ."</td><td>" . $row['BP_DIASTOLIC'] ."</td><td>" . $row['OXY_STATUS'] ."</td><td>" . $row['OXY_SAT_LEVEL'] ."</td><td>" . $row['B_RATE_STATUS'] ."</td><td>" . $row['B_MEASUREMENT'] ."</td><td>" . $row['HR_STATUS'] ."</td><td>" . $row['HR_MEASUREMENT']."</td><td>" . $row['C_SCAN_STATUS'] ."</td><td>" . $row['C_SCAN_CHANGES'] ."</td><td>" . $row['X_RAY_STATUS'] ."</td><td>" . $row['X_RAY_CHANGES'] ."</td><td>" . $row['W_CELL_COUNT'] ."</td><td>" . $row['PLATELETS_COUNT'] . "</td><td>" . $row['CORONA_TEST_NO'] ."</td><td>" . $row['CORONA_TEST_STATUS'] ."</td><td>" . $row['D_NAME'] ."</td></tr>";
                }
                echo "</table>";
            }
        }
    }
    elseif ($_POST['table'] == 'Paient') {
        if ($_POST['choice'] == 'ALL') {
            $sql = "SELECT * FROM i_ward INNER JOIN patient_record on patient_record.REG_NO = i_ward.REG_NO AND patient_record.DELETED = 0 AND i_ward.DELETED = 0";
            $result = mysqli_query($con, $sql);
            if ($result->num_rows > 0) {
                echo "<table><tr>
                <th>Reristration no</th>
                  <th>Registration Date</th>
                  <th>Patient Name</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>Mobile no</th>
                  <th>Patient Address</th>
                  <th>Patient City</th>
                  <th>Ward Admitted</th>
                  <th>SYMTOMS</th>
                </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row['REG_NO'] . "</td><td>" . $row['REG_DATE'] . "</td><td>" . $row['P_NAME'] . "</td><td>" . $row['AGE'] . "</td><td>" . $row['GENDER'] . "</td><td>" . $row['MOB_NO'] . "</td><td>" . $row['P_ADDRESS'] . "</td><td>" . $row['P_CITY'] . "</td><td>" . $row['WARD'] . "</td><td>" . $row['SYMTOMS'] . "</td></tr>";
                }
                echo "</table>";
            }
        } elseif ($_POST['choice'] == 'Name') {
            $sql = "SELECT * FROM i_ward INNER JOIN patient_record on patient_record.REG_NO = i_ward.REG_NO AND patient_record.DELETED = 0 AND i_ward.DELETED = 0";
            $result = mysqli_query($con, $sql);
            if ($result->num_rows > 0) {
                echo "<table><tr>
            <th>Reristration no</th>
              <th>Registration Date</th>
              <th>Patient Name</th>
              <th>Age</th>
              <th>Gender</th>
              <th>Mobile no</th>
              <th>Patient Address</th>
              <th>Patient City</th>
              <th>Ward Admitted</th>
            </tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row['REG_NO'] . "</td><td>" . $row['REG_DATE'] . "</td><td>" . $row['P_NAME'] . "</td><td>" . $row['AGE'] . "</td><td>" . $row['GENDER'] . "</td><td>" . $row['MOB_NO'] . "</td><td>" . $row['P_ADDRESS'] . "</td><td>" . $row['P_CITY'] . "</td><td>" . $row['WARD'] . "</td><td>" . $row['SYMTOMS'] . "</td></tr>";
                }
            }
        } elseif ($_POST['choice'] == 'ID') {
            $myfile = fopen("id.txt", "w");
            fwrite($myfile, $ID);
            fclose($myfile);
            $sql = "SELECT * FROM i_ward INNER JOIN patient_record on patient_record.REG_NO = i_ward.REG_NO AND patient_record.DELETED = 0 AND i_ward.DELETED = 0";
            $result = mysqli_query($con, $sql);
            if ($result->num_rows > 0) {
                echo "<table><tr>
                <th>Reristration no</th>
                  <th>Registration Date</th>
                  <th>Patient Name</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>Mobile no</th>
                  <th>Patient Address</th>
                  <th>Patient City</th>
                  <th>Ward Admitted</th>
                </tr>";
                $row = $result->fetch_assoc();
                echo "<tr><td>" . $row['REG_NO'] . "</td><td>" . $row['REG_DATE'] . "</td><td>" . $row['P_NAME'] . "</td><td>" . $row['AGE'] . "</td><td>" . $row['GENDER'] . "</td><td>" . $row['MOB_NO'] . "</td><td>" . $row['P_ADDRESS'] . "</td><td>" . $row['P_CITY'] . "</td><td>" . $row['WARD'] . "</td></tr>";
                echo "</table>";
                echo '<form action="" method="post">';
                echo '<div class="form-group" style="padding-top:1rem;">
                <input type="Submit" class="btn btn-warning" id="btn-user-update" name="btn-user-update" value="Update">
                <input type="Submit" class="btn btn-warning" id="btn-user-delete" name="btn-user-delete" value="Delete">
            </div>';
                echo "</form>";
            }
        } elseif ($_POST['choice'] == 'City') {
            $sql1 = "SELECT CAST((count(*) / (SELECT count(*) From patient_record) * 100) AS DECIMAL(8,2)) as percentage  from patient_record where P_CITY = '$ID' group by P_CITY";
            $result = mysqli_query($con, $sql1);


            if (mysqli_query($con, $sql1)) {
                $row = $result->fetch_assoc();
                $percentage = $row['percentage'];
                echo $percentage;
            } else {
                echo "error";
            }

            $sql = "SELECT * FROM i_ward INNER JOIN patient_record on patient_record.REG_NO = i_ward.REG_NO AND patient_record.DELETED = 0 AND i_ward.DELETED = 0";
            $result = mysqli_query($con, $sql);
            if ($result->num_rows > 0) {
                echo "<table><tr>
                  <th>Reristration no</th>
                  <th>Registration Date</th>
                  <th>Patient Name</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>Mobile no</th>
                  <th>Patient Address</th>
                  <th>Patient City</th>
                  <th>Ward Admitted</th>
                </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row['REG_NO'] . "</td><td>" . $row['REG_DATE'] . "</td><td>" . $row['P_NAME'] . "</td><td>" . $row['AGE'] . "</td><td>" . $row['GENDER'] . "</td><td>" . $row['MOB_NO'] . "</td><td>" . $row['P_ADDRESS'] . "</td><td>" . $row['P_CITY'] . "</td><td>" . $row['WARD'] . "</td><td>" . $row['SYMTOMS'] . "</td></tr>";
                }
                echo "</table>";
            }
        }
    }

} 
elseif (isset($_POST['btn-user-delete'])) {
    $myfile = fopen("id.txt", "r");
    $id = fgets($myfile);
    fclose($myfile);
    $sql = "UPDATE reg_user SET DELETED = 1 where username = '$id'";
    if (mysqli_query($con, $sql)) {
        echo "Record Deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} elseif (isset($_POST['btn-user-update'])) {
    $myfile = fopen("id.txt", "r");
    $id = fgets($myfile);
    fclose($myfile);
    $sql = "SELECT * FROM reg_user WHERE username = '$id' AND DELETED = 0";
    $result = mysqli_query($con, $sql);
    $count  = mysqli_num_rows($result);
    if ($count != 0) {
?>
        <script>
            window.location.href = "update_user.php";
        </script>
<?php
    }
}
elseif (isset($_POST['btn-user-delete'])) {
    $myfile = fopen("id.txt", "r");
    $id = fgets($myfile);
    fclose($myfile);
    $sql = "UPDATE reg_user SET DELETED = 1 where username = '$id'";
    if (mysqli_query($con, $sql)) {
        echo "Record Deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} elseif (isset($_POST['btn-user-update'])) {
    $myfile = fopen("id.txt", "r");
    $id = fgets($myfile);
    fclose($myfile);
    $sql = "SELECT * FROM reg_user WHERE username = '$id' AND DELETED = 0";
    $result = mysqli_query($con, $sql);
    $count  = mysqli_num_rows($result);
    if ($count != 0) {
?>
        <script>
            window.location.href = "update_user.php";
        </script>
<?php
    }
}elseif (isset($_POST['btn-user-delete'])) {
    $myfile = fopen("id.txt", "r");
    $id = fgets($myfile);
    fclose($myfile);
    $sql = "UPDATE reg_user SET DELETED = 1 where username = '$id'";
    if (mysqli_query($con, $sql)) {
        echo "Record Deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} elseif (isset($_POST['btn-user-update'])) {
    $myfile = fopen("id.txt", "r");
    $id = fgets($myfile);
    fclose($myfile);
    $sql = "SELECT * FROM reg_user WHERE username = '$id' AND DELETED = 0";
    $result = mysqli_query($con, $sql);
    $count  = mysqli_num_rows($result);
    if ($count != 0) {
?>
        <script>
            window.location.href = "update_user.php";
        </script>
<?php
    }
}elseif (isset($_POST['btn-user-delete'])) {
    $myfile = fopen("id.txt", "r");
    $id = fgets($myfile);
    fclose($myfile);
    $sql = "UPDATE reg_user SET DELETED = 1 where username = '$id'";
    if (mysqli_query($con, $sql)) {
        echo "Record Deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} elseif (isset($_POST['btn-user-update'])) {
    $myfile = fopen("id.txt", "r");
    $id = fgets($myfile);
    fclose($myfile);
    $sql = "SELECT * FROM reg_user WHERE username = '$id' AND DELETED = 0";
    $result = mysqli_query($con, $sql);
    $count  = mysqli_num_rows($result);
    if ($count != 0) {
?>
        <script>
            window.location.href = "update_user.php";
        </script>
<?php
    }
}elseif (isset($_POST['btn-user-delete'])) {
    $myfile = fopen("id.txt", "r");
    $id = fgets($myfile);
    fclose($myfile);
    $sql = "UPDATE reg_user SET DELETED = 1 where username = '$id'";
    if (mysqli_query($con, $sql)) {
        echo "Record Deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} elseif (isset($_POST['btn-user-update'])) {
    $myfile = fopen("id.txt", "r");
    $id = fgets($myfile);
    fclose($myfile);
    $sql = "SELECT * FROM reg_user WHERE username = '$id' AND DELETED = 0";
    $result = mysqli_query($con, $sql);
    $count  = mysqli_num_rows($result);
    if ($count != 0) {
?>
        <script>
            window.location.href = "update_user.php";
        </script>
<?php
    }
}
?>