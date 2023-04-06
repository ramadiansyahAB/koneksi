<?php
require 'koneksi.php';
$sql = "SELECT * FROM buku";
$result = mysqli_query($conn, $sql);
?>

<!Doctype html>
<head>


 
 <a href="">tambah</a>
 <table border="1px dotted black">
   <tr>
          <th>id_buku</th>
          <th>judul_buku</th>
          <th>penulis</th>
          <th>penerbit</th>
          <th>$tahun_terbit</th>
          <th>harga</th>
          <th>aksi<th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)):?>
     <tr>
            <td><?= $row['id_buku']?></td>
            <td><?= $row['judul_buku']?></td>
            <td><?= $row['penulis']?></td>
            <td><?= $row['penerbit']?></td>
            <td><?= $row['tahun_terbit']?></td>
            <td><?= $row['harga']?></td>
            <td>
              <a href="delete_buku.php?id_buku=<?= $row['id_buku']?>" ?>hapus</a>
              <a href="editfrom_buku.php?id_buku=<?= $row['id_buku']?>" ?>edit</a>
            </td>
    </tr>
    <?php endwhile?>
    </table>
    </body>
    </html>
                




