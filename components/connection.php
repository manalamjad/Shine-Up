<?php

$host = "sql107.infinityfree.com";
$user = "if0_41921566";
$password = "4IF8VQ3bbYEM0";
$dbname = "if0_41921566_shineup_db";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>