<?php
require "koneksi.php";

$id_transaksi = $GET['id_transaksi'];

$sql = "DELETE FROM transaksi WHERE id_transaksi = '$id_transaksi'";
$result = mysqli_query($conn, $sql);
if(!$result) {
    echo "<script>
    alert('gagal hapus');
    location.href = 'data_transaksi.php';
    </script>";
} else {
    echo "<script>
     alert('gagal hapus');
    location.href = 'data_transaksi.php';
    </script>";
}

?>