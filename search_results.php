<!DOCTYPE html>
<html>
<head>
  <title>Search Results</title>
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
  <a href="index.html">Home</a>
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
    </form>
   
  </div>
    <div class="menuitem">Topics</div>
    <div class="menuitem"><a href="Videos.php" style="text-decoration: none;">Videos</a></div>
    <!-- <div class="menuitem">Gallery</div> -->
  </div>

  <div class="main">
    <h2>SEARCH RESULTS</h2>

<?php
include("connection.php");

if (isset($_POST["search_btn"])) {
  # code...


  $search_text=mysqli_real_escape_string($con,$_POST["search_bar"]);



     $query=$con->prepare("SELECT * FROM videos WHERE title LIKE '%$search_text%'");

      // $query->bind_param();
      $query->execute();
      $result=$query->get_result();

      // $row=array();
      // $video=array();

       while($row=$result->fetch_assoc())

       {

        $id= $row['id'];
       $pdate = $row['pdate'];
       $auther = $row['auther'];
       $title = $row['title'];
       $video = $row['video'];




       ?>

      <div style="width: 30%; border:; border-radius: 10%; background-color:#f1f1f1; float: left;">
        <h3 style="padding-left: 8px;"><?php echo $title;  ?></h3>
 <a href='<?php echo "watch.php?id=$id && title=$title" ?>'><img src="images/motivational_image.jpg" style="width: 90%; border-radius: 10%; padding-left: 8px;" alt="My Videos"></a>

</div>

 <?php

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
