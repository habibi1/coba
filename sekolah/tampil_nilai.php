<?php
include('proses/koneksi.php');
$id=$_POST['id'];
$nama=$_POST['nama'];
$nilai=$_POST['nilai'];
$query = mysql_query("SELECT nama, id, nilai FROM nilai order by nilai desc");
?>

<table>
<tr>
<td>no</td>
<td>id</td>
<td>nama</td>
<td>nilai</td>
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

