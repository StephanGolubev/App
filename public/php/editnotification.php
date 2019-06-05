<?php
include('../core/session.php');
?>

  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/second.css">
    <link rel="stylesheet" type="text/css" href="css/search.css">
    <script src="js/search.js"></script>

     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <style>
    #hello{
    	align-items: 50%;
    }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
    <header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<a class="navbar-brand" href="#">Dashboard for an app</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lessons.php">Lessons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Create new lesson</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="alltasks.php">All tasks</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="allusers.php">All users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="notifications.php">All Notifications</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log out</a>
        </li>
      </ul>
      <div class="dropdown" style="margin-top: -19px;">
  <button class="btn btn-outline-success my-2 my-sm-0" type="button" >Search result</button>
  <div class="dropdown-content">
    <div id="search-result-container" style="border:solid 1px #BDC7D8;display:none; "></div>
  </div>
</div>
      <div class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-1" type="text" id="search-data" name="searchData" placeholder="Search By Post Title (word length should be greater than 3) ..." autocomplete="off" aria-label="Search">
      </div>

      </div>
  </nav>
</header>
<br><br><br><br>

<main role="main" class="col-12">
  <div class="container" id="hello">

  </div>
  <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12">
          <h3>Change the task at this page</h3><hr>
          <h5>task here:</h5>
          <div class="" >


          <?php
          $url = $_SERVER['REQUEST_URI'];
          $num = $_GET['id'];
          $_SESSION['post_id'] = $num;

          $dt = "SELECT * FROM notification WHERE id=$num";
          $result = mysqli_query($db,$dt) or die( mysqli_error($db));

          	while ($row = mysqli_fetch_array($result)) {
              $link = "http://design-ceramic.epizy.com/public/php/lesson.php?id=".$row['lesson'];
            		echo "<div id='rows' style='text-align: center;background-color: #E6E6FA;'><h6><a href='#'>{$row['name']}</a></h6>The maintext of the messege:{$row['text']}<div id='user'>In lesson: <a href=".$link.">Lesson number: {$row['lesson']}</a></div><p id='user'>Place in the lesson : {$row['number']}</p><br></div><hr>";


        ?>
        <!-- </div> -->

<!-- form for the text messege -->
<div class="container" style="text-align: center;">
  <h4 style="text-align: center;"><a href="../core/deletenotification.php?id=<?php echo $row["id"]; ?>">Delete</a></h4>
</div>

          <form method="post" action="../core/editnotification.php">

            <div class="mb-3">
              <label for="username">Id (don't change this!)</label>
              <div class="input-group">
                <input name="id" type="text" class="form-control" id="title" required value="<?php echo $row['id']; ?>">
              </div>
            </div>

       <div class="mb-3">
         <label for="username">Name of your new text messege</label>
         <div class="input-group">
           <input name="name" type="text" class="form-control" id="title" required value="<?php echo $row['name']; ?>">
         </div>
       </div>

       <div class="mb-3">
         <label for="text" >Messege text</label>
         <input name="text" id="textinput" type="text" class="form-control" id="address" required value="<?php echo $row['text']; ?>">
       </div>

       <div class="mb-3">
         <label for="text" >Lesson number</label>
         <input name="lesson" id="textinput" type="text" class="form-control" id="address" required value="<?php echo $row['lesson']; ?>">
       </div>

       <div class="mb-3">
         <label for="text" >Place in all (the order of the tasks)</label>
         <input name="place" id="textinput" type="text" class="form-control" id="address" required value="<?php echo $row['number']; ?>">
       </div>
       <button id="button" class="btn btn-primary btn-lg btn-block" type="submit">Go!</button>
       </form>
<?php } ?>
<!--  -->

          </div>
        </div>
        <div class="col-lg-4 col-md-12" id="main">
          <?php
         				$url = $_SERVER['REQUEST_URI'];
                $num = $_GET['id'];
                $_SESSION['post_id'] = $num;

        				$dt = "SELECT * FROM notification WHERE id='$num'";
        				$result = mysqli_query($db,$dt) or die( mysqli_error($db));

        		  ?>
              <h3>All exersises in this lesson:</h3><br>
        		  <?php
                	while ($row = mysqli_fetch_array($result)) {
                    $link = "http://design-ceramic.epizy.com/public/php/lesson.php?id=".$row['lesson'];
                  		echo "<div id='rows'><h5>This is a <small>'{$row['lesson']}'</small> task</h5><h6><a href='http://design-ceramic.epizy.com/public/php/index.php?id={$row['id']}'>{$row['name']}</a></h6>The maintext of the messege:{$row['text']}<div id='user'>In lesson: <a href=".$link.">Lesson number: {$row['number']}</a></div><p id='user'>Place in the lesson : {$row['text']}</p><br><div><hr>";
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
