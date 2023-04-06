<?php

require "koneksi.php";
$nama_pelanggan = $_POST["nama_pelanggan"];
$alamat = $_POST["alamat"];
$email = $_POST["email"];
$no_hp = $_POST["no_hp"];

$sql = "INSERT INTO pelanggan VALUES ('', '$nama_pelanggan', '$alamat', '$email', '$no_hp')";

mysqli_query ($conn,$sql);
// header ("location: databuku.php");
 
?>