<?php
require_once('database.php');
// DELETES CODES FROM THE DATABASE
if(isset($_POST['tokendel'])){
  $sql = "DELETE FROM token";
  mysqli_query($database, $sql) or die(mysqli_error($database));
}
header('Location: index.php?delete=success');
?>