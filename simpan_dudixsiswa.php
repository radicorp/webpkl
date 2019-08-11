 <?php 
 session_start();
 if ($_SESSION['level'] != '1'){
  header("location:index.php");
  }
 $id=$_SESSION['username'];
include "koneksi.php";
$nama=$_POST['nama'];
$pilihan=$_POST['kode'];
$pilihan1=$_POST['kode1'];
$pilihan2=$_POST['kode2'];
$query =mysql_query("INSERT INTO  `db_admin`.`table_dudixsiswa` (`username` ,`nama` ,`pilihan` ,`pilihan1` ,
`pilihan2`) VALUES ('$id', '$nama', '$pilihan', '$pilihan1', '$pilihan2')");

if($query){
  echo "data berhasil diinput";
}
else 
{
  echo " data gagal diinput";
  
  exit;
}
echo "<br>";
echo "<a href='data_akun.php'>lihat data </a>";

 ?>