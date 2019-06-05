<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM recording WHERE id=$id";
$result = mysqli_query($db,$query) or die ( mysqli_error());
$newURL = "../php/taskrecording.php?id=".$id."";
header('Location: '.$newURL);
