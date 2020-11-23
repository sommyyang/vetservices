<?php  
session_start();
require('dbh.php');

if (isset($_POST['submit'])){
	
// Assigning POST values to variables.
$email = $_POST['email'];
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$sql = "SELECT * FROM clients WHERE client_email='$email' and client_password='$password'";
 
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if (!$count == 1)
{   
    $sql = "SELECT * FROM scheduler WHERE sched_email='$email' and sched_password='$password'";
 
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);
    if (!$count == 1)
    {
        $sql = "SELECT * FROM admin WHERE admin_email='$email' and admin_password='$password'";
 
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $count = mysqli_num_rows($result);
        if (!$count == 1)
        {
            header('location: error.php');
        }
        else 
        {
            $query = "SELECT admin_id, admin_fname FROM admin WHERE admin_email='$email'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $_SESSION['sess_id'] = $row['admin_id'];
            $_SESSION['sess_user'] = $row['admin_fname'];
            header('location: admin_success.php');
        }
    }
    else 
    {
        $query = "SELECT sched_id, sched_fname FROM scheduler WHERE sched_email='$email'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $_SESSION['sess_id'] = $row['sched_id'];
        $_SESSION['sess_user'] = $row['sched_fname'];
        header('location: sched_success.php');
    }
}

else
{
    $query = "SELECT id, client_fname FROM clients WHERE client_email='$email'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $_SESSION['sess_id'] = $row['id'];
    $_SESSION['sess_user'] = $row['client_fname'];
    header('location: success.php');
}
}
?>