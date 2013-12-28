<!DOCTYPE html>
<html >
<head>
<?php
$uname=$_POST["uname"];
?>
<title>ADMIN</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style1.css" media="screen" type="text/css" />
</head>
<body bgcolor=#f2f3f4>
<div style="position:absolute; left:0px; width:100%; top:0px; ">
<table width=100% height=30>
      <td align="left"   bgcolor="429c30"> <font size=8 face="Garamond" font color="white" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MyClinic</td>
	 	 
 </table>
 </div>

 <div style="position:absolute; left:130px; top:110px;">
 <table width=250 height=50>
 <td align="left"   bgcolor="#c0392b"><img src="images/images.jpg" width=52 height=50 ><font size=3 face="Garamond" font color="black" align="center">&nbsp;<b>Welcome</b></font></td>
 </table>
 </div>
 <div style="position:absolute; left:130px; top:200px;">
 
 <div class="container">
<ul > 
 <li class="dropdown">
      <a href="View.php" data-toggle="dropdown">Home</a>
      </li>
    <li class="dropdown">
     
      <a href="View.php" data-toggle="dropdown">New Registration</a>
    </li>
    <li class="dropdown">
     
      <a href="#" data-toggle="dropdown">Patients</a>
   </li>
    <li class="dropdown">
     
      <a href="#" data-toggle="dropdown">Doctors</a>
   </li>
    <li class="dropdown">
            <a href="#" data-toggle="dropdown">Users</a>
   </li>
   <li class="dropdown">
            <a href="#" data-toggle="dropdown">Profiles</a>
   </li>
   <li class="dropdown">
            <a href="#" data-toggle="dropdown">Reports</a>
   </li>
  </ul>
</div>
</div>
<div style="position:absolute; right:0px; width:100%; bottom:0px; ">
<table width=100% height=30>
      <td align="Right"   bgcolor="429c30"> <font size=4 face="Garamond" font color="white" >Powered By NoWhereElse</td>
	 	 
 </table>
 
 </div>
</body>
</html>
