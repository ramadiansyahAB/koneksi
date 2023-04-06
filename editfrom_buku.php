<?php
require "koneksi.php";

$id_buku = $_GET["id_buku"];
$sql = "SELECT * FROM buku WHERE id_buku ='$id_buku'";
$result = mysqLi_query ($conn, $sql);
while ($row = mysqli_fetch_array($result)):
?>

<!DOCTYPE html>
<head></head>
<body>
    <h2> Edit data buku </h2>
    <form action="edit_buku.php" method="post">
		<input type="hidden" name="id_buku" value="<?=$row['id_buku']?>"></br>
		<label for="judul_buku">Nama Buku</label>
		<input type="text" id="judul_buku" name="judul_buku" value="<?=$row['judul_buku']?>"/><br>
		<label for="Penulis">penulis</label>
		<input type="text" id="penulis" name="penulis" value="<?=$row['penulis']?>"/><br>
		<label for="Penerbit">Penerbit</label>
		<input type="text" id="penerbit" name="penerbit" value="<?=$row['penerbit']?>"/><br>
		<label for="tahun_terbit">tanggal terbit</label>
		<input id="tahun_terbit" type="date" name="tahun_terbit" value="<?=$row['tahun_terbit']?>"/><br>
		<label for="harga">harga buku</label>
		<input id="harga" type="number" name="harga" value="<?=$row['harga']?>"/><br>
		<input type="submit" value="tambah"/>
</from>
<?php endwhile ?>
</body>
</html>