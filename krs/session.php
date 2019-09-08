<?php
session_start();
include "koneksi_log.php";
// Menyimpan Session
if (@$_SESSION['admin']) {
	header("Location: index.php");
	
}else if(@$_SESSION['mhs']){
	header("Location: indexmhs.php");
	
}elseif (@$_SESSION['dosen']) {
	header("Location: indexdos.php");
	 
}else{
	header("Location: loginasli.php");
}

?>