<?php
include 'koneksi.php';
	$kode_kul=$_GET['kd_kul'];
	$sql="insert into krs (kd_kul) values('$kode_kul')";
	if($koneksi->query($sql)===TRUE){
		echo "<script language='javascript'>
		alert('Input KRS berhasil!');
		document.location='datakrs.php';
		</script>";
	}else{
	echo "Data yang dipilih tidak ada";
}
?>

