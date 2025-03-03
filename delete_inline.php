<?php
$stu_id=$_REQUEST['id']??$_REQUEST['sid'];
$conn=mysqli_connect("localhost","root","","crud");
$query="delete from student where sid=$stu_id";
$result=mysqli_query($conn,$query);
header("location:http://localhost/crud/index.php");
mysqli_close($conn);
?>