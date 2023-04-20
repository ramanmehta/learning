<?php

if(isset($_POST['submit'])){
    session_start();
    $name = $_POST['name'];
    // echo "<br>";
    $pass = $_POST['password'];

    $user = array(
        array("name" => "Raman", "password" => "1234"),
        array("name" => "Mohan", "password" => "2345"),
        array("name" => "Kumar", "password" => "3456"),
        array("name" => "Ajit", "password" => "4567")
    );
    
    foreach($user as $users){
        if(($users['name'] == $name) && ($users['password'] == $pass)){
            $_SESSION['user'] = "test";
            $msg = 1;
            break;
        }else{
            $msg = 0;
        }
        
    }

    // print_r($_SESSION['user']);die;
   if($msg == 1){
    header("location:welcome.php");
   }else{
    header("location:login.php");
   }
    
    // header("location:login.php");


}




// // echo "<pre>";
// // print_r($user);
// $name = "Rman";
// $password = "1234";

// $i = 0;
// foreach ($user as $users) {
//     if ($user[$i]["name"] == $name) {
//         echo "Welcome $name";
//         return $user[$i]["password"];
//     }
//     $i++;
// }
// echo "User not found";
?>
