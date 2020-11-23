<?php  
session_start();
require('dbh.php');

    if (isset($_POST['disable']))
    {
        
    // Assigning POST values to variables.
    $aid = $_POST['aid'];
   

    // CHECK FOR THE RECORD FROM TABLE
    $sql = "UPDATE admin
    SET 
    admin_email = 'Disabled'
    WHERE admin_id='$aid'";
    
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        if ($result)
        {   
            
            header('location: admin-disabled.php');
        }

        else
        {
            header('location: error.php');
        }
    }

?>