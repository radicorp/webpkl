<?php 
session_start();
if ($_SESSION['level'] != '4'){
	header("location:index.php");
	}
include"koneksi.php";

$id=$_SESSION['username'];

$req=$_POST['request'];
$ket=$_POST['ket'];


$query=mysql_query("UPDATE  `db_admin`.`table_user` SET  `req` =  '$req' WHERE  `table_user`.`username` =  '$id';");
if ($query) {
echo "berhasil";
	
}
else
{
	echo "data gagal updata";
	exit;
}

 ?>
 