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
<div  id="five" style="height: 57px;width: 190px;float: right;margin-top: 10px;padding-top: 25px;background-color: #ff668c;"onmouseenter="f('five');"onmouseleave="f1('five');"><center><a href="inquiry.php">INQUIRY</a></center></div>
<div id="six" style="height: 57px;width: 400px;float: left;margin-top: 10px;padding-top: 25px;background-color: #ff1a8c;"onmouseenter="f('six');"onmouseleave="f1('six');"><center><a href="studlogin.php">STUDENT LOGIN</a></center></div>
</div>
<h2 style="text-transform: capitalize;font-size: 35px;float: right;margin-right: 460px;margin-top: 30px;"><center>FAQ</center></h2>
<?php
    $sql="select message,reply from inquiryreply;";
$con=mysqli_connect("localhost","root","","anik");
$result=mysqli_query($con,$sql);
    ?>
    <div style="float: right; width:450px; margin-right: 200px;font-family: Consolas;border:  1px solid black;border-radius: 10px; ">
        <?php
while($row=mysqli_fetch_array($result))
{
    ?>
        <div style="font-size:18px;border-bottom:  1px dashed black;padding-top: 10px;padding-left: 20px;color: blue;border-radius: 10px;">Q.<?php echo $row["message"]?></div>
        <div style="font-size:18px;border-bottom:  1px solid black;padding-top: 10px;padding-left: 20px;border-radius: 10px;">A.<?php echo $row["reply"]?></div>
        <?php
}
        ?>
    </div>
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