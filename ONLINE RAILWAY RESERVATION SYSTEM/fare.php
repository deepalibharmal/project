<?php

error_reporting(0);
include("connect.php");
if (isset($_POST['submitted']))
{

$value=$_POST['value'];

$sql="SELECT `trainname`, `source`,`destn`, `1stfare`, `2ndfare`, `acfare` FROM `train` WHERE value='$value'";
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
<img src="train_logo.PNG" width="1200" height="200"><br><br><br>
<ul id="navmenu">
<li><a href="home.html"> HOME</a>
</li>
<li><a href="te.php">TRAIN ENQUIRY</a>
</li>
<li><a href="fare.php">FARE ENQUIRY</a></li>
<li><a href="reservation.php">RESERVATION</a></li>
<li><a href="cancel.php">CANCELLATTION</a></li>

<li><a href="contactus.html">CONTACT US</a></li>

<br><br><br>
<br><br><br>
<table cellspacing="15">
<tr><td><img src="images1/enquiry2.jpg" width="400" height="206"/></td>
<td>
<form method="post" action="fare.php">
<table border="1" align="center" height="200" width="250">
<tr bgcolor="#78AB46" ><td align="center"><font face="Georgia, Times New Roman, Times, serif">FARE ENQUIRY</font></td></tr>
<tr><td bgcolor="#009999" align="center">
  
  <select id='value' name="value">
  <option value="" selected="selected">TRAIN TYPE</option>
  <option value="1">Ordinary</option>
  <option value="2">Express</option>
  <option value="3">Rajdhani</option>
  <option value="4">Jan Shatabdi</option>
  <option value="5">Shatabdi</option>
  </select></td></tr>
  <tr><td><label>
          <input type="submit" name="Submit" value="Submit" />
		  <input type="hidden" name="submitted"  value="true"/>
          </label></td></tr>
</form>
</table>
</td>
<td><img src="images1/enquiry3.jpg" width="350" height="206"/></td>
</tr></table>
	  
	  
	  
<table border="1" width="30%" height="30%" align="center"> 
<tr>
<th><font color='Red'>TRAIN NAME</font></th>
<th><font color='Red'>SOURCE</font></th>
<th><font color='Red'>DESTINATION</font></th>
<th><font color='Red'>1ST CLASS FARE</font></th>
<th><font color='Red'>2ND CLASS FARE</font></th>
<th><font color='Red'>3RD CLASS FARE</font></th>
</tr> 


 
<?php
while($rows = mysql_fetch_array($a,MYSQL_ASSOC))
{ 
$trainname =$rows['trainname'];
$source=$rows['source'];
$destn=$rows['destn'];
$farea=$rows['1stfare'];
$fareb=$rows['2ndfare'];
$farec=$rows['acfare'];
?>

<tr> 
<td><b><font color='#663300'><?php echo $trainname;?></font></b></td>
<td><b><font color='#663300'><?php echo $source;?></font></b></td>
<td><b><font color='#663300'><?php echo $destn;?></font></b></td>
<td><b><font color='#663300'><?php echo $farea;?></font></b></td>
<td><b><font color='#663300'><?php echo $fareb;?></font></b></td>
<td><b><font color='#663300'><?php echo $farec;?></font></b></td>
</tr>
 
<?php } ?>
  

</table>

</body>
</html>
