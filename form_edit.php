<?php 
session_start();
if ($_SESSION['level'] != '2'){
	header("location:index.php");
	}
	include "koneksi.php";
include "koneksi.php";
$id=$_GET['id'];
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
  	<td>username</td>
  	<td><input type="text" name="username" value="<?php echo "$row[username]"; ?>"></td>
  </tr> 
   <tr>
  	<td>password</td>
  	<td><input type="text" name="password" value="<?php echo "$row[password]"; ?>"></td>
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