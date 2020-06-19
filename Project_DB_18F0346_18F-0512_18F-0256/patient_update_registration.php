<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'links/links.php' ?>
    <link rel="stylesheet" href="style/style.css">
    <title>patient_update_registration</title>
</head>

<body id="patient_update_reg-body">
    <div class="patient_update_reg_page">
        <div class="reg">
            <center>
                <h1>Patient Update Registration Form</h1>
            </center>
        </div>
        <br><br>
        <form action="" method="post">
            <div class="container container-fluid">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="p-regno" id="lb-p-reg">Registration No</label>
                            <input type="text" class="form-control" name="p-regno" placeholder="Registration No" disabled>
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
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="p-name" id="lb-p-name">Patient Name</label>
                            <input type="text" class="form-control" name="p-name" placeholder="Patient Name" pattern="[a-zA-Z]+" oninvalid="setCustomValidity('Please enter on alphabets only. ')" required>
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
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="p-city" id="lb-p-city">City</label>
                            <input type="text" class="form-control" name="p-reg-date" placeholder="City" required>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="p-mobileno" id="lb-p-mobileno"> Mobile no</label>
                            <input type="tel" class="form-control" name="p-mobileno" placeholder="Mobile no" pattern="[0-9]{4}-[0-9]{7}" required>
                            <small id="lb-p-format">Format: 0123-4567890 </small>
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
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ward" id="lb-ward">Ward Assign</label>
                            <select class="form-control" id="ward">
                                <option>Quarantine Ward</option>
                                <option>Isolation Ward</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="bedno" id="lb-bedno">Bed No</label>
                            <select class="form-control" id="p-bedno" placeholder="Bed No">
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
                            <select class="form-control" id="p-status">
                                <option>Discharged</option>
                                <option>Under Observation</option>
                                <option>Death</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="p-disc-date" id="lb-p-disc-date">Discharge Date</label>
                            <input type="date" class="form-control" name="p-disc-date" placeholder="Discharge Date">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="sysmtom" id="lb-symtoms">Symtoms</label>
                            <input type="text" class="form-control" name="symtoms" placeholder="Enter Symtoms" pattern="[a-zA-Z]+" oninvalid="setCustomValidity('Please enter on alphabets only. ')" required>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="p-travel" id="lb-p-travel">Patient Travel History</label>
                            <select class="form-control" id="p-travel">
                                <option>No</option>
                                <option>Yes</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="p-doctor" id="lb-p-doctor">Appointed Doctor</label>
                            <input type="text" class="form-control" name="p-doctor" placeholder="Appointed Doctor" pattern="[a-zA-Z]+" oninvalid="setCustomValidity('Please enter on alphabets only. ')" required>
                        </div>
                    </div>
                </div>
                <div class="row">

                </div>

                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="Submit" class="btn btn-danger" name="Register" id="update-button" value="Update">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>


