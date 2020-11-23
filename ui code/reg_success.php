<?php
session_start();

// remove all session variables
session_unset();

// destroy the session
session_destroy();
echo "<br><br><br><br><br><br>";
echo "<p align='center'><font color=green size='8pt'>You've created your account successfully! Let's make sure you can log in now.</font><p>";

header("Refresh:4; url=portal.php");
?>