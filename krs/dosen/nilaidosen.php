<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php 
  include "index.php";
   ?>
</head>
<body>
<div class="page-header">
  <a href="inputnilaidosen.php" class="btn btn-primary btn-lg" class="float-right;">Tambah Data</a> 


</div>
<div class="container">
  <h2>Table Nilai</h2>                                     
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>NIM</th>
        <th>NAMA MHS</th>
        <th>Mata Kuliah</th>
        <th>Semester</th>
        <th>Nilai</th>
        <th>AKSI</th>
        
      </tr>
    </thead>
    <tbody>
    <?php 
    include "../koneksi.php";
        $res = $koneksi->query("SELECT mhs.nim, mhs.nama_mhs, matakuliah.nama_kul, matakuliah.semester, nilai.nilai from mhs, matakuliah, nilai where mhs.nim=nilai.nim and matakuliah.kd_kul=nilai.kd_kul");
        //while($row = $res->fetch_assoc()): 
        while($row = $res->fetch_row()): 
        //while($row = $res->fetch_array()):   
     ?>
      <tr>
        <td><?php echo $row[0] ?></td>
        <td><?php echo $row[1]?></td>
        <td><?php echo $row[2]?></td>
        <td><?php echo $row[3]?></td>
        <td><?php echo $row[4]?></td>
        <td><a href="deleteNilaidos.php?nim=<?php echo $row[0]?>" class="btn btn-primary">delete</a>
          <a href="updatenilaidosen.php?nim=<?php echo $row[0]?>"class="btn btn-success">update</a></td>
       
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