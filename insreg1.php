<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="index1.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
<style>
.mySlides {display:none;}
.signup {display:none;}
.admn
{display:none;}
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
    <?php echo "<center><h2>Registeration Database</center></h2>";?>
    <div style="margin-top: 30px;padding-left: 40px;
	font-size: 18px;margin-left: 450px;
	line-height: 35px;	font-family: Consolas;
	">
    <form action="insreg2.php" method="post" class="formcss">
                
				First Name:<br><input type="text" name="firstname" placeholder="Enter First Name"><br>
				Last Name:<br><input type="text" name="lastname" placeholder="Enter Last Name"><br>
				Contact Number:<br><input type="text" name="contact" placeholder="Enter Contact Number"><br>
				Email-id:<br><input type="Email-id" name="email" placeholder="Enter Email-id"><br>
				Address:<br><textarea rows="3" cols="21" name="address" ></textarea><br>
				Enter Course you want to apply for:<br><input type="text" placeholder="Course Details" name="course"><br>
    
				<input type="submit" value="INSERT" />
			</form>

    
    
    </div>
<div style="margin-top: 300px;" class="cpy">
        <center>
		<?php
        $dt=date("Y");
            
	   echo "Copyright &copy ".$dt. ", <a href=''>www.anikcomputers.com</a>, All Rights Reserved.";
		?>
        </center>
	</div>

    </body>
</html>