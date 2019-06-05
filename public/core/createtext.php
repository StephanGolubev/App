<?php
   include("db.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
   	// $creater = $_SESSION["login_user"];

    $name = mysqli_real_escape_string($db, $_POST['name']);
    $text = mysqli_real_escape_string($db, $_POST['text']);
    $lesson = mysqli_real_escape_string($db, $_POST['lesson']);
    $say = mysqli_real_escape_string($db, $_POST['say']);
    $place = mysqli_real_escape_string($db, $_POST['place']);
    // $myusername = mysqli_real_escape_string($db, $creater);
    // $id = $_SESSION['user_id'];
     $newURL = "../php/lesson.php?id=".$lesson."";

    $sql= "INSERT INTO text (`name`, `text`,`lesson`, `say`,`place`) VALUES ('$name', '$text', '$lesson','$say', '$place')";
    if ($db->query($sql)==TRUE) {
		// $_SESSION['new_blog_title'] = $_POST['title'];
        header('Location: '.$newURL);
		}
	} else {
		echo "Something went wrong, try again later!";
	}
	$db->close();


 ?>
