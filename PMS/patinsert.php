<?php

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$sex=$_POST["group1"];
$dob=$_POST["date"];
$address=$_POST["address"];
$mobileno=$_POST["mobile"];
$bgroup=$_POST["group2"];


echo "$dob";
$username = "root";
$password = "";
$hostname = "localhost"; 


$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
#echo "Connected to MySQL<br>";
  
//select a database to work with
$selected = mysql_select_db("eclinic",$dbhandle) or die("Could not select eclinic");
   
$sql = "INSERT INTO patient "."(first_name,last_name,sex,dob,address,mobile_no,blood_group)"."values('$fname','$lname','$sex','$dob','$address','$mobileno','$bgroup')";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";


header('location: view.php');

?> 
 



