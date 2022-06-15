<?php 

$server = "localhost";
$user = "root";
$pass = "";
// $database = "login_register_pure_coding";
$database = "test";
$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>