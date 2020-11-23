<?php  
session_start();
require('dbh.php');

if (isset($_GET['app_id']))
{
	
// Assigning POST values to variables.
$id = $_GET['app_id'];


// CHECK FOR THE RECORD FROM TABLE
$sql = "SELECT * FROM appointment where app_id = '$id'";
 
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if (!$count == 1)
{
    header('location: error.php');
}
else
{   $row = mysqli_fetch_assoc($result);
    $aid = $row['app_id'];
    $sql = "DELETE FROM appointment where app_id = '$aid'";
    
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
    $count = mysqli_num_rows($result);

    if ($count == 0)
    {
        echo "Appointment Canceled.";
        header('location: patient-dashboard.php');
    }

    else
    {
        header('location: error.php');
    }
}
}
?>