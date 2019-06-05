<?php
include('includes/header.php');
?>


<main role="main" class="col-12">
  <div class="container" id="hello">
<h1>Welcome Home</h1><br>
    <?php
	echo "<h3 class='col-8'>Hello " . $_SESSION["login_user"] . "</h3>";
 ?>
  </div>
  <div class="container">
      <div class="row">
        <!-- <div class="col-lg-6 col-md-12">
          <p>
    You will see something usefull here
    </p>
        </div> -->
        <div class="col-lg-12 col-md-12" id="main" style="text-align: center;">

<h3>See all lessons here:</h3><br>
          <?php
          			$newURL = "dashboard.php";
          			$creater = $_SESSION["login_user"];
          			$x=0;
          			$dt = "SELECT * FROM `lesson` ORDER BY number";
               // Order by DESC-less or ASC-bigger limit-limits the output!
          			$result = mysqli_query($db,$dt) or die( mysqli_error($db));
           ?>
           <div>
               <?php
               while ($row = mysqli_fetch_array($result)) {
                 $get = array("id"=>"{$row['id']}");
                 $out = http_build_query($get);
                 $url = "lesson.php?id=".$row['number']."";
                 if ($row['free'] == 0) {
                   $free = "Yes";
                 }else {
                   $free = 'No )';
                 }
                 echo "<br>";
                 echo "<div id='rows' style='background-color: #F5F5F5;''><h4><a href='$url'>{$row['name']}</a></h4><div id='user'>Level: {$row['level']}</div><p id='user'>Is it free: $free</p><br>Number in all lessons: {$row['number']}<br><div><hr>";

               }
               ?>

        </div>
      </div>
  </div>
</main>

<footer class="footer mt-auto py-3">
  <div class="container">
    <p align="center">&copy;Made by <a href="https://www.freelancer.com/u/golubevstephan?w=f">Stephan</a></p>
  </div>
</footer>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>
