<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<form action="register-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" Name="nama" required></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" size="30" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" size="30" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="register" value="register"></td>
			</tr>
		</table>
	</form>