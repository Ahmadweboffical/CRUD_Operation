<?php
include('config.php');

$id  = $_GET['id'];
$query = "delete from crud_tabel where id= '$id'";
  $run = mysqli_query($conn,$query);

if($run){
    header('location:read.php');
}
else{
    echo "error";
}



?>