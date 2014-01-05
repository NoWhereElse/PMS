<?php
include ("./Admin.php");
?>

<?php
$username = "root";
$password = "";
$hostname = "localhost"; 

$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
#echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("pms",$dbhandle) or die("Could not select pms");

 $query = "select max(UID) from users";
 $rs = mysql_query($query);
if(!$rs)
echo "no result found";
else
{

$row    = mysql_fetch_row($rs);
    if($row){
        $uid= $row[0];
		
		$uid1=$uid+1;
#echo $did1;
	}
 
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
.myTable td, .myTable th { border:1px  #FFFFFF;font-size: 10pt; }
.myTable TD{font-family: Garamond; font-size: 12pt;color:#330033;}
</style>
  
<script src="js/jquery-1.9.1.js"></script>
	<script src="js/jquery.ui.core.js"></script>
	<script src="js/jquery.ui.widget.js"></script>
	<script src="js/jquery.ui.datepicker.js"></script>
<script>
$(function() {
		$( "#datepicker" ).datepicker();
	});
</script>


</head>
<body bgcolor="silver">
<form action="userreg.php" method="post">
<div style="position:absolute; left:450px; top:110px;">   
<table class="myTable"  border='1'; bgcolor='white' ;border cellpadding=25; width='650';height='700'>
<fieldset>
    <legend><b>Registration</b></legend>
	
<tr>
<?php
 echo"<td align=right>UID</td><td><input type=text  name=uid   value=".$uid1." readonly></td>";
?>

</tr> 
<tr>
<td align="right">First Name</td>
<td width="423"><input type=text name=fname  size="35"></td>
</tr>
<tr>
<td align="right">Password</td>
<td><input type="text" name=pass  size="35"></td>
</tr>
<tr>
<td align="right">UserType</td>
<td><select name="users">
    <option value="" disabled="disabled" selected="selected">Please select A User</option>
    <option value="Admin">Admin</option>
    <option value="Doctor">Doctor</option>
	<option value="Kiosk">Kiosk</option>
</select></td>
</tr>
<tr>
<td></td><td align="left"  > <input type="submit" value="INSERT" onClick="insert();" > </td>
</tr>
</fieldset>
</table>

</div>
</body>
</form>
</html>