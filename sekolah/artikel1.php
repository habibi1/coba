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
	
	
	<?php
session_start();
if(isset($_SESSION['username'])) {
	header("location:index.php");
}
?>
		 
<div id=konten>
<center><br>
<p><h2><font color="#005360">Keunggulan Test Online Dengan Tertulis</font><h2></p><br>
<img align="center" src="image/peserta.jpeg" /> </center><br>

<p>
Penilaian/assesment berdasarkan kompetensi merupakan suatu proses pengumpulan bukti secara sistematis serta pembuatan keputusan tentang perilaku seseorang terhadap standar kompetensi yang telah ditetapkan. Penilaian sebaiknya saling berhubungan antara keterampilan, pengetahuan dan sikap dan penerapan yang berguna, candidate/peuji harus menunjukkan bahwa mereka kompeten dalam semua tugas,tidak hanya sebagian saja . Penilaian berdasar kompetensi bukan hanya tentang unjuk kerja, pengetahuan dan pemahaman adalah fundamental untuk unjuk kerja dan keperluan untuk dinilai. Assesment dalam pembelajaran adalah suatu proses atau upaya formal pengumpulan informasi yang berkaitan dengan variabel-variabel penting pembelajaran sebagai bahan dalam pengambilan keputusan oleh guru untuk memperbaiki proses dan hasil belajar siswa.
Setelah kita melakukan evaluasi di sman 1 pakusari tersebut menurut saya assesmen itu mempunyai keunggulan dan kelemahan dari siswanya. Ternyata dari satu kelas tersebut banyak kendala-kendalanya juga dalam sisi cara mengerjakanya. Artinya siswa tidak dapat memilih jawaban lagi apabila jawaban tersebut sudah dijawab sebelumnya. Siswa harus benar-benar menjawab dengan benar dan didukung dengan komputer atau internet yang baik. dalam segi penilaian, siswa dapat melihat langsung hasil dari pekerjaanya dari assesmen tersebut. Jadi guru juga harus mempersiapkan sebelumnya terutama internetnya dan soal  disiapkan agar tidak terjadi kesalahan kesalahan lagi.
</p><br>
KEUNGGULAN UJIAN ONLINE DARI SISWA TERSEBUT ADALAH:<br>
1.      Siswa dapat melihat langsung mana soal yang benar dan yang salah<br>
2.      Dapat memberi dampak positif dari siswa atau perkembangan kepribadian seseorang. <br>
3.      Membiasakan, dan melatih peserta didik untuk berbuat jujur, karena mereka dituntut  untuk jujur dan objektif dalam melakukan penilaian.	
<br><br><center> <a href="index.php"> back to home </a></center>
</div>	


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