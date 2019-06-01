<?php
	if(!defined('INDEXX')) die("");

	$data = mysqli_query($connection, "update jurusan set where id = '$ POST[id]'");

	if($data){
		echo " Data berhasi disimpan!";
		echo "<meta http-equiv='refresh' content='1;
		url=?hal=jurusan'>";
	}else{
		echo "Tidak dapat menyimpan data!<br>";
		echo mysqli_error();
		}
?>