<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM notification WHERE id=$id";
$result = mysqli_query($db,$query) or die ( mysqli_error());
$newURL = "../php/editnotification.php?id=".$id."";
header('Location: '.$newURL);
