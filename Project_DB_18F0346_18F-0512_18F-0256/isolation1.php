<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'links/links.php' ?>
    <link rel="stylesheet" href="style/style.css">
    <?php include 'dataconnection.php' ?>
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
            <h1 for="p-address" id="lb-p-address">
                <center>PATIENT PROFILE </center>
            </h1>
            <div class="container container-fluid">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="p-regno" id="lb-p-reg">Registration No</label>
                            <input type="text" class="form-control" name="p-regno" placeholder="Registration No" required>
                        </div>
                    </div>

                </div>

                <h1 for="p-address" id="lb-p-address">
                    <center>CLINICL PARAMETERS </center>
                </h1>

                <h5 for="p-address" id="lb-p-address">
                    <center>Temperature Measuremets </center>
                </h5>


                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <div class="form-group ">
                            <label for="p-heart" id="lb-p-age">Temperature Measurements</label>
                            <select class="form-control" id="p-gender">
                                <option>Low</option>
                                <option>Normal</option>
                                <option>High</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="p-age" id="lb-p-age">Specify</label>
                            <input type="text" class="form-control" name="p-reg-date" placeholder="Please type" required>
                        </div>
                    </div>
                </div>




                <h5 for="p-address" id="lb-p-address">
                    <center>Breath Measuremets </center>
                </h5>


                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <div class="form-group ">
                            <label for="p-heart" id="lb-p-age">Breath Measurements</label>
                            <select class="form-control" id="p-gender">
                                <option>Low</option>
                                <option>Normal</option>
                                <option>High</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="p-age" id="lb-p-age">Specify</label>
                            <input type="text" class="form-control" name="p-reg-date" placeholder="Please type" required>
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
                            <label for="p-heart" id="lb-p-age">Heart rate Measurements</label>
                            <select class="form-control" id="p-gender">
                                <option>Low</option>
                                <option>Normal</option>
                                <option>High</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="p-age" id="lb-p-age">Specify</label>
                            <input type="text" class="form-control" name="p-reg-date" placeholder="Please type" required>
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
                            <label for="p-heart" id="lb-p-age">Blood Pressure (diastolic)</label>
                            <select class="form-control" id="p-age" placeholder="breathrate">
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
                            <select class="form-control" id="p-age" placeholder="breathrate">
                                <?php
                                for ($i = 110; $i <= 140; $i += 1) {
                                    echo ("<option value='{$i}'>{$i}</option>");
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <div class="form-group ">
                            <label for="p-heart" id="lb-p-age">Blood Pressure</label>
                            <select class="form-control" id="p-gender">
                                <option>Low</option>
                                <option>Normal</option>
                                <option>High</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="p-age" id="lb-p-age">Specify</label>
                            <input type="text" class="form-control" name="p-reg-date" placeholder="Please type" required>
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
                            <label for="p-heart" id="lb-p-age">Oxygen level in blood</label>
                            <select class="form-control" id="p-gender">
                                <option>Low</option>
                                <option>Normal</option>
                                <option>High</option>
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
                <h1 for="p-address" id="lb-p-address">
                    <center>Chest Examinations </center>
                </h1>

                <div class="row">
                    <div class="col-sm-3"></div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="p-travel" id="lb-p-travel">X-Ray (Any changes)</label>
                            <select class="form-control" id="p-travel">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                            <small id="lb-p-format">Chest examination is important as it's serious symptom in corona</small>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="p-travel" id="lb-p-travel">CT-Scan (Any changes)</label>
                            <select class="form-control" id="p-travel">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
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
                            <input type="text" class="form-control" name="p-reg-date" placeholder="Please type" required>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="p-age" id="lb-p-age">Platelets count</label>
                            <input type="text" class="form-control" name="p-reg-date" placeholder="Please type" required>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-3"></div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="p-age" id="lb-p-age">Tell Liver enzymes levels</label>
                            <input type="text" class="form-control" name="p-reg-date" placeholder="Please type" required>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="p-age" id="lb-p-age">Mention infectious parts</label>
                            <input type="text" class="form-control" name="p-reg-date" placeholder="Please type" required>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="p-address" id="lb-p-address">Corona Testing at fixed time intervals</label>
                            <input type="text" class="form-control" name="paddress" placeholder="Enter Address" required>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="Submit" class="btn btn-primary" name="Submit" id="register-button" value="Submit">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>