<?php

//connection for connect to the database in php with mysql

$conn = mysqli_connect("localhost", "ts_user", "pa55word");

mysqli_select_db($conn, "tech_support");

?> 



<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta http-equiv="X-UA-Compatible" content="ie=edge">

<a href="../home.php">Home</a><br/><br/>

<title>Add Technician</title>

<style>

div{

width: 100%;

}

label{

width: 200px;

}

form{

border: 1px solid black;

padding: 10px;

width: 200px;

}

</style>

</head>

<body>

<h3>Add Technician Details</h3>

<form action="add_technician.php" method="post" enctype="multipart/form-data">

<div>

<label style="width: 300px">

First Name:

</label>

<input type="text" name="firstName" />

</div>

<div>

<label>

Last Name:

</label>

<input type="text" name="lastName" />

</div>

<div>

<label>

Email:

</label>

<input type="text" name="email" />

</div>

<div>

<label>

Phone:

</label>

<input type="text" name="phone" />

</div>

<div>

<label>

Password:

</label>

<input type="password" name="password" />

</div>

<br/>

<input type="submit" value="Add Technician" name="add_technician"/>

</form>

<?php

//storing the data came from the form

//isset will triggered when only some post action got

if(isset($_POST["add_technician"])){

$first_name = $_POST["firstName"];

$last_name = $_POST["lastName"];

$email = $_POST["email"];

$phone = $_POST["phone"];

$password = $_POST["password"];

$insertQuery = mysqli_query($conn, "INSERT INTO technicians(firstName, lastName, email, phone, password) values('$first_name','$last_name','$email','$phone','$password')");

if($insertQuery){

echo "<script>alert('Technician Details addedd Successfully!!!');window.location.href='index.php'</script>";

//after successful adding technician, the page will go to home page.

}else{

echo "<b>Some thing error while inseting data. Check the errors</b>";

}

}

?>

</body>

</html>