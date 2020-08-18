<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
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

		<!-- <div>
		<header>
			<div class="navbar">
				<ul>
					<li><a href="front.php">HOME</a></li>
					<li><a href="#work">PROJECTS</a></li>
					<li><a href="user_about.php">ABOUT</a></li>
					<li><a href="user_contact.php">CONTACT</a></li>
				</ul>
			</div>
			
			
		</header>

	</div> -->
  <div class="topnav" id="myTopnav">
  <a href="index.html" style="float: left;"><img src="images/logo.png" style="width: 160px; height: 100px; "></a>
  <a style="" href="login.php" class="active">Login/SignUp</a>
  <a href="contact.php">Contact</a>
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
  <div  class="imgcontainer">
    <img src="images/logimg.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <center>

    <label for="uname"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="uname" required>
    <br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br>
    <br>
    <button type="submit" name="login">Login</button>
    <p>New Member <a href="registration.php">Signup</a> here</p>


      </center>
  </div>

</form>
</div>
</center>
<div style="background-color:#333;text-align:center;padding:10px;margin-top:7px;font-size:12px;"> <p style="color: #f1f1f1;">Copyright ©2020 All rights reserved | lifecoachs.com</p></div>
</body>
</html>




<?php

if (isset($_POST["login"]))
{
    $user=mysqli_real_escape_string($con,$_POST["uname"]);
    $pass=mysqli_real_escape_string($con,$_POST["psw"]);

    $query=$con->prepare("SELECT * FROM user WHERE  email=? AND password=?");

      $query->bind_param("ss",$user,$pass);
      $query->execute();
      $result=$query->get_result();

      if ($result->num_rows===0)
      
        exit('<h1 style="background:black; position:absolute;top:5px;right:10px; border:red ; border-style:outset ;color:red">No user exists</h1>');


      
    while($row=$result->fetch_assoc())
   {
       $id= $row['id'];
       $uname_db = $row['email'];
       $password_db = $row['password'];
    }
    
    $query->close();


    if ($uname_db=="saif@saif.com") {
      # code...
    
  
    session_start();

    $_SESSION['loged_user']=$uname_db;

    echo '<script language=javascript>';
    echo 'alert("Sucessfuly loged in '.$_SESSION['loged_user'].' ")';
    echo '</script>';


      header("location:admin_homes.php");

    }
    else{

      session_start();

    $_SESSION['loged_user']=$uname_db;

    echo '<script language=javascript>';
    echo 'alert("Sucessfuly loged in '.$_SESSION['loged_user'].' ")';
    echo '</script>';


      header("location:users_home.php");

    }

  }


?>