<?php
    $server= 'localhost';
    $user= 'root';
    $password= 'admin123';
    $db= 'db_project';
    $con= mysqli_connect($server, $user, $password, $db);
    $msg= "";
    $id= "";
    if($con){
        echo '<div class="alert alert-primary" role="alert" id="err"> 
        A simple primary alert—check it out!
      </div>';
        ?>
        <script>
            $('#err').delay(1000).hide(0);
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("No Connection");
        </script>
        <?php
    }

    
?>