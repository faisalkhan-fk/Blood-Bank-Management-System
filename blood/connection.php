<?php
$host="localhost";
$user="u366501955_faisal";
$pass= "Khan@7862230"; 
$dbname= "u366501955_bank";
$conn = mysqli_connect($host,$user,$pass,$dbname);
if(!$conn)
{
    die("database Not connected". mysqli_connect_error());
}
?>