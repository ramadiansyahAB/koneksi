<?php
require "koneksi.php";

$id_buku = $_GET["id_buku"];
$sql = "DELETE FROM buku WHERE id_buku='$id_buku'";
$result = mysqLi_query($conn, $sql);

if(!$result){
    echo "<script>
    alert('gagal hapus');
    location.href = 'data_buku.php';
    </script>";
} else {
     echo "<script>
     alert('berhasil hapus');
     location.href = 'data_buku.php';
    </script>";

}
?>