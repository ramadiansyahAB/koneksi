<?php
require 'koneksi.php';
$sql = "SELECT * FROM pelanggan";
$result = mysqli_query($conn, $sql);
?>

<!Doctype html>
<head>


 
 <a href="">tambah</a>
 <table border="1px dotted black">
   <tr>
          <th>nama_pelanggan</th>
          <th>alamat</th>
          <th>email</th>
          <th>no_hp</th>
          <th>aksi<th>
          
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)):?>
     <tr>
            <td><?= $row['nama_pelanggan']?></td>
            <td><?= $row['alamat']?></td>
            <td><?= $row['email']?></td>
            <td><?= $row['no_hp']?></td>
           
            <td></td>
    </tr>
    <?php endwhile?>
    </table>
    </body>
    </html>