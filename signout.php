<?php
session_start();
//require_once "function.php";

session_destroy();
header('location: index.php')

?>