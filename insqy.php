<?php 
$sql="insert into studquery values('null','".$_REQUEST["query"]."');";
$con=mysqli_connect("localhost","root","","anik");
mysqli_query($con,$sql);
//echo $sql;
$row="There is a query from student";
$dt=date("Y/m/d");
$sql1="insert into notify values('$row','$dt',1,'null');";
$con1=mysqli_connect("localhost","root","","anik");
mysqli_query($con1,$sql1);
//echo $sql;
header("location:stdlgn.php?err=Your message has been sent.You will be replied shortly.For that see the reply page.");
?>