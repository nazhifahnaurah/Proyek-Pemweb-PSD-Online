<!DOCTYPE html>
<html>
<title>Sabana</title>
</head>
<body background = "abu.jpg">
<center>
    <table bgcolor="#F5FFFA" border="2" cellpadding="1" cellspacing="2" style="border-collapse:separate" width="500">
        <tr>
            <td colspan="5" align="center"><h2>TRANSAKSI PEMBELIAN</h2></td>
        </tr>
        <tr bgcolor="#EB625B" align="center">
            <td><b>Nomor</b></td>
            <td><b>Nama</b></td>
            <td><b>Harga</b></td>
            <td><b>Quantity</b></td>
            
            <tr>
				<th>1</th>
				<th>Paket 1</th>
				<th><input type="text" name="harga" id="algoritma" size="7" value="45000" readonly></th>
				<th><input type="number" name="jumlah_algoritma" id="harga_algoritma" size="7" value="0" onchange="total()"></th>
			</tr>

			<tr>
				<th>2</th>
				<th>Paket 2</th>
				<th><input type="text" name="harga" id="javascript" size="7" value="35000" readonly></th>
				<th><input type="number" name="jumlah_javascript" id="harga_javascript" size="7" value="0" onchange="total()"></th>
			</tr>

			<tr>
				<th>3</th>
				<th>Paket 3</th>
				<th><input type="text" name="harga" id="php" size="7" value="30000" readonly></th>
				<th><input type="number" name="jumlah_php" id="harga_php" size="7" value="0" onchange="total()"></th>
            </tr>
            
            <tr>
				<th>4</th>
				<th>Paket 4</th>
				<th><input type="text" name="harga" id="php" size="7" value="25000" readonly></th>
				<th><input type="number" name="jumlah_php" id="harga_php" size="7" value="0" onchange="total()"></th>
			</tr>

            <tr>
				<th>5</th>
				<th>Paket 5</th>
				<th><input type="text" name="harga" id="php" size="7" value="28000" readonly></th>
				<th><input type="number" name="jumlah_php" id="harga_php" size="7" value="0" onchange="total()"></th>
            </tr>
            
            <tr>
				<th>6</th>
				<th>Paket 6</th>
				<th><input type="text" name="harga" id="php" size="7" value="34000" readonly></th>
				<th><input type="number" name="jumlah_php" id="harga_php" size="7" value="0" onchange="total()"></th>
            </tr>
            
            <tr>
				<th>7</th>
				<th>Paket 7</th>
				<th><input type="text" name="harga" id="php" size="7" value="37000" readonly></th>
				<th><input type="number" name="jumlah_php" id="harga_php" size="7" value="0" onchange="total()"></th>
            </tr>
            
            <tr>
				<th>8</th>
				<th>Paket 8</th>
				<th><input type="text" name="harga" id="php" size="7" value="38000" readonly></th>
				<th><input type="number" name="jumlah_php" id="harga_php" size="7" value="0" onchange="total()"></th>
            </tr>
            
            <tr>
				<th>9</th>
				<th>Paket 9</th>
				<th><input type="text" name="harga" id="php" size="7" value="50000" readonly></th>
				<th><input type="number" name="jumlah_php" id="harga_php" size="7" value="0" onchange="total()"></th>
            </tr>
            
            <tr>
				<th>3</th>
				<th>Paket 10</th>
				<th><input type="text" name="harga" id="php" size="7" value="70000" readonly></th>
				<th><input type="number" name="jumlah_php" id="harga_php" size="7" value="0" onchange="total()"></th>
            </tr>
            
			<tr>
				
				<th colspan="3" style="text-align:right">jumlah total</th>
				<th><input type="text" name="total_jumlah" id="total" size="7" value=" " readonly></th>
			</tr>
		</table>
		<br><br>
		<input type="button" onclick="window.print()" value="cetak">

		<script type="text/javascript">
		function total() {
		var vpaket1 = 45000 * parseInt(document.getElementById('harga_paket1').value);
		var vpaket2 = 35000 * parseInt(document.getElementById('harga_paket2').value);
        var vpaket3 = 30000 * parseInt(document.getElementById('harga_paket3').value);
        var vpaket4 = 25000 * parseInt(document.getElementById('harga_paket4').value);
        var vpaket5 = 28000 * parseInt(document.getElementById('harga_paket5').value);
        var vpaket6 = 34000 * parseInt(document.getElementById('harga_paket6').value);
        var vpaket7 = 37000 * parseInt(document.getElementById('harga_paket7').value);
        var vpaket8 = 38000 * parseInt(document.getElementById('harga_paket8').value);
        var vpaket9 = 50000 * parseInt(document.getElementById('harga_paket9').value);
        var vpaket10 = 70000 * parseInt(document.getElementById('harga_paket10').value);


		var jumlah_harga = vpaket1 + vpaket2 + vpaket3 + vpaket4 + vpaket5 + vpaket6 + vpaket7 + vpaket8 + vpaket9 + vpaket10 ;

		document.getElementById('total').value = jumlah_harga;
		}
		
        </script>
        
    </table>
</center>
</body>
</html> 
