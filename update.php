<?php

include "config.php";
$id=$_GET['update_id'];

	$sql= "SELECT * from student WHERE `STUDENT_NO`='$id' ";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	$name=$row['STUDENT_NAME'];
	$DOB=$row['STUDENT_DOB'];
	$DOJ=$row['STUDENT_DOJ'];


if(isset($_POST['update']))
{
	//print_r($_POST);die();
	$name=$_POST['STUDENT_NAME'];
	$DOB=$_POST['STUDENT_DOB'];
	$DOJ=$_POST['STUDENT_DOJ'];



	$sql="UPDATE `student` SET `STUDENT_NO`='$id',`STUDENT_NAME`='$name', `STUDENT_DOB`='$DOB', `STUDENT_DOJ`='$DOJ' WHERE `STUDENT_NO`='$id'";
	
	$result= mysqli_query($conn,$sql);

	if($result)
	{
			//echo "Values Updated Successfully....";
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
<input type="text" placeholder="Enter Full Name" name="STUDENT_NAME" value="<?php echo $name?>">
<label for="date"><b>Date Of Birth</b></label>

<input type="date" placeholder="Enter birth date" name="STUDENT_DOB" value="<?php echo $DOB?>">
<label for="date"><b>Date Of Joining</b></label>
<input type="date" placeholder="Enter Joining date" name="STUDENT_DOJ"value="<?php echo $DOJ?>">
<hr>
<button type="submit" class="registerbtn" name="update">Update</button>
</div>

</form>
</body>
</html>