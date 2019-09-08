<?php 
include "../koneksi.php";

$nim = $_POST['nim'];
$kd_kul = $_POST['kd_kul'];	
$nilai = $_POST['nilai'];
$nilaihuruf = $_POST['nilai'];
	

if (($nilai>=80) && ($nilai<=100)) {
	$nilaihuruf = "A";
}elseif (($nilai>=60) && ($nilai<80)) {
	$nilaihuruf =  "B";
}elseif (($nilai>=40)&& ($nilai<60)) {
	$nilaihuruf = "C";
}elseif (($nilai>=20)&&($nilai<40)) {
	$nilaihuruf = "D";
}else{
	$nilaihuruf = "E";
}


$sql = "INSERT INTO nilai(nim,kd_kul,nilai,huruf) VALUES ('$nim','$kd_kul','$nilai',
	'$nilaihuruf')";

if ($koneksi->query($sql)===TRUE) {
	header("Location: datanilai.php");
}else{
	echo "DATA TIDAK BERHASIL DI INPUT";
}$koneksi->close();

 ?>