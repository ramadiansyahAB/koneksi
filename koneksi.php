<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_sekolah";
$conn = mysqLi_connect($servername, $username, $password, $database);

if (!$conn) {
    die("koneksi gagal:".mysqLi_connect_error());
} 


?>