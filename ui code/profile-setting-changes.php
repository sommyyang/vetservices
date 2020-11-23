<?php  
session_start();
require('dbh.php');

if (isset($_POST['submit'])){
	
// Assigning POST values to variables.
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];

// CHECK FOR THE RECORD FROM TABLE
$sql = "UPDATE clients
SET client_fname = '$fname',
client_lname = '$lname',
client_email = '$email',
add_street = '$street' ,
add_city = '$city',
add_state = '$state',
add_zip = '$zip'
WHERE id=" . $_SESSION['sess_id'];
 
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if ($result)
{   
    
    header('location: profile-change-success.php');
}

else
{
    header('location: error.php');
}
}
?>