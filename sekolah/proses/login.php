<?php
session_start();
if(isset($_SESSION['username'])) {
	header("location:index.php");
}
?>

<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<form action="proses/proses_login.php" method="POST">
			<input type="text" name="username" placeholder="Username"> <br>
			<input type="password" name="password" placeholder="Password"> <br>
			<button type="submit" name="button">Submit</button>
		</form>
	</body>
</html>
