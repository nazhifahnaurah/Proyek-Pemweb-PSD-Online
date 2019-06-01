<?php
if(!defined('INDEX')) die("");

$query = mysqli_query($connection, "select * from siswa where id siswa='$GET[id]'");
$data = mysqli_fetch_array($query);
?>

<h2 class="judul">Tambah Siswa</h2>
<form method="post" action="?hal=siswa update" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?= $data['id siswa']
	?>">
	<style>
		.form-group{
			clear: both;
		}
		.form-group label{
			display: :block;
			padding: 15px 0;
			float: left;
			width: 30%;
			font-weight: bold;
		}
		.form-group input{
			display: block;
			width: 50%;
			float: left;
		}
		input[type=radio]{
			width: 50px;
		}
		.tombol.simpan{
			background: #038ade;
		}
		.tombol.reset{
			background: #fb8307;
		}
		@media (max-width: 700px){
			.form-group label, .form-group .input {
				width: 100%
			}
		}
	</style>

	<div class="form-group">
		<label for="foto">Foto</label>
		<div class="input">
			<input type="file" id="foto" name="foto">
			<img src="images/<?= $data['foto'] ?>" width="150">
		</div>
	</div>

	<div class="form-group">
		<label for="nama">Nama</label>
		<div class="input">
			<input type="text" id="nama" name="nama" value="<?=$data['nama siswa']?>">
		</div>
	</div>

	<div class="form-group">
		<label for="jk">Jenis Kelamin</label>
		<?php
		if($data['jenis kelamin'] == "L"){
			$1 = " checked";
			$p = "";
		}else{
			$1 = "";
			$p = "checked";
		}
		?>
		<input type="radio" id="jk" name="jk" value="L" <?= $l ?>>Laki-laki
		<input type="radio" id="jk" name="jk" value="P" <?= $p ?>>Perempuan
	</div>

	<div class="form-group">
		<label for="tanggal">Tanggal</label>
		<div class="input">
			<input type="date" id="tanggal" name="tanggal" value="<?=$data['tgl lahir'] ?>">
		</div>
	</div>

	<div class="form-group">
		<label for="jurusan">Jurusan</label>
		<div class="input">
			<select id="jurusan" name="jurusan">
				<option value=""> -Pilih Jurusan- </option>
				<?php
				$queryjurusan = mysqli_query($connection, "select * from jurusan");
				while($j = mysqli_fetch_array($queryjurusan)){
					echo "<option value='$j[id]'";
					if($j['id'] == $data['id']) echo "selected";
					echo ">$j[nama jurusan]</option>";
				}
				?>
			</select>
		</div>
	</div>
	
	<div class="form-group">
		<label for="keterangan">Keterangan</label>
		<div class="input">
			<textarea style="width:100%" rows="5" id="keterangan" name="keterangan"><?=$data['keterangan']?></textarea>
		</div>
	</div>

<div class="form-group">
	<input type="submit" value="simpan" class="tombol simpan">
	<input type="reset" value="batal" class="tombol reset">
</div>
</form>