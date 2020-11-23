<?php  
session_start();
require('dbh.php');

    if (isset($_POST['disable']))
    {
        
    // Assigning POST values to variables.
    $cid = $_POST['cid'];
   

    // CHECK FOR THE RECORD FROM TABLE
    $sql = "UPDATE clients
    SET 
    client_email = 'Disabled'
    WHERE id='$cid'";
    
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        if ($result)
        {   
            
            header('location: user-disabled.php');
        }

        else
        {
            header('location: error.php');
        }
    }

?>