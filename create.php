<?php

include "config.php";

if(isset($_POST['submit']))
{
	//print_r($_POST);die();
	$name=$_POST['STUDENT_NAME'];
	$DOB=$_POST['STUDENT_DOB'];
	$DOJ=$_POST['STUDENT_DOJ'];



	$sql="INSERT INTO `student`( `STUDENT_NAME`, `STUDENT_DOB`, `STUDENT_DOJ`) VALUES ('$name','$DOB','$DOJ')";
	//print_r($sql);die();
	$result= mysqli_query($conn,$sql);
	//print_r($result);die();
	if($result)
	{
		//	echo "Values Inserted Successfully....";
		header('location:display.php');
	}

	else
	{
		echo "Error " .$sql. " Please check it " .$conn->error;

	}
}




?>









<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP CRUD Application</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<form method="post">
<div class="container-fluid">
<h1>Student Registration Form</h1>
<p>Please fill in the details here.</p>
<hr>
<label for="name"><b>Student Name</b></label>
<input type="text" placeholder="Enter Full Name" name="STUDENT_NAME">
<label for="date"><b>Date Of Birth</b></label>

<input type="date" placeholder="Enter birth date" name="STUDENT_DOB">
<label for="date"><b>Date Of Joining</b></label>
<input type="date" placeholder="Enter Joining date" name="STUDENT_DOJ">
<hr>
<button type="submit" class="registerbtn" name="submit">Submit</button>
</div>

</form>
</body>
</html>