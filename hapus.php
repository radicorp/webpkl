<?php 
include "koneksi.php";
$id=$_GET['id'];
$query = mysql_query("delete from table_user where username = '$id'");
if ($query) {
	echo "data berhasil terhapus";
}
else 
{
	echo "data belum terhapus";
	exit;
}
echo "<br>";
echo "<a href='data_akun.php'>lihat data</a>";

 ?>