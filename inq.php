<?php
$sql="insert into inquiry values('null','".$_REQUEST["name"]."','".$_REQUEST["email"]."','".$_REQUEST["contact"]."','".$_REQUEST["message"]."');";
$con=mysqli_connect("localhost","root","","anik");
$result=mysqli_query($con,$sql);
header("location:inq1.php");
?>