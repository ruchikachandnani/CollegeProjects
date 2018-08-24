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
<div  id="three" style="height: 57px;width: 190px;float: right;margin-top: 10px;padding-top: 25px;background-color: #ff668c;"onmouseenter="f('three');"onmouseleave="f1('three');"><center><a href="course.php"> COURSES</a></center></div>
<div id="four" style="height: 57px;width: 190px;clear: both;float: left;margin-top: 10px;padding-top: 25px; background-color: #ff668c;"onmouseenter="f('four');"onmouseleave="f1('four');"><center><a href="contact.php">CONTACT US</a></center></div>
<div  id="five" style="height: 57px;width: 190px;float: right;margin-top: 10px;padding-top: 25px;background-color: #ff668c;"onmouseenter="f('five');"onmouseleave="f1('five');"><center>INQUIRY</center></div>
<div id="six" style="height: 57px;width: 400px;float: left;margin-top: 10px;padding-top: 25px;background-color: #ff1a8c;"onmouseenter="f('six');"onmouseleave="f1('six');"><center><a href="studlogin.php">STUDENT LOGIN</a></center></div>
<div style="clear: both;float: left;margin-top: 30px;width: 80px;font-family: Consolas;	border: 1px solid black; margin-left: 130px; line-height: 35px;background-color: #ff668c;font-size: 22px;padding-left: 40px;"><a href="faq.php">FAQ</a>
</div>

</div>
<div style="">
	<h2 style="text-transform: capitalize;font-size: 28px;float: left;margin-left: 300px;margin-top: 80px;">inquire us</h2>
	<img src="text277_1.gif" alt="Computer man" style="width:270px;height:150px;float: right;margin-right: 140px;">
</div>
<?php
	if(isset($_REQUEST["err"])) 
    {?>
    <div style="float: right;color:green;font-size:18px;width:350px;margin-top:10px;font-family: Consolas;"><?php echo $_REQUEST["err"]?></div>
<?php }?>
<div class="inquiry" >
<div style="border-bottom: 0.5px solid black;background-color: #ff668c; font-size:20px;height:30px;padding-top:10px;"><center>INQUIRY FORM</center></div>

<div >
<form action="inq.php" method="post">
	Name:<br><input type="text" name="name"><br>
			Email-id:<br><input type="Email-id" name="email"><br>
			Contact Number:<br><input type="text" name="contact"><br>
			Message:<br><textarea rows="2" cols="12" name="message"></textarea><br>
			<input type="submit" name="">
</form>
</div>
</div>
<div id="rf" style="width: 160px; height: 30px;position: fixed;margin-left: 1170px;margin-top: 542px;clear: both;padding-top: 10px; font-size: 20px;background-color: #ff668c;color: black;" onmouseenter="f('rf');" onmouseleave="f1('rf');"><center><a href="">Registration Form</a></center></div>
    <div id="seven" style=" position: fixed;bottom: 0;right: 0;width: 200px;height: 30px;padding-top: 10px; font-size: 20px;background-color: #ff668c;" onmouseenter="f('seven');" onmouseleave="f1('seven');"><center><a href="registration.php">Registration Form</a></center></div>
	
<div style="margin-top: 900px;" class="cpy">
        <center>
		<?php
        $dt=date("Y");
            
	   echo "Copyright &copy ".$dt. ", <a href=''>www.anikcomputers.com</a>, All Rights Reserved.";
		?>
        </center>
	</div>

</body>
</html>