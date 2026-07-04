<?php
$host = "srv875.hstgr.io";
$user = "u366501955_faisal";
$password = "Khan@7862230";
$database = "u366501955_bank";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
