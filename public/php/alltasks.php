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

<h3>See all tasks here:</h3><br>
          <?php
          	// 		$newURL = "dashboard.php";
          	// 		$creater = $_SESSION["login_user"];
          	// 		$x=0;
          	// 		$dt = "SELECT * FROM `lesson`";
            //    // Order by DESC-less or ASC-bigger limit-limits the output!
          	// 		$result = mysqli_query($db,$dt) or die( mysqli_error($db));
           ?>
           <div>
               <?php
         				$url = $_SERVER['REQUEST_URI'];

        				$dt = "SELECT id,type,say,name, lesson,place, link, text FROM `recording` UNION SELECT id,type,say,name,lesson,place, '', text FROM `text` UNION SELECT id,type,say,name, lesson,place, link, text FROM `image` UNION SELECT id,type,'','',name, lesson,place,text FROM `button`";
        				$result = mysqli_query($db,$dt) or die( mysqli_error($db));

        		  ?>
              <h3></h3><br>
        		  <?php
                	while ($row = mysqli_fetch_array($result)) {
                      if ($row['type']=='button') {
                        $link = "http://design-ceramic.epizy.com/public/php/lesson.php?id=".$row['lesson'];
                          echo "<div id='rows'><h5>This is a <small>'{$row['type']}'</small> task</h5><h6><a href='http://design-ceramic.epizy.com/public/php/task{$row['type']}.php?id={$row['id']}'>Button</a></h6>The maintext of the messege:{$row['text']}><div id='user'>In lesson: <a href=".$link.">Lesson number: {$row['lesson']}</a></div><p id='user'>Place in the lesson : {$row['place']}</p><br><div><hr>";
                      }else {
                        $link = "http://design-ceramic.epizy.com/public/php/lesson.php?id=".$row['lesson'];
                          echo "<div id='rows'><h5>This is a <small>'{$row['type']}'</small> task</h5><h6><a href='http://design-ceramic.epizy.com/public/php/task{$row['type']}.php?id={$row['id']}'>{$row['name']}</a></h6>The maintext of the messege:{$row['text']}<p>Will user say it: {$row['say']}</p><div id='user'>In lesson: <a href=".$link.">Lesson number: {$row['lesson']}</a></div><p id='user'>Place in the lesson : {$row['place']}</p><br><div><hr>";
                      }

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
