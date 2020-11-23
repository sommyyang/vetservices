<?php  
session_start();
require('dbh.php');

if (isset($_POST['submit'])){
	
// Assigning POST values to variables.
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$sql = "UPDATE admin
SET admin_password='$password'
WHERE admin_id=" . $_SESSION['sess_id'];
 
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if ($result)
{   
    
    header('location: pwd-change-success.php');
}

else
{
    header('location: error.php');
}
}
?>