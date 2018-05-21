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
	$satu=0;
	$dua=0;
	$tiga=0;
	$empat=0;
	$lima=0;
	?>
	<div class="menu">
		<div class="wrapper">
			<img src="image/logo.png" height="70px"; />
			<ul>
				
				<a href="home.php"><li>Home</li></a>
				<a href="prestasi.php"><li>Prestasi</li></a>
				<?php
				session_start();
				if(!isset($_SESSION['username'])){
					echo "<li> <a href='login.php' >Login</a> </li>";
				echo "<li> <a href='daftar.php' >Daftar</a> </li>";}
				else
					echo "<li> <a href='proses/logout.php' color='white';>Logout</a> </li>";
					echo "<li> <a href='proses/ujian.php' color='white';>Ujian</a> </li>";
				?>
				
			</ul>
		</div>
	</div>
		
	<div class="welcome">
		<div class="wrapper">
			<h2>Selamat Datang</h2>
			<p>Kerjakan Dengan JUJUR!!!</p>
		</div>
	</div>
	
	<div class="keterangan">
		<div class="wrapper">
			<form name="ujian" id="ujian" action="simpan_ujian.php" method="post">
				<fieldset>
					<p>Isilah data anda dengan benar</p>
					<table>
						<tr>
							<td><a>Nama:</a></td>
							<td><input type="text" name="nama" placeholder="Nama"></td>
						<tr>
						<tr>
							<td><a>Id:</a></td>
							<td><input type="text" name="id" placeholder="Id"></td>
						<tr>
					</table>
					
					<br>
					
					 <p>Seseorang akan membuka usaha dengan berjualan tanaman buah dan tanaman hias di kiosnya. Kios tersebut dapat menampung 120 pot. Modal yang ia miliki adalah Rp300.000,00 untuk membeli tanaman yang harganya Rp2.000,00/pot tanaman buah dan Rp3.000,00/pot tanaman hias. Jika keuntungan penjualan tanaman buah dan tanaman hias setiap potnya berturut-turut adalah Rp1.500,00 dan Rp2.000,00 maka keuntungan terbesar yang dapat diperoleh adalah .... <br>
					 <input type="radio" name="satu" value="1" checked>A. Rp210.000,00<br/>  
					 <input type="radio" name="satu" value="2">B. Rp200.000,00<br/>  
					 <input type="radio" name="satu" value="3">C. Rp180.000,00<br/>  
					 <input type="radio" name="satu" value="4">D. Rp165.000,00<br/>
					 </p>
					 
					 <br>
					 
					 <p> Sebenarnya, pemerintah melalui Direktorat Jenderal Cipta Karya sudah memiliki manual bangunan yang tahan gempa, bagaimana membangun rumah tinggal yang sanggup menahan guncangan gempa bumi. Dalam hal ini, pemerintah bisa menerapkan pengendalian melalui Izin Mendirikan Bangunan (IMB). Ketika membangun rumah, seseorang harus memenuhi struktur yang disyaratkan. Termasuk rumah-rumah yang didirikan oleh pengembang swasta. Rumah dan bangunan yang tidak memiliki IMB akan sulit terdeteksi apakah strukturnya sudah memenuhi syarat atau tidak. <br><br>Pernyataan berikut yang termasuk fakta tertera pada kalimat …. <br>
					 <input type="radio" name="dua" value="1" checked>A. Pertama<br/>  
					 <input type="radio" name="dua" value="2">B. Kedua<br/>  
					 <input type="radio" name="dua" value="3">C. Ketiga<br/>  
					 <input type="radio" name="dua" value="4">D. Keempat<br/>
					 </p>

					 <br>
					 
					 <p>Pialang = ...<br>
					 <input type="radio" name="tiga" value="1" checked>A. Guru<br/>  
					 <input type="radio" name="tiga" value="2">B. Pemburu<br/>  
					 <input type="radio" name="tiga" value="3">C. Juragan<br/>  
					 <input type="radio" name="tiga" value="4">D. Makelar<br/>
					 </p>

					 <br>
					 
					 <p>Agama : Atheis <br>
					 <input type="radio" name="empat" value="1" checked>A. Tali : Jatuh<br/>  
					 <input type="radio" name="empat" value="2">B. Menikah : Bujang<br/>  
					 <input type="radio" name="empat" value="3">C. Antena : Sinyal<br/>  
					 <input type="radio" name="empat" value="4">D. Buku : Bodoh<br/>
					 </p>

					 <br>
					 
					 <p>216 x 0,875 = <br>
					 <input type="radio" name="lima" value="1" checked>A. 189<br/>  
					 <input type="radio" name="lima" value="2">B. 187<br/>  
					 <input type="radio" name="lima" value="3?>">C. 999<br/>  
					 <input type="radio" name="lima" value="4">D. 123<br/>
					 </p>

					 <br>

					<input type="submit" name="enter" value="Enter">  
				</fieldset>
			</form>
		</div>
	</div>	
</body>
</html>