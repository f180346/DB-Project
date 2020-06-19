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
                            <select name="table" id="table" value="CAR">
                                <option value="Paient">Patient Record</option>
                                <option value="Doctor">Doctor Doctor</option>
                                <option value="Isolation">Isolation Ward</option>
                                <option value="Quarantine">Quarantine Ward</option>
                                <option value="User">User</option>
                            </select>
                            <select name="choice" id="choice" value="CAR">
                                <option value="ID">ID</option>
                                <option value="Name">First Name</option>
                                <option value="City">City</option>
                                <option value="ALL">ALL Data</option>
                            </select>
                            <input type="text" class="form-control" name="search" placeholder="ID/Name/City" aria-label="" aria-describedby="basic-addon1" value="<?php echo htmlentities($_POST['search']) ?>">
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


if($_POST['search'] != '')
{
    $msg = $_POST['search'];
}

$val = $_POST['search'];

if (isset($_POST['btn-search'])) {
    $ID = $_POST['search'];
    echo 'billi2020';

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
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row['fname'] . "</td><td>" . $row['lname'] . "</td><td>" . $row['username'] . "</td><td>" . $row['pass'] . "</td><td>" . $row['gender'] . "</td><td>" . $row['mobile'] . "</td><td>" . $row['email'] . "</td><td>" . $row['dob'] . "</td><td>" . $row['address'] . "</td></tr>";
                }
                                echo $val;
                echo "</table>";
                echo'<form action="" method="post">';
                echo '<div class="form-group" style="padding-top:1rem;">';
                echo '<input type="Submit" class="btn btn-warning" id="btn-search" name="btn-search" value="Search" >';
                echo '<input type="hidden"  name="search" value="<?php echo $val ?>">';
                echo '<input type="Submit" class="btn btn-warning" name="btn-update" value="Update">';
                echo '<input type="Submit" class="btn btn-warning" id="deleusama1te-btn" name="delete-btn" value="Delete" onclick="get_fun()">';

                echo '</div>';
                echo '</form>';
                
            }
        }

       }
       
}
if (isset($_POST['delete-btn'])){
    echo "LA";
    echo $val;
    // echo $_POST['search'],"arbaz";
    // echo $_POST['search'];
    // $ID ="LLLL";
   
    $sql = "UPDATE reg_user SET DELETED = 1 WHERE username ='$ID' AND DELETED = 1";
    if(mysqli_query($con, $sql)==TRUE)
    {
        echo "deleted Successfully";
    }

}

?>