<?php
session_start();

echo "<br><br><br><br><br><br>";
echo "<p align='center'><font color=green size='8pt'>Congrats! You now have a new pet added!</font><p>";

header("Refresh:4; url=pets.php");
?>