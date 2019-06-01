<?php
if(!defined('INDEX')) die("");

$foto = $files['foto']['name'];
$lokasi=$files['foto']['tmp name'];
$tipefile=$files['foto']['type'];
$ukuranfile=$files['foto']['size'];

$error="";
if($foto == ""){
	$query = mysqli_query($connection, "update siswa set 
		nama siswa = '$POST[nama]',
		jenis kelamin = '$POST[jk]',
		tgl lahir = '$post[tanggal]',
		id = '$POST[jurusan]',
		keterangan = '$POST[keterangan]'
		where id siswa='$POST[id]'");
}else{
	if($tipefile != "image/jpeg" and $tipefile !="image/jpg" and $tipefile !="image/png"){
		$error="Tipe File Tidak Didukung!";
	}elseif($ukuranfile >=1000000){
		echo $ukuranfile;
		$error = "Ukuran File Terlalu Besar (lebih dari 1mb)!";
	}else{
		$query = mysqli_query($connection, "select * from siswa where id siswa='$POST[id]'");
		$data = mysqli_fetch_array($query);
		if(file exists("images/$data[foto]")) unlink("images/$data[foto]");

		move_uploaded_file($lokasi, "images/".$foto);
		$query = mysqli_query($connection, "update siswa set
			foto = '$foto',
			nama siswa = '$POST[nama]',
			jenis kelamin = '$POST[jk]',
			tgl lahir = '$POST[tanggal]',
			id = '$post[jurusan]',
			keterangan = '$POST[keterangan]'
			where id siswa='$POST[id]'");
	}
}
if($error !=""){
	echo $error;
	echo "<meta http-equiv='refresh' content='2; url=?hal=siswa tambah'>";
}elseif($query){
	echo "Data Berhasil Disimpan!";
	echo "<meta http-equiv='refresh' content='1; url=?hal=siswa'>";
}else{
	echo "Tidak Dapat Menyimpan Data!<br>";
	echo mysqli_error();
}
?>