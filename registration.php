<!DOCTYPE html>
<html>
<head>
	<title></title>
		<script src="index1.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
<style>
.mySlides {display:none;}
</style>
<script>
        function validate()
        {
            var err = "";
            var fn = document.getElementById("fn");
            var ln = document.getElementById("ln");
            var contact = document.getElementById("contact");
            var email = document.getElementById("email").value;
            var address = document.getElementById("address");
            var course = document.getElementById("course");
            if(fn.value == "")
            {
                err += "First Name\n";
            }
            if(ln.value == "")
            {
                err += "Last Name\n";
            }
            if(contact.value == "" || isNaN(contact.value) || contact.value.length!=10 )
            {
                err += "Contact Number\n";
            }
            
            if(
                email == "" || 
                email.indexOf('@')<=0 ||
                email.indexOf('.')==-1 ||
                email.lastIndexOf('.')==email.length-1 ||
                email.indexOf('@')!=email.lastIndexOf('@') ||
                email.lastIndexOf(".")-email.indexOf("@")<2
            )
            {
               err += "Email\n";
            }
            
            if(address.value == "")
            {
                err += "Address\n";
            }
            if(course.value == "")
            {
                err += "Course\n";
            }
            if(err!="")
            {
                alert("Please correct following:\n\n"+err);
                return false;
            }
            
            return true;
        }
    </script>
</head>
<body bgcolor="#ffe6f2">
<div ><center><img src="logo2.png" class="logo"></center></div>
	<div >
  <img class="mySlides" src="pic1.jpg" style="width:100%;height: 150px;">
  <img class="mySlides" src="pic2.jpg" style="width:100%;height: 150px;">
  <img class="mySlides" src="pic3.jpg" style="width:100%;height: 150px;">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2500); // Change image every 2 seconds
}
</script>


<div class="tabContent" style="width: 400px;margin-top: 30px;font-size: 22px;float: left;">
<div id="one" style="height: 57px;padding-top: 25px;background-color: #ff1a8c;" onmouseenter="f('one');" onmouseleave="f1('one');"><center><a href="index1.php">HOME</a></center></div>
<div id="two" style="height: 57px;width: 190px;float: left;margin-top: 10px;padding-top: 25px;background-color: #ff668c;"onmouseenter="f('two');"onmouseleave="f1('two');"><center><a href="about.php">ABOUT US</a></center></div>
<div  id="three" style="height: 57px;width: 190px;float: right;margin-top: 10px;padding-top: 25px;background-color: #ff668c;"onmouseenter="f('three');"onmouseleave="f1('three');"><center><a href="course.php"> COURSES</a></center></div>
<div id="four" style="height: 57px;width: 190px;clear: both;float: left;margin-top: 10px;padding-top: 25px; background-color: #ff668c;"onmouseenter="f('four');"onmouseleave="f1('four');"><center><a href="contact.php">CONTACT US</a></center></div>
<div  id="five" style="height: 57px;width: 190px;float: right;margin-top: 10px;padding-top: 25px;background-color: #ff668c;"onmouseenter="f('five');"onmouseleave="f1('five');"><center><a href="inquiry.php">INQUIRY</a></center></div>
<div id="six" style="height: 57px;width: 400px;float: left;margin-top: 10px;padding-top: 25px;background-color: #ff1a8c;"onmouseenter="f('six');"onmouseleave="f1('six');"><center><a href="studlogin.php">STUDENT LOGIN</a></center></div>
</div>
<div style="margin-top: 20px;">
	<h2 style="text-transform: capitalize;font-size: 28px;float: left;margin-left: 240px;margin-top: 30px;">REGISTER NOW!!</h2>
	<img src="gif1.gif" alt="Computer man" style="width:270px;height:170px;float: right;margin-right: 100px;">
</div>
<div class="reg">
<div style="margin: 10px 10px 10px 10px;border: 2px solid black;border-radius: 25px;background-color: #ffe6f2;">

	<div style="border-bottom: 1.5px dashed black;border-radius: 25px;"><center><h3>REGISTERATION FORM</h3></center></div>
	<div>
		<form action="reg.php" method="post" onsubmit="return validate();">
				First Name:<br><input type="text" name="firstname" placeholder="Enter First Name" id="fn"><br>
				Last Name:<br><input type="text" name="lastname" placeholder="Enter Last Name"  id="ln"><br>
				Contact Number:<br><input type="text" name="contact" placeholder="Enter Contact Number"  id="contact"><br>
				Email-id:<br><input type="Email-id" name="email" placeholder="Enter Email-id"  id="email"><br>
				Address:<br><textarea rows="3" cols="21" name="address"  id="address"></textarea><br>
				Enter Course you want to apply for:<br><input type="text" name="course" placeholder="Course Details"  id="course"><br>
				<input type="submit" >
			</form>

	</div>
</div>
</div>
    
    <div style="margin-top: 1200px;" class="cpy">
        <center>
		<?php
        $dt=date("Y");
            
	   echo "Copyright &copy ".$dt. ", <a href=''>www.anikcomputers.com</a>, All Rights Reserved.";
		?>
        </center>
	</div>

</body>
</html>