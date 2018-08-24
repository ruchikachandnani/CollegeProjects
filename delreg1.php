<?php
$sql="delete from registeration where regno='".$_REQUEST["regno"]."';";
$con=mysqli_connect("localhost","root","","anik");
mysqli_query($con,$sql);
header("location:delreg.php");

?>