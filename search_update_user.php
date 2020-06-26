<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'links/links.php'; ?>
    <?php include 'dataconnection.php' ?>
    <link rel="stylesheet" href="style/style.css">

    <title>Updates User</title>
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

    <form action="update_user.php" method="post" onSubmit="return checkform()">
        <div class="container container-fluid">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-5">
                    <div class="input-group mb-3">
                        
                             <input type="search" class="form-control" name="del_user" placeholder="Enter ID"  aria-label="" aria-describedby="basic-addon1" required> 
                            
                        
                    </div>
                    
                    <input type="Submit" class="btn btn-warning" id="btn-del-user" name="btn-del-user" value="Search">
                </div>
            </div> 
                
                
        </div>
    </form>

<script>

</script>

</body>

</html>



