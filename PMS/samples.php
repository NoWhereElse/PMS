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

 $query = "select max(DID) from doctor";
 $rs = mysql_query($query);
if(!$rs)
echo "no result found";
else
{

$row    = mysql_fetch_row($rs);
    if($row){
        $did= $row[0];
		
		$did1=$did+1;
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
.myTable { background-color:#f2f3f4;}
.myTable th { background-color:#78858F;color:white; }
.myTable td, .myTable th { border:2px  #FFFFFF;font-size: 10pt;}
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


</head>
<body bgcolor="silver">
<form action="docreg.php" method="post">
<div style="position:absolute; left:400px; top:110px;">   
<table class="myTable" bgcolor='white'   CELLPADDING="10" width=800>
<tr>
  <legend>Doctor Details</legend>
</tr>
<tr>
<?php
 echo"<td>DID<input type=text  name=did   value=".$did1." readonly></td>";
?>

</tr> 
<tr>
<td>First Name:<input type="text" name=fname value="" size="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Name:<input type="text" name=lname value="" size="25"></td>
</tr>
<tr>
<td>Designation:<input type="text" name=desig value=""  size="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Qualification:<input type="text" name=qual value="" size="25"></td>
</tr>
<tr>
<td>Address:<textarea name=address rows=3 cols=75></textarea></td>
</tr>
<tr>
<td>Mobile No:<input type="text" name=mobile value="" size="12"></td>
</tr>
<tr>
<td align="center"  > <input type="submit" value="INSERT" onClick="insert();" > </td>
</tr>
</fieldset>
</table>
</div>
</body>
</form>
</html>