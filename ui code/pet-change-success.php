<?php
session_start();
echo "<br><br><br><br><br><br>";
echo "<p align='center'><font color=green size='8pt'>Pets updated successfully!</font><p>";


header("Refresh:2; url=pets.php");
?>
