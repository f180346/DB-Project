<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'links/links.php'; ?>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/card.css">
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
        <!-- <a href="#"><img id="logo" style="margin-right:3rem" src="images/logo.png" id="logo"> </a> -->
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
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <!-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/co1.png" alt="First slide">
    </div>
    <!-- <div class="carousel-item">
      <img class="d-block w-100" src="images/co2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/co3.png" alt="Third slide">
    </div> -->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="row"  style="padding-top: 10rem;">    
     <div class="card" style="width: 18rem;">
         <img class="card-img-top" id="test" src="images/emcs.jpg" alt="Card image cap">
         <div class="card-body">
             <h5 class="card-title">Statistics</h5>
             <p class="card-text">The complete table provideing updated statisics table of the world</p>
             <a href="Statistics.php" class="btn btn-primary">Show statistics</a>
                    </div>
                  </div>   
     <div class="card" style="width: 18rem;">
         <img class="card-img-top" id="test" src="images/stats.PNG" alt="Card image cap">
         <div class="card-body">
             <h5 class="card-title">Emergency contacts</h5>
             <p class="card-text">The complete emergency contact details </p>
             <a href="emergencycontacts.php" class="btn btn-primary">Show numbers</a>
                    </div>
    </div>

    </div>


 
</body>

</html>