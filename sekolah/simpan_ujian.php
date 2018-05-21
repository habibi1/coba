<?php  

	//inlcude atau memasukkan file koneksi ke database
	include('proses/koneksi.php');
	
	if (isset($_POST['satu']))
{
  switch ($_POST['satu'])
  {
	 case '1':
		$satu = 4;
		break;

	 default:
		$satu = -1;
		break;
  }
}

if (isset($_POST['dua']))
{
  switch ($_POST['dua'])
  {
	 case '1':
		$dua = 4;
		break;

	 default:
		$dua = -1;
		break;
  }
}

if (isset($_POST['tiga']))
{
  switch ($_POST['tiga'])
  {
	 case '4':
		$tiga = 4;
		break;

	 default:
		$tiga = -1;
		break;
  }
}

if (isset($_POST['empat']))
{
  switch ($_POST['empat'])
  {
	 case '2':
		$empat = 4;
		break;

	 default:
		$empat = -1;
		break;
  }
}

if (isset($_POST['lima']))
{
  switch ($_POST['lima'])
  {
	 case '1':
		$lima = 4;
		break;

	 default:
		$lima = -1;
		break;
  }
}

$hasil=0;
$hasil=$satu+$dua+$tiga+$empat+$lima;

$nama=$_POST['nama'];
$id=$_POST['id'];
//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
$input = mysql_query("INSERT INTO nilai VALUES('$nama','$id','$hasil')") or die(mysql_error());
echo '<script>location.href ="tampill_nilai.php"</script>';

?>