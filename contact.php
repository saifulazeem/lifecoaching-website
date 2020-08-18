<!DOCTYPE html>
<html>
<head>
	<title>Contact US</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css">

<style>

.abs
{
   width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.Contact
{
  padding-left: 20px;
  padding-right: 20px;
  width: 80%;
  height:500px;
  background-color:white;
}



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
<body style="font-family:Verdana;">


	<div class="topnav" id="myTopnav">
	<a href="index.html" style="float: left;"><img src="images/logo.png" style="width: 160px; height: 100px; "></a>
  <a href="login.php">Login/SignUp</a>
  <a href="contact.php" class="active">Contact</a>
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

<div style="background-color:#f1f1f1;padding:15px;">
 <center><h1>Welcome to My Website</h1></center>
  <h3>Resize the browser window</h3>
</div>

<div style="overflow:auto">
  <div class="menu">
    <div class="menuitem"><form method="POST" action="search_results.php">
      <input style="height: 30px; width: 70%;  " type="text" name="search_bar" placeholder="Search Topic Here">
      <button  name="search_btn" style="height: 35px; cursor: pointer; ">GO</button>
    </form></div>
    <div class="menuitem">Topics</div>
    <div class="menuitem"><a href="Videos.php" style="text-decoration: none;">Videos</a></div>
    <!-- <div class="menuitem">Gallery</div> -->
  </div>

  <div class="main">
    <h2>CONTACT US</h2>
    <div class="Contact">

    <!-- <h1 style="float: left;">Contact Us:</h1>
      <br>
    <br>
    <br>
    <br> -->
 
<form method="post">
  <label for="input Name">Your Name</label><br>
  <input type="text" style="width: 100%;" name="c_user" placeholder="Please Enter your Name" required>
  <br>
    <label for="input Email">Your Email</label><br>
  <input class="abs" style="width: 100%;" type="Email" name="c_user_mail" placeholder="Please Enter your Email Address" required>
  <br>
  <label for="input Subject">Subject</label><br>
  <input type="text" style="width: 100%;" name="c_sub" placeholder="Please Enter your Subject" required>
  <br>
  <label for="input Message">Message</label><br>
  <textarea class="abs" style="width: 100%; height: 180px;" type="text" name="c_message" placeholder="Type Your Message Here" required></textarea>
  <br>
  <center><button type="submit" name="message_sub" >Send</button></center>


</form>

</div>

    
  </div>

  <!-- <div class="right">
    <h2>What?</h2>
    <p>Cinque Terre comprises five villages: Monterosso, Vernazza, Corniglia, Manarola, and Riomaggiore.</p>
    <h2>Where?</h2>
    <p>On the northwest cost of the Italian Riviera, north of the city La Spezia.</p>
    <h2>Price?</h2>
    <p>The Walk is free!</p>
  </div> -->
</div>
<br>

<div style="background-color:#333;text-align:center;padding:10px;margin-top:7px;font-size:12px;"> <p style="color: #f1f1f1;">Copyright ©2020 All rights reserved | lifecoachs.com</p></div>

</body>
</html>
<?php


include("connection.php");

if(isset($_POST["message_sub"]))
{
  $sender_name=mysqli_real_escape_string($con,$_POST["c_user"]);
  $sender_mail=mysqli_real_escape_string($con,$_POST["c_user_mail"]);
  $sender_subject=mysqli_real_escape_string($con,$_POST["c_sub"]);
  $sender_address=mysqli_real_escape_string($con,$_POST["c_message"]);


  $query=$con->prepare("INSERT INTO messages(sender_name,sender_mail,mail_subject,sender_message) VALUES(?,?,?,?)");

  $query->bind_param("ssss",$sender_name,$sender_mail,$sender_subject,$sender_address);
      $query->execute();
      $query->close();

      echo "Thanks $sender_name Your message has been sent Sucessfully";


}



?>