<?php
include('db.php');
session_start();


 if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($db, $_POST['name']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT * FROM admin WHERE name = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($db,$sql) or die( mysqli_error($db));
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $active = $row['password'];
    $id = $row['id'];
    // If result matched $myusername and $mypassword, table row must be 1 row

    if($mypassword == $active) {
       $_SESSION['login_user'] = $myusername;
       $_SESSION['user_id'] = $id;
       echo 'true';
       // header('Location: '.$newURL);

    }else{
       $error = "Your Login Name or Password is invalid";
       $_SESSION['error'] = $error;
       // $page_referrer=$_SERVER['HTTP_REFERER'];
       echo $error;
    }
 }
