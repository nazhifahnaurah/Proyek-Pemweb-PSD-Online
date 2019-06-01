<html>
<head>
	<title>Hasil Kirim Data</title>
	<style type="text/css">
		p {color:#000099; font-family: verdana;} body{background-color: #333333;} table{margin:0 auto;width:50%;border-collapse: collapse;background: #ecf3eb;}th, td{border:1px solid #999;}
			th{padding:8px 0;background: #0cf; font-size: 30px;}
			td{padding:4px 4 px;}
		</style>
	</head>

	<body>
		<table align="center">
			<tr>
				<th height="50" colspan="2">Kartu Tanda Siswa <br> SMKN 1 KAMPUNG BARU</th>
			</tr>
			<tr>
				<td>
					<p><blockquote><pre>
						<?php
						$nisn=$POST['nisn'];
						$nama=$POST['nama'];
						$tl=$POST['tl'];
						$tgl=$POST['tgl'];
						$bln=$POST['bln'];
						$thn=$POST['thn'];
						$jk=$POST['jk'];
						$darah=$POST['darah'];
						$alamat=$POST['alamat'];
						$agama=$POST['agama'];
						$berlaku= 3 +date("Y");

						print 'nisn 	:';
						print $nisn;
						print '<br>Nama 	:';
						print $nama;
						print '<br>Tempat/Tgl Lahir 	:';
						print $tl;
						print ',';
						print $tgl;
						print '-';
						print $bln;
						print '-';
						print $thn;
						print '<br> Jenis Kelamin 	:';
						print $jk;
						print '<br>Golongan Darah 	:';
						print $gd;
						print '<br>Alamat 	:';
						print $alamat;
						print '<br>Agama	:';
						print $agama;
						?></pre></blockquote></p>
					</td>
					<td>
						<blockquote>
							<?php
							//cetak foto
							$sumber = $FILES['userfile']['tmp_name'];
							$target = $FILES['userfile']['name'];

					if(move_uploaded_file($sumber, $target)){
						echo "<img src='$target' height=300 width=200>";
					}else
					echo"Tidak Bisa Upload";
					?></blockquote>
				</td>
			</tr>
		</table><br>
		<table align ="center">
			<tr><td colspan="2"><center>
				<a href="siswa-tambah.html" title="KLIK" font color="white"><h3><===Balik ke Menu</h3></a></center></td></tr></table>

			</body>
			</html>
					
