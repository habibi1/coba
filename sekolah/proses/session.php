<?php
	include "koneksi.php";
	session_start();// Starting Session

	// check session yang telah di inisialisasikan
	if (!isset($_SESSION['username'])) {
		echo "
		<script>
			alert('Silahkan Login terlebih dahulu ya...');
			window.location = '../login.php';
		</script>";
	}
?>