<?php 

include "config.php";


if(isset($_GET['delete_id']))
{
	$id=$_GET['delete_id'];
$sql="DELETE FROM student where STUDENT_NO=$id";
$result=mysqli_query($conn,$sql);
if($result==TRUE)
{
	//ECho "deleteddddddddd";
	header('location:display.php');
}
else
{
	echo "Errorr".$sql. " " .$conn->error;
}

}

?>