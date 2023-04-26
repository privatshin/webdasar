<?php

$host = "localhost";
$user = "root";
$pass = "Dim88@4d3in"; // kosong pake "" (petik)
$dbs  = "mahasiswa";

$conn = new mysqli($host, $user, $pass, $dbs);

if ($conn->connect_error) {
    die("No Connection to Database");
}

$sql = "SELECT * FROM data_diri";

if ($conn->query($sql)) {
    $hasil = $conn->query($sql);

    if($hasil->num_rows > 0) {
?>