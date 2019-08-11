<?php 
session_start();
if ($_SESSION['level'] != '4'){
	header("location:index.php");
	}
	include "koneksi.php";
$id=$_SESSION['username'];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>masukan data </title>
 </head>
 <body>
 <form action="cetak_word.php" method ="post">
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
  	<td align="center" colspan="2"><input type="submit" value="cetak"><input type="button" value="batal" onclick="window.location.href='data.php'"></td>
  </tr>
  <?php 
   }
   ?>
 

 </table>
 </form>
 </body>
 </html>