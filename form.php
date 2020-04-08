<?php
session_start();
$_SESSION['capnum'] = ((isset($_SESSION['capnum'])) ? $_SESSION['capnum'] : 0);
if(isset($_GET['add'])){
     $_SESSION['capnum']++;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>form</title>
</head>
<style>
	h1{
font-size: 40px;
font-style: italic;
color: white;
align: center;
}
html {
  background: url(background.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
	input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
	
input[type=submit] {
	align-items: left;
    width: 50%;
    background-color: firebrick;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: maroon;
}
	
input[type=refresh] {
	align-items: right;
    width: 50%;
    background-color: firebrick;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=refresh]:hover {
    background-color: maroon;
}
	div{
		
		align-items: center;
		background: #FBF9F9;
		margin-left: 70px;
		margin-right: 70px;
		margin-top: 100px;
		
	}
	

</style>	
<div class=w3->
<form action="action_page.php" method="post" >
  
 
<fieldset align>
<br>
<legend style="font-size:30px;"  align="left">form</legend>
   First name:<br>
  <input type="text" onfocus="this.value=''" name="firstname" required>
  <br>
  <br>

  Last name:<br>
  <input type="text" onfocus="this.value=''" name="lastname" required>
  <br>
  <br>

  age:<br>
  <input type="text" onfocus="this.value=''" name="age" required>
  <br>
  <br>

  gender:
  <br>
 <input type="radio" name="gender" value="male" > Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other<br>  
  <br>
  <br>

  adddress:<br>
  <input style="height:150px;" onfocus="this.value=''" type="text" name="address" >
  <br>
  <br>

  prescribing doctor:<br>
  <input type="text" onfocus="this.value=''" name="doctor">
  <br>
  <br>

  date of 1st visit:<br>
  <input type="text" onfocus="this.value=''" name="date">
  <br>
  <br>

  clincal note of the case:<br>
  <input style="height:150px;" onfocus="this.value=''" type="text" name="summary">
  <br>
  <br>

  provisional diagnostics:<br>
  <input style="height:150px;" onfocus="this.value=''" type="text" name="diagnostics">
  <br>
  <br>

  Treatment advised with report:<br>
  <input style="height:150px;" onfocus="this.value=''" type="text" name="investigation">
  <br>
  <br>

  diagnosis after investigation:<br>
  <input style="height:150px;" onfocus="this.value=''" type="text" name="report">
  <br>
  <br>

  advice:<br>
  <input style="height:150px;" onfocus="this.value=''" type="text" name="advice">
  <br>
  <br>

  observation:<br>
  <input style="height:150px;" onfocus="this.value=''" type="text" name="observation">
  <br>
  <br>

  follow up:<br>
  <input style="height:150px;" onfocus="this.value=''" type="text" name="followup">
  <br>
  <br>

  <br>
  <input align="center" type="submit" name="submit" value="Submit" onclick="<?php $_SESSION['capnum']=$_SESSION['capnum']+1;?>" >
  <input align="center" type="refresh" name="refresh" value="refresh">

</fieldset>
</form> 
<div>

</html>







<!--
<input name="fname" type="text" ></input>
<input name="sname" type="text" ></input>
-->

