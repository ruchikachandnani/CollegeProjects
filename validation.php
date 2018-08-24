<?php
$err="";
$firstname=$_REQUEST["firstname"];
$lastname=$_REQUEST["lastname"];
$contact=$_REQUEST["contact"];
$email=$_REQUEST["email"];
$address=$_REQUEST["address"];
$course=$_REQUEST["course"];
if($firstname== "")
            {
                $err += "First Name\n";
            }
if($lastname== "")
            {
                $err += "Last Name\n";
            }

            if($contact== "" )
            {
                $err += "Contact Number\n";
            }
            
            if(
                $email == "" || 
                $email.indexOf('@')<=0 ||
                $email.indexOf('.')==-1 ||
               $email.lastIndexOf('.')==email.length-1 ||
                $email.indexOf('@')!=email.lastIndexOf('@') ||
                $email.lastIndexOf(".")-email.indexOf("@")<2
            )
            {
               $err += "Email\n";
            }
           if($address== "")
            {
                $err += "Address\n";
            }
 
            
    if($course== "")
            {
                $err += "course\n";
            }
        
            if($err!="")
            {
                header("location?err1=$err");
                   }
            
            else
            {
                header("location:reg.php");
            }
                ?>