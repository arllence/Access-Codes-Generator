<?php

if(isset($_GET['delete'])){
    
	 $code=$_GET['delete'];
	if($code == "success"){
		echo "<p class='error2'><strong>* Delete Success...</strong></p><br>";
	}elseif($code == "lsuccess"){
		echo "<p class='error2'><strong>* Codes Successfully Generated...</strong></p><br>";
	}
}
?>
<?php

if(isset($_GET['code'])){
    
	 $code=$_GET['code'];
	if($code == "success"){
		echo "<p class='error2'><strong>* Codes Successfully Generated...</strong></p><br>";
	}
}
?>

<style>
.error{
	background-color:#f3f3f3;
	width:40%;
	margin:auto;
	padding:12px 8px;
	border-radius:6px;
	text-align:center;
	border: 1px solid red;
	color : red;
}

.error2{
	background-color:#f3f3f3;
	width:40%;
	margin:auto;
	padding:12px 8px;
	border-radius:6px;
	text-align:center;
	border: 1px solid darkgreen;
	color : darkgreen;
}
</style>