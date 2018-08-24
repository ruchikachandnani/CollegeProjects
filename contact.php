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

<body bgcolor="#ffe6f2" onscroll="call('rf');">
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
<div id="four" style="height: 57px;width: 190px;clear: both;float: left;margin-top: 10px;padding-top: 25px; background-color: #ff668c;"onmouseenter="f('four');"onmouseleave="f1('four');"><center>CONTACT US</center></div>
<div  id="five" style="height: 57px;width: 190px;float: right;margin-top: 10px;padding-top: 25px;background-color: #ff668c;"onmouseenter="f('five');"onmouseleave="f1('five');"><center><a href="inquiry.php">INQUIRY</a></center></div>
<div id="six" style="height: 57px;width: 400px;float: left;margin-top: 10px;padding-top: 25px;background-color: #ff1a8c;"onmouseenter="f('six');"onmouseleave="f1('six');"><center><a href="studlogin.php">STUDENT LOGIN</a></center></div>

</div>
<div style="float: right; width:500px; margin-top: 30px;margin-right: 200px;font-family: Consolas; ">
<div>
<img src="timmeez.gif" alt="Computer man" style="width:230px;height:180px;float: left;">
  <h2 style="text-transform: capitalize;font-size: 28px;float: right;margin-right: 45px;margin-top: 70px;"><center>CONTACT US</center></h2></div>
  <div style="font-size: 20px; line-height: 30px;margin-top: 200px;text-align: justify;
  "><p><pre>
Contact Person   :Ms. Anju Yadav<br>
Email            :anikcomputers@yahoo.com<br>
Contact Number   :( O ) (079) 26732240 / 41<br>
                  ( M ) 09426353863, 09601324214<br>
Office           :303-304 Saman Complex,<br>
                  Vastrapur<br>
                  Ahmedabad - 380015.<br>
 </pre> </p>      
</div>
</div>
<div style="clear: both;">
  <div style="float: left;margin-left: 50px;">
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
<div style="float: right;margin-right: 50px;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14686.901449583353!2d72.5202979!3d23.033854!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf423cbd845a3af63!2sAnik+Software+Technologies+Private+Limited!5e0!3m2!1sen!2sin!4v1507371038916" width="500px" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
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
	
<div style="margin-top: 700px;" class="cpy">
        <center>
		<?php
        $dt=date("Y");
            
	   echo "Copyright &copy ".$dt. ", <a href=''>www.anikcomputers.com</a>, All Rights Reserved.";
		?>
        </center>
	</div>

</body>
</html>