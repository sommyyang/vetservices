<?php  
session_start();
require('dbh.php');

if (isset($_POST['submit'])){
	
// Assigning POST values to variables.
$email = $_POST['email'];
$password = $_POST['password'];
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$address = $_POST['addy'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$pet = $_POST['pname'];

// CHECK FOR THE RECORD FROM TABLE
$sql = "SELECT * FROM clients WHERE client_email='$email'";
 
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if (!$count == 1)
{
    $sql = "INSERT INTO clients (client_email, client_password, client_fname, client_lname, add_street, add_city, add_state, add_zip) 
    VALUES ('$email','$password','$firstname','$lastname','$address','$city','$state','$zip')";
     
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);
    
    if ($count == 0)
    {
        $query = "SELECT id FROM clients WHERE client_email='$email'";

            $result = mysqli_query($conn, $query);
            $count = mysqli_num_rows($result);
            
            if ($count == 1)
            {
                $row = mysqli_fetch_assoc($result);
                $id = $row['id'];

                $sql = "INSERT INTO pets (pet_name, id) 
                VALUES ('$pet', '$id')";

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
    }
}

else
{
    header('location: reg_error.php');
}
}
?>