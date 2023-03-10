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

  
  <body>
    <div class="container">
        <h1><i class="fa-solid fa-list mx-5 mb-5 mt-4"></i>ToDoList</h1>

        <!-- card -->
        <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded">
  <div class="card-body]">
  <form class="d-flex b5-card" action="insert.php" method="post"> 
      <input class="form-control me-2" name="data" type="text" placeholder="Apa yang mau anda lakukan hari ini?" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Create</button>
    </form>
  </div>
</div>
        <!-- end -->


        <?php
        include('config.php');
        $alldata = mysqli_query($connect, "SELECT * FROM list");
        ?>
        

<table class="table">
  <tbody>
    <?php while ($row = mysqli_fetch_array($alldata)) {?>
    
    <tr>
      <th scope="row"><?php echo $row['Id'] ?></th>
      <td><?php echo $row['data'] ?></td>
      <td style="width: 5%"><a href="edit.php?Id=<?php echo $row['Id'] ?>" class="btn btn-outline-primary">Edit</a></td>
      <td style="width: 5%"><a href="delete.php?Id=<?php echo $row['Id'] ?>" class="btn btn-outline-danger">Delete</a></td>
    </tr>
    
    <?php } ?>
  </tbody>
</table>

    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>