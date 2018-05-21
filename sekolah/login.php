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
	

?>
		<br><h2><center>Login Admin</center></h2><br>
		<form action="proses/proses_login.php" method="POST">
		<center><table align="center" width="500px">
		<tr> <td> Username : </td><td>
			<input style="width:300px;height:25px;" type="text" name="username" required=required placeholder="Username"> </td> </tr>
		<tr> <td> Password : </td><td>
			<input style="width:300px;height:25px;" type="password" required=required name="password" placeholder="Password"> </td></tr>
		<tr><td></td><td>
			<button style="width:50px;height:25px;" type="submit" name="button">Submit</button></tr></td>
		</table> </center>
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