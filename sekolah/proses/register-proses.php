<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['register'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$nama		= $_POST['nama'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$username	= $_POST['username'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$password	= $_POST['password'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO users VALUES(NULL, '$nama', '$username', '$password' )") or die(mysql_error());
	echo '<script>location.href ="../register.php"</script>';
	 
}