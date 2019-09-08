<?php 
include "../koneksi.php";

$nim = $_POST['nim'];
$kd_kul = $_POST['kd_kul'];	
$nilai = $_POST['nilai'];

$sql = "INSERT INTO nilai(nim,kd_kul,nilai) VALUES ('$nim','$kd_kul','$nilai')";

if ($koneksi->query($sql)===TRUE) {
	header("Location: nilaidosen.php");
}else{
	header("Location: inputnilaidosen.php");
}$koneksi->close();
 ?>