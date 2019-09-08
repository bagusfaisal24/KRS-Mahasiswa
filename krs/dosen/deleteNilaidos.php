<?php
include "../koneksi.php";

//$_GET[id] untuk mengambil nilai dari address bar ?id=nilainya 

$query = "DELETE FROM nilai where id = '$_GET[id]'";

if( $koneksi->query($query) ) {

header("location:nilaidosen.php");

}else{

echo "Data tidak terhapus";
}

$koneksi->close();

?>

