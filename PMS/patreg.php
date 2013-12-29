<?php

$pid=$_POST["pid"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$sex=$_POST["group1"];
$dob=$_POST["date"];
$address=$_POST["address"];
$mobileno=$_POST["mobile"];
$bgroup=$_POST["group2"];


#$ip = "$dob"; // some IP address
#$iparr = split ("\/", $ip); 
#print "$iparr[0] <br />";
#print "$iparr[1] <br />" ;
#print "$iparr[2] <br />"  ;
#$dob1=join("/", array($iparr[2],$iparr[0],$iparr[1])); 
##$dob1=$iparr[2]+"/"+$iparr[0]+"/"+$iparr[1];
#echo $dob1;

#echo $dob;

$username = "root";
$password = "";
$hostname = "localhost"; 

$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
#echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("pms",$dbhandle) or die("Could not select pms");

$sql = "INSERT INTO patients "."(PID,FName,LName,Sex,DOB,Address,BloodGroup,TelephoneNumber,IsActive)"."values('$pid','$fname','$lname','$sex','$dob','$address','$bgroup','$mobileno','1')";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";


header('location: patreg_form.php');

?> 
 