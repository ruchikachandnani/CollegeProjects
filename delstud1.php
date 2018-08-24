<?php
$sql="delete from student where enrollno='".$_REQUEST["enrollno"]."';";
$con=mysqli_connect("localhost","root","","anik");
mysqli_query($con,$sql);
header("location:delstud.php");

?>