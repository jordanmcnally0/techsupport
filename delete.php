<?php

//including the database connection file

include("config.php");

//getting id of the data from url

$techID = $_GET['techID'];

//deleting the row from table

$result = mysqli_query($mysqli, "DELETE FROM technicians WHERE techID='".$techID."'");

//redirecting to the display page (index.php in our case)

header("Location:index.php");

?>