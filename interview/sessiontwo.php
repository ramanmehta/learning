<?php
session_start();
// unset($_SESSION['y']);
print_r($_SESSION['x']);
print_r($_SESSION['y']);

session_destroy();
unset($_SESSION['y']);

?>