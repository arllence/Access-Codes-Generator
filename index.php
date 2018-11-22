<?php
$title = "Generator";
include_once 'head.php';
require_once('database.php') ;
include 'error/erroradmin.php';
?>
<br>
<div class="container">
<div id="login">
<form method="POST" action="token.php">
<input type="number" name="total" placeholder="Enter Number of Codes to Generate (max = 600)" required><br>
<input type="submit" name="token" value="Generate Codes">
</form>
</div>
</div>


<?php
//DISPLAYS ACCESS CODES FROM THE DATABASE
$sql ="SELECT codes FROM token";
$res= mysqli_query($database, $sql) or die(mysqli_error($database));
if(mysqli_num_rows($res)>0){
  while($row = mysqli_fetch_assoc($res)){
    $token[]=$row['codes'];
    
    $num = count($token);
  
echo '<div class="container token">';
echo 'Access Tokens:<br>';
if($num <1){
  echo '<br>No Access Codes in Database:<br>'.$num;
}else{
  for ($i=0; $i < $num; $i++) { 
    echo $i.''.'.'.'&nbsp;&nbsp;'.$token[$i].'<br>';
  }
    }
  }
}

echo '</div>';
?>

<!-- DELETE CODES HTML -->
<div class="container">
<div id="login">
<form method="POST" action="tokendel.php">
<input type="submit" name="tokendel" value="Delete Codes">
</form>
</div>
</div>



<br>
<?php
include_once 'footer.php';
?>
