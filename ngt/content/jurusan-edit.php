<?php
	if(!defined('INDEX')) die("");

	$data = mysqli_query($connection, "select * from jurusan where id='$ GET[id]'");
	$cek = mysqli_num_rows($data);
?>

<h2 class="judul">Edit Jurusan</h2>
<form method="post" action="?hal=jurusan-update">
	<input type="hidden" name="id" value="<?= $cek['id']?>">

	<div class="form=group">
		<label for="nama">Nama</label>
		<div class="input">
			<input type="text" id="nama" name="nama" value="<?=$cek['namajurusan']?>">
		</div>
	</div>
	<div class="form-group">
		<input type="submit" value="Simpan" class="tombol simpan">
		<input type="reset" value="Batal" class="tombol reset">
	</div>
</form>