<?php  
session_start();
require('dbh.php');

    if (isset($_POST['approve']))
    {
        
    // Assigning POST values to variables.
    $aid = $_POST['aid'];
    $sid = $_SESSION['sess_id'];

    // CHECK FOR THE RECORD FROM TABLE
    $sql = "UPDATE appointment
    SET 
    sched_id = '$sid',
    status = 'Approved'
    WHERE app_id='$aid'";
    
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        if ($result)
        {   
            
            header('location: appt_success.php');
        }

        else
        {
            header('location: appt_error.php');
        }
    }
    else
    {
        $aid = $_POST['aid'];
        $sid = $_SESSION['sess_id'];
        $sql = "UPDATE appointment
        SET 
        sched_id = '$sid',
        status = 'Denied'
        WHERE app_id='$aid'";
        
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

            if ($result)
            {   
                
                header('location: appt_success.php');
            }

            else
            {
                header('location: appt_error.php');
            }
    }
?>