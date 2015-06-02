<html>
<head>
<title>Railway Homepage</title>
    <link href="main.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="#009966 ">
<img  src="train_logo.PNG" width="1200" height="200"><br><br><br>
<ul id="navmenu">
<li><a href="home.html"> HOME</a>
</li>
<li><a href="te.php">TRAIN ENQUIRY</a>
</li>
<li><a href="fare.php">FARE ENQUIRY</a></li>
<li><a href="reservation.php">RESERVATION</a></li>
<li><a href="cancel.php">CANCELLATTION</a></li>

<li><a href="contactus.html">CONTACT US</a></li></ul>
<br>
<br><br>
<script type='text/javascript'> 
function formValidator(helperMsg)
{ // Make quick references to our fields 
 var username = document.getElementById('username'); 
 var tname = document.getElementById('tname');
 var seat = document.getElementById('seat');
 var stype=document.getElementById('stype');
   var cr = document.getElementById('cr');
// Check each input in the order that it appears in the form!
 if(isAlphabet(username, "Please enter only letters for your name..")){
	  if(madeSelectiont(tname, "Please Choose train name from the options..")){

if(madeSelections(stype, "Please Choose seat type from the options..")){
if(madeSelectionns(seat, "Please Choose no. of seats from the options..")){
if(lengthRestrictioncr(cr,10,10)){
	    
		return true; 
	  } } } } }
  return false; 
} 

function isAlphabet(elem, helperMsg)
{
 var alphaExp = /^[a-zA-Z]+$/; 
 if(elem.value.match(alphaExp))
 {
	return true; 
 }
	else
	{ 
	 window.alert(helperMsg);
	 elem.focus();
	 elem.select(); return false;
    }
} 

 function lengthRestrictioncr(elem, min, max){
     var uInput = elem.value; if(uInput.length >= min && uInput.length <= max){ return true; }else{ window.alert("Please enter a 10 digit  credit card number"); elem.focus(); return false; } }

function madeSelectiont(elem, helperMsg){ if(elem.value == "CHOOSE YOUR TRAIN"){ alert(helperMsg); elem.focus(); return false; }else{ return true; } } 
 
function madeSelections(elem, helperMsg){ if(elem.value == "CHOOSE SEAT TYPE"){ alert(helperMsg); elem.focus(); return false; }else{ return true; } } 
 
 function madeSelectionns(elem, helperMsg){ if(elem.value == "CHOOSE NO. OF SEATS"){ alert(helperMsg); elem.focus(); return false; }else{ return true; } } 
 
 </script>
<br><br><br>
<form method="post" onsubmit='return formValidator("Successful Reservation!!")'   action="reservation.php">


<?php

error_reporting(0);
if (isset($_POST['submitted']))
{
	include("connect.php");
$username=$_POST['username'];
$tname=$_POST['tname'];
$stype=$_POST['stype'];
$seat=$_POST['seat'];
$cr=$_POST['cr'];
$pnr=rand(1000000000,9999999999);
$sql="SELECT * FROM user WHERE username='$username' and creditno='$cr'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);


if($count==1){
      $sqlinsert="INSERT INTO ticket( pnr, trainname, username, class, seats ) VALUES ( '$pnr', '$tname',  '$username', '$stype ', '$seat' )";
	  mysql_query($sqlinsert) or die("unable to insert");
      $insert="";
	  echo "<font face='Georgia, serif' size='5pt'>  YOUR TICKET HAS BEEN RESERVED!!! </font>";
      echo "<font face='Georgia, serif' size='5pt'>YOUR PNR NO. IS:$pnr</font>";
	  
	  
}
else
{
echo '
        <script type="text/javascript">
            alert("CREDIT CARD NO. DOES NOT MATCH WITH THE ONE ENTERED AT THE TIME OF REGISTRATION"); 
            window.location.href = "reservation.php";</script>'; 
}
}
?>


<table border="5" align="center" width=100%><tr bgcolor="#78AB46" ><td align="center"><h1 align="center">
<font face="Georgia, Times New Roman, Times, serif">RESERVATION</font>
</h1>
</td></tr><tr bgcolor="#009999"><td><table cellpadding="10" cellspacing="10">
<tr><td width="173"><b>USER NAME:</b></td> 
<td width="167"><input type='text' id='username' name="username"/></td><td><font  color="#FFCC00"><b>*Only Alphabets</b></font></td></tr>

 <td><b> TRAIN NAME</b> </td>
  <td><select id='tname' name="tname">
    <option>CHOOSE YOUR TRAIN</option>
    <option>DEHRADHUN EXPRESS</option>
    <option>CHENNAI EXPRESS</option>
    <option>KOLKATA RAJDHANI</option>
    <option>KOLKATA-CHENNAI EXPRESS</option>
    <option>CHENNAI RAJDHANI</option>
  </select></td></tr>

 <td><b> SEAT TYPE</b> </td>
  <td><select id='stype' name="stype">
    <option>CHOOSE SEAT TYPE </option>
	<option>A/C CLASS</option>
	<option>FIRST CLASS</option>
	<option>SECOND CLASS</option> 

  </select></td></tr>
  <td><b> NUMBER OF SEATS</b> </td>
  <td><select id='seat' name="seat">
      <option>CHOOSE NO. OF SEATS </option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      
  </select></td></tr>

<tr> <td><b>CREDIT CARD NO:</b></td>
    <td> <input type='text' id='cr' name="cr"/></td></tr>

<tr> <td><input type='submit' value='SUBMIT'/>
	  <input type="hidden" name="submitted"  value="true"/></td></tr>
</table></td></tr></form>
 <?php

echo $insert;


 ?>



</body>
</html>