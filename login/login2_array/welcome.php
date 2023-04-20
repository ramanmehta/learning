<?php 
session_start();
if(isset($_POST['logout'])){
    // session_start();
    session_destroy();
    header("location:login.php");
    
} ?>
<h1>Welcome, <?php  echo $_SESSION['user']; ?></h1>
<form method="post">
<button type="submit" name="logout">Logout</button>
</form>


