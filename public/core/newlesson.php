<?php
   include("db.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
   	// $creater = $_SESSION["login_user"];

    $name = mysqli_real_escape_string($db, $_POST['name']);
    $text = mysqli_real_escape_string($db, $_POST['number']);
    $lesson = mysqli_real_escape_string($db, $_POST['level']);
    $place = mysqli_real_escape_string($db, $_POST['free']);
    // $myusername = mysqli_real_escape_string($db, $creater);
    // $id = $_SESSION['user_id'];
     $newURL = "../php/lessons.php";

    $sql= "INSERT INTO lesson (`name`, `number`,`level`, `free`) VALUES ('$name', '$text', '$lesson', '$place')";
    if ($db->query($sql)==TRUE) {
		// $_SESSION['new_blog_title'] = $_POST['title'];
        header('Location: '.$newURL);
		}
	} else {
		echo "Something went wrong, try again later!";
	}
	$db->close();


 ?>
