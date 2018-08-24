<?php
$sql="insert into student values('".$_REQUEST["enrollno"]."','".$_REQUEST["firstname"]."','".$_REQUEST["lastname"]."','".$_REQUEST["contact"]."' ,'".$_REQUEST["address"]."' ,'".$_REQUEST["email"]."' ,'".$_REQUEST["course"]."');";
$con=mysqli_connect("localhost","root","","anik");
$result=mysqli_query($con,$sql);
//echo $sql;
header("location:insstud.php");
?>