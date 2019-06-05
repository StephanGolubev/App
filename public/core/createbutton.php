<?php
   include("db.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
   	// $creater = $_SESSION["login_user"];

    $name = mysqli_real_escape_string($db, $_POST['name']);
    $text = mysqli_real_escape_string($db, $_POST['text']);
    $lesson = mysqli_real_escape_string($db, $_POST['lesson']);
    $place = mysqli_real_escape_string($db, $_POST['place']);
     $newURL = "../php/lesson.php?id=".$lesson."";

    $sql= "INSERT INTO button (`name`, `lesson`, `place`, `text`) VALUES ('$name', '$lesson', '$place', '$text')";
    if ($db->query($sql)==TRUE) {
		// $_SESSION['new_blog_title'] = $_POST['title'];
        header('Location: '.$newURL);
		}
	} else {
    header('Location: '.$newURL);
	}
	$db->close();


 ?>
