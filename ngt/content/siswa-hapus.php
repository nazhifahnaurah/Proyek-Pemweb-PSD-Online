<?php
if(!defined('INDEX')) die("");

if(file exists("images/$GET[foto]")) unlink("images/$GET[foto]");
$query = mysqli_query($connection, :delete from siswa where id siswa='$GET[id]'");

	if($query){
		echo "Data Berhasil Dihapus!";
		echo "<meta http-equiv='refresh' content='1; url=?hal=siswa'>";
	}else{
		echo "Tidak Dapat Menyimpan Data!<br>";
		echo mysqli_error();
	}
?>