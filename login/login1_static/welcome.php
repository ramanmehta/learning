<?php
session_start();

if(isset($_SESSION['name'])){
echo "Welcome";
}else{
header('location:login.php');
}

if(isset($_POST['logout'])){
session_start();

session_destroy();

header('location:login.php');

//header('location:logout.php');
}
?>
<html><head></head>
<body>
<form method='post'>
<input type='submit' value='Logout' name='logout'>
</form>
