<?php
session_start();
// Create Variables
$dBServername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "ics325sp200132";

// Create connection
$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>