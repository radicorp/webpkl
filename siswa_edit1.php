<?php 
session_start();
if ($_SESSION['level'] != '1'){
	header("location:index.php");
	}
include "koneksi.php";
$id=$_SESSION['username'] ;
 ?>
  <!DOCTYPE html>
 <html>
 <head>
  <title>masukan data </title>
 </head>
 <body>
 <form action="simpan_dudixsiswa1.php" method ="post">
 <table>
 <?php 
 $data =mysql_query("select * from table_user where username ='$id'");
 while ($row=mysql_fetch_array($data)) {
  ?>
  <tr>
    <td>nama</td>
    <td><input type="text" name="nama" value="<?php echo "$row[nama]"; ?>"></td>
  </tr> 
  <?php 
  }
  ?>
  <tr>
 <td>pilihan 1</td>
 <td><select name="kode">
 <option value="" selected>masukan nama dudi </option>
 <?php 
  $data_dudi=mysql_query("select * from table_user where level='4' order by username");
 while ($row=mysql_fetch_array($data_dudi)) {
 echo ("<option value='$row[nama]'>$row[nama]</option>");
 }
 ?>
 
 </select></td>
  </tr>
  <tr>
   <td>pilihan 2</td>
   <td><select name="kode1">
   <option value="" selected>masukan nama dudi </option>
   <?php 
  $data_dudi=mysql_query("select * from table_user where level='4' order by username");
   while ($row=mysql_fetch_array($data_dudi)) {
   echo ("<option value='$row[nama]'>$row[nama]</option>");
   }
   ?>
   
   </select></td>
  </tr>
  <tr>
   <td>pilihan 3</td>
   <td><select name="kode2">
   <option value="" selected>masukan nama dudi </option>
   <?php 
  $data_dudi=mysql_query("select * from table_user where level='4' order by username");
   while ($row=mysql_fetch_array($data_dudi)) {
   echo ("<option value='$row[nama]'>$row[nama]</option>");
   }
   ?>
   
   </select></td>
  </tr>
  
  <tr>
    <td align="center" colspan="2"><input type="submit" value="cetak"><input type="button" value="batal" onclick="window.location.href='data.php'"></td>
  </tr>

 

 </table>
 </form>
 </body>
 </html>