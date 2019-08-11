<?php 
session_start();
if ($_SESSION['level'] != '2'){
	header("location:index.php");
	}
include "koneksi.php";
$data =mysql_query("select * from table_user");
 ?>
<h1> <a href="dashboard_admin.php">home</a> <a href="buat.php">buat akun </a></h1>
<table border="1" cellspacing="0" width="500">
<tr >
	<td width="30" align="center">no</td>
	<td align="center">nama</td>
	<td align="center">username</td>
	<td align="center">password</td>
	<td align="center">level</td>
	<td align="center">edit</td>
	<td align="center">del</td>
</tr>

<?php 
$x=1;
while ($row =mysql_fetch_array($data)) {
	$id=$row['username'];
	echo "<tr><td>".$x."</td>";
	echo "<td>".$row['nama']."</td>";
	echo "<td>".$row['username']."</td>";
	echo "<td>".$row['password']."</td>";
	echo "<td>".$row['level']."</td>";
	echo "<td align='center'> <a href='form_edit.php?id=$id'>edit</a></td>";
	echo "<td align='center'> <a href='konfirmasi_hapus.php?id=$id'>hapus</a></td></tr>";
	$x++;

}
 ?>
</table>