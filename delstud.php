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
    table {border-collapse: collapse;}
    tr:nth-child(even){background-color:  #808080;}
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
    <div style="margin-top: 30px;font-family: Consolas;font-size: 18px;">
<?php
$sql="select * from student;";
$con=mysqli_connect("localhost","root","","anik");
$result=mysqli_query($con,$sql);
        echo "<center><h2>Student Database</center></h2>";
echo "<table border='2 px' align='center' >";
        echo "<table border='1 px' align='center' >";
echo "<tr> <th>Enrollment no</th> <th>FirstName</th> <th>LastName</th> <th>Contact</th> <th>Address</th> <th>Email</th> <th>Course</th> <th>Delete</th></tr>";

while($row=mysqli_fetch_array($result))
{
    echo "<tr>";
     echo "<td>".$row["enrollno"]."</td>";
    echo "<td>".$row["firstname"]."</td>";
     echo "<td>".$row["lastname"]."</td>";
    echo "<td>".$row["contact"]."</td>";
    echo "<td>".$row["address"]."</td>";
    echo "<td>".$row["email"]."</td>";
    echo "<td>".$row["course"]."</td>";
    echo "<td>";
    echo "<a href='delstud1.php?enrollno=".$row["enrollno"]."'>";
    echo "<input type='button' value='DELETE'/>";
    
        echo "</a>";
echo "</td>";
    echo "</tr>";
}
echo "</table>";
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