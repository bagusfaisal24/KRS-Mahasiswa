<!DOCTYPE html>
<html>
<head>
  <title></title>
  
   </head>
   <?php 
  include "index.php";
   ?>
   <body>
<div class="page-header">
  <a href="inputmk.php" class="btn btn-primary btn-lg" class="float-right;">Tambah Data</a> 


</div>
<div class="container">
  <h2>Table Mata kuliah</h2>                                     
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>KODE MK</th>
        <th>MATA KULIAH</th>
        <th>SEMESTER</th>
        <th>JAM</th>  
        <th>PENGAMPU</th>
        <th>AKSI</th>
      </tr>
    </thead>
    <tbody>
    <?php 
        include "../koneksi.php";
        $res = $koneksi->query("select * from matakuliah");
        while($row = $res->fetch_assoc()):     
     ?>
      <tr>
        <td><?php echo $row['kd_kul']?></td>
        <td><?php echo $row['nama_kul']?></td>
        <td><?php echo $row['semester']?></td>
        <td><?php echo $row['jam']?></td>
        <td><?php echo $row['pengampu']?></td>

        <td><a href="delete_mk.php?kd_kul=<?php echo $row['kd_kul']?>" class="btn btn-primary">Hapus</a>
        <a href="form_editMK.php?kd_kul=<?php echo $row['kd_kul']?>" class="btn btn-success">update</a></td>
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