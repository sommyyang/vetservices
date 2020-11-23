<?php  
session_start();
require('dbh.php');

    if (isset($_POST['disable']))
    {
        
    // Assigning POST values to variables.
    $sid = $_POST['sid'];
   

    // CHECK FOR THE RECORD FROM TABLE
    $sql = "UPDATE scheduler
    SET 
    sched_email = 'Disabled'
    WHERE sched_id='$sid'";
    
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        if ($result)
        {   
            
            header('location: sched-disabled.php');
        }

        else
        {
            header('location: error.php');
        }
    }

?>