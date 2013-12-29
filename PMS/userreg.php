<?php

$uid=$_POST["uid"];
$fname=$_POST["fname"];
$pass=$_POST["pass"];
$users=$_POST["users"];



$username = "root";
$password = "";
$hostname = "localhost"; 

$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
#echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("pms",$dbhandle) or die("Could not select pms");

$sql = "INSERT INTO users "."(UID,Name,Password,UserType,IsActive)"."values('$uid','$fname','$pass','$users','1')";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";


header('location: userreg_form.php');

?> 
 