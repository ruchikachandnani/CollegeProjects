<?php
$sql="delete from feedback where fdno='".$_REQUEST["fdno"]."';";
$con=mysqli_connect("localhost","root","","anik");
mysqli_query($con,$sql);
header("location:delfd.php");

?>