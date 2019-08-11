<?php 
include "koneksi.php";
session_start();
$id=$_SESSION['username'];
$query = mysql_query("delete from table_dudixsiswa where username = '$id'");
if ($query) {
	echo "data berhasil terhapus";
}
else 
{
	echo "data belum terhapus";
	exit;
}
echo "<br>";
echo "<a href='data.php'>lihat data</a>";

 ?>