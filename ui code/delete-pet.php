<?php  
session_start();
require('dbh.php');

if (isset($_POST['submit'])){
	
// Assigning POST values to variables.
$id = $_POST['pid'];

$sql = "SELECT * FROM pets WHERE pet_id='$id' AND id=" . $_SESSION['sess_id'];
 
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

    if (!$count == 1){
        header('location: pet_id_error.php');
    }
    else{
    // CHECK FOR THE RECORD FROM TABLE
   
    $sql = "DELETE FROM pets
    WHERE pet_id='$id'";
    
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if ($result)
    {   
        
        header('location: pets.php');
    }

    else
    {
        header('location: error.php');
    }
    }
}
?>