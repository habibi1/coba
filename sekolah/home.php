<html>
<head>
	<meta charset="utf-8">
	<title>School</title>
	<link href="css/index.css" rel="stylesheet" type="text/css" />
	<style>

	</style>
</head>

<body>
	<?php
	include "proses/koneksi.php";
	?>
	<div class="menu">
		<div class="wrapper">
			<img src="image/logo.png" height="70px"; />
			<ul>
				
				<a href="index.php"><li>Home</li></a>
				<a href="prestasi.php"><li>Prestasi</li></a>
					<li> <a href='login.php' >Login</a> </li>
				<li> <a href='proses/logout.php' color='white';>Logout</a> </li>
				<li> <a href='register.php'>Register</a> </li>
				
			</ul>
		</div>
	</div>
	
	<div class="header">
		<div class="wrapper">
			<img src="image/header.jpg" width="100%" height="auto"; />
		</div>
	</div>
	
	<div class="welcome">
		<div class="wrapper">
			<h2>Selamat Datang</h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
			dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		</div>
	</div>
	
	<div class="keterangan">
		<div class="wrapper">
			<div class="here">
				<p>Anda di halaman : home</p>
			</div>
		</div>
	</div>
	
	<div class="badan">
		<div class="wrapper2">
			<div class="konten">
				<div class="bagian_konten">
					<div class="judul">
					<p>Judul Artikel Terkini</p>
					</div>
					<div class="isi">
					<img src="image/konten1.jpg" />
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<a href="#">Selengkapnya</a>
					</div>
				</div>
				<div class="bagian_konten">
					<div class="judul">
					<p>Judul Artikel Terkini</p>
					</div>
					<div class="isi">
					<img src="image/konten1.jpg" />
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<a href="#">Selengkapnya</a>
					</div>
				</div>
			</div>
			
			<div class="sidebar">
				<div class="bagian_sidebar">
					<div class="judul">
					<p>Jadwal</p>
					</div>
					<div class="isi">
						<h3>Kurban Idhul Adha</h3>
						<p>12 juli 2019</p>
						<hr/>
						<h3>Kurban Idhul Adha</h3>
						<p>12 juli 2019</p>
						<hr/>
						<h3>Kurban Idhul Adha</h3>
						<p>12 juli 2019</p>
						<hr/>
						<h3>Kurban Idhul Adha</h3>
						<p>12 juli 2019</p>
						<hr/>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="wrapper">
		<p>2012 -2018  Sekolah Darma Bangsa<br/>
Jl. Z.A. Pagar Alam No.93A Rajabasa, Bandar Lampung | Tlp: 0721-700931 | Fax: 0721-771556 | Kode Pos: 35142</p>
		</div>
	</div>
	

	
</body>
</html>