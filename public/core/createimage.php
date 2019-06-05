<?php
   include("db.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
   	// $creater = $_SESSION["login_user"];

    $name = mysqli_real_escape_string($db, $_POST['name']);
    $link = mysqli_real_escape_string($db, $_POST['link']);
    $text = mysqli_real_escape_string($db, $_POST['text']);
    $say = mysqli_real_escape_string($db, $_POST['say']);
    $lesson = mysqli_real_escape_string($db, $_POST['lesson']);
    $place = mysqli_real_escape_string($db, $_POST['place']);
    // $myusername = mysqli_real_escape_string($db, $creater);
    // $id = $_SESSION['user_id'];
     $newURL = "../php/lesson.php?id=".$lesson."";

    $sql= "INSERT INTO image (`name`, `lesson`, `place`,`say`, `link`, `text`) VALUES ('$name', '$lesson', '$place','$say', '$link', '$text')";
    if ($db->query($sql)==TRUE) {
		// $_SESSION['new_blog_title'] = $_POST['title'];
        header('Location: '.$newURL);
		}
	} else {
    header('Location: '.$newURL);
	}
	$db->close();


 ?>
