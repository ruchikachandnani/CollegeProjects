<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="index1.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
<style>
.mySlides {display:none;}
.signup {display:none;}
    .stdln {display:none;}
    .studform {display:none;}
    textarea {resize: none; width: 160px;}
    textarea:focus {
    border: 2px solid #999999;
}
    input[type=button] {width: 70px;height: 40px;cursor: pointer;font-size: 15px;}
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
    
<div style="height: 50px;border: 1px solid black;font-size: 22px;font-family: Consolas;background-color: #ff3399;">
  <div  id="one1" class="std" style="padding-left: 30px;width: 120px;" onmouseover="stdTab2('one1');" onmouseenter="stdTab('s3');">MATERIAL</div>
  <div id="two1" class="std" style="padding-left: 40px;width: 110px;" onmouseenter="stdTab('s1');" onmouseover="stdTab2('two1');">QUERY</div>
  <div id="three1" class="std" style="padding-left: 25px;width: 125px;" onmouseenter="stdTab('s2');" onmouseover="stdTab2('three1');">FEEDBACK</div>
  <div id="four1" class="std" style="padding-left: 40px;width: 110px;" onmouseover="stdTab2('four1');"><a href="slogout.php">LOGOUT</a></div>
</div>
<div style="clear: both;margin-top: 20px;">
    <div style="float: left;width: 300px;background-color: #ff668c;" class="stdln" id="s3"  onmouseleave="stdl('s3');">
    <ul>
        <li><a href="Part_1_JavaNotes.doc" class="cv-btn"><i class="fa fa-download"></i>Download Java</a>
</li>
<li><a href="Data StructPart1-R1.doc" class="cv-btn"><i class="fa fa-download"></i>Download DataStructure</a>
</li>
        </ul>
    </div>

    <div style="float: left;margin-left: 220px;background-color: #ff668c;" class="stdln" id="s1"  onmouseenter="stdTab1('qy');">
    <ul>
        <li><a href="">Fill the query form</a></li>
        <li><a href="stdlgn1.php">Reply</a></li>
        </ul>
    </div>
    <div style="float: left;margin-left: 480px;margin-top: none;" id="qy" class="studform" onmouseleave="stdl1();" >
    <div style="padding-top: 10px;font-size: 22px;border: 1px solid black; padding-left: 80px;background-color: #ff668c;border-radius: 10px;">Query</div>
        <form action="insqy.php" method="post">
        <div style="margin-top: 20px;margin-left: 30px;"><textarea rows="4" cols="20" name="query"></textarea></div>
        <div style="margin-left: 80px; margin-top: 30px;"><input type="submit" value="SUBMIT"/></div>
        </form>
            </div>
    <div style="float: left;margin-left: 440px;background-color: #ff668c;" class="stdln" id="s2"  onmouseenter="stdTab1('fd');" >
    <ul>
        <li><a href="">Fill the feedback form</a></li>
        </ul>
    </div>
    
    <div style="float: left;margin-left: 700px;" id="fd" class="studform" onmouseleave="stdl1();">
    <div style="padding-top: 10px;font-size: 22px;border: 1px solid black; padding-left: 60px;background-color: #ff668c;border-radius: 10px;">Feedback</div>
        <form action="insfd.php" method="post">
        <div style="margin-top: 20px;margin-left: 30px;"><textarea rows="4" cols="20" name="feedback"></textarea></div>
        <div style="margin-left: 80px; margin-top: 30px;"><input type="submit" value="SUBMIT"/></div>
        </form>
    </div>
    </div>

    <div style="font-size: 22px;color:green;margin-left:40px;font-family: Consolas;">
        Reply:
    <?php
        $sql="select reply from queryreply;";
$con=mysqli_connect("localhost","root","","anik");
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
        echo $row["reply"];
        ?>
        <a href="stdlgn2.php"><input type="button" value="OK"></a>
    </div>
    <div  style=" position: fixed;bottom: 0;right: 0;font-size: 20px;margin-right:25px;"><a href="stdlgn.php">BACK</a></div>
	
<div style="margin-top: 500px;" class="cpy">
        <center>
		<?php
        $dt=date("Y");
            
	   echo "Copyright &copy ".$dt. ", <a href=''>www.anikcomputers.com</a>, All Rights Reserved.";
		?>
        </center>
	</div>
    
    
</body>
</html>