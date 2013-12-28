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
.myTable { background-color:#f2f3f4; }
.myTable th { background-color:#78858F;;color:white; }
.myTable td, .myTable th { padding:15px;border:1px  #FFFFFF;font-size: 10pt; }
.myTable TD{font-family: Garamond; font-size: 12pt;color:#330033;}
</style>

<style type="text/css">
    .defaultIcon
    {
        background-image: url(images/defaultIcon.png) !important;
        width: 25px;
        height: 25px;
    }
    .selectedIcon
    {
        background-image: url(images/selectedIcon.png) !important;
        width: 25px;
        height: 25px;
    }
</style>

<link rel="stylesheet" href="css/jquery.ui.accordion.css" type="text/css">
<link rel="stylesheet" href="css/jquery.ui.datepicker.css" type="text/css">
<script src="js/jquery-1.9.1.js"></script>	
<script src="js/jquery.ui.core.js"></script>
<script src="js/jquery.ui.widget.js"></script>
<script src="js/jquery.ui.accordion.js"></script>
<script src="js/jquery.ui.datepicker.js"></script>	  
<script>
$(function() {
 $("#accordion").accordion();
        //set accordion header options
        $("#accordion").accordion("option", "icons",
        { 'header': 'defaultIcon', 'activeHeader': 'selectedIcon' });
    });
$(function() {
		$( "#datepicker" ).datepicker();
	});
	$(function() {
		$( "#datepicker1" ).datepicker();
	});
	$(function() {
		$( "#datepicker2" ).datepicker();
	});
</script>
</head>
<body bgcolor="silver">
<form action="patinsert.php" method="post">
<div style="position:absolute; left:400px; top:110px;">   
<div id="accordion" >
<h4>Patient Details</h4>
<div>
<p>
<table class="myTable" border='2'; bgcolor='white' ;border cellpadding=15; width='800' > 
<tr>
<td>First Name:</td>
<td ><input type=text name=fname value="" size="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Name:<input type="text" name=lname value="" size="25"></td>
</tr>
<tr>
<td>DOB:</td>
<td>
<input type="text" name=dob id="datepicker">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sex:
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
<td><textarea name=address rows=3 cols=76></textarea></td>
</tr>
<tr>
<td>Mobile No:</td>
<td><input type="text" name=mobile value="" size="10"></td>
</tr>

</table>
</p>
</div>
<h4>Patient Transaction</h4>
<div>
<p>
<table class="myTable" border='2'; bgcolor='white' ;border cellpadding=15; width='800'>
<tr>
<td>From:</td>
<td>
<input type="text" name=fr id="datepicker1"></td>
<td>To:</td>
<td>
<input type="text" name=to id="datepicker2"></td></tr>
<tr>
<th>Pid</th><th>Name</th><th>Doctor</th><th>Amount</th>
</tr>
</table>
</p>
</div>
</div>
</div>
</body>
</html>