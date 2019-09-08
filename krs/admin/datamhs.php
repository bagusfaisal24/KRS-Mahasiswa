<!DOCTYPE html>
<html>
<head>
 <?php 
 include "index.php";

  ?>
</head>
<body>
<div class="page-header">
  <a href="inputmhs.php" class="btn btn-primary btn-lg" class="float-right;">Tambah Data</a> 


</div>
<div class="container">
  <h2>Table Mahasiswa</h2>                                     
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>NIM</th>
        <th>MAHASISWA</th>
        <th>ALAMAT</th> 
        <th>AKSI</th>
      </tr>
    </thead>
    <tbody>
    <?php 
        include "../koneksi.php";
        $res = $koneksi->query("select * from mhs");
        while($row = $res->fetch_assoc()):     
     ?>
      <tr>
        <td><?php echo $row['nim'] ?></td>
        <td><?php echo $row['nama_mhs']?></td>
        <td><?php echo $row['alamat']?></td>
        <td><a href="deletemhs.php?nim=<?php echo $row['nim']?>" class="btn btn-primary">Hapus</a>
        <a href="form_editMhs.php?nim=<?php echo $row['nim']?>" class="btn btn-success">update</a></td>
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