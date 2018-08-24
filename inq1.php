<?php 
$row="There is a new inquiry";
$dt=date("Y/m/d");
$sql="insert into notify values('$row','$dt',1,'null');";
$con=mysqli_connect("localhost","root","","anik");
mysqli_query($con,$sql);
//echo $sql;
header("location:inquiry.php?err=Your message has been sent.You will be replied shortly.For reply check our FAQ page.");
?>