<?php
include('db.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_GET['code'];
$number = $_GET['number'];

// UPDATE `table_name` SET `column_name` = `new_value' [WHERE condition];
$check = "UPDATE `user` SET `verified` = '1' WHERE number='$number'";
$result = mysqli_query($db,$check) or die( mysqli_error($db));
// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
echo json_encode(
      array("message" => "True"
    )
  );
}else {
  echo json_encode(
          array("message" => "Error"
        )
      );
}
