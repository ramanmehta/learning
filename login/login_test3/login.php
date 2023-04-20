<?php
session_start();

//print_r($_POST);
if(isset($_POST)){

	$name = "raman";
	$pass = 1234;
	
	if(($_POST['name'] == $name) && ($_POST['pass'] == $pass)){
		echo "Welcome Raman";
		echo '<form action="index.php">
			<input type="submit" value="Logout">
			</form>';
	}else{
		header('location:index.php');
	}

}




?>
