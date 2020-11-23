<?php  
session_start();
require('dbh.php');

if (isset($_POST['submit'])){
	
// Assigning POST values to variables.
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$sql = "UPDATE scheduler
SET sched_password='$password'
WHERE sched_id=" . $_SESSION['sess_id'];
 
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if ($result)
{   
    
    header('location: sched-pwd-change-success.php');
}

else
{
    header('location: error.php');
}
}
?>