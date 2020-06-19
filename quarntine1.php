<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'links/links.php' ?>
    <link rel="stylesheet" href="style/style.css">
    <title>Isolation ward</title>
</head>

<body id="patient_reg-body">
    <div class="patient_reg_page">
        <div class="reg">
            <center>
                <h1 >QUARANTINE WARD</h1>
            </center>
            <marquee>enter qauarntine ward details</marquee>
        </div>
        <br><br>
        <form action="" method="post">
 <h1 for="p-address" id="lb-p-address"><center>PATIENT PROFILE </center></h1>
            <div class="container container-fluid">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="p-regno" id="lb-p-reg">Registration No</label>
                            <input type="text" class="form-control" name="p-regno" placeholder="Registration No" required>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="p-reg-date" id="lb-p-reg-date">Registration Date</label>
                            <input type="date" class="form-control" name="p-reg-date" placeholder="Registration Date" required>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">    <div class="form-group">
                            <label for="p-name" id="lb-p-name">Patient Name</label>
                            <input type="text" class="form-control" name="p-name" placeholder="Patient Name" pattern="[a-zA-Z]+" oninvalid="setCustomValidity('Please enter on alphabets only. ')" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <div class="form-group ">
                            <label for="p-age" id="lb-p-age">Age</label>
                            <select class="form-control" id="p-age" placeholder="Age">
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
                            <select class="form-control" id="p-gender">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        
                        <div class="form-group">
                            <label for="p-disc-date" id="lb-p-disc-date">Discharge Date</label>
                            <input type="date" class="form-control" name="p-disc-date" placeholder="Discharge Date">
                        </div>
                        
                    </div>
                     <div class="col-sm-3">
                        <div class="form-group">
                            <label for="p-doctor" id="lb-p-doctor">Appointed Doctor</label>
                            <input type="text" class="form-control" name="p-doctor" placeholder="Appointed Doctor" pattern="[a-zA-Z]+" oninvalid="setCustomValidity('Please enter on alphabets only. ')" required>
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
                
                <h1 for="p-address" id="lb-p-address"><center>CLINICL PARAMETERS </center></h1>
                
                 <h5 for="p-address" id="lb-p-address"><center>Temperature Measuremets </center></h5>
            
                
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <div class="form-group ">
                            <label for="p-heart" id="lb-p-age">Temp Measurements</label>
                           <select class="form-control" id="p-gender">
                                <option>Normal</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-sm-3">
                        <div class="form-group ">
                            <label for="p-temp" id="lb-p-age">Temp Measurements</label>
                            <select class="form-control" id="p-age" placeholder="temp">
                                <?php
                                for ($i = 94; $i <= 106; $i += 1){
                                    echo ("<option value='{$i}'>{$i}</option>");}
                                ?>
                                    
                            </select>
                            <small id="lb-p-format">From 94 to 106 F </small>
                            
                        </div>
                    </div>
                </div>
                
                 <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <div class="form-group ">
                            <label for="p-heart" id="lb-p-age">Temp Measurements</label>
                           <select class="form-control" id="p-gender">
                                <option>Abnormal</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-sm-3">
                        <div class="form-group ">
                            <label for="p-heart" id="lb-p-age">Temp Measurements</label>
                            <select class="form-control" id="p-gender">
                                <option>Below 94</option>
                                <option>Above 106</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                
                <div class="row">
                
                <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="p-age" id="lb-p-age">Specify</label>
                            <input type="text" class="form-control" name="p-reg-date" placeholder="Please type" required>
                </div>
            </div>
        </div>

                
                 <h1 for="p-address" id="lb-p-address"><center>Oxygen level in blood </center></h1>
            
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <div class="form-group ">
                            <label for="p-heart" id="lb-p-age">Normal Level</label>
                            <select class="form-control" id="p-age" placeholder="breathrate">
                                <?php
                                for ($i = 75; $i <= 100; $i += 1){
                                    echo ("<option value='{$i}'>{$i}</option>");}
                                ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-sm-3">
                       <div class="form-group">
                            <label for="p-age" id="lb-p-age">Specify if abnormal level</label>
                            <input type="text" class="form-control" name="p-reg-date" placeholder="Please type" required>
                </div>
                    </div>
                </div>
               
              <h1 for="p-address" id="lb-p-address"><center>SOCIAL PARAMETERS </center></h1>
            
                <div class="row">
                    <div class="col-sm-3"></div>
                    
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="p-travel" id="lb-p-travel">Patient Travel History</label>
                            <select class="form-control" id="p-travel">
                                <option>No</option>
                                <option>Yes</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="p-age" id="lb-p-age">People met </label>
                            <input type="text" class="form-control" name="p-reg-date" placeholder="Enter names" required>
                </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="Submit" class="btn btn-danger" name="Submitr" id="update-button" value="Submit">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>