<?php
$sql="select * from stdlogin;";
$con=mysqli_connect("localhost","root","","anik");
$result=mysqli_query($con,$sql);
//$row=mysqli_fetch_array($result);
//print_r($row);
//$row=mysqli_fetch_array($result);
//print_r($row);
//echo $row["name"];
echo "<table border='1 px' align='center'>";
while($row=mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>".$row["username"]."</td>";
     echo "<td>".$row["password"]."</td>";
    echo "</tr>";
}
echo "</table>";
?>
