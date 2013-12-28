<?php

$did=$_POST["did"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$designation=$_POST["desig"];
$qualification=$_POST["qual"];
$address=$_POST["address"];
$mobileno=$_POST["mobile"];


$username = "root";
$password = "";
$hostname = "localhost"; 

$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("pms",$dbhandle) or die("Could not select pms");

$sql = "INSERT INTO doctor "."(DID,FName,LName,Designation,Qualification,Address,TelephoneNumber,IsActive)"."values('$did','$fname','$lname','$designation','$qualification','$address','$mobileno','1')";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";


header('location: docreg_form.php');

?> 
 