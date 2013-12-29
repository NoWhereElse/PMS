<?php


$uname=$_POST["username"];
/* @var $pass type */
$pass=$_POST["password"];



#echo "$uname";
#echo "$pass";

$username = "root";
$password = "";
$hostname = "localhost"; 


$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
  
//select a database to work with
$selected = mysql_select_db("pms",$dbhandle)   or die("Could not select pms");
   
  $result = mysql_query("select * from users where Name='" . $uname . "' and Password='" . $pass . "'");
  
   if (!$result) {
die("Database query failed: " . mysql_error());
}

if($row = mysql_fetch_array($result)) 
	{
			header('location: Admin.php');
		

	}
	else
	{
		header('location:nofound.html');
	}
	
?>
<html>
<head></head>
<body>
<form>
<input type=hidden name=ipaddress value=$uname>
</body>
</html>
  
