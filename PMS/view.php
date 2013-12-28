<?php
include ("./Admin.php");


$username = "root";
$password = "";
$hostname = "localhost"; 


$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");

$selected = mysql_select_db("eclinic",$dbhandle)   or die("Could not select eclinic");
   
  $result = mysql_query("select * from patient");
 echo '<div style="position:absolute; left:300px; top:110px;">';
echo "<table border='2'; bgcolor='white' ;border cellpadding=15; width='800' >";
echo "<tr bgcolor='grey' ;>";
echo "<th >PID</th>";
echo "<th>Firstname</th>";
echo "<th>Lastname</th><th>Sex</th><th>Age</th><th>Address</th><th>Mobile No</th><th>Mobile No</th>";


while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td >" . $row['pid'] . "</td>";
  echo "<td>" . $row['first_name'] . "</td>";
  echo "<td>" . $row['last_name'] . "</td>";
  echo "<td>" . $row['sex'] . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['mobile_no'] . "</td>";
  echo "<td>" . $row['blood_group'] . "</td>";
  echo "</tr>";
  }
echo "</table>";


?> 


