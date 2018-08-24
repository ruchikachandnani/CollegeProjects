<?php
	$password = $_REQUEST["password"];
    $repassword = $_REQUEST["repassword"];
if($password==$repassword)
{
$sql="insert into stdlogin values('".$_REQUEST["username"]."','".$_REQUEST["password"]."');";
$con=mysqli_connect("localhost","root","","anik");
$result=mysqli_query($con,$sql);
header("location:stdlgn.php");
}
?>