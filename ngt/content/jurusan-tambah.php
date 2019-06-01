<?php
	if(!defined('INDEX')) die("");
?>

<h2 class="judul">Tambah Jurusan</h2>
<form method="post" action="?hal=jurusan insert">
	<style>
		.judul{
			color: #555;
			border-bottom: 1px solid #ccc;
			padding-bottom: 15 px;
		}
		.tombol{
			display: inline-block;
			max-width: 150px;
			padding: 15px 30px;
			color: #fff;
			text-decoration: none;
			background: #038ade;
			cursor: pointer;
		}
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
		<label for="nama">Nama</label>
		<div class="input"><input type="text" id="nama" name="nama"></div>
	</div>

	<div class="form-group">
		<input tpe="submit" value="Simpan" class="tombol simpan">
		<input type="reset" value="Batal" class="tombol reset">
	</div>

</form>