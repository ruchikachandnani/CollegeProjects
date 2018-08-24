<?php
$username="admin";
$password="admin";
if($username==$_REQUEST["username"])
{
    if($password==$_REQUEST["password"])
    {   session_start();
	$_SESSION["admin"] = ".$username.";
	

        header("location:adm1.php");
    }
    else
    {
        header("location:admin.php?err=Wrong Password");
    }
}
else
    {
        header("location:admin.php?err=Wrong Username");
    }

?>