<?php
	include "koneksi.php";
	session_start(); // Starting Session
	$username = $_POST['username'];
	$password = $_POST['password'];
	$perintah = "select * from users WHERE username = '$username' AND password = '$password'";
	$hasil = mysql_query($perintah);
	$row = mysql_fetch_array($hasil);
	if ($row['username'] == $username AND $row['password'] == $password) {
	session_start(); // memulai fungsi session
	$_SESSION['username'] = $username;
	header("location:../index.php"); // jika berhasil login, maka masuk ke file home.php
	}
	else {
	echo "Gagal Masuk"; // jika gagal, maka muncul teks gagal masuk
	}
?>
