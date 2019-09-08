<?php 
include "../koneksi.php";

$nim = $_POST['nim'];
$nama_mhs = $_POST['nama_mhs'];	
$alamat = $_POST['alamat'];

$sql = "INSERT INTO mhs(nim,nama_mhs,alamat) VALUES ('$nim','$nama_mhs',
	'$alamat')";

if ($koneksi->query($sql)===TRUE) {
	header("Location: datamhs.php");
}else{
	echo "DATA TIDAK BERHASIL DI INPUT";
}$koneksi->close();

 ?>