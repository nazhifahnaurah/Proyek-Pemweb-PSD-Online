<?php
if(!defined('INDEX')) die("");
?>
<h2 class="judul">Tambah Siswa</h2>
<form method="post" action="?hal=siswa insert"enctype="multipart/form-data">
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
			width: 100%;
			
		}
		input[type=radio]{
			width: 50px;
		}
		.tombol.simpan{
			background: #038ade;
			margin-top: 5px;
		    background: #CCCCCC;
		    border: 0;
		    color: #676464;
		    padding: 9px;
		    font-size: 15px;
		    display: block;
		    text-align: center;
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
		<label for="nisn">NISN</label>
		<div class="input"><input type="text" id="nisn" name="nisn"></div>
	</div>
	<div class="form-group">
		<label for="nama">Nama</label>
		<div class="input"><input type="text" id="nama" name="nama"></div>
	</div>
	<div class="form-group">
		<label for="tanggal">Tanggal</label>
		<div class="input"><input type="date" id="tanggal" name="tanggal"></div>
	</div>
	<div class="form-group">
		<label for="jk">Jenis Kelamin</label>
		<input type="radio" id="jk" name="jk" value="L"> Laki-Laki
		<input type="radio" id="jk" name="jk" value="P">Perempuan
	</div>
	<div class="form-group">
		<label for="gd">Golongan Darah</label>
		<input type="radio" id="gd" name="gd" value="A"> A
		<input type="radio" id="gd" name="gd" value="B">B
		<input type="radio" id="gd" name="gd" value="AB">AB
		<input type="radio" id="gd" name="gd" value="O">O
	</div>
	<div class="form-group">
		<label for="Alamat">Alamat</label>
		<div class="input"><input type="text" id="alamat" name="alamat"></div>
	<div class="form-group">
		<label for="jurusan">Jurusan</label>
		<div class="input">
			<select id="jabatan" name="jurusan">
				<option value=""> -Pilih Jurusan- </option>
	<div class="form-group">
		<label for="Agama">Agama</label>
		<div class="input"><input type="text" id="Agama" name="Agama"></div>
	
	<div class="form-group">
		<label for="foto">Foto</label>
		<div class="input"><input type="file" id="foto" name="foto"></div>
	</div>

<?php
$queryjurusan = mysqli_query($connection, "select * from jurusan"); while($j = mysqli_fetch_array($queryjurusan)){
	echo "<option value='$j[id]'>$j[nama jurusan]</option>";
}
?>
</select>
</div>
</div>

<div class="form-group">
	<label for="keterangan">Keterangan</label>
	<div class="input"><textarea style="width: 100%" rows="5" id="keterangan" name="keterangan"></textarea></div>
</div>

<div class="form-group">
	
	<a href="cetakdata.php" class="tombol simpan">simpan</a>
	<input type="reset" value="batal" class="tombol reset">

</div>
</form>
