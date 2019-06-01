<?php
	if(!defined('INDEXX')) die("");

	$halaman = array("dashboard", "siswa", "siswa-tambah", "siswa-insert", "siswa-edit", "siswa-update", "siswa-hapus", "jurusan", "jurusan-tambah", "jurusan-insert", "jurusan-edit", "jurusan-update", "jurusan-hapus");
	if(isset($_GET['hal'])) $hal = $_GET['hal'];
	else $hal = "dashboard";

	foreach($halaman as $h){
		if($hal == $h){
			include "content/$h.php";
			break;
		}
	}
?>