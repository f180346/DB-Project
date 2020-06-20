<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'links/links.php'; ?>
    <?php include 'dataconnection.php' ?>
    <link rel="stylesheet" href="style/style.css">

    <title>Search</title>
    <style>
        *{
margin:0;
padding:0;
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

    <form action="" method="post" >
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
                             <input type="text" class="form-control" name="search" placeholder="ID/Name/City" aria-label="" aria-describedby="basic-addon1" > 
                        </div>
                    </div>
                </div> 
                <div class="col-sm-7"></div>  
                <div class="col-sm-3" >
                <div class="form-group" >
                        <input type="Submit" class="btn btn-warning" id="btn-search" name="btn-search" value="Search">
                    </div>
                </div>
                
            </div>
        </form>
<script>
    function get_fun() {
  document.getElementById("btn-search").innerHTML = "$_POST['search']";
  
}
</script>


</body>

</html>

<?php


if (isset($_POST['btn-search'])) {
    $ID = $_POST['search'];
    echo 'bill';

       if($_POST['table'] == 'User'){
        if($_POST['choice'] == 'ALL')
        {
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
        }

        elseif($_POST['choice'] == 'Name')
        {
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
        }

        elseif($_POST['choice'] == 'ID')
        {
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
            }
        }
        elseif($_POST['choice'] == 'City')
        {
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
            }
        }
       }
       elseif($_POST['table'] == 'Paient'){
        if($_POST['choice'] == 'ALL')
        {
            $sql = "SELECT * FROM patient_record INNER JOIN q_ward on patient_record.REG_NO = q_ward.REG_NO AND patient_record.DELETED = 0 AND q_ward.DELETED = 0";
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
                echo "<tr><td>" . $row['REG_NO'] . "</td><td>" . $row['REG_DATE'] . "</td><td>" . $row['P_NAME'] . "</td><td>" . $row['AGE'] . "</td><td>" . $row['GENDER'] . "</td><td>" . $row['MOB_NO'] . "</td><td>" . $row['P_ADDRESS'] . "</td><td>" . $row['P_CITY'] . "</td><td>" . $row['WARD'] . "</td><td>". $row['SYMTOMS'] ."</td></tr>";
            }
            echo "</table>";
        }
        }

        elseif($_POST['choice'] == 'Name')
        {
            $sql = "SELECT * FROM reg_user WHERE fname ='$ID' AND DELETED = 0";
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
                echo "<tr><td>" . $row['REG_NO'] . "</td><td>" . $row['REG_DATE'] . "</td><td>" . $row['P_NAME'] . "</td><td>" . $row['AGE'] . "</td><td>" . $row['GENDER'] . "</td><td>" . $row['MOB_NO'] . "</td><td>" . $row['P_ADDRESS'] . "</td><td>" . $row['P_CITY'] . "</td><td>" . $row['WARD'] . "</td></tr>";            echo "</table>";
        }
        }

        elseif($_POST['choice'] == 'ID')
        {
            $sql = "SELECT * FROM reg_user WHERE username ='$ID' AND DELETED = 0";
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
            }
        }
        elseif($_POST['choice'] == 'City')
        {
            $sql = "SELECT * FROM reg_user WHERE username ='$ID' AND DELETED = 0";
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
            }
        }
       }
       
       
}
?>