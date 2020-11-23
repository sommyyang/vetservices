<?php  
session_start();
require('dbh.php');

if (isset($_POST['submit'])){
	
// Assigning POST values to variables.
$pname = $_POST['pname'];

// CHECK FOR THE RECORD FROM TABLE
$sql = "SELECT pet_id FROM pets WHERE pet_name='$pname'";
 
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$id = mysqli_num_rows($result);
if (!$id)
{   
    header('location: error.php');
}

else
{
    $sql = "UPDATE pets
SET pet_name = '$pname'
WHERE pet_id='$id'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
if ($result)
{   
    
    header('location: pet-change-success.php');
}

else
{
    header('location: error.php');
}
   
}
}
?>