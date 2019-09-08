<?php 
include  "../koneksi.php";

	$nim = $_POST['nim'];
	$nama_mhs = $_POST['nama_mhs'];
	$alamat = $_POST['alamat'];
	

	$sql = mysqli_query($koneksi,"UPDATE mhs SET nim='$nim', nama_mhs='$nama_mhs', alamat='$alamat'  WHERE nim='$nim'");
	header("location: datamhs.php");

 ?>