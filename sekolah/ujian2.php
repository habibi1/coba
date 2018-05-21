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
	
	<div class="header">
		<div class="wrapper">
			<img src="image/header.jpg" width="100%" height="auto"; />
		</div>
	</div>
	
	<div class="welcome">
		<div class="wrapper">
			<h2>Selamat Datang</h2>
			<p>Lampung International School adalah pembelajaran pendidikan terbaik yang ada di wilayah Provinsi Lampung, di dalam website ini menyediakan
			aplikasi test secara online untuk mengetahui kemampuan pembelajaran yang anda miliki.</p>
		</div>
	</div>
	
 <form action="" method="post">  
 <input type="radio" name="satu" value="<?php $satu=4?>" checked>Apel<br/>  
 <input type="radio" name="satu" value="<?php $satu=-1?>">Jeruk<br/>  
 <input type="radio" name="satu" value="<?php $satu=-1?>">Semangka<br/>  
 <input type="radio" name="satu" value="<?php $satu=-1?>">Salak<br/>
 </form>
 <br>
 <form action="" method="post">  
 <input type="radio" name="dua" value="<?php $dua=-1?>" checked>Apel<br/>  
 <input type="radio" name="dua" value="<?php $dua=-1?>">Jeruk<br/>  
 <input type="radio" name="dua" value="<?php $dua=-1?>">Semangka<br/>  
 <input type="radio" name="dua" value="<?php $dua=4?>">Salak<br/>
 </form>
<br>
 <form action="" method="post">  
 <input type="radio" name="tiga" value="<?php $tiga=-1?>" checked>Apel<br/>  
 <input type="radio" name="tiga" value="<?php $tiga=-1?>">Jeruk<br/>  
 <input type="radio" name="tiga" value="<?php $tiga=4?>">Semangka<br/>  
 <input type="radio" name="tiga" value="<?php $tiga=-1?>">Salak<br/>
 </form>
<br>
  <form action="" method="post">  
 <input type="radio" name="empat" value="<?php $empat=-1?>" checked>Apel<br/>  
 <input type="radio" name="empat" value="<?php $empat=-1?>">Jeruk<br/>  
 <input type="radio" name="empat" value="<?php $empat=-1?>">Semangka<br/>  
 <input type="radio" name="empat" value="<?php $empat=4?>">Salak<br/>
 </form>
<br>
 <form action="" method="post">  
 <input type="radio" name="lima" value="<?php $lima=-1?>" checked>Apel<br/>  
 <input type="radio" name="lima" value="<?php $lima=4?>">Jeruk<br/>  
 <input type="radio" name="lima" value="<?php $lima=-1?>">Semangka<br/>  
 <input type="radio" name="lima" value="<?php $lima=-1?>">Salak<br/>
 </form>
<br>

<input type="submit" name="enter" value="Enter">  
	
<?php  
 if(isset($_POST['enter']))  
 {  
   echo $_POST['buah'];  
 }  
 ?> 



<div class="footer">
		<div class="wrapper">
		<p>  Lampung International School<br/>
Jl. Z.A. Pagar Alam No.93A Rajabasa, Bandar Lampung | Tlp: 0721-700931 | Fax: 0721-771556 | Kode Pos: 35142</p>
		</div>
	</div> 
</body>
</html>