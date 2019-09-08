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
  <h2>Table Nilai</h2>                                     
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>KODEMK</th>
        <th>MATA KULIAH</th>
        <th>SEMESTER</th>   
        <th>PENGAMPU</th>
        <th>NILAI</th>
        
      </tr>
    </thead>
     <?php 
    include "koneksi.php";
        $res = $koneksi->query("SELECT matakuliah.kd_kul, matakuliah.nama_kul, matakuliah.semester, matakuliah.pengampu, nilai.nilai from mhs, matakuliah, nilai where mhs.nim=nilai.nim and matakuliah.kd_kul=nilai.kd_kul");
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