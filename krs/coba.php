<?php 

class database{
	private $host;
	private $username;
	private $password;
	private $db;


	function __construct($a,$b,$c,$d){
		$this->host = $a;
		$this->username = $b;
		$this->password = $c;
		$this->db=$d;
	}

	function sambungan(){
		mysql_connect($this->host,$this->username,$this->password);
		mysql_select_db($this->$db);
	}

	function tambahdata($nim,$nama_mhs){
		$query = "inser into mhs (nim,nama_mhs) values ('$nim','$nama_mhs')";
		$hasil = mysql_query($query);
	}

	function getdata($nim){
		$query = "select *from mhs where nim=$nim";
		$hasil = mysql_query($query);

		while ($data = mysql_fetch_array($getdata)) {
			$hasil['nim'] = $data[0];
			$hasil['nama_mhs'] = $data[1];
		}
		return $hasil;
	}

	function tampildata(){
		$query = "select *from mhs";
		$hasil = mysql_query($query);

		$i = 0;

		while ($data = mysql_fetch_array($hasil)) {
			echo "<tr>";
			echo "<td>".$i"</td>";
			echo "<td>".$data['0']"</td>";
			echo "<td>".$data['1']"</td>";
			echo "<td> <a href ='pemanggil.php?aksi=edit&nim=".$data['0']"'>Edit</a>
						<a href='pemanggil.php?aksi=hapus&nim=".$data['1']"'>Hapus</a>
				  </td>";
		}
	}


}




 ?>