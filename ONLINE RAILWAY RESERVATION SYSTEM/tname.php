<?php

error_reporting(0);
include("connect.php");
if (isset($_POST['submitted']))
{

$trainname=$_POST['trainname'];


$sql="SELECT `trainid`, `source`, `destn`, `dod` FROM `train` WHERE `trainname`='chennai exp'";
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
	font-weight: bold;
	color: #FF0000;
}
.style2 {font-weight: bold}
.style4 {color: #0000FF}
.style5 {
	font-weight: bold;
	color: #0000FF;
	font-size: 24px;
}
.style6 {font-size: 24px}
.style7 {font-size: 22px}
-->
    </style>
</head>
<body bgcolor="#009966">
<img src="train_logo.PNG" width="1200" height="200"><br><br><br>
<ul id="navmenu">
<li><a href="home.html"> HOME</a></li>
<li><a href="tcode.php">TRAIN ENQUIRY</a></li>
<li><a href="fare.php">FARE ENQUIRY</a></li>
<li><a href="reservation.php">RESERVATION</a></li>
<li><a href="cancel.php">CANCELLATION</a></li>

<li><a href="contactus.html">CONTACT US</a></li>
<br>
<br><br>
<form method="post" action="tname.php" >
<table width="1090" height="381" border="0">
  <tr>
    <th width="212" height="115" scope="col">&nbsp;</th>
    <th width="862" scope="col"><div align="center"><em><span class="style1">Train Enquiry</span></em></div></th>
  </tr>
  <tr>
    <th height="260" scope="row"><p class="style5">Search Train By:-</p>
        <p class="style2"><span class="style4"><span class="style6"><a href="tdate.php" title="date" target="_self">Date</a></span></span></p>
        <p class="style5"><a href="s&d.php" title="s&d" target="_self">Source & Destination</a></p>
            <p><span class="style6"><strong><span class="style4"><a href="tcode.php" title="tname" target="_self">Train Code </a></span></strong></span></p></th>
    <td><p align="center" class="style7">Train Name:- </p>
     
        <label>
        <div align="center">
          <input name="trainname" type="text" value="Enter Train Name" />
        </div>
        </label>
        <p align="center"> 
          <input type="submit" name="Submit" value="Submit" />
		  <input type="hidden" name="submitted" value="true"/>
        </p>
</form></td>
	 
  </tr>
</table>
<table align="center" border="1">
<tr>
<th><font color='Red'>trainid</font></th>
<th><font color='Red'>source</font></th>
<th><font color='Red'>destn</font></th>
<th><font color='Red'>dod</font></th>
</tr> 


 
<?php
while($rows = mysql_fetch_array($a,MYSQL_ASSOC))
{ 
$trainid=$rows['trainid'];
$source =$rows['source'];
$destn =$rows['destn'];
$dod=$rows['dod'];
?>
<tr>
 
<td><b><font color='#663300'><?php echo $trainid;?></font></b></td>
<td><b><font color='#663300'><?php echo $source;?></font></b></td>
<td><b><font color='#663300'><?php echo $destn;?></font></b></td>
<td><b><font color='#663300'><?php echo $dod;?></font></b></td>

</td>
</tr>
 
<?php } ?>
      <p>&nbsp;</p>
    </div></td>
  </tr>
</table>
</body>
</html>