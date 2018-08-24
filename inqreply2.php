<?php
$sql="insert into inquiryreply values('".$_REQUEST["inqno"]."','".$_REQUEST["message"]."','".$_REQUEST["reply"]."');";
$con=mysqli_connect("localhost","root","","anik");
$result=mysqli_query($con,$sql);
//echo $sql;
header("location:inqreply.php");
?>
