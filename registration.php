<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- <link rel="stylesheet" type="text/css" href="css/navbar.css"> -->

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
  .topnav {
  overflow: hidden;
  background-color: #f1f1f1;
}

.topnav a {
  float: right;
  display: block;
  color: #333;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}



--------------

* {
  box-sizing: border-box;
}
.menu {
  float: left;
  width: 20%;
}
.menuitem {
  padding: 8px;
  margin-top: 7px;
  border-bottom: 1px solid #f1f1f1;
}
.main {
  float: left;
  width: 60%;
  padding: 0 20px;
  overflow: hidden;
}
.right {
  background-color: lightblue;
  float: left;
  width: 20%;
  padding: 10px 15px;
  margin-top: 7px;
}

@media only screen and (max-width:800px) {
  /* For tablets: */
  .main {
    width: 100%;
    padding: 0;
  }
  .right {
    width: 100%;
  }
}
@media only screen and (max-width:500px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width: 100%;
  }
}
</style>




</head>

<?php


include("connection.php");

?>

<style>


.Contact
{
	padding-left: 20px;
	padding-right: 20px;
	width: 50%;
	height:500px;
	background-color:white;
}

</style>


<body style="font-family:Verdana;">
	<div class="topnav" id="myTopnav">
    <img src="images/logo.png" style="width: 180px; height: 100px; ">
  <a style="" href="registration.php" class="active">Login/SignUp</a>
  <a href="#contact">Contact</a>
  <a href="#services">Services</a>
  <a href="index.html" >Home</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


<center>
 <div class="Contazct"> 
<form action="login.php" method="POST">
  <!-- <div  class="imgcontainer">
    <img src="images/logimg.png" alt="Avatar" class="avatar">
  </div> -->

  <div class="container">
    <center>

    <label for="fname"><b>Full Name</b></label><br>
    <input type="text" placeholder="Enter Your Full Name" name="fname" required>
    <br>	

    <label for="uname"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="uname" required>
    <br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br>
    <label for="cpsw"><b>Confirm Password</b></label><br>
    <input type="password" placeholder="Confirm Password" name="cpsw" required>
    <br>
    <br>
    <button type="submit" name="signup">Signup</button>
    <p>Already Member <a href="login.php">Login</a> here</p>


      </center>
  </div>

</form>
</div>
</center>

<div style="background-color:#333;text-align:center;padding:10px;margin-top:7px;font-size:12px;"> <p style="color: #f1f1f1;">Copyright ©2020 All rights reserved | lifecoachs.com</p></div>

</body>
</html>