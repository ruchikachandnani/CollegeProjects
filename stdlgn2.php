<?php
$sql="delete from queryreply;";
$con=mysqli_connect("localhost","root","","anik");
mysqli_query($con,$sql);
header("location:stdlgn.php");

?>