<?php
$sql="insert into queryreply values('".$_REQUEST["qno"]."','".$_REQUEST["query"]."','".$_REQUEST["reply"]."');";
$con=mysqli_connect("localhost","root","","anik");
$result=mysqli_query($con,$sql);
//echo $sql;
header("location:qyreply.php");
?>
