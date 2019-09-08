<?php
include "../koneksi.php";

//$_GET[id] untuk mengambil nilai dari address bar ?id=nilainya 

$query = "DELETE FROM mhs where nim = '$_GET[nim]'";

if( $koneksi->query($query) ) {

header("location:datamhs.php");

}else{

echo "Data tidak terhapus";
}

$koneksi->close();

?>

