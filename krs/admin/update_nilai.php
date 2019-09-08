<?php 
include "../koneksi.php";
// $nim = $_POST['nim'];
// $kd_kul = $_POST['kd_kul'];
$nilai = $_POST['nilai'];
$id = $_POST['id'];
	
if (($nilai>=80 && $nilai<=100)) {
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
// $sql = mysqli_query($koneksi,"UPDATE nilai SET nilai='$nilai',huruf='$nilaihuruf' where kd_kul='$kd_kul' and nim='$nim'");
			
// 	header("location:datanilai.php");
$sql = mysqli_query($koneksi, "UPDATE nilai SET nilai='$nilai', huruf='$nilaihuruf' where id='$id'");
header("location: datanilai.php");

?>