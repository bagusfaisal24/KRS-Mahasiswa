<?php 
include  "../koneksi.php";

	$kd_kul = $_POST['kd_kul'];
	$nama_kul = $_POST['nama_kul'];
	$semester = $_POST['semester'];
	$jam = $_POST['jam'];	
	$pengampu = $_POST['pengampu'];

	$sql = mysqli_query($koneksi,"UPDATE matakuliah SET kd_kul='$kd_kul', nama_kul='$nama_kul', jam='$jam', pengampu='$pengampu' WHERE kd_kul='$kd_kul'");

	header("location:data_MK.php");

 ?>