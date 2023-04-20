<?php
if(isset($_POST['submit'])){
session_start();
if($_POST['name'] == 'raman'){
$_SESSION['name'] = $_POST['name'];
header('location:welcome.php');
die();
}
}
?>
<html>
<head><title>Login</title></head>
<body>
<form method="post">
Name = <input type="text" name="name">
<input type="submit" value="Submit" name="submit">
</form>
</body>
</html>
