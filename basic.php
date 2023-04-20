<?php 

    // global variable 

    $x = "Global";

    function myTest(){
        $y = "Local";
        echo "This is global varible ->". $GLOBALS['x'];
        echo "<br>";
        echo "This is local variable ->".$y;

    }

    myTest();
?>