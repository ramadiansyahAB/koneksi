<?php
require "koneksi.php";

$id_buku = $_POST['id_buku'];
$judul_buku = $_POST['judul_buku'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$harga= $_POST['harga'];

$sql = "UPDATE buku SET judul_buku ='$judul_buku', penulis ='$penulis', penerbit ='$penerbit', tahun_terbit = '$tahun_terbit', harga = '$harga' WHERE id_buku ='$id_buku'";
$result = mysqLi_query($conn, $sql);
if ($result){
    echo "<script>
    alert('edit berhasil');
    location.href = 'data_buku.php';
    </script>";
} else {
     echo "<script>
     alert('edit gagal');
     location.href = 'data_buku.php';
    </script>";

}
?>
   