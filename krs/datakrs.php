<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/fonts/glyphicons-halflings-regular.ttf">
</head>
<body>
<?php 
include "indexmhs.php";

 ?>
<div class="container">
  <h2>Daftar Mata Kuliah</h2>                                     
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>KODE MK</th>
        <th>MATA KULIAH</th>
        <th>SEMESTER</th>
        <th>JAM</th>  
        <th>PENGAMPU</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        include "koneksi.php";
        $res = $koneksi->query("select * from matakuliah");
        while($row = $res->fetch_assoc()):     
     ?>
      <tr>
        <td><?php echo $row['kd_kul'] ?></td>
        <td><?php echo $row['nama_kul']?></td>
        <td><?php echo $row['semester']?></td>
        <td><?php echo $row['jam']?></td>
        <td><?php echo $row['pengampu']?></td>
      
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
