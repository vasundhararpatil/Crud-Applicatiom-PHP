<?php 

 $servername="localhost";
 $username="root";
 $password="";
 $dbname="student_database";

 $conn=mysqli_connect($servername,$username,$password,$dbname);


 if(!$conn){
 	die("Connection Failed....". mysqli_connect_error());
 }
 //echo "Connected successfully Established....";


?>