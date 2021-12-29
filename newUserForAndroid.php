<?php

require_once 'dbconnect.php';

$fname = $_POST['f_name'];
$lname = $_POST['l_name'];
$pass = $_POST['pass'];
$username = $_POST['username'];
$age = $_POST['age'];
$address = $_POST['address'];
$phnNumber = $_POST['phnNumber'];

$query = "INSERT INTO users VALUES ('{$fname}','{$lname}','{$pass}','{$username}','{$age}','{$address}','{$phnNumber}')";

$result = mysqli_query($connection, $query) or die(mysqli_error($conn));

if ($result) {
    echo "\nsuccess\n";

}
else{
    
echo "\nfailed\n";
}