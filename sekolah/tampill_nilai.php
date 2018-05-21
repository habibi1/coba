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
	

		 
<div id=konten>
<center><br>
<h2>
Urutan Nilai Test 
</h2>
<hr><br><br>


	
		<?php
include('proses/koneksi.php');
$id=$_POST['id'];
$nama=$_POST['nama'];
$nilai=$_POST['nilai'];
$query = mysql_query("SELECT nama, id, nilai FROM nilai order by nilai desc");
?>

<table border=1 width=700>
<tr>
<th bgcolor=#005360><font color=white>no</font></th>
<th bgcolor=#005360><font color=white>id</font></th>
<th bgcolor=#005360><font color=white>nama</font></th>
<th bgcolor=#005360><font color=white>nilai</font></th>
</tr>
<?php
$no=1;
while ($row = mysql_fetch_assoc($query))
{
echo '<tr>';
echo '<td>' .$no. '</td>' ;
echo '<td>' .$row['id']. '</td>' ;
echo '<td>' .$row['nama']. '</td>' ;
echo '<td>' .$row['nilai']. '</td>';
echo'</tr>';
$no++;
}
?>
<table>
<br>
<a href=index.php> Kembali Ke Home </a>

</center>





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