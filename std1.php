<?php
$sql="select * from stdlogin;";
$con=mysqli_connect("localhost","root","","anik");
$result=mysqli_query($con,$sql);
$username = $_REQUEST["username"];
while($row=mysqli_fetch_array($result))
{
    
    if($row["username"]==$_REQUEST["username"])
    {
    if($row["password"]==$_REQUEST["password"])
    {   setCookie("username", $username, time()+3600);
        header("location:stdlgn.php");
    }
        else
        {
            header("location:studlogin.php?err=Wrong Password");
        }
    }
    else
        {
            header("location:studlogin.php?err=Wrong Username");
        }
}

?>
