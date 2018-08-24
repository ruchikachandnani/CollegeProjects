<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="index1.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
<style>
.mySlides {display:none;}
.signup {display:none;}
    #eight {background-color: #ffe6f2;}
    #seven {background-color: #ff668c;}
    #fm1 {background-color: #ff668c;}
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
<div  id="five" style="height: 57px;width: 190px;float: right;margin-top: 10px;padding-top: 25px;background-color: #ff668c;"onmouseenter="f('five');"onmouseleave="f1('five');"><center><a href="inquiry.php">INQUIRY</a></center></div>
<div id="six" style="height: 57px;width: 400px;float: left;margin-top: 10px;padding-top: 25px;background-color: #ff1a8c;"onmouseenter="f('six');"onmouseleave="f1('six');"><center>STUDENT LOGIN</center></div>
</div>
<div class="login">
	<div id="seven" style="float: left;border: 1px solid black;width: 198px;font-size: 22px;height: 35px;padding-top: 15px;" onmouseenter="lgn1();"><center>LOGIN</center></div>
	<div id="eight" style="float: right;border: 1px solid black;width: 198px;font-size: 22px;height: 35px;padding-top: 15px;" onmouseenter="lgn2();"><center>SIGN UP</center></div>
	<div  class="signup1" id="fm1" style="width: 400px;height: 400px;
	">
		<form action="std1.php" method="post">
            <?php
	if(isset($_REQUEST["err"])) 
	echo '<span style="color:red;">'.$_REQUEST["err"].'</span>' ;
            echo "<br>";
?>

			Enter Username:<br>
				<input type="text" name="username" placeholder="USERNAME"><br>
				Enter Password:<br>
				<input type="password" name="password" placeholder="PASSWORD"><br>
				<a href="#">Forgot Password?</a><br>
				<a href="#">Forgot Username?</a><br>
				<input type="submit" value="LOGIN" >
		</form>
	</div>
	<div class="signup" id="fm2" style="width: 400px;height: 300px;
	">
		<form action="std.php" method="post">
			Enter Username:<br>
				<input type="text" name="username" placeholder="USERNAME"><br>
				Enter Password:<br>
				<input type="password" name="password" placeholder="PASSWORD"><br>
				Re-Enter Password:<br>
				<input type="password" name="repassword" placeholder="RE-ENTER PASSWORD"><br>
				<input type="submit" value="SIGN UP"  >
		</form>
	</div>
</div>
<div id="rf" style="width: 160px; height: 30px;position: fixed;margin-left: 1170px;margin-top: 542px;clear: both;padding-top: 10px; font-size: 20px;background-color: #ff668c;color: black;" onmouseenter="f('rf');" onmouseleave="f1('rf');"><center><a href="">Registration Form</a></center></div>

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