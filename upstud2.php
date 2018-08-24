<?php
$sql="update student set firstname='".$_REQUEST["firstname"]."',lastname='".$_REQUEST["lastname"]."' ,contact='".$_REQUEST["contact"]."' ,address='".$_REQUEST["address"]."' ,email='".$_REQUEST["email"]."' ,course='".$_REQUEST["course"]."' where enrollno='".$_REQUEST["enrollno"]."';";
$con=mysqli_connect("localhost","root","","anik");
mysqli_query($con,$sql);
header("location:upstud.php");
?>