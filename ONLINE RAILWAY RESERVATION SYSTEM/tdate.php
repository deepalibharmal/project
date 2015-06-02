<?php

error_reporting(0);
include("connect.php");
if (isset($_POST['submitted']))
{

$d=$_POST['d'];
$m=$_POST['m'];
$y=$_POST['y'];

$sql="SELECT `trainname`,`trainid`,`source`,`destn` FROM `train` WHERE dod='$y.$m.$d'";
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
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	color: #FF0000;
	font-weight: bold;
	font-style: italic;
}
.style2 {	font-size: 24px;
	color: #0000FF;
	font-style: italic;
}
.style3 {
    
	font-size: 24px;
	color: #FF6600;
	font-style: italic;
    
}
.style4 {
	color: #000000;
	font-size: 22px;
}
-->
</style>
</head>
<body bgcolor="#009966">
<img src="train_logo.PNG" width="1200" height="200"><br><br><br>
<ul id="navmenu">
<li><a href="home.html"> HOME</a>
</li>
<li><a href="te.php">TRAIN ENQUIRY</a>
</li>
<li><a href="fare.php">FARE ENQUIRY</a></li>
<li><a href="reservation.php">RESERVATION</a></li>
<li><a href="cancel.php">CANCELLATION</a></li>

<li><a href="contactus.html">CONTACT US</a></li>

<br>
<br><br>
<form method="post" action="tdate.php">
<table width="1090" height="381" border="0">
  <tr>
    <th width="212" height="115" scope="col">&nbsp;</th>
    <th width="862" scope="col"><div align="center"><span class="style1">Train Enquiry</span></div></th>
  </tr>
  <tr>
    <th height="260" scope="row"><p class="style2">Search Train By:-</p>
    <p class="style2"><a href="tdate.php" title="date" target="_self">Date</a></p>
    <p class="style2"><a href="s&d.php" title="s&d" target="_self">Source & Destination</a></p>
    <p class="style2"><a href="tcode.php" title="tname" target="_self">Train Code </a></p></th>
    <td><div align="center" class="style3">
      <p class="style4">Date:-</p>
      <p><select id='date' name="d">date:
	 <option value="" selected="selected">DATE</option>
	<option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
	  <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
	  <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>
	<select id='month' name="m">month:
	 <option value="" selected="selected">MONTH</option>
     <option value="1">January</option>
      <option value="2">February</option>
      <option value="3">March</option>
      <option value="4">April</option>
      <option value="5">May</option>
      <option value="6">June</option>
      <option value="7">July</option>
      <option value="8">August</option>
      <option value="9">September</option>
      <option value="10">October</option>
      <option value="11">November</option>
      <option value="12">December</option>
    </select> 
	<select id='year' name="y">year:
	 <option value="" selected="selected">YEAR</option>
     <option value="2014">2014</option>
      <option value="2">2015</option>
      <option value="3">2016</option>
    </select> </p>
        <label>
          <input type="submit" name="Submit" value="Submit" />
		  <input type="hidden" name="submitted"  value="true"/>
          </label>
      </form>
	  <table border="1" width="30%" height="30%"> 
<tr>
<th><font color='Red'>trainid</font></th>
<th><font color='Red'>train name</font></th>
<th><font color='Red'>source</font></th>
<th><font color='Red'>destination</font></th>
</tr> 


 
<?php
while($rows = mysql_fetch_array($a,MYSQL_ASSOC))
{ 
$trainid=$rows['trainid'];
$trainname =$rows['trainname'];
$source=$rows['source'];
$destn=$rows['destn'];
?>
<tr>
 
<td><b><font color='#663300'><?php echo $trainid;?></font></b></td>
<td><b><font color='#663300'><?php echo $trainname;?></font></b></td>
<td><b><font color='#663300'><?php echo $source;?></font></b></td>
<td><b><font color='#663300'><?php echo $destn;?></font></b></td>
</td>
</tr>
 
<?php } ?>
      <p>&nbsp;</p>
    </div></td>
  </tr>
</table>


</body>
</html>