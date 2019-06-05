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
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lessons.php">Lessons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="newlesson.php">Create new lesson</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="alltasks.php">All tasks</a>
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
    </div>
  </nav>
</header>
<br><br><br><br>

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

<h3>See all users here:</h3><br>
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

        				$dt = "SELECT * FROM `user`";
        				$result = mysqli_query($db,$dt) or die( mysqli_error($db));

        		  ?>
              <h3></h3><br>
        		  <?php
                	while ($row = mysqli_fetch_array($result)) {
                    $link = "http://design-ceramic.epizy.com/public/php/lesson.php?id=".$row['lesson'];
                  		echo "<div id='rows'><h5>User with name: <small>'{$row['name']}'</small> task</h5>Status<h6><p>{$row['email']}</p></h6>The user is on the lesson:{$row['lesson']}<p>Will user's password: {$row['password']}</p><div id='user'>In lesson: <p>Created at: {$row['created']}</p></div><p id='user'>Id of the user: {$row['id']}</p><br><div><hr>";
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
