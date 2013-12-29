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

 $query = "select max(PID) from patients";
 $rs = mysql_query($query);
if(!$rs)
echo "no result found";
else
{

$row    = mysql_fetch_row($rs);
    if($row){
        $pid= $row[0];
		
		$pid1=$pid+1;

}}
 
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

        <!--link rel="stylesheet" href="css/jquery.ui.datepicker.css" type="text/css"-->
		
    <link type="text/css" rel="stylesheet" href="css/shCoreDefault.css">
	<!--link rel="stylesheet" href="css/reset123.css" type="text/css"-->
        <link rel="stylesheet" href="css/metallic.css" type="text/css">
        <!--link rel="stylesheet" href="style123.css" type="text/css"-->
    <script  src="js/XRegExp.js"></script>
    <script  src="js/shCore.js"></script>
    <script  src="js/shLegacy.js"></script>
    <script  src="js/shBrushJScript.js"></script>
    <script  src="js/shBrushXML.js"></script>
    <script src="js/jquery-1.9.1.js"></script>
	<script src="js/jquery.ui.core.js"></script>
	<script src="js/jquery.ui.widget.js"></script>
	<script src="js/jquery.ui.datepicker.js"></script>
	<script  src="js/jquery-1.10.2.js"></script>
    <script  src="js/zebra_datepicker.js"></script>
    <script  src="js/core.js"></script>
    <script >
            SyntaxHighlighter.defaults['toolbar'] = false;
            SyntaxHighlighter.all();
        </script>
		<script>
		$(function() {
 $('#datepicker').Zebra_DatePicker();
  });
</script>


</head>
<body bgcolor="silver">

<form action="patreg.php" method="post">
<div style="position:absolute; left:400px; top:110px;" >   
<table class="myTable"   border='2'; bgcolor='white' ;border cellpadding=15; width='800'> 
<tr>
<?php
 echo"<td>PID<input type=text  name=pid   value=".$pid1." readonly></td>";
?>
</tr> 
<tr>
<td>First Name:</td>
<td ><input type=text name=fname value="" size="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Name:<input type="text" name=lname value="" size="25"></td>
</tr>
<tr>

<td>DOB:</td>
<td><input id="datepicker" name=date type="text">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sex:
<input type="radio" name="group1" value="Male"> Male
<input type="radio" name="group1" value="Female" > Female
</td>
</tr>
<tr>
<td>Blood Group:</td>
<td>
<input type="radio" name="group2" value="A+"> A+
<input type="radio" name="group2" value="A-" > A-
<input type="radio" name="group2" value="B+" > B+
<input type="radio" name="group2" value="B-" > B-
<input type="radio" name="group2" value="O-" > O-
<input type="radio" name="group2" value="O+" > O+
<input type="radio" name="group2" value="AB+" > AB+
<input type="radio" name="group2" value="AB-" > AB-
</td>
</tr>
<tr>
<td>Address:</td>
<td><textarea name=address rows=3 cols=66></textarea></td>
</tr>

<tr>
<td>Mobile No:</td>
<td><input type="text" name=mobile value="" size="10"></td>
</tr>
<tr>
<td></td>
<td align="center"> <input type="submit" value="INSERT" onClick="insert();" > </td>
</tr>
</table>
</div>
</body>
</form>

</html>