<?php 
session_start();
if ($_SESSION['level'] != '3'){
	header("location:index.php");
	}
	include "koneksi.php";
include "koneksi.php";
$id=$_SESSION['username'] ;
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>masukan data </title>
 </head>
 <body>
 <form action="simpan_edit.php?id=<?php echo "$id"; ?>" method ="post">
 <table>
 <?php 
 $data =mysql_query("select * from table_user where username ='$id'");
 while ($row=mysql_fetch_array($data)) {
  ?>
  <tr>
  	<td>nama</td>
  	<td><input type="text" name="nama" value="<?php echo "$row[nama]"; ?>"></td>
  </tr> 
   <tr>
  	<td>nip</td>
  	<td><input type="text" name="nip" value="<?php echo "$row[nip]"; ?>"></td>
  </tr> 
   <tr>
  	<td>jurusan</td>
  	<td><input type="text" name="jurusan" value="<?php echo "$row[jurusan]"; ?>"></td>
  </tr> 
   <tr>
   
  <tr>
  	<td align="center" colspan="2"><input type="submit" value="update"><input type="button" value="batal" onclick="window.location.href='data.php'"></td>
  </tr>
  <?php 
   }
   ?>
 

 </table>
 </form>
 </body>
 </html>