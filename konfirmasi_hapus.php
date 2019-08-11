<?php 
include "koneksi.php";
$id=$_GET['id'];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>konfirmasi hapus</title>
 </head>
 <body>
<br>
<form action="hapus.php?id=<?php echo "$id";?>" method="post">
	<table>
<?php 
$data=mysql_query("select * from table_user where username ='$id'");
while ($row =mysql_fetch_array($data)) {
 ?>
	<tr>
		<td>apakah anda yakin akan mengahapus </td>
		<td><input type="text" name="judul" value="<?php echo "$row[username]"; ?>"></td>
	</tr>
	<tr>
		<td><input type="submit" value="hapus" > <input type="button" value="batal" onclick="window.location.href='data.php'"></td>
	</tr>
	</table>
	<?php 
	}
	 ?>
</form>
 </body>
 </html>