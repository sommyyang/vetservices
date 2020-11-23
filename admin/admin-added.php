<?php  
session_start();
require('dbh.php');

    if (isset($_POST['add']))
    {
        
    // Assigning POST values to variables.
    $aemail = $_POST['aemail'];
    $apwd = $_POST['apwd'];
    $afname = $_POST['afname'];
    $alname = $_POST['alname'];
   
    $sql = "SELECT * FROM admin WHERE admin_email='$aemail'";
 
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);
    
    if (!$count == 1)
    {
        $sql = "INSERT INTO admin(admin_email,admin_password,admin_fname,admin_lname) 
        VALUES('$aemail','$apwd','$afname','$alname')";
        
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
            if ($result)
            {   
                header('location: admin-new.php');
            }
    
            else
            {
                header('location: error.php');
            }
    }
    else{
        header('location: error.php');
    }
    // CHECK FOR THE RECORD FROM TABLE

    }

?>