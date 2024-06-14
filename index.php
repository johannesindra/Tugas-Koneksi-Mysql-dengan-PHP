<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>Tugas Connect BasisData</title>
</head>
<body>
   <div class="container">
      <center><h1>Database Siswa</h1></center>
      <div class="main">
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql = 'SELECT * FROM pasien';
         $result = mysqli_query($conn, $sql);
         ?>
         <h3>Tabel Siswa</h3>
         <table>
          <tr>
            <th>id pasien</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tgl Lahir</th>
            <th>No.Telepon</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_pasien'];?></td>
               <td><?= $row['nama'];?></td>
               <td><?= $row['alamat'];?></td>
               <td><?= $row['tgl_lahir'];?></td>
               <td><?= $row['no_tlp'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql3 = 'SELECT * FROM kunjungan';
         $result = mysqli_query($conn, $sql3);
         ?>
         <h3>Tabel Guru</h3>
         <table>
          <tr>
            <th>id kunjungan</th>
            <th>id pasien</th>
            <th>id dokter</th>
            <th>tanggal</th>
            <th>diagnosa</th>
            <th>resep</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_kunjungan'];?></td>
               <td><?= $row['id_pasien'];?></td>
               <td><?= $row['id_dokter'];?></td>
               <td><?= $row['tanggal'];?></td>
               <td><?= $row['diagnosa'];?></td>
               <td><?= $row['resep'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql3 = 'SELECT * FROM dokter';
         $result = mysqli_query($conn, $sql3);
         ?>
         <h3>Tabel kelas</h3>
         <table>
          <tr>
            <th>id dokter</th>
            <th>nama</th>
            <th>spesialis</th>
            <th>no_tlp</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_dokter'];?></td>
               <td><?= $row['nama'];?></td>
               <td><?= $row['spesialis'];?></td>
               <td><?= $row['no_tlp'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql2 = 'SELECT * FROM obat';
         $result = mysqli_query($conn, $sql2);
         ?>
         </table>
         <h3>Tabel Pembayaran</h3>
         <table>
          <tr>
            <th>id obat</th>
            <th>nama obat</th>
            <th>harga</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_obat'];?></td>
               <td><?= $row['nama_obat'];?></td>
               <td><?= $row['harga'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql3 = 'SELECT * FROM resep_obat';
         $result = mysqli_query($conn, $sql3);
         ?>
         <h3>Tabel Detail Pembayaran</h3>
         <table>
          <tr>
            <th>id resep</th>
            <th>id obat</th>
            <th>jumlah</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_resep'];?></td>
               <td><?= $row['id_obat'];?></td>
               <td><?= $row['jumlah'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
      </div>
   </div>
</body>
</html>