<?php  
session_start();
require('dbh.php');

if (isset($_POST['submit'])){
	
// Assigning POST values to variables.
$id = $_POST['pid'];
$pname = $_POST['pname'];

$sql = "SELECT * FROM pets WHERE pet_id='$id' AND id=" . $_SESSION['sess_id'];
 
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if (!$count == 1){
    header('location: pet_error.php');
}
else{
    // CHECK FOR THE RECORD FROM TABLE
    $sql = "UPDATE pets
    SET 
    pet_name = '$pname'
    WHERE pet_id='$id'";
    
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if ($result)
    {   
        
        header('location: pets.php');
    }

    else
    {
        header('location: pet_error.php');
    }
}

}
?>