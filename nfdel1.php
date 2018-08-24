<?php
$sql="delete from notify where notifyno='".$_REQUEST["notifyno"]."';";
$con=mysqli_connect("localhost","root","","anik");
mysqli_query($con,$sql);
header("location:nfdel.php");

?>