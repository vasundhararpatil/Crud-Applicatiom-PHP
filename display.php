<?php 
include 'config.php';
$sql= "SELECT * From student";
$result=mysqli_query($conn,$sql);


?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Display Students</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<div class="container" style="margin-top: 30px;">
<h1>Student Registration Form</h1>
<div>
	<a href="create.php">
	<button class="btn btn-primary"> Add Student</button></a>
</div>
<hr>

	<table class="table">
  <thead>
    <tr>
      <th scope="col">Student ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Date of Joining</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php	if($result->num_rows>0){
  	while($row=$result->fetch_assoc())
  	{


  ?>
    <tr>
      <th scope="row"><?php echo $row['STUDENT_NO']?></th>
      <td><?php echo $row['STUDENT_NAME']?></td>
      <td><?php echo $row['STUDENT_DOB']?></td>
      <td><?php echo $row['STUDENT_DOJ']?></td>
       <td>
       	
       	<a class ="btn btn-info"href="update.php?update_id=<?php echo $row['STUDENT_NO']?>">UPDATE</a>
       		<a class ="btn btn-danger"href="delete.php?delete_id=<?php echo $row['STUDENT_NO']?>">DELETE</a>
       </td>
    </tr>
   <?php } }?>
    
  </tbody>
</div>
</table>
</body>
</html>