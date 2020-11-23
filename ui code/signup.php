<?php  
 require('dbh.php');

if (isset($_POST['email']) and isset($_POST['password'])){
	
// Assigning POST values to variables.
$email = $_POST['email'];
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$sql = "INSERT INTO clients (client_email, client_password) 
VALUES ('$email','$password')";
 
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if ($count == 0)
{
    header('location: reg_success.php');
}

else
{
    header('location: error.php');
}
}
?>