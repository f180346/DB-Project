<html lang="en">

<head>
    <?php include 'links/links.php';?>
    <?php include 'dataconnection.php'?>
    <link rel="stylesheet" href="style/style.css">
    <title>login</title>
</head>

<body id="signin-body">
    <!-- <a href="#"><img id="logo" src="images/logo.png" id="logo"></a> -->
    <div class="container container-fluid">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class=login-form>
                    <form action="" method="POST">
                        <div class="form-group">
                            <h4 id="login">Login to your account</h4>
                        </div>
                        <div class="form-group" id="Email">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter username" required>
                        </div>
                        <div class="form-group" id="Pass">
                            <label id="lb2" for="pass">Password</label>
                            <input type="password" class="form-control" name="pass" placeholder="Enter Password" required>
                        </div>

                        <div class="form-group">
                            <input type="Submit" class="btn btn-warning" name="Login" id="login-button" value="Login">
                        </div>
                        <br> <br>
                        <div class="card-footer">
                            <div class="d-flex justify-content-center links">
                                <label id="dont"> Don't have an account?</label>
                                <a id="SignUP" href="signup.php">Sign Up</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>

</html>

<?php

if (isset($_POST['Login'])) {
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $sql = "SELECT * FROM reg_user WHERE username = '$username' AND pass = '$password' AND DELETED = 0";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count != 0) {
        ?>
        <script type="text/javascript">
            window.location = "dash.php";
        </script>
    <?php
} else {

        $msg .= "Incorrect username or password";
        echo "<h3 class='error1'>$msg</h3>";
        // header('Location: signin.php?msg='.$msg);
    }
}

?>



