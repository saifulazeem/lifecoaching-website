<?php


include("connection.php");


if (isset($_GET["id"])) {

	$id=$_GET["id"];
	$query=$con->prepare("SELECT video FROM videos WHERE id=?");
	$query->bind_param("s",$id);
      $query->execute();
      $result=$query->get_result();

       while($row=$result->fetch_assoc())
   {
       // $title= $row['title'];
       $video=$row["video"];
       
    }

    // echo "Playing".$title."<br>";

    echo "<video width='400' controls><source src='".$video."' type='video/webm'></video>";
    
    $query->close();

}





?>