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


</head>
<body bgcolor="silver">
<form action="patinsert.php" method="post">
<div style="position:absolute; left:400px; top:110px;">   
<table class="myTable" border='2'; bgcolor='white' ;border cellpadding=15; width='800'> 
<tr>
<td>Pat ID/Name:</td>
<td ><input type=text name=pname value="" size="25"></td><td> <input type="submit" value="SEARCH" onClick="search();" > </td>
</tr>
<tr>
<th>Pid</th><th>Name</th><th>Age</th>
</tr>

</table>
</div>
</body>
</form>

</html>