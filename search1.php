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
    form input[type=text]
    {border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-repeat: no-repeat;
    
    }
    table {border-collapse: collapse;}
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
<div style="height: 50px;border: 1px solid black;font-size: 22px;font-family: Consolas;background-color: #ff1a8c;">
  <div  id="one" class="std" onmouseenter="adminTab('ad1');" style="padding-left: 30px;" onmouseover="adminTab1('one');">INSERT</div>
  <div id="two" class="std" onmouseenter="adminTab('ad2');" style="padding-left: 30px;" onmouseover="adminTab1('two');">UPDATE</div>
  <div id="three" class="std" onmouseenter="adminTab('ad3');" style="padding-left: 30px;" onmouseover="adminTab1('three');">DELETE</div>
    <div id="four" class="std" onmouseenter="adminTab('ad4');" style="width: 150px;" onmouseover="adminTab1('four');">NOTIFICATION</div>
    <div id="six" class="std"  style="width: 150px;" ><form  method="post" action="search1.php">
        
        <input type="text" name="firstname" placeholder="Search..">
        <input type="submit" style="visibility:hidden;">
        </form></div>
    <div id="five" class="std" style="float: right;margin-right: 30px;padding-left: 30px;" onmouseover="adminTab1('five');"><a href="alogout.php">LOGOUT</a></div>
</div>
<div style="clear: both;margin-top: 20px;">
  <div class="admn" id="ad1" style="float: left;background-color: #ff668c;" onmouseleave="adl('ad1');" >
    <ul>
        <li><a href="insstud.php">STUDENT</a></li>
        <li><a href="insreg.php">REGISTERATION</a></li>
    </ul>
  </div >
  <div class="admn" id="ad2" style="float: left;margin-left: 200px;background-color: #ff668c;" onmouseleave="adl('ad2');">
    <ul>
        <li><a href="upstud.php">STUDENT</a></li>
        <li><a href="upreg.php">REGISTERATION</a></li>
        <li><a href="inqreply.php">INQUIRY</a></li>
        <li><a href="qyreply.php">STUDENT QUERY</a></li>
    </ul>
  </div>
  <div class="admn" id="ad3" style="float: left;margin-left: 400px;background-color: #ff668c;" onmouseleave="adl('ad3');">
    <ul>
        <li><a href="delstud.php">STUDENT</a></li>
        <li><a href="delreg.php">REGISTERATION</a></li>
        <li><a href="delfd.php">FEEDBACK</a></li>
    </ul>
  </div>
    <div class="admn" id="ad4" style="float: left;margin-left: 620px;background-color: #ff668c;" onmouseleave="adl('ad4');">
    <ul>
        <li><a href="notify.php">VIEW NOTIFICATION</a></li>
        <li><a href="nfdel.php">REMOVE NOTIFICATION</a></li>
        <li><a href="viewfd.php">VIEW FEEDBACK</a></li>
    </ul>
  </div>
    
</div>
    <div style="font-size:25px;margin-left:30px;font-family: Consolas;line-height: 40px;">
    <?php
$sql="select firstname from student where firstname like '".$_REQUEST["firstname"]."%';";
$con=mysqli_connect("localhost","root","","anik");
$result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)) 
        {   echo "<h4>RECORDS FOUND ...</h4>";
            while($row=mysqli_fetch_array($result))
            {   
            echo "<a href='search2.php?firstname=".$row["firstname"]."'>".$row["firstname"]."</a>";
            echo "<br/>";
            }
        }
        else {echo "<h3>NO MATCH FOUND</h3>";}
        

?>
       

        
    </div>
    <div  style=" position: fixed;bottom: 0;right: 0;font-size: 20px;margin-right:25px;"><a href="adm1.php">BACK</a></div>

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


