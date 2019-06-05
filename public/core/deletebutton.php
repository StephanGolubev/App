<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM button WHERE id=$id";
$result = mysqli_query($db,$query) or die ( mysqli_error());
$newURL = "../php/lessons.php";
header('Location: '.$newURL);
