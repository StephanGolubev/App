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
</div>
</nav>
</header>
<br><br><br><br>
