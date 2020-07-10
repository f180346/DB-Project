<html lang="en">

<head>
    <?php include 'links/links.php'; ?>
    <link rel="stylesheet" href="style/card.css">
    <title>dashboard</title>
</head>
    <body>
  <style>
  .card{
    margin: auto;
}
      
  </style>
    <div class="row">    
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images/patient.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Patient Record</h5>
    <p class="card-text">Register Patient Record </p>
    <a href="patient_registration.php" class="btn btn-primary">Register Patient </a>
    </div>
</div>
        
  <div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images/doc.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Doctor Profile</h5>
    <p class="card-text">Register the doctor profile </p>
    <a href="doc%20profile.php" class="btn btn-primary">Register Doctor </a>
    </div>
</div>
        </div>
<div class="card" style="width: 18rem;">
    <img class="card-img-top" id="test" src="images/search.png" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Search</h5>
    <p class="card-text">Search from the from entire record</p>
    <a href="search.php" class="btn btn-primary">Show search</a>
    </div>
          </div>
  </div>
    </body>

</html>