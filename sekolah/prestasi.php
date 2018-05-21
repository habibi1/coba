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
			<a href="index.php"><img src="image/logo.png" height="70px"; /></a>
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
	
	
	<div class="badan">
		<div class="wrapper2">
			<h1><center>Data Prestasi Siswa</center></h1> <br/>
			
			<?php
				if(isset($_SESSION['username']))
					include('tambah.php');
			?>

			<br/>
			<br/>
			<center><table align="center" cellpadding="5" cellspacing="0" border="1">
				<tr bgcolor="#CCCCCC">
					<th>No.</th>
					<th>NIS</th>
					<th>Nama Lengkap</th>
					<th>Tingkat</th>
					<th>Prestasi</th>
					<th>Opsi</th>
				</tr>
				
				<?php
				//iclude file koneksi ke database
				include('proses/koneksi.php');
				
				//query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
				$query = mysql_query("SELECT * FROM prestasi ORDER BY siswa_nis DESC") or die(mysql_error());
				
				//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
				if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
					
					//jika data kosong, maka akan menampilkan row kosong
					echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
					
				}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
					
					//jika data tidak kosong, maka akan melakukan perulangan while
					$no = 1;	//membuat variabel $no untuk membuat nomor urut
					while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
						
						//menampilkan row dengan data di database
						echo '<tr>';
						echo '<td>'.$no.'</td>';	//menampilkan nomor urut
						echo '<td>'.$data['siswa_nis'].'</td>';	//menampilkan data nis dari database
						echo '<td>'.$data['siswa_nama'].'</td>';	//menampilkan data nama lengkap dari database
						echo '<td>'.$data['siswa_tingkat'].'</td>';	//menampilkan data kelas dari database
						echo '<td>'.$data['siswa_peringkat'].'</td>';	//menampilkan data jurusan dari database
						echo '<td><a href="edit.php?id='.$data['siswa_id'].'">Edit</a> / <a href="hapus.php?id='.$data['siswa_id'].'"   onclick="window.location.reload()" ;>Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
						echo '</tr>';
						
						$no++;	//menambah jumlah nomor urut setiap row
						
					}
					
				}
				?>
			</table> </center>
			<br><br>
	
		</div>
	</div>
	
	<div class="footer">
		<div class="wrapper">
		<p>2012 -2018  Lampung International School<br/>
Jl. Z.A. Pagar Alam No.93A Rajabasa, Bandar Lampung | Tlp: 0721-700931 | Fax: 0721-771556 | Kode Pos: 35142</p>
		</div>
	</div>
	

	
</body>
</html>