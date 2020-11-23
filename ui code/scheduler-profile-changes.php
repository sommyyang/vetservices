<?php  
session_start();
require('dbh.php');

if (isset($_POST['submit'])){
	
// Assigning POST values to variables.
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];


// CHECK FOR THE RECORD FROM TABLE
$sql = "UPDATE scheduler
SET sched_fname = '$fname',
sched_lname = '$lname',
sched_email = '$email'
WHERE sched_id=" . $_SESSION['sess_id'];
 
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if ($result)
{   
    
    header('location: sched-profile-change-success.php');
}

else
{
    header('location: error.php');
}
}
?>