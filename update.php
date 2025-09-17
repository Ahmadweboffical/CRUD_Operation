<?php
include('config.php');

// get ID

$id = $_GET['id'];

// feach previous data

 $query = "SELECT * from crud_tabel where id = '$id' ";
  $run = mysqli_query ($conn, $query);
  $data = mysqli_fetch_assoc($run);

// update query
if(isset($_POST['submit'])){
  $name = $_POST['studentname'];
  $email = $_POST['stuemail'];
  $password = $_POST['stupassword'];
  $query = "update crud_tabel set name= '$name',email = '$email', password = '$password' where id = '$id'";
  $run = mysqli_query($conn,$query);

  if($run){
    header('location:read.php');
  }
else{
  echo"wate something wrong";
}
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>UPdate Data</title>
    <style>
        *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }
        body{
          height: 100vh;
          display: grid;
          place-items: center;
        }
        
    </style>

</head>
<body>
    <div class="main">
       <h2>Add Data</h2>
      <a href="read.php"><button class="btn btn-success">Back</button></a>
      <br><br>
        <form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="studentname" value ="<?php echo $data['name'] ?>">
    
  </div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="stuemail" value ="<?php echo $data['email'] ?>">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="stupassword" value ="<?php echo $data['password'] ?>">
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
</body>
</html>

