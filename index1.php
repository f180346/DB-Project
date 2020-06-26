<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'links/links.php'; ?>
    <link rel="stylesheet" href="style/style.css">
    <title>Home Page</title>
</head>

<body class="hp_body">
<style type="text/css">
.nav-item{
    padding-left: 1.5rem;
}
.nav-link:hover {
    color: #FF0000 !important;
}

</style>
    <nav class="navbar navbar-expand-lg  fixed-top navbar-light" style="background-color:  #d0d3d4;">
        <a href="#"><img id="logo" style="margin-right:3rem" src="images/logo.png" id="logo"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" style="font-size: 1.3em !important;">
                <li class="nav-item active" >
                    <a class="nav-link" href="index1.php" style="font-size: 20;">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Statistics.php">Statistics <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="InfoPortal.php">Preventions/Recommendations <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="symptoms.php">Symptoms <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="emergencycontacts.php">Emergency Contacts <span class="sr-only">(current)</span></a>
                <li class="nav-item active">
                    <a class="nav-link" href="signin.php">Signin <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="signup.php">Signup <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
 
</body>

</html>