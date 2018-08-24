<?php
$sql="select * from registeration;";
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
    echo "<td>".$row["firstname"]."</td>";
     echo "<td>".$row["lastname"]."</td>";
    echo "<td>".$row["contact"]."</td>";
     echo "<td>".$row["email"]."</td>";
    echo "<td>".$row["address"]."</td>";
    echo "<td>".$row["course"]."</td>";
    echo "</tr>";
}
echo "</table>";
?>
