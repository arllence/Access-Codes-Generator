<?php
require_once('database.php');
//GENERATES CODES AND STORE IN THE DATABASE
if(isset($_POST['token'])){
  $total = $_POST['total'];
  $min = 1111;
  $max = 9999999;

  for ($i=1; $i < $total; $i++) { 
    $token = rand($min,$max);
    $sql = "INSERT INTO token (codes) VALUES ('$token')";
    mysqli_query($database,$sql);   
  }
}
header('Location: index.php?code=success');
?>