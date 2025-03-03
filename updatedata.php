<?php
$stu_id=$_POST["sid"];
$stu_name=$_POST["sname"];
$stu_phone=$_POST["sphone"];
$stu_address=$_POST["saddress"];
$stu_class=$_POST["sclass"];
$conn=mysqli_connect("localhost","root","","crud") or die("Connection failed");
$query="update student set sname='$stu_name', sphone='$stu_phone', saddress='$stu_address',sclass='$stu_class' where sid=$stu_id";
$result=mysqli_query($conn,$query);

header("location: http://localhost/crud/index.php");
mysqli_close($conn);
?>