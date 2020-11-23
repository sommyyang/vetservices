<?php  
session_start();
require('dbh.php');

if (isset($_POST['submit']))
{
	
// Assigning POST values to variables.
$pid = $_POST['pid'];
$pname = $_POST['pname'];
$date = $_POST['date'];
$time = $_POST['time'];


$query = "SELECT * FROM pets WHERE pet_id = '$pid' AND id =" . $_SESSION['sess_id'];
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if (!$count == 1)
{
    header('location: petb_id_error.php');
}
else
{
    $row = mysqli_fetch_assoc($result);
    $pid = $row['pet_id'];
    // CHECK FOR THE RECORD FROM TABLE
    $sql = "INSERT INTO appointment (id, app_date, app_time, pet_id, sched_id, status) 
    VALUES ('{$_SESSION['sess_id']}','$date','$time','$pid','1','Pending')";
 
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);

    if ($count == 0)
    {
        header('location: book_success.php');
    }

    else
    {
        header('location: petb_id_error.php');
    }
} 

}
?>