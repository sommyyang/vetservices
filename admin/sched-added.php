<?php  
session_start();
require('dbh.php');

    if (isset($_POST['add']))
    {
        
    // Assigning POST values to variables.
    $semail = $_POST['semail'];
    $spwd = $_POST['spwd'];
    $sfname = $_POST['sfname'];
    $slname = $_POST['slname'];
   
    $sql = "SELECT * FROM scheduler WHERE sched_email='$semail'";
 
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);
    
    if (!$count == 1)
    {
        $sql = "INSERT INTO scheduler(sched_email,sched_password,sched_fname,sched_lname) 
        VALUES('$semail','$spwd ','$sfname','$slname')";
        
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
            if ($result)
            {   
                header('location: sched-new.php');
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