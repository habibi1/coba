<!DOCTYPE html>
<html>
<head>
	<title>data prestasi</title>
</head>
<body>
<center>
	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIS</td>
				<td>&nbsp;:&nbsp;</td>
				<td><input style="width:300px;height:25px;" placeholder="masukan nis" type="text" Name="nis" required></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>&nbsp;:&nbsp;</td>
				<td><input style="width:300px;height:25px;" placeholder="masukan nama" type="text" name="nama" size="30" required></td>
			</tr>
			<tr>
				<td>Tingkat</td>
				<td>&nbsp;:&nbsp;</td>
				<td>
					<select name="tingkat" required>
						<option value="">Pilih Tingkat</option>
						<option value="Kabupaten">Kabupaten</option>
						<option value="Provinsi">Provinsi</option>
						<option value="Nasional">Nasional</option>
						<option value="Internasional">Internasional</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Peringkat</td>
				<td>&nbsp;:&nbsp;</td>
				<td>
					<select name="peringkat" required>
						<option value="">Pilih Peringkat</option>
						<option value="Juara1">Juara 1</option>
						<option value="Juara2">Juara 2</option>
						<option value="Juara3">Juara 3</option>
						<option value="Favorit">Favorit</option>
						<option value="Harapan">Harapan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
<center>
<br><br>
<hr>