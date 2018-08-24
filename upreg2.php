<?php
$sql="update registeration set firstname='".$_REQUEST["firstname"]."',lastname='".$_REQUEST["lastname"]."' ,contact='".$_REQUEST["contact"]."' ,email='".$_REQUEST["email"]."' ,address='".$_REQUEST["address"]."' ,course='".$_REQUEST["course"]."' where regno='".$_REQUEST["regno"]."';";
$con=mysqli_connect("localhost","root","","anik");
mysqli_query($con,$sql);
header("location:upreg.php");
?>