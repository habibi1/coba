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
	
	

		<br><h2><center>Registrasi Admin</center></h2><br>
		<form action="register-proses.php" method="post">
		<center><table align="center" cellpadding="3" cellspacing="0">
			<tr>
				<td>Nama</td>
				<td> : </td>
				<td><input placeholder="Masukan Nama" required="required" style="width:300px;height:25px;" type="text" Name="nama" required></td>
			</tr>
			<tr>
				<td>Username</td>
				<td> : </td>
				<td><input placeholder="Masukan Username" required="required" style="width:300px;height:25px;" type="text" name="username" size="30" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td> : </td>
				<td><input placeholder="Masukan Password" required="required" style="width:300px;height:25px;" type="password" name="password" size="30" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>  </td>
				<td><input type="submit" name="register" value="register"></td>
			</tr>
		</table></center>
	</form>
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
