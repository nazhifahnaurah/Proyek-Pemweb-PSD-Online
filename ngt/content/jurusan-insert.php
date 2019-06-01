<?php
	if(!defined('INDEX')) die("");

	$data = mysqli_query($connection, "insert into jurusan set namajurusan = '$ POST[nama]'
	");

	if($data){
		echo " Data berhasi disimpan!";
		echo "<meta http-equiv='refresh' content='1;
		url=?hal=jurusan'>";
	}else{
		echo "Tidak dapat menyimpan data!<br>";
		echo mysqli_error();
		}
?>