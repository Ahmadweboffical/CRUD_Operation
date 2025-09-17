<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Create data</title>
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
        <form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="studentname" >
    
  </div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="stuemail">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="stupassword">
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
</body>
</html>

<?php
// DB connection

include('config.php');

if(isset($_POST['submit'])){
  $name = $_POST['studentname'];
  $email = $_POST['stuemail'];
  $password = $_POST['stupassword'];
  $query = "insert into crud_tabel(id,name,email,password) values('','$name','$email','$password');";
  $run = mysqli_query($conn,$query);

  if($run){
    header('location:read.php');
  }
else{
  echo"wate something wrong";
}
}
?>