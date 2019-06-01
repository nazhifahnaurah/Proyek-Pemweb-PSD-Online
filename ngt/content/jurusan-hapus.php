<?php
	if(!defined('INDEX')) die("");

	$data = mysqli_query($connection, "delete from jurusan where id = '$ GET[id]'");

	if($data){
		echo " Data berhasi disimpan!";
		echo "<meta http-equiv='refresh' content='1;
		url=?hal=jurusan'>";
	}else{
		echo "Tidak dapat menyimpan data!<br>";
		echo mysqli_error();
		}
?>