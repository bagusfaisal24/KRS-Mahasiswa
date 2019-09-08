<?php 
include "../koneksi.php";

$kd_kul = $_POST['kd_kul'];
$nama_kul = $_POST['nama_kul'];
$semester = $_POST['semester'];
$jam = $_POST['jam'];
$pengampu = $_POST['pengampu'];	

$sql = "INSERT INTO matakuliah(kd_kul,nama_kul,semester,jam,pengampu) VALUES ('$kd_kul','$nama_kul',
	'$semester','$jam','$pengampu')";

if ($koneksi->query($sql)===TRUE) {
	header("Location:data_MK.php");
}else{
	echo "Eror: ".$sql."<br>".$koneksi->eror;
}$koneksi->close();

 ?>