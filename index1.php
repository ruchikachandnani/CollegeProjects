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

<body bgcolor="#ffe6f2" >
<div ><center><img src="logo2.png" class="logo"></center></div>
	<div >
  <img class="mySlides" src="pic1.jpg" style="width: 100%; height: 150px;">
  <img class="mySlides" src="pic2.jpg" style="width: 100%;height: 150px;">
  <img class="mySlides" src="pic3.jpg" style="width: 100%;height: 150px;">
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
<div id="one" style="height: 57px;padding-top: 25px;background-color: #ff1a8c;" onmouseenter="f('one');" onmouseleave="f1('one');"><center>HOME</center></div>
<div id="two" style="height: 57px;width: 190px;float: left;margin-top: 10px;padding-top: 25px;background-color: #ff668c;"onmouseenter="f('two');"onmouseleave="f1('two');"><center><a href="about.php">ABOUT US</a></center></div>
<div  id="three" style="height: 57px;width: 190px;float: right;margin-top: 10px;padding-top: 25px;background-color: #ff668c;"onmouseenter="f('three');"onmouseleave="f1('three');"><center><a href="course.php"> COURSES</a></center></div>
<div id="four" style="height: 57px;width: 190px;clear: both;float: left;margin-top: 10px;padding-top: 25px; background-color: #ff668c;"onmouseenter="f('four');"onmouseleave="f1('four');"><center><a href="contact.php">CONTACT US</a></center></div>
<div  id="five" style="height: 57px;width: 190px;float: right;margin-top: 10px;padding-top: 25px;background-color: #ff668c;"onmouseenter="f('five');"onmouseleave="f1('five');"><center><a href="inquiry.php">INQUIRY</a></center></div>
<div id="six" style="height: 57px;width: 400px;float: left;margin-top: 10px;padding-top: 25px;background-color: #ff1a8c;"onmouseenter="f('six');"onmouseleave="f1('six');"><center><a href="studlogin.php">STUDENT LOGIN</a></center></div>
</div>
<div style="float: right; width:500px; margin-top: 30px;margin-right: 200px;font-family: Consolas; "><div >
	<img src="giphy.gif" alt="Computer man" style="width:78px;height:78px;float: left;">
	<h2 style="text-transform: capitalize;float: right;margin-right: 35px;font-size: 25px;"><center>welcome to anik computers</center></h2></div>
		<br><br><br>
		<p style="font-size: 23px; text-align: justify;">Anik Computers & Education has a natural evolution. It started as an education provider in 1998. It is the pioneer institute in the field of education. Anik Comput& Education is known for its quality computer education. Importance is given to satisfaction of the student instead of duration of the course.<br>
We Provide Coaching for BCA, MCA, Engineering, MSc. IT, Diploma Engineering etc. Students at Anik are taught by highly qualified and experienced faculties. The institute provides corporate trainings to many of the IT companies & other educational institutes.
</p>


</div>
<div style="clear: both;margin-top: 660px;">
<div class="ruchi"
 style="float: left;width: 300px;font-family: Consolas;	border: 2px solid black; margin-left: 150px; line-height: 35px; border-radius: 25px;background-color: #ff668c;margin-top: 30px;">
<div style="margin: 10px 10px 10px 10px;border: 2px solid black;border-radius: 25px;background-color: #ffe6f2;">
	<div style="border-bottom: 1px dashed black;">
	<center><h3>COURSES</h3></center>
	</div>
	<div>
		<div  style="border-bottom: 1px dashed black;cursor:pointer;" onclick="changeTab('c1');">
		<center><h3>SHORT TERM COURSES</h3></center>

		</div>
		<div class="course" id="c1" style="width: 100%;font-size: 22px;border-bottom: 1px dashed black;">
			<ul>
				<li><a href="" >C Programming</a></li>
				<li ><a href="">C++ Programming</a></li>
				<li><a href="">Core-Java</a></li>
				<li><a href="">Vb.Net</a></li>
				<li><a href="">Oracle</a></li>
				<li><a href="">Linux</a></li>
				<li><a href="">DTP</a></li>
			</ul>
		</div>
	</div>
	<div>
		<div   onclick="changeTab('c2');" style="cursor:pointer;">
		<center><h3>ADVANCED COURSES</h3></center>
		</div>
		<div class="course" id="c2" style="width: 100%; font-size: 22px; border-top:1px dashed black;">
			<ul>
				<li><a href="">SEO</a></li>
				<li><a href="">Asp.Net</a></li>
				<li><a href="">PHP-My SQL</a></li>
				<li><a href="">Advanced Java</a></li>
				<li><a href="">Web Designing</a></li>
				<li><a href="">Project Training</a></li>
			</ul>

		</div>
	</div>
</div>
</div>
<div  style="float: right;margin-right: 150px;">
<div style="margin-top: 160px;position: absolute;z-index: 1;float: left;">
<button  onclick="plusDivs(-1)">&#10094;</button>
</div>

  <div style="position: absolute;z-index: 1;margin-left: 476px;margin-top: 160px;">
  <button  onclick="plusDivs(1)">&#10095;</button>
  </div>

  <img class="mySlide" src="pic5.jpeg" style="width: 500px;height: 300px;">
  <img class="mySlide" src="pic9.jpg" style="width: 500px;height: 300px;">
  <img class="mySlide" src="pic7.jpg" style="width: 500px;height: 300px;">
  <div style="font-size: 20px;font-family: Consolas;margin-top: 30px;margin-left: 200px;"><a href="gallery.php">View More</a></div>
  
  </div>
  </div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlide");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
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
