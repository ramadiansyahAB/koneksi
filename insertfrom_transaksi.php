<?php
require"koneksi.php";

$result_pelanggan = mysqli_query($conn, "SELECT id_pelanggan, nama_pelanggan From pelanggan");
$result_buku = mysqli_query($conn, "SELECT id_buku, judul, harga from buku ");
$options_pelanggan = mysqli_fetch_all($result_costumer, MYSQLI_ASSOC);
$options_buku = mysqli_fetch_all($result_buku, MYSQLI_ASSOC);
?>


<DOCTYPE html>
<head></head>
<body>
<form action="insert_transaksi.php" method="post">
<label for="nama_pelanggan">Nama Pelanggan</label><br>
<select name="id_pelanggan" id="nama_pelanggan">
<option disabled selected>Pilih Nama Pelanggan..</option>
<?php foreach ($options_pelanggan as $option) { ?>
<option value="<?=$option['id_pelanggan']?>"><?= $option['nama_pelanggan']?></option>                                                                                                                                                                                                                                                                                                          ']?></option>
<?php } ?>
</select><br>
<label for="judul">Nama Buku</label><br> <select name="id_buku" id="judul">
<option disabled selected>Pilih Nama Buku.. </option>
<?php foreach ($options_buku as $option) { ?> 
<option value="<?=$option['id_buku']?>"><?=$option['judul'].''."- Rp". $option['harga']?></option>
<?php } ?>
</select><br>
<label for="jumblah"> jumblah </label><br>
<input type="number" name="jumblah" id="jumblah"/><br>
<input type="submit" value="Simpan" class="button4">
</form>
</body>
</html>