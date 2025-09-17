<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Data</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

         <style>
        *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }
        body{
          height: 50vh;
          display: grid;
          place-items: center;
        }
        h2{
            text-align:center;
        }
        
    </style>
</head>
<body>
<div class="main">
   
    <h2>Read Data</h2>
    <table class="table">
         <a href="create.php"><button class="btn btn-success">ADD</button></a>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">UPDATE</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
  <tbody>
   
  <?php
  include("config.php");
  
  $query = "SELECT * from crud_tabel";
  $run = mysqli_query ($conn, $query);
  $counter = 1;
   foreach($run as $data):
?>
<tr>
    <td><?php  echo $data['id'];?></td>
    <td><?php  echo $data['name'];?></td>
    <td><?php  echo $data['email'];?></td>
    <td><?php  echo $data['password'];?></td>
    <td><a href="update.php?id=<?php echo $data['id'];?>"><button class="btn btn-primary">UPDATE</button></a></td>
     <td><a href="delete.php?id=<?php echo $data['id'];?>"><button class="btn btn-danger">DELETE</button></a></td>
  
</tr>

  <?php
  endforeach;
  ?>
  </tbody>
</table>
</div>    

</body>
</html>