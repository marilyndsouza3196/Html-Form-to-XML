<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HEALTH cLOUD</title>
<!--<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />-->
<link rel="stylesheet" href="w3.css">
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
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
input[type=text]:focus {
    width: 100%;
	
	.mySlides {display:none;}
}
	input[type=submit]{
		padding: 40px;
		
background-color: #FFFFFF;
		
		
		
	}

}
</style>

<body>

<!--<nav class="w3-sidenav w3-white w3-card" style="width:10%">
  <br>
	<a href="test.php" style="font-family:Karma,sans-serif;padding:20px">Home</a></li>
    
    <a href="review.php"style="font-family:Karma,sans-serif;padding:20px">review</a></li>
    <a href="property.php"style="font-family:Karma,sans-serif;padding:20px">property</a></li>
	<a href="about_us.php"style="font-family:Karma,sans-serif;padding:20px">about_us</a></li>

</nav>-->
<!--
<nav>
<div class="w3-top">
 <ul class="w3-navbar w3-theme-d2 w3-blue-grey w3-left-align">
 <li><a href="#" class="w3-teal"><i class="fa fa-home w3-margin-right"></i>Logo</a></li>
  <li class="w3-hide-small"><a href="form.php" class="w3-hover-white">make EHR</a></li>
  <li class="w3-hide-small"><a href="" class="w3-hover-white">Store EHR</a> </li>
  <li class="w3-hide-small"><a href="" class="w3-hover-white">send</a></li>
  <li class="w3-hide-small"><a href="" class="w3-hover-white">about us</a></li>
 <!-- <li class="w3-hide-small w3-right"> <?php echo $userRow['userEmail']; ?><a href="logout.php?logout" class="w3-hover-orange" title="login">sign out</a></li>-->
 </ul>
</nav>
<br>
<br>
<div class="w3-ontainer" style="margin-left:10%">
<div>
<h1 align= "center">WElcome to HEALTH cLOUD!!</h1>
</div>
<br>
<div  class="w3-panel ">
<table style="margin-left:40%;margin-right:20%">
<tr>
<td>
<button type="submit"  class="w3-btn w3-hover-teal" name="buyer" onclick="window.location.href='form.php'">make EHR</button>
</td>
<td >
<button type="submit"   class="w3-btn w3-hover-teal" name="seller" onclick="window.location.href='upload.html'">Upload EHR</button>
</td>
</tr>
</table>

<!--<form align="center" name="searchtab" >
  <input type="text" autocomplete="off"  name="search" placeholder="Search.." >
</form><!--style ="display:none"-->
</div>
</div>

<div class="w3-panel w3-white" style="margin-left:15%;margin-right:10%">
<!--<H2 align="center"> WElcome folks </H2>-->
<div class="w3-panel w3-leftbar w3-sand w3-large w3-serif">
    <p><i>"How this works"</i></p>
    <h4> This site is a connectivity between you and the cloud storage which helps you store your ELEctronic HEalth REcords or EHR's in your cloud Storage.You can create, modify  store and share your precious health records in the cloud storage  mintained for you users 
  </div>

</div>

<!--<div class="w3-content  w3-section " style="max-width:500px;">
  <img class="mySlides" src="slide1.jpg" style="width:150%;height:250px">
  <img class="mySlides" src="slide2.jpg" style="width:150%;height:250px">
  <img class="mySlides" src="slide3.jpg" style="width:150%;height:250px">
</div>-->
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds	
	
function myFunction1() 
{
	window.open("seller.php");
	
	
}
	
}
</script>
<!--
<footer class=" w3-row-padding w3-padding-32">
    <div class="w3-panel w3-black w3-third w3-center">
      <h3></h3>
      <p> All rights reserved</p>
      <p>Powered by marilyn@74</p>
    </div>
-->
<!--
<div class="w3-container w3-text-white w3-black">
  <p>Powered by marilyn@74</p>
</div>-->
</body>
</html>



</body>
</html>
