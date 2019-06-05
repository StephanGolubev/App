<?php
   include("db.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
   	// $creater = $_SESSION["login_user"];

    $id = mysqli_real_escape_string($db, $_POST['id']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $text = mysqli_real_escape_string($db, $_POST['text']);
    $link = mysqli_real_escape_string($db, $_POST['link']);
    $lesson = mysqli_real_escape_string($db, $_POST['lesson']);
    $place = mysqli_real_escape_string($db, $_POST['place']);
    // $myusername = mysqli_real_escape_string($db, $creater);
    // $id = $_SESSION['user_id'];
     $newURL = "../php/taskrecording.php?id=".$id."";

    $sql= "UPDATE recording SET name='".$name."',text='".$text."',link='".$link."',lesson='".$lesson."',place='".$place."' WHERE id=$id";
    if ($db->query($sql)==TRUE) {
		// $_SESSION['new_blog_title'] = $_POST['title'];
        header('Location: '.$newURL);
		}
	} else {
		echo "Something went wrong, try again later!";
	}
	$db->close();
