<?php

error_reporting(0);
include("connect.php");
if (isset($_POST['Submit']))
{

$value=$_POST['pnr'];
$sql="DELETE FROM ticket WHERE pnr='$value'";
$a=mysql_query($sql) or die("unable to fetch data");
}
?>
<html>
<head>
<title>Railway Homepage</title>
    <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
    <link href="main.css" rel="stylesheet" type="text/css" />

</head>
<body>


<script type='text/javascript'> 
function formValidator(helperMsg)
{ // Make quick references to our fields 
 var username = document.getElementById('username'); 
var pnr = document.getElementById('pnr');
// Check each input in the order that it appears in the form!
 if(isAlphabet(username, "Please enter only letters for your name..")){
 if(lengthRestrictionpnr(pnr, 10, 10)){
	    window.alert(helperMsg); 
	
		return true; 
	  } }
  return false; 
} 



function isAlphabet(elem, helperMsg){
 var alphaExp = /^[a-zA-Z]+$/; 
 if(elem.value.match(alphaExp)){
	return true; }
	else{ window.alert(helperMsg);
	 elem.focus();
	 elem.select(); return false; } } 


function lengthRestrictionpnr(elem, min, max){
 var uInput = elem.value; if(uInput.length >= min && uInput.length <= max){ return true; }else{ window.alert("Please enter between " +min+ " and " +max+ " characters"); elem.focus(); return false; } } 
 




 </script>





<img src="train_logo.PNG" width="1200" height="200"><br><br><br>
<ul id="navmenu">
<li><a href="home.html"> HOME</a>
</li>
<li><a href="te.php">TRAIN ENQUIRY</a>
</li>
<li><a href="fare.php">FARE ENQUIRY</a></li>
<li><a href="reservation.php">RESERVATION</a></li>
<li><a href="cancel.php">CANCELLATION</a></li>

<li><a href="contactus.html">CONTACT US</a></li></ul>

<br><br><br>
<br><br><br>
<table>
<tr><td><img src="images1/enquiry2.jpg" width="400" height="206"/></td>
<td>

<form method="post" onsubmit='return formValidator("Amount will be credited in your credit card within 24 hours")'  action="cancel.php"><table border="5" align="center" width=100%><tr bgcolor="#78AB46 " ><td align="center"><h1 align="center">
<font face="Georgia, Times New Roman, Times, serif">CANCELLATION</font>
</h1>
</td></tr>

<tr bgcolor=" #009999"><td><table cellpadding="10" cellspacing="10">
<tr><td width="173"><b>USER NAME:</b></td> 
<td width="167"><input type="text" id='username' name="username" /></td><td><font  color="#FFCC00"><b>*Only Alphabets</b></font></td></tr>

<tr> <td><b>PNR NO:</b></td>
    <td> <input type="text" id='pnr' name="pnr" /></td></tr>
<tr> <td> <input type="submit" name="Submit" value="Submit" />
</td></tr><tr> <td> <label><input type="hidden" name="submitted"  value="true"/></label></td></tr>
</table></td></tr>
</form></table>
</td>
<td><img src="images1/enquiry3.jpg" width="350" height="206"/></td>
</tr>
 

</table>

</body>
</html>
