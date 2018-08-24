<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="index1.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
<style>
.mySlides {display:none;}
#index5 {display: none;}
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
<div id="two" style="height: 57px;width: 190px;float: left;margin-top: 10px;padding-top: 25px;background-color: #ff668c;"onmouseenter="f('two');"onmouseleave="f1('two');"><center>ABOUT US</center></div>
<div  id="three" style="height: 57px;width: 190px;float: right;margin-top: 10px;padding-top: 25px;background-color: #ff668c;"onmouseenter="f('three');"onmouseleave="f1('three');"><center><a href="course.php"> COURSES</a></center></div>
<div id="four" style="height: 57px;width: 190px;clear: both;float: left;margin-top: 10px;padding-top: 25px; background-color: #ff668c;"onmouseenter="f('four');"onmouseleave="f1('four');"><center><a href="contact.php">CONTACT US</a></center></div>
<div  id="five" style="height: 57px;width: 190px;float: right;margin-top: 10px;padding-top: 25px;background-color: #ff668c;"onmouseenter="f('five');"onmouseleave="f1('five');"><center><a href="inquiry.php">INQUIRY</a></center></div>
<div id="six" style="height: 57px;width: 400px;float: left;margin-top: 10px;padding-top: 25px;background-color: #ff1a8c;"onmouseenter="f('six');"onmouseleave="f1('six');"><center><a href="studlogin.php">STUDENT LOGIN</a></center></div>
<div style="clear: both;float: left;margin-top: 105px;margin-left: 10px;">
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



<div style="float: right; width:500px; margin-top: 30px;margin-right: 100px;font-family: Consolas; ">
<h2 style="text-transform: capitalize;"><center>CEO of Anik Software Technology Pvt. Ltd.</center></h2>
<div><img src="pic3.jpeg" width="450px" height="300px"></div>
<div style="margin-top: 10px; font-size: 19px;"><center><a href="#" onclick="about('index4');">Ms.Anju Yadav</a></center></div>
<div id="index4" style="margin-top: 20px;font-size: 20px;display: none;"><p style="text-align: justify;">Anik Computers & Education is successfully training IT professionals under the able guidance of Ms Anju Yadav.<br><br>
Ms. Anju Yadav is MCA from Banasthali Vidyapith. She has over 15 years of experience in industry, teaching, research and consultancy. She has guided MCA and B.C.A project over the years. She is well known person in the area of Information Technology. She has recently authored books for "Simplifying C Programming", "Computer Graphics", "C++ Programming" which is very popular among MCA/BCA/BE students. She is CEO of Anik Software Technology Pvt. Ltd.</p></div>
<div style="margin-top: 20px;font-size: 20px;"><p style="text-align: justify;">Anik Computers & Education is known for its quality computer education. Importance is given to satisfaction of the student instead of duration of the course.<br>
Anik Computers having course ranges from basic like windows, MS Office, tally to advance courses like .Net, PHP, java, Oracle, SEO.<br>
In Anik Computers, faculties are very much experienced to teach courses like Data structure, system software, Computer graphics, DBMS and many others which are the part of MCA/ BCA and BE curriculum.<br><br>
<div id="index6" style=" font-size: 19px;"><center><a href="#" onclick="aboutp('index5');">Read More</a></center></div>
<div id="index5" style="margin-top: 5px;font-size: 20px;text-align: justify;">
Facilities at Anik Computers:<br>
  <ul>
    <li>Latest Configured PCs & Softwares</li>
    <li>Library(More than 50 books of different computer subjects)</li>
    <li>Extensive Course Material & CDs</li>
    <li>Placement of Students in Software Companies for Project Training & Jobs</li>

  </ul>
  Achivement of Anik Computers:<br>
  <ul>
    
    <li>More than 1000 students have taken computer training at the institute</li>
    <li>Many students have scored highest marks in exams</li>
    <li>Many students have gone abroad for further study</li>
    <li>Many students have got jobs in reputed software companies</li>
  </ul>

</p></div>
</div>
</div>
<div id="rf" style="width: 160px; height: 30px;position: fixed;margin-left: 1170px;margin-top: 542px;clear: both;padding-top: 10px; font-size: 20px;background-color: #ff668c;color: black;" onmouseenter="f('rf');" onmouseleave="f1('rf');"><center><a href="">Registration Form</a></center></div>
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