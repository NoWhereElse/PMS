<?php
include ("./Admin.php");
?>
<?php
#$pname=$_POST["pname"];
$pname= (isset($_POST["pname"]) ? $_POST["pname"] : ""); 


#echo "$uname";
#echo "$pass";

$username = "root";
$password = "";
$hostname = "localhost"; 


$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
#echo "Connected to MySQL<br>";
  
//select a database to work with
$selected = mysql_select_db("pms",$dbhandle)   or die("Could not select pms");
  
if($pname===NULL)
    {
	$pname ="%";
	}
  
  $result = mysql_query("select PID,FName,LName,DOB from patients where PID='" . $pname . "' and Fname='" . $pname . "'");
  
   if (!$result) {
die("Database query failed: " . mysql_error());
}

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Patient Details</title>
<style type="text/css">
.myTable { background-color:#f2f3f4; }
.myTable th { background-color:#78858F;;color:white; }
.myTable td, .myTable th { padding:20px;border:1px  #FFFFFF;font-size: 10pt; }
.myTable TD{font-family: Garamond; font-size: 12pt;color:#330033;}


</style>

  <link rel="stylesheet" href="css/jquery.ui.datepicker.css" type="text/css">
<script src="js/jquery-1.9.1.js"></script>
	<script src="js/jquery.ui.core.js"></script>
	<script src="js/jquery.ui.widget.js"></script>
	<script src="js/jquery.ui.datepicker.js"></script>
<script>
$(function() {
		$( "#datepicker" ).datepicker();
	});
</script>
<script language="javascript">
function search(a)
{
alert(a);
document.PMS.action="patview.php?env="+a;
document.PMS.submit();
}
</script>


</head>
<body bgcolor="silver">
<form  name="PMS" method="post">
<div style="position:absolute; left:400px; top:110px;">   
<table class="myTable" border='2'; bgcolor='white' ;border cellpadding=15; width='800'> 
<legend>
<fieldset>Patient Details</fieldset>
<tr>
<td>Pat ID/Name:</td>
<td ><input type=text name=pname value="" size="25"></td><td> <input type="submit" value="SEARCH" onClick="search(Search.value);"></td>

</tr>
<tr>

<th>Pid</th><th>FName</th><th>LName</th><th>Age</th>
<?php
while($row = mysql_fetch_array($result))
  {
  echo"<tr>";
  echo "<td >" . $row['PID'] . "</td>";
  echo "<td>" . $row['FName'] . "</td>";
  echo "<td>" . $row['LName'] . "</td>";
  echo "<td>" . $row['DOB'] . "</td>";
echo "</tr>";
  }

?>
</table>
</div>
</body>
</form>

</html>