<?php
include('db.php');
session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($db,"select name from user where name= '$user_check' ");

   $row = mysqli_fetch_array($ses_sql);

   $login_session = $row['name'];

   if(!isset($_SESSION['login_user'])){
      header("location:../index.php");
      die();
   }