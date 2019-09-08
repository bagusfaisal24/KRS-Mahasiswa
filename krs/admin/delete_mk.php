<?php
include "../koneksi.php";

//$_GET[id] untuk mengambil nilai dari address bar ?id=nilainya 

$query = "DELETE FROM matakuliah where kd_kul = '$_GET[kd_kul]'";

if( $koneksi->query($query) ) {

header("location:data_MK.php");

}else{

echo "Data tidak terhapus";
}

$koneksi->close();

?>

