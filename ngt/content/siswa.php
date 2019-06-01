<?php
	if(!defined('INDEX')) die("");
?>
<head>
<h2 class="judul">Data Siswa</h2>
<a class="tombol" href="?hal=siswa tambah">Tambah</a>
<style>
		.judul{
			color: #555;
			border-bottom: 1px solid #ccc;
			padding-bottom: 15 px;
		}
		.table{
			width: 100%;
			margin-top: 20px;
			border-collapse: collapse;
		}
		.table th, .table td{
			border: 1px solid #ccc;
			padding: 10px;
		}
		.table th{
			background: #eee;
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
		.tombol.edit, .tombol.hapus{
			padding: 10px 15px;
			font-size: 12px;
		}
		.tombol.hapus{
			background: #fc4c4c;
		}
	</style>
</head>
<table class="table">
	<thead>
		<tr>
			<th>No</th>
			<th>Foto</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal lahir</th>
			<th>Jurusan</th>
			<th>Keterangan Aksi</th>
		</tr>
		</thead>
	</tbody>
<?php
$query = mysqli query($connection, "SELECT * FROM siswa LEFT JOIN jurusan ON siswa.id jurusan=jurusan.id jurusan ORDER BY siswa.id siswa DESC");
$no = 0;
while($data = mysqli fetch array($query)){
	$no++;
?>
	<tr>
		<td><?= $no?></td>
		<td><img src = "images/<?= $data['foto']?>" width="100"></td>
		<td><?= $data['nama siswa'] ?></td>
		<td><?= $data['jenis kelamin'] ?></td>
		<td><?= $data['tgl lahir'] ?></td>
		<td><?= $data['nama jurusan'] ?></td>
				<td>
			<a class="tombol edit" href="?hal=siswa edit&id=<?= $data['id siswa'] ?>"> Edit</a>
			<a class="tombol hapus" href="?hal=siswa hapus&id=<?= $data['id siswa'] ?>&foto==<?=$data['foto']?>">Hapus</a>
		</td>
	</tr>
	<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td height="0" align="left"><a href="indexx.php"><font size="-1">sebelumnya</font></a></td>
	</tr>
</table>
	<?php
}
?>
</tbody>
</table>