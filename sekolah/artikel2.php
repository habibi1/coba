<html>
<head>
	<title>School</title>
	<link href="css/index2.css" rel="stylesheet" type="text/css" />
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
<p><h2><font color="#005360">Tips Sukses Dalam Ujian</font><h2></p><br>
<img height="300px" width="500px" align="center" src="image/sukses.jpg" /> </center><br>

<p>
#1 Mindset Juara<br><p>
Hal mendasarkan yang membedakan juara dan yang tidak juara terletak pada pola pikir. Pola pikir akan mewujudkan dalam tindak. Orang bisa sukses karena tindakannya dan semua tindakan itu berasal dari pola pikir sukses. Kunci Sukses 1 yang akan Anak Anda dapatkan adalah memiliki pola pikir pelajar sukses.
</p><br>
#2 Hancurkan Penghambat Diri<br><p>
80% masalah belajar disebabkan oleh emosi negatif. Anak sering merasa malas dan tidak termotivasi saat disuruh belajar. Tetapi, menjelang ujian mereka merasa takut tidak lulus, cemas, khawatir dan stress. Semua itu adalah penghambat yang harus dituntaskan. Kunci Sukses 2 yang saya bagikan adalah cara menghilangkan segala bentuk ketakutan, kecemasan, dan berbagai emosi negatifnya dalam belajar dan ujian.
</p><br>
#3 Percaya Diri Menghadapi Ujian<br><p>
Banyak anak yang mendapat nilai jelek karena kesalahan sepele seperti tidak teliti, ragu-ragu, atau mengubah jawaban yang sebenarnya sudah tepat. Kesalahan ini timbul dari rasa kurang percaya diri. Kunci Sukses 3 yang akan Anak Anda dapatkan adalah memiliki kepercayaan diri dalam menghadapi ujian.
</p><br>
#4 Disiplin dalam Belajar<br><br><p>
Tidak disiplin dan suka menunda-nunda dalam belajar merupakan hal yang merusak persiapan ujian. Untuk mengatasi ini, Anak harus memiliki Kunci Sukses 4 yaitu berdisplin diri dan berperang dengan penundaan.
</p><br>
#5 Strategi Manajemen Waktu<br><p>
Terlalu banyak bermain dan melupakan belajar membuat anak mendapat nilai jelek. Sebaliknya terlalu banyak belajar dan tidak bermain membuat anak menjadi stres. Perlu ada keseimbangan antara belajar dan bermain dalam masa ujian. Kunci Sukses 5 yang harus dimiliki Anak adalah cara mengatur waktu belajar dengan sistem yang tepat.
</p><br>
#6 Strategi Memahami Pelajaran<br><p>
Terlalu banyak materi yang dipelajari untuk ujian membuat Anak kelamaan dalam memahami pelajaran. Kunci Sukses 6, menguasai strategi menemukan poin-poin penting dalam pelajaran sehingga Anak Anda bisa memahami pelajaran dengan mudah dalam waktu singkat.
</p><br>
#7 Strategi Menghafal Pelajaran<br><p>
Menghafal adalah bagian dari pembelajaran di sekolah. Menghafal akan menjadi mudah jika tahu caranya. Kunci Sukses 7 yang akan Anak Anda pelajari adalah cara menghafal daftar kata berurut, rumus, kata asing (cont: pelajaran biologi), dan proses (cont: metamorfosis).
</p><br>
#8 Berlatih untuk Menghadapi Ujian<br><p>
Semakin banyak berlatih Anak semakin siap menghadapi ujian. Bagaimana berlatih yang tepat untuk melewati masa ujian dengan sukses? Jawabannya ada di Kunci Sukses 8.
</p><br>
#9 Strategi Mengerjakan Soal<br><p>
Hal yang sering kali dilupakan oleh anak adalah cara mengerjakan soal yang tepat saat ujian. Kunci Sukses 9 yang akan Anak Anda miliki adalah cara mengerjakan soal ujian dengan tepat agar mendapatkan nilai maksimal

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