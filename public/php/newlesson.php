<?php
include('includes/header.php');
?>


<main role="main" class="col-12">
  <div class="container" id="hello">

  </div>
  <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <h3>Add a new lesson</h3><hr>
          <h5>Edit hear</h5>

<!-- form for the text messege -->
          <form method="post" action="../core/newlesson.php">

       <div class="mb-3">
         <label for="username">Name of your new lesson</label>
         <div class="input-group">
           <input name="name" type="text" class="form-control" id="title"  required>
         </div>
       </div>

       <div class="mb-3">
         <label for="text" >Number of the lesson</label>
         <input name="number" id="textinput" type="text" class="form-control" id="address"  required>
       </div>

       <div class="mb-3">
         <label for="text" >Level</label>
         <input name="level" id="textinput" type="text" class="form-control" id="address"  required>
       </div>

       <div class="mb-3">
         <label for="text" >Free or not</label>
         <input name="free" id="textinput" type="text" class="form-control" id="address"  required>
       </div>
       <button id="button" class="btn btn-primary btn-lg btn-block" type="submit">Go!</button>
       </form>

<!--  -->


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
