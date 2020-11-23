<?php
session_start();

echo "<br><br><br><br><br><br>";
echo "<p align='center'><font color=green size='8pt'>Booked successfully!</font><p>";

header("Refresh:4; url=patient-dashboard.php");
?>