<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="index1.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
	<style>
.mySlides {display:none;}
</style>

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
<div  id="three" style="height: 57px;width: 190px;float: right;margin-top: 10px;padding-top: 25px;background-color: #ff668c;"onmouseenter="f('three');"onmouseleave="f1('three');"><center> COURSES</center></div>
<div id="four" style="height: 57px;width: 190px;clear: both;float: left;margin-top: 10px;padding-top: 25px; background-color: #ff668c;"onmouseenter="f('four');"onmouseleave="f1('four');"><center><a href="contact.php">CONTACT US</a></center></div>
<div  id="five" style="height: 57px;width: 190px;float: right;margin-top: 10px;padding-top: 25px;background-color: #ff668c;"onmouseenter="f('five');"onmouseleave="f1('five');"><center><a href="inquiry.php">INQUIRY</a></center></div>
<div id="six" style="height: 57px;width: 400px;float: left;margin-top: 10px;padding-top: 25px;background-color: #ff1a8c;"onmouseenter="f('six');"onmouseleave="f1('six');"><center><a href="studlogin.php">STUDENT LOGIN</a></center></div>
</div>
<div>
	<img src="gif2.gif" alt="Computer man" style="width:230px;height:180px;float: left;margin-left: 125px;margin-top: 5px;">
	<h2 style="text-transform: capitalize;font-size: 30px;float: right;margin-right: 350px;margin-top: 70px;"><center>COURSES</center></h2>
</div>
<div class="course1">
<div style="margin: 10px 10px 10px 10px;border: 2px solid black;border-radius: 25px;background-color: #ffe6f2;">
	<div style="border-bottom: 1px dashed black;"><center><h3>COURSES</h3></center></div>
	<div>
		<div  style="border-bottom: 1px dashed black;" ><center><h3>SHORT TERM COURSES</h3></center></div>
		<div  style="width: 100%;font-size: 22px;border-bottom: 1px dashed black; line-height: 35px;">
			<ul>
				<li><a href="course1.php" >C Programming</a></li>
				<li ><a href="course2.php">C++ Programming</a></li>
				<li><a href="course3.php">Core-Java</a></li>
				<li><a href="course4.php">Vb.Net</a></li>
				<li><a href="course5.php">Oracle</a></li>
				<li><a href="course6.php">Linux</a></li>
				<li><a href="course7.php">DTP</a></li>
			</ul>
		</div>
	</div>
	<div>
		<div   ><center><h3>ADVANCED COURSES</h3></center></div>
		<div style="width: 100%; font-size: 22px; border-top:1px dashed black;line-height: 35px;">
			<ul>
				<li><a href="course8.php">SEO</a></li>
				<li><a href="course9.php">Asp.Net</a></li>
				<li><a href="course10.php">PHP-My SQL</a></li>
				<li><a href="course11.php">Advanced Java</a></li>
				<li><a href="course12.php">Web Designing</a></li>
				<li><a href="course13.php">Project Training</a></li>
			</ul>

		</div>
	</div>
</div>
</div>
<div id="rf" style="width: 160px; height: 30px;position: fixed;margin-left: 1170px;margin-top: 542px;clear: both;padding-top: 10px; font-size: 20px;background-color: #ff668c;color: black;" onmouseenter="f('rf');" onmouseleave="f1('rf');"><center><a href="registration.html">Registration Form</a></center></div>
    <div id="seven" style=" position: fixed;bottom: 0;right: 0;width: 200px;height: 30px;padding-top: 10px; font-size: 20px;background-color: #ff668c;" onmouseenter="f('seven');" onmouseleave="f1('seven');"><center><a href="registration.php">Registration Form</a></center></div>
	
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