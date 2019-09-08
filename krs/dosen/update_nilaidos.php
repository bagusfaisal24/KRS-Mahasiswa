<?php 
include "../koneksi.php";

$nim = $_POST['nim'];
$kode_kul = $_POST['kd_kul'];	
$nilai = $_POST['nilai'];

	$sql = mysqli_query($koneksi,"UPDATE nilai SET nilai='$nilai' where kd_kul='$kode_kul' and nim = '$nim'");
	if ($koneksi->query($sql)===TRUE){
		echo "Berhasil di edit";
		header("Location: nilaidosen.php");
	}else{
		echo "Gagal di edit";
		header("Location: updatenilaidosen.php");
	}
?>
