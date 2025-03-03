<?php
$stu_name=$_POST["sname"];
$stu_phone=$_POST["sphone"];
$stu_address=$_POST["saddress"];
$stu_class=$_POST["class"];
$conn=mysqli_connect("localhost","root","","crud") or die("Connection failed");
$query="insert into student(sname,sphone,saddress,sclass) values('$stu_name','$stu_phone','$stu_address','$stu_class')";
$result=mysqli_query($conn,$query);

header("location: http://localhost/crud/index.php");
mysqli_close($conn);
?>