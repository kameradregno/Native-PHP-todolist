<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToDoList</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
    
  </head>  

  
  <?php
  include('config.php');
  $Id = $_GET['Id'];
  $getdata = mysqli_query($connect, "SELECT * FROM list WHERE Id='$Id'");
  $row = mysqli_fetch_array($getdata);
  ?>


  <body>
    <div class="container">
        <h1><i class="fa-solid fa-list mx-5 mb-5 mt-4"></i>Edit</h1>

        <!-- card -->
        <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded">
  <div class="card-body]">
  <form class="d-flex b5-card" action="insert.php" method="post"> 
      <input class="form-control me-2" name="data" value="<?php echo $row['data'] ?>" type="text" placeholder="Edit" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Save</button>
      <div class="mb-5">
      <input type="hidden" value="<?php echo $row['Id'] ?>">
      </div>
      
    </div>
    </form>
  </div>
</div>
        <!-- end -->

    </div>
   

   </body>
</html>        