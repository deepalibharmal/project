
<?php
error_reporting(0);
session_start();
if(!session_is_registered(myusername)){
header("location:login.php");
}
?>

<html>
<head>
    <link href="main.css" rel="stylesheet" type="text/css" /></head>
<body bgcolor="#009966">
<h2 align="center"><font size="8pt"> LOGIN SUCCESSFUL</font><BR></h2>
<hr width="50%" align="center">
<br><br><br><br><br><br><br>
<div class="transbox">
<p class="ex2">
 <ul><li><font size="8pt">For further process click on</font> <a href="home.html"> <font face="Georgia, serif" size="10pt">HOME</font></a></li></ul></p></div>

</body>
</html>