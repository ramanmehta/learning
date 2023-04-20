<?php
include 'config.php';
if(isset($_POST['submit'])){
    // print_r($_POST);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    
    $check = "SELECT * FROM user WHERE email = '$email'";
    $exe = mysqli_query($con,$check);
    $row = mysqli_num_rows($exe);
    if($row > 0){
        echo "Email has been taken, try another email";
    }else{
        $query = "INSERT INTO user (name, email, password) values('$name', '$email', '$pass')";
        $exe = mysqli_query($con,$query);
        if($exe){
            echo "Register Successfully";
            header('location:login.php');
        }else{
            echo "Error, Try againg";
        }
    }
    


}




?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form method="post">
        Name : <input type="text" name="name" id="name">
        <br><br>
        Email : <input type="email" name="email" id="name">
        <br><br>
        Password : <input type="password" name="password" id="password">
        <br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>