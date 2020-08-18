<?php

session_start();

if (isset($_SESSION["loged_user"]))
 {
  $val=$_SESSION["loged_user"];
}
else
{
  header("location:login.php");
}
if(isset($_GET["logout"]))
{
  session_destroy();
  header("location:login.php");
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
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
	<a href="index.html" style="float: left;"><img src="images/logo.png" style="width: 160px; height: 100px; "></a>
  <a href="logout.php">Logout</a>
  <a href="contact.php">Contact</a>
  <a href="#services">Services</a>
  <a href="#index.html" class="active">Home</a>
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
    <div class="menuitem">Controls</div>
    <div class="menuitem">Verify Payments</div>
    <div class="menuitem"><a href="Videos.php" style="text-decoration: none;">Videos</a></div>
    <!-- <div class="menuitem">Gallery</div> -->
  </div>

  <div class="main">
    <h2>Upload Videos</h2>

    

   <div class="Contazct"> 
<form action="admin_homes.php" method="POST" enctype="multipart/form-data">
  <!-- <div  class="imgcontainer">
    <img src="images/logimg.png" alt="Avatar" class="avatar">
  </div> -->

  <div class="container">
    

    <label for="fname"><b>Title</b></label><br>
    <input type="text" placeholder="Enter Video TITLE Here" name="u_title" required>
    <br>  
    <br>


    <label for="video"><b>Video</b></label>
    <br>
    <br>
    <input type="file" name="pic_upload" id="pic_upload">
    <br>
    <br>
    <button type="submit" name="u_publish">Upload</button>
    


      
  </div>

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
if (isset($_POST["u_publish"]))
 {
  $target_dir="images/";
  $target_file= $target_dir.basename($_FILES["pic_upload"]["name"]);
  $uploadok=1;
  $imagefile_type= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // $check=getimagesize($_FILES["pic_upload"]["tmp_name"]);
  // if($check!= false)
  // {
  //   echo "File is An Image";
  //   $uploadok=1;
  // }
  // else
  // {
  //   echo "File is not An Image";
  //   $uploadok=0;
  // }
  if (file_exists($target_file))
   {
    echo "File name already Exist";
    $uploadok=0;
   }
   if ($_FILES["pic_upload"]["size"]>5000000000)
    {
    echo "Your File size is to Large";
    $uploadok=0;
   }
   if ($imagefile_type!="mp4" && $imagefile_type!="avi" && $imagefile_type!="mp3" )
    {
    echo "File Type not Supported only jpg png and jpeg file are allowed";
    $uploadok=0;
    }
    if ($uploadok!=0)
     {
      if (move_uploaded_file($_FILES["pic_upload"]["tmp_name"], $target_file))
       {
        $upic=$_FILES["pic_upload"]["name"];

        echo "Your Video".$upic."Is Uploaded Sucessfully";  

        $title=mysqli_real_escape_string($con,$_POST["u_title"]);
        // $content=mysqli_real_escape_string($con,$_POST["u_content"]);

        $pdate=date("d/m/y");

        $arr=explode("@", $val);
        $author=$arr[0];

        $pic_data="images/".$upic;

        $query2=$con->prepare("INSERT into videos(pdate,auther,title,video)values(?,?,?,?)");
        $query2->bind_param("ssss",$pdate,$author,$title,$pic_data);
        $query2->execute();
        $query2->close();

       }
     }
     else
     {
      echo "Your File Can not be Upload SORRY";
     }
 }


?>