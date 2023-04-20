<?php

session_start();

$x = ["raman","rajesh","amit"];

$_SESSION['x'] = $x;

$_SESSION['y'] = "hello world";

echo "session is set";


?>