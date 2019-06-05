<?php
include('includes/header.php');
?>

<main role="main" class="col-12">
  <div class="container" id="hello">

  </div>
  <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12">
          <h3>Add something to this lesson</h3><hr>
          <h5>Text messege:</h5>



                    <?php
                    $url = $_SERVER['REQUEST_URI'];
                    $num = $_GET['id'];
                    $_SESSION['post_id'] = $num;

                    $dt = "SELECT * FROM `button` WHERE id=$num";
                    $result = mysqli_query($db,$dt) or die( mysqli_error($db));

                    	while ($row = mysqli_fetch_array($result)) {
                        $link = "http://design-ceramic.epizy.com/public/php/lesson.php?id=".$row['lesson'];
                      		echo "<div id='rows' style='text-align: center;background-color: #E6E6FA;'><h6><a href='http://design-ceramic.epizy.com/public/php/task{$row['type']}.php?id={$row['id']}'>{$row['name']}</a></h6>The maintext of the messege:{$row['text']}<div id='user'>In lesson: <a href=".$link.">Lesson number: {$row['lesson']}</a></div><p id='user'>Place in the lesson : {$row['place']}</p><br></div><hr>";


                  ?>

<!-- form for the text messege -->
<!-- form for the text messege -->
<div class="container" style="text-align: center;">
          <h4><a href="../core/deletebutton.php?id=<?php echo $row["id"]; ?>">Delete</a></h4>
</div>
          <form method="post" action="../core/editbutton.php">

            <div class="mb-3">
              <label for="username">Id (don't change this!)</label>
              <div class="input-group">
                <input name="id" type="text" class="form-control" id="title" required value="<?php echo $row['id']; ?>">
              </div>
            </div>



       <div class="mb-3">
         <label for="username">Name of your new recording task</label>
         <div class="input-group">
           <input name="name" type="text" class="form-control" id="title" required value="<?php echo $row['name']; ?>">
         </div>
       </div>

       <div class="mb-3">
         <label for="text" >Recording text</label>
         <input name="text" id="textinput" type="text" class="form-control" id="address" required value="<?php echo $row['text']; ?>">
       </div>

       <div class="mb-3">
         <label for="text" >Lesson number</label>
         <input name="lesson" id="textinput" type="text" class="form-control" id="address" required value="<?php echo $row['lesson']; ?>">
       </div>

       <div class="mb-3">
         <label for="text" >Place in the lesson (the order of the tasks)</label>
         <input name="place" id="textinput" type="text" class="form-control" id="address" required value="<?php echo $row['place']; ?>">
       </div>
       <button id="button" class="btn btn-primary btn-lg btn-block" type="submit">Go!</button>
       </form>
<?php } ?>
<!--  -->
<!-- form for the recording messege -->
        </div>
        <div class="col-lg-4 col-md-12" id="main">
          <?php
         				$url = $_SERVER['REQUEST_URI'];
                $num = $_GET['id'];
                $_SESSION['post_id'] = $num;

        				$dt = "SELECT id,type,name, lesson,place, link, text FROM `recording` WHERE lesson=$num UNION SELECT id,type,name,lesson,place, '', text FROM `text` WHERE lesson=$num";
        				$result = mysqli_query($db,$dt) or die( mysqli_error($db));

        		  ?>
              <h3>All exersises in this lesson:</h3><br>
        		  <?php
                	while ($row = mysqli_fetch_array($result)) {
                    $link = "http://design-ceramic.epizy.com/public/php/lesson.php?id=".$row['lesson'];
                  		echo "<div id='rows'><h5>This is a <small>'{$row['type']}'</small> task</h5><h6><a href='http://design-ceramic.epizy.com/public/php/task{$row['type']}.php?id={$row['id']}'>{$row['name']}</a></h6>The maintext of the messege:{$row['text']}<div id='user'>In lesson: <a href=".$link.">Lesson number: {$row['lesson']}</a></div><p id='user'>Place in the lesson : {$row['place']}</p><br><div><hr>";
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
