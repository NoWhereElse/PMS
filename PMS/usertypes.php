<?php
include ("./Admin.php");
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Patient Details</title>

<style type="text/css">
.myTable { background-color:#f2f3f4; }
.myTable th { background-color:#78858F;;color:white; }
.myTable td, .myTable th { padding:15px;border:1px  #FFFFFF;font-size: 10pt; }
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
<form action="patinsert.php" method="post">
<div style="position:absolute; left:400px; top:110px;">   
<table class="myTable" border='2'; bgcolor='white' ;border cellpadding=15; width='800'> 
<tr>
<td></td><td>UserTypes:</td>
<td ><select>
    <option value="" disabled="disabled" selected="selected">Please select A User</option>
    <option value="Admin">Admin</option>
    <option value="Doctor">Doctor</option>
</select></td>
</tr>
<tr>
<td bgcolor='silver' >UserDetails</td><td bgcolor='silver'></td><td bgcolor='silver'></td><td bgcolor='silver'></td>
</tr>
<tr></tr>
<tr>
<th>Name</th><th>Type</th><th>Password</th><th>IsActive</th>
</tr>

</table>
</div>
</body>
</form>

</html>