<!DOCTYPE html>
<html>
<head>
  <title>Watch</title>
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
  width: 70%;
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

<div style="background-color:#f1f1f1;padding:15px;">
  <h1>Cinque Terre</h1>
  <h3>Resize the browser window</h3>
</div>

<div style="overflow:auto">
  <div class="menu">
    <div class="menuitem"><form method="POST" action="search_results.php">
      <input style="height: 30px; width: 70%;  " type="text" name="search_bar" placeholder="Search Topic Here">
      <button  name="search_btn" style="height: 35px; cursor: pointer; ">GO</button>
    </form></div>
    <div class="menuitem">Topics</div>
    <div class="menuitem" ><a href="Videos.php" style="text-decoration: none;">Videos</a></div>
    <!-- <div class="menuitem">Gallery</div> -->
  </div>

  <div class="main">
    <!-- <h2>VIDEOS</h2> -->

<?php


include("connection.php");


if (isset($_GET["id"]) && isset($_GET["title"])) {

	$id=$_GET["id"];
	$title=$_GET["title"];
	$query=$con->prepare("SELECT video FROM videos WHERE id=?");
	$query->bind_param("s",$id);
      $query->execute();
      $result=$query->get_result();

       while($row=$result->fetch_assoc())
   {
       // $title= $row['title'];
       $video=$row["video"];
       $arr=explode(".", $video);
  	   $formate=$arr[1];
  	   // echo $formate;
       
    }

    if($formate=="mp4" || $formate=="avi")
    {

     echo "<h2>".$title."</h2>";

    echo "<video width='800' height='500' controls><source src='".$video."' type='video/webm'></video>";
    }
    else
    {
    	echo "<h2>".$title."</h2>";

    	echo "<audio controls>
  <source src='".$video."' type='audio/ogg'>
  <source src='".$video."' type='audio/mpeg'>
  Your browser does not support the audio element.
</audio><br><br><br><br><br><br>";
    }
    $query->close();

}





?>
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
