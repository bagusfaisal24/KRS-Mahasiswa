
<!DOCTYPE html>
<html>
<head>
<?php 
include "index.php";
 ?>
</head>
<body>

<div class="page-header">
  <a href="inputnilai.php" class="btn btn-primary btn-lg" class="float-right;">Tambah Data</a> 


</div>
<div class="container">
  <h2>Table Nilai</h2>                                     
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Nama Mahasiswa</th>
        <th>Semester</th>
        <th>Mata Kuliah</th>
        <th>Nilai</th>
        <th>Ket</th>
        <th>AKSI</th>
        
      </tr>
    </thead>
    <tbody>
    <?php
    include "../koneksi.php";
    
      $res = $koneksi->query("select mhs.nama_mhs, matakuliah.semester, matakuliah.nama_kul, nilai.nilai, nilai.huruf, nilai.id, nilai.nim from matakuliah, mhs, nilai where matakuliah.kd_kul = nilai.kd_kul and mhs.nim=nilai.nim");
     while($row = $res->fetch_row()):
    ?>

      <tr>
        <td><?php echo $row[0]?></td>
        <td><?php echo $row[1]?></td>
        <td><?php echo $row[2]?></td>
        <td><?php echo $row[3]?></td>
        <td><?php echo $row[4]?></td>
       
        <td><a href="deleteNilai.php?id=<?php echo $row [5]?>" class="btn btn-primary">Hapus</a>
        <a href="form_upN.php?id=<?php echo $row [5]?>" class="btn btn-success">update</a></td>
      </tr>
      <?php 
      endwhile;
      ?>
    </tbody>
  </table>
  </div>
</div>
</body>
</html>