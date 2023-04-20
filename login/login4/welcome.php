<?php
session_start();
include "config.php";
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM `user` WHERE email = '$email' AND password = '$pass'";
    $exe = mysqli_query($con,$query);
    // $data = mysqli_fetch_row($exe);
    $row = mysqli_num_rows($exe);
    // $user = mysqli_fetch_all($exe);
    // print_r($user);

    if(!empty($row)){
        $user = mysqli_fetch_assoc($exe);
        // print_r($user);
        $data = [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email'],
            'password' => $user['password'],
        ];
        $email = $data['email'];
        $_SESSION['user'] = $data;
        $query = "UPDATE user SET session = 1 WHERE email = '$email'";
        $exe = mysqli_query($con,$query);
        echo "user login";
    }else{
        echo "not register";
    }
    
}
?>