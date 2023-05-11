<?php

$host = "localhost";
$user = "root";
$pass = "";
$base = "mahasiswa";

$conn = mysqli_connect($host, $user, $pass, $base)

(mysqli_connect_errno()) {
    die("Failed to connect");
}