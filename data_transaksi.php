<?php
require "koneksi.php";

$sql = "SELECT transaksi.id_transaksi, transaksi.jumblah, transaksi.harga, transaksi.total_pembayaran, pelanggan.id_pelanggan, pelanggan.nama_pelanggan, buku.id_buku, buku.judul_buku FROM pelanggan INNER JOIN transaksi on pelanggan.id_pelanggan = transaksi.id_pelanggan INNER JOIN buku ON buku.id_buku = transaksi.id_buku ORDER by id_transaksi";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<head>
<style type="text/css">
        .i {
          width: 50%;
          margin: auto;
          border-collapse: collapse;
        }
        th, td {
          border: 1px solid black;
        }
        </style>
</head>

<body>
    <h2>Data Transaksi Toko Buku</h2>
    <a href ="insertform_transaksi.php?" class ="button3">Tambah Data Transaksi</a>
    <table class = "i">
        <tr>
            <th class="aksi"> Id Transaksi</th>
            <th>Nama Pelanggan</th>
            <th>Nama Buku</th>
            <th>Qty</th>
            <th>harga</th>
            <th>Total Bayar</th>
            <th class = "aksi">aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_array($result)):
            $total_pembayaran = $row['jumblah']*$row['harga']
        ?>
        <tr>
                <td class="center-align"><?=$row['id_transaksi']?></td>     
                <td><?=$row['nama_pelanggan']?></td>
                <td><?=$row['judul_buku']?></td>
                <td><?=$row['jumblah']?></td>
                <td><?=$row['harga']?></td>
                <td><?=$total_pembayaran ?></td>
                <td class ="center-align">
                    <a href= "editform_transaksi.php?id_transaksi=<?=$row['id_transaksi']?>" class="button1">Edit</a>
                    <a href= "delete_transaksi.php?id_transaksi=<?=$row['id_transaksi']?>" class="button2">Hapus</a>
                </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>