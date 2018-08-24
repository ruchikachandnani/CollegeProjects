<?php 
$sql="insert into feedback values('null','".$_REQUEST["feedback"]."');";
$con=mysqli_connect("localhost","root","","anik");
mysqli_query($con,$sql);
//echo $sql;
$row="There is a feeedback from student";
$dt=date("Y/m/d");
$sql1="insert into notify values('$row','$dt',1,'null');";
$con1=mysqli_connect("localhost","root","","anik");
mysqli_query($con1,$sql1);
//echo $sql;
header("location:stdlgn.php?err=Thanks for your feedback");
?>