<?php
include('db.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_GET['name'];
  $password = $_GET['password'];
  $number = $_GET['emaill'];


      $check = "SELECT * FROM user WHERE number='$number'";
      $result = mysqli_query($db,$check) or die( mysqli_error($db));
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      if ($row['number'] != $number) {
        $query= "INSERT INTO user (`name`, `number`, `password`) VALUES ('$name', '$number', '$password')";
        $sql = mysqli_query($db,$query) or die( mysqli_error($db));
    $random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) );

    // 
// email varifacation here!
// 
// email()

        echo json_encode(
            array("message" => "Success",
            "code"=>$random_number
          )
        );
      }else {
          echo json_encode(
              array("message" => "The email is bussy! Try enouther one.")
          );
      }
}else {

  $password = $_GET['password'];
  $number = $_GET['number'];
  $sql = "SELECT * FROM user WHERE number = '$number'";
  $result = mysqli_query($db,$sql) or die( mysqli_error($db));
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  $active = $row['password'];
  // If result matched $myusername and $mypassword, table row must be 1 row

  if($password == $active) {
    echo json_encode(
          array("message" => "True")
      );
  }else{
     $error = "Your Login Name or Password is invalid";
     echo json_encode(
           array("message" => $active)
       );
  }
}
