<?php
include('includes/header.php');
?>


<main role="main" class="col-12">
  <div class="container" id="hello">

  </div>
  <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12" id="main">
          <?php
         				$url = $_SERVER['REQUEST_URI'];
                // $num = $_GET['id'];
                // $_SESSION['post_id'] = $num;

        				$dt = "SELECT * FROM lesson ORDER BY number";
        				$result = mysqli_query($db,$dt) or die( mysqli_error($db));

        		  ?>
              <h3>All exersises in this lesson:</h3><br>
              <div class="" style="text-align: center;">

                <dl>


        		  <?php
                	while ($row = mysqli_fetch_array($result)) {
                    $link = "http://design-ceramic.epizy.com/public/php/lesson.php?id=".$row['id'];
                  		echo "<div id='rows' style='background-color: #E6E6FA;'><dt>{$row['number']}</dt><dd>Name '{$row['name']}' task</dd><h6><a href='http://design-ceramic.epizy.com/public/php/lesson.php?id={$row['number']}'>{$row['name']}</a><hr><br></div>";
                

        		   ?>
                   <div class="container" style="text-align: center;">
          <h4><a href="../core/deletelesson.php?id=<?php echo $row["number"]; ?>">Delete</a></h4>
          </div>
                   
                   <?php } ?>
  </dl>

               </div>
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
