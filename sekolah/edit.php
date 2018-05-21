<html>
<head>
	<title>School</title>
	<link href="css/index.css" rel="stylesheet" type="text/css" />
	<style>

	</style>
</head>

<body>

	<div class="menu">
		<div class="wrapper">
			<a href="index.php">
			<img src="image/logo.png" height="70px"; />
			</a>
			<ul>
				<a href="index.php"><li>Home</li></a>
				<a href="prestasi.php"><li>Prestasi</li></a>
				<?php
				session_start();
				if(!isset($_SESSION['username']))
					echo "<li> <a href='login.php' >Login</a> </li>";
				else
					echo "<li> <a href='proses/logout.php' color='white';>Logout</a> </li>";
				?>
				<?php
				if(isset($_SESSION['username']))
					echo "<li> <a href='register.php'>Register</a> </li>";
				?>
			</ul>
		</div>
	</div>
	

<center>

<br><h2>Simple CRUD</h2></br>
	
	<p><a href="index.php">Beranda</a> / <a href="prestasi.php">Tambah Data</a></p>
	
	<br><h3>Edit Data Siswa</h3></br>
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	//include atau memasukkan file koneksi ke database
	include('proses/koneksi.php');
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("SELECT * FROM prestasi WHERE siswa_id='$id'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
	
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><input style="width:300px;height:25px" type="text" name="nis" value="<?php echo $data['siswa_nis']; ?>" required></td>	<!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input style="width:300px;height:25px" type="text" name="nama" size="30" value="<?php echo $data['siswa_nama']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Tingkat</td>
				<td>:</td>
				<td>
					<select name="tingkat" required>
						<option value="">Pilih Tingkat</option>
						<option value="KABUPATEN" <?php if($data['siswa_tingkat'] == 'KABUPATEN'){ echo 'selected'; } ?>>KABUPATEN</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="PROVINSI" <?php if($data['siswa_tingkat'] == 'PROVINSI'){ echo 'selected'; } ?>>PROVINSI</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="NASIONAL" <?php if($data['siswa_tingkat'] == 'NASIONAL'){ echo 'selected'; } ?>>NASIONAL</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="IINTERNASIONAL" <?php if($data['siswa_tingkat'] == 'INTERNASIONAL'){ echo 'selected'; } ?>>INTERNASIONAL</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
					</select>
				</td>
			</tr>
			<tr>
				<td>Peringkat</td>
				<td>:</td>
				<td>
					<select name="peringkat" required>
						<option value="">Pilih Peringkat</option>
						<option value="Juara1" <?php if($data['siswa_peringkat'] == 'Juara1'){ echo 'selected'; } ?>>Juara 1</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="Juara2" <?php if($data['siswa_peringkat'] == 'Juara2'){ echo 'selected'; } ?>>Juara 2</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="Juara3" <?php if($data['siswa_peringkat'] == 'Juara3'){ echo 'selected'; } ?>>Juara 3</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="Favorit" <?php if($data['siswa_peringkat'] == 'Favorit'){ echo 'selected'; } ?>>Favorit</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="Harapan" <?php if($data['siswa_peringkat'] == 'Harapan'){ echo 'selected'; } ?>>Harapan</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
	</center>



<br><br>
	</div>
	
	<div class="footer">
		<div class="wrapper">
		<p>2012 -2018   Lampung International School<br/>
Jl. Z.A. Pagar Alam No.93A Rajabasa, Bandar Lampung | Tlp: 0721-700931 | Fax: 0721-771556 | Kode Pos: 35142</p>
		</div>
	</div>
	

	
</body>
</html>