<?php
    $con = mysqli_connect('localhost','root','root','test');
    if(mysqli_connect_error()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();

    }
    // else{
    //    echo "connected";
    // }

?>