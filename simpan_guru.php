<?php 
if ($_SESSION['level'] != ''){
	header("location:index.php");
	}
include"koneksi.php";


$nama=$_POST['nama'];
$nip=$_POST['nip'];
$jurusan=$_POST['jurusan'];


$id=$_GET['id'];



$query=mysql_query("UPDATE `table_user` SET `nama` = '$nama', `nip` = '$nip', `jurusan` = '$jurusan' WHERE `table_user`.`username` = '$id'");
if ($query) {
header("location:data_akun.php");
	
	
}
else
{
	echo "data gagal updata";
	exit;
}

 ?>
 