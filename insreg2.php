<?php
$sql="insert into registeration values('null','".$_REQUEST["firstname"]."','".$_REQUEST["lastname"]."','".$_REQUEST["contact"]."' ,'".$_REQUEST["email"]."' ,'".$_REQUEST["address"]."' ,'".$_REQUEST["course"]."');";
$con=mysqli_connect("localhost","root","","anik");
$result=mysqli_query($con,$sql);
//echo $sql;
header("location:insreg.php");
?>