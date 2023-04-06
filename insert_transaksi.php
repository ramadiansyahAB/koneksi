<?php
require "koneksi.php";
$id_buku = $_POST['id_buku'];
$id_costumer = $_POST['id_costumer'];
$jumblah = $_POST['jumblah'];

$query = mysqli_query($conn, "SELECT harga from buku WHERE id_buku = '$id_buku'");
while ($row = mysqli_fetch_array($query)):
    $harga = $row['harga'];
    $total_harga= $_POST['jumblah']*$row['harga'];

    $sql = "INSERT INTO transaksi VALUES (null, '$id_costumer', '$id_buku','$jumblah', '$harga', '$total_harga')";
    mysqli_query($conn, $sql);
endwhile;  
header("location:data_transaksi.php");
?>