<?php  
session_start();
require('dbh.php');

if (isset($_POST['submit'])){
	
// Assigning POST values to variables.

$pet = $_POST['pname'];

// CHECK FOR THE RECORD FROM TABLE
$sql = "INSERT INTO pets (pet_name, id) 
VALUES ('$pet', '". $_SESSION['sess_id']."')";
 
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if ($count == 0)
{
    header('location: pets.php');
}

else
{
    header('location: error.php');
}
}
?>