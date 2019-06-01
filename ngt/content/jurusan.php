<?php
if(!defined('INDEXX')) die("");
?>

<h2 class="judul">Data Jurusan</h2>
<a class="tombol" href="?hal=jurusan tambah">Tambah</a>

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
<table class="table">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Jurusan</th>
			<th>Aksi</th>
		</tr>
	</thead>
	</tbody>
<?php
	$data = mysqli_query($connection, "select * from jurusan order by id DESC ");
	$no = 0;
	while($data = mysqli_fetch_array($query)){
		$no++;
?>
		<tr>
			<td><?= $no ?></td>
			<td><?= $namajurusan ?></td>
			<td>
				<a class="tombol edit"
href="?hal=jurusan edit&id=<?= $data['id'] ?>"> Edit </a>
				<a class="tombol hapus"
href="?hal=jurusan hapus&id=<?= $data['id'] ?>"> Hapus </a>
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