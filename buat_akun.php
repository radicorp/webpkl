<?php 
include "koneksi.php";
$username=$_POST["username"];
$name=$_POST["name"];
$password	=md5($_POST["password"]);
$tingkat	=$_POST["tingkat"];
$query =mysql_query("INSERT INTO `table_user` (`nama`, `username`, `password`, `level`, `nip`, `jurusan`, `req`, `ket`, `foto_diri`, `asuransi`, `foto_kp`) VALUES ('$name', '$username', '$password', '$tingkat', '0', '', '0', '', '', '', '')");

if($query){
	echo "data berhasil diinput";
}
else 
{
	echo " data gagal diinput";
	echo $username;
	exit;
}
echo "<br>";
echo "<a href='data_akun.php'>lihat data </a>";

 ?>