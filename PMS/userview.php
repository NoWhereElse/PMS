<?php
session_start();
if(!($_SESSION['id']==session_id()))
header('location:index.php');
if(!(isset($_SESSION['id'])))
header('location:index.php');
include ("./Admin.php");
?>
<?php
#$pname=$_POST["pname"];
$user= (isset($_POST["user"]) ? $_POST["user"] : ""); 
echo $user;

$username = "root";
$password = "";
$hostname = "localhost"; 


$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
#echo "Connected to MySQL<br>";
  
//select a database to work with
$selected = mysql_select_db("pms",$dbhandle)   or die("Could not select pms");
  
  if($user == "")
    {
	$user ="%";
	}
  

  
  $result = mysql_query("select UID,Name,Password,UserType,IsActive from users where UserType like '" . $user . "'");
  
   if (!$result) {
die("Database query failed: " . mysql_error());
}

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>User Details</title>

<style type="text/css">
.myTable { background-color:#f2f3f4; }
.myTable th { background-color:#78858F;;color:white; }
.myTable td { padding:20px;border:1px  #FFFFFF;font-size: 10pt; }
.myTable TD{font-family: Garamond; font-size: 12pt;color:#330033;}

fieldset {position:relative} /* For legend positioning */
#el02 legend { /* Text and background colour, blue on light gray */
color:#00f;
background-color:#ddd;
border:1px
}


/* define height and width of scrollable area. Add 16px to width for scrollbar          */
div.tableContainer {
	clear: both;
	border: 1px solid #963;
	height: 500px;
	overflow: auto;
	width: 756px
}

/* Reset overflow value to hidden for all non-IE browsers. */
html>body div.tableContainer {
	overflow: hidden;
	width: 756px
}

/* define width of table. IE browsers only                 */
div.tableContainer table {
	float: left;
	width: 740px
}

/* define width of table. Add 16px to width for scrollbar.           */
/* All other non-IE browsers.                                        */
html>body div.tableContainer table {
	width: 756px
}

/* set table header to a fixed position. WinIE 6.x only                                       */
/* In WinIE 6.x, any element with a position property set to relative and is a child of       */
/* an element that has an overflow property set, the relative value translates into fixed.    */
/* Ex: parent element DIV with a class of tableContainer has an overflow property set to auto */
thead.fixedHeader tr {
	position: relative
}

/* set THEAD element to have block level attributes. All other non-IE browsers            */
/* this enables overflow to work on TBODY element. All other non-IE, non-Mozilla browsers */
html>body thead.fixedHeader tr {
	display: block
}

/* make the TH elements pretty */
thead.fixedHeader th {
	background: #C96;
	border-left: 1px solid #EB8;
	border-right: 1px solid #B74;
	border-top: 1px solid #EB8;
	font-weight: normal;
	padding: 4px 3px;
	text-align: left
}

/* make the A elements pretty. makes for nice clickable headers                */
thead.fixedHeader a, thead.fixedHeader a:link, thead.fixedHeader a:visited {
	color: #FFF;
	display: block;
	text-decoration: none;
	width: 100%
}

/* make the A elements pretty. makes for nice clickable headers                */
/* WARNING: swapping the background on hover may cause problems in WinIE 6.x   */
thead.fixedHeader a:hover {
	color: #FFF;
	display: block;
	text-decoration: underline;
	width: 100%
}

/* define the table content to be scrollable                                              */
/* set TBODY element to have block level attributes. All other non-IE browsers            */
/* this enables overflow to work on TBODY element. All other non-IE, non-Mozilla browsers */
/* induced side effect is that child TDs no longer accept width: auto                     */
html>body tbody.scrollContent {
	display: block;
	height: 262px;
	overflow: auto;
	width: 100%
	}

/* make TD elements pretty. Provide alternating classes for striping the table */
/* http://www.alistapart.com/articles/zebratables/                             */
tbody.scrollContent td, tbody.scrollContent tr.normalRow td {
	background: #FFF;
	border-bottom: none;
	border-left: none;
	border-right: 1px solid #CCC;
	border-top: 1px solid #DDD;
	padding: 15px;
}

tbody.scrollContent tr.alternateRow td {
	background: #EEE;
	border-bottom: none;
	border-left: none;
	border-right: 1px solid #CCC;
	border-top: 1px solid #DDD;
	padding: 15px;
}

/* define width of TH elements: 1st, 2nd, and 3rd respectively.          */
/* Add 16px to last TH for scrollbar padding. All other non-IE browsers. */
/* http://www.w3.org/TR/REC-CSS2/selector.html#adjacent-selectors        */
html>body thead.fixedHeader th {
	width: 200px
	}

html>body thead.fixedHeader th + th {
	width: 240px
}

html>body thead.fixedHeader th + th + th {
	width: 316px
}

/* define width of TD elements: 1st, 2nd, and 3rd respectively.          */
/* All other non-IE browsers.                                            */
/* http://www.w3.org/TR/REC-CSS2/selector.html#adjacent-selectors        */
html>body tbody.scrollContent td {
	width: 200px
}

html>body tbody.scrollContent td + td {
	width: 240px
}

html>body tbody.scrollContent td + td + td {
	width: 300px
	height:500px
}



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
<form name="PMS" method="post">
<div style="position:absolute; left:400px; top:110px;">   
<table class="myTable" border='2'; bgcolor='white' ;border cellpadding=15; width='800'> 
<legend>
<fieldset id="el02">User Details</fieldset>
<tr>
<td>UserTypes:<select name="user">
    <option value="" disabled="disabled" selected="selected">Please select A User</option>
    <option value="Admin">Admin</option>
    <option value="Doctor">Doctor</option>
</select><input type="submit" value="SEARCH" onClick="search();" > </td></td>
</tr>
<tr>
<td align="left">Add New User:<a href="userreg_form.php" data-toggle="dropdown"><img src="images/images.jpg" width=52 height=20 ><font size=3 face="Garamond" font color="black" align="center"></a>
</tr>
<thead class="fixedHeader">
<th>UserID</th><th>Name</th><th>Password</th><th>UserType</th><th>IsActive</th>
</thead>
<tbody class="scrollContent">
<?php
while($row = mysql_fetch_array($result))
  {
  echo"<tr>";
  echo "<td >" . $row['UID'] . "</td>";
  echo "<td >" . $row['Name'] . "</td>";
  echo "<td >" . $row['Password'] . "</td>";
  echo "<td >" . $row['UserType'] . "</td>";
  echo "<td >" . $row['IsActive'] . "</td>";
echo "</tr>";
  }

?>
</tbody>
</table>
</div>
</body>
</form>

</html>