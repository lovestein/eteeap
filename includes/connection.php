<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "eteeap";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
    die("Connection Failed" . mysqli_connect_error());
}