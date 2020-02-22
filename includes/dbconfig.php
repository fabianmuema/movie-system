<?php

// database variables
// TODO: add the correct database variables

$server = "";
$username = "";
$password = "";
$database = "";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn) {
    die('Connection refused');
}