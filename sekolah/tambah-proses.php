<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('proses/koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$nis		= $_POST['nis'];	//membuat variabel $nis dan datanya dari inputan NIS
	$nama		= $_POST['nama'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$tingkat	= $_POST['tingkat'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$peringkat	= $_POST['peringkat'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO prestasi VALUES(NULL, '$nis', '$nama', '$tingkat', '$peringkat')") or die(mysql_error());
	echo '<script>location.href ="prestasi.php"</script>';
	 
}