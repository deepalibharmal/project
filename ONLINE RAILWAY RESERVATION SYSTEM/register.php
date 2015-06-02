<?php

error_reporting(0);
if (isset($_POST['submitted']))
{
	include("connect.php");
	
$state=$_POST['state'];	
$firstname=$_POST['firstname'];
$address=$_POST['address'];
$zipcode=$_POST['zipcode'];
$username=$_POST['username'];
$city=$_POST['city'];
$password=$_POST['password'];
if (isset($_POST['gender']))
{
$gender=$_POST['gender'];
}
$d=$_POST['d'];
$m=$_POST['m'];
$y=$_POST['y'];

$enc_password=md5($password);

      $sqlinsert="INSERT INTO user( username, password, address, state, city, pincode, gender, dob ) VALUES ( '$username',  '$enc_password', '$address ', '$state', '$city', '$zipcode', '$gender', '$y.$m.$d' )";
	  mysql_query($sqlinsert) or die("unable to insert");
	  
	  $insert="one entry added successfuly";
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
<img src="train_logo.PNG" width="1200" height="200">
<br><br><br>
<ul id="navmenu">
<li><a href="home.html"> HOME</a></li>
<li><a href="te.php">TRAIN ENQUIRY</a></li>
<li><a href="fare.php">FARE ENQUIRY</a></li>
<li><a href="reservation.php">RESERVATION</a></li>
<li><a href="cancel.php">CANCELLATION</a></li>

<li><a href="contactus.html">CONTACT US</a></li>

<br>
<br><br>
<script type='text/javascript'> 
function formValidator(helperMsg)
{ // Make quick references to our fields 
 var username = document.getElementById('username'); 
 var addr = document.getElementById('addr'); 
 var zip = document.getElementById('zip');
 var city = document.getElementById('city'); 
 var state = document.getElementById('state'); 
 var password = document.getElementById('password'); 
 var email = document.getElementById('email');
 var date = document.getElementById('date');
 var month = document.getElementById('month');
 var year = document.getElementById('year');
 var Female = document.getElementById("Female");
 var Male = document.getElementById("Male");
 var credit = document.getElementById('cr');
// Check each input in the order that it appears in the form!
 if(isAlphabet(username, "Please enter only letters for your name..")){
  if(lengthRestriction(password, 6, 8)){
   if(check(Female,Male,"Please choose your Gender.."))
   if(madeSelectionDOB(date,month,year, "Please Choose a Date Of Birth.."))
   if(isAlphanumeric(addr, "Please enter only Numbers and Letters for Address..")){
    if(madeSelection1(city, "Please Choose a City from the options..")){
    if(isNumeric(zip, "Please enter a valid numeric PIN code..")){
     if(madeSelection(state, "Please Choose a State from the options..")){
	  if(emailValidator(email, "Please enter a valid email address..")) {
         if(lengthRestrictioncr(credit, 16, 16)){
	    window.alert(helperMsg); 
		return true; 
	  } } } } } } }}
  return false; 
} 

function check(elem1,elem2,helperMsg)
{
 if((elem1.checked) || (elem2.checked))
 return true;
 else
 {
  window.alert(helperMsg);
  return false;
 }
}

function isNumeric(elem, helperMsg){
 var numericExpression = /^[0-9]+$/; 
 if(elem.value.match(numericExpression)){
  return true; }else{ window.alert(helperMsg);
   elem.focus(); return false;  } } 





function isAlphabet(elem, helperMsg){
 var alphaExp = /^[a-zA-Z]+$/; 
 if(elem.value.match(alphaExp)){
	return true; }
	else{ window.alert(helperMsg);
	 elem.focus();
	 elem.select(); return false; } } 

function isAlphanumeric(elem, helperMsg){
 var alphaExp = /^[0-9a-zA-Z]+$/;
  if(elem.value.match(alphaExp)){
   return true; }
   else
  { window.alert(helperMsg); return false; } } 

function lengthRestriction(elem, min, max){
 var uInput = elem.value; if(uInput.length >= min && uInput.length <= max){ return true; }else{ window.alert("Please enter between " +min+ " and " +max+ " characters"); elem.focus(); return false; } } 
function lengthRestrictioncr(elem, min, max){
    var uInput = elem.value; if(uInput.length >= min && uInput.length <= max){ return true; }else{ window.alert("Please enter a 16 digit  credit card number"); elem.focus(); return false; } }

function madeSelection(elem, helperMsg){ if(elem.value == "CHOOSE YOUR STATE"){ alert(helperMsg); elem.focus(); return false; }else{ return true; } } 
function emailValidator(elem, helperMsg){ var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; if(elem.value.match(emailExp)){ return true; }else{ alert(helperMsg); elem.focus(); return false; } } 
function madeSelection1(elem, helperMsg){ if(elem.value == "CHOOSE YOUR CITY"){ alert(helperMsg); elem.focus(); return false; }else{ return true; } } 
function madeSelectionDOB(elem1, elem2, elem3, helperMsg)
 { 
  if(elem1.value == "")
  { 
   if(elem2.value== "")
   {
    if(elem3.value== "")
	{
     alert(helperMsg); 
     return false; 
	}
   }
  }
  else
  { 
   return true; 
  } 
 } 
 </script>
<br><br><br>
<form method="post" onsubmit='return formValidator(&quot;Successful Registration!!&quot;)'  action="reg.php"><table border="5" align="center" width=100%><tr bgcolor="#78AB46 " ><td align="center"><h1 align="center">
<font face="Georgia, Times New Roman, Times, serif">REGISTRATION</font>
</h1>
<input type="hidden" name="submitted"  value="true"/>
</td></tr><tr bgcolor=" #009999"><td><table cellpadding="10" cellspacing="10">
<tr><td width="173"><b>USER NAME:</b></td> 
<td width="167"><input type="text" id='username' name="username" /></td><td><font  color="#FFCC00"><b>*Only Alphabets</b></font></td></tr>
<tr>
  <td><b>PASSWORD:</b></td>
  <td> <input name="password" type='password' id='password' /></td>
  <td><font  color="#FFCC00"><b>*6 to 8 Characters only</b></font></td></tr>
<tr>
  <td><b>GENDER:</b> </td>
  <td><p>
  <label>
  <input type="radio" name="gender" id="Female" value="Female"  />
    FEMALE</label>
  <label>
  <input type="radio" name="gender" id="Male" value="Male"/>
    MALE</label>
  <br />
</p></td></tr>
<tr>
  <td><b>DATE OF BIRTH:</b></td>
  <td><select id='date' name="d">date:
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
     <option value="1994">1994</option>
      <option value="1993">1993</option>
      <option value="1992">1992</option>
      <option value="1991">1991</option>
      <option value="1990">1990</option>
      <option value="1989">1989</option>
      <option value="1988">1988</option>
      <option value="1987">1987</option>
      <option value="1987">1986</option>
      <option value="1985">1985</option>
      <option value="1984">1984</option>
      <option value="1983">1983</option>
	  <option value="1982">1982</option>
	  <option value="14">1981</option>
	  <option value="15">1980</option>
	  <option value="16">1979</option>
	  <option value="17">1978</option>
	  <option value="18">1976</option>
	  <option value="19">1975</option>
	  <option value="20">1974</option>
	  <option value="21">1973</option>
	  <option value="22">1972</option>
	  <option value="23">1971</option>
	  <option value="24">1970</option>
	  <option value="25">1969</option>
	  <option value="26">1968</option>
	  <option value="27">1967</option>
	  <option value="28">1966</option>
	  <option value="29">1965</option>
	  <option value="30">1964</option>
	  <option value="31">1963</option>
	  <option value="32">1962</option>
	  <option value="33">1961</option>
	  <option value="34">1960</option>
	  <option value="35">1959</option>
	  <option value="36">1958</option>
	  <option value="37">1957</option>
	  <option value="38">1956</option>
	  <option value="39">1955</option>
	  <option value="40">1954</option>
	  <option value="41">1953</option>
	  <option value="42">1952</option>
	  <option value="43">1951</option>
	  <option value="44">1950</option>
	  <option value="45">1949</option>
	  <option value="46">1948</option>
	  <option value="47">1947</option>
    </select> </td></tr>
 <tr>
   <td> <b>ADDRESS:</b> </td>
   <td><input name="address" type="text" id="addr" value="

" size="45" /></td><td><font  color="#FFCC00"><b>*Only Alphabets and Letters</b></font></td>
 </tr>
 <tr>
  <td><b>CITY:</b> </td>
  <td><select id='city' name="city">
    <option>CHOOSE YOUR CITY</option>
	<option>Ahmedabad</option>
	<option>Bhuj</option>
	<option>Chennai</option> 
	<option>Hyderabad</option>
	<option>Jammu</option>
	<option>Mumbai</option>
	<option>New Delhi</option>
	<option>Old Goa</option> 
    <option>Pune</option>
	<option>Puducherry</option>
    <option>Sri Nagar</option>
    <option>Hyderabad</option>
    <option>Kolkata</option>
    <option>Vishakhapatnam</option>
  </select></td></tr>
<tr>
  <td><b>PIN CODE:</b> </td>
  <td><input type='text' id='zip' name="zipcode" /> </td> </tr>
<tr>
  <td height="49"><b>STATE:</b></td>
  <td> <select id='state' name="state">
<option>CHOOSE YOUR STATE</option><option>Andhra Pradesh</option><option>Goa</option><option>Gujarat</option><option>Jammu and Kashmir</option><option>Kerala</option> <option>Maharashtra</option> <option>Tamil Nadu</option>
</select></td></tr>
<tr> <td><b>EMAIL ID :</b></td>
  <td> <input type='text' id='email'  name="email"/></td></tr>
<tr> <td><b>CREDIT CARD NO:</b></td>
    <td> <input type="text" id='cr' name="creditno" /></td></tr>
<tr> <td><input type="submit" value='SUBMIT'  name="submit"/></td></tr>
</table></td></tr></form>


  <?php

echo $insert;


 ?>


</body>
</html>