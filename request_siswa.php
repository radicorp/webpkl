<?php 
session_start();
if ($_SESSION['level'] != '4'){
  header("location:index.php");
  }
  include "koneksi.php";
$id=$_SESSION['username'];
$query =mysql_query("select * from table_user where  username='$id'");
while ($row =mysql_fetch_array($query)) {
$req=$row['req'];
}
if ($req>0) {
?>
<table border="1" cellspacing="0" width="500">
<tr >
  <td width="30" align="center">no</td>
  <td align="center">nama</td>
    <td align="center">request</td>
      <td align="center">keterangan</td>
  <td align="center" >edit</td>
</tr>

<?php 
$data =mysql_query("select * from table_user where  username='$id'");
$x=1;
while ($row =mysql_fetch_array($data)) {
  echo "<tr><td>".$x."</td>";
  echo "<td>".$row['nama']."</td>";
    echo "<td>".$row['req']."</td>";
      echo "<td>".$row['ket']."</td>";
  echo "<td align='center'> <a href='siswa_edit.php?id=$id'>edit</a></td>";
  $x++;
  }
}
else{
  ?>
</table>
 <!DOCTYPE html>
 <html>
 <head>
  <title>masukan data </title>
 </head>
 <body>
 <form action="simpan_request.php" method ="post">
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
   <td>siswa yang dibutuhkan</td>
      <td><input type="text" name="request""></td>
 </tr>
  <tr>
   <td>masukan keterangan siswa</td>
      <td><input type="text" name="ket""></td>
 </tr>
  <tr>
   <td>asruransi?</td>
      <td><input type="text" name="tambahan""></td>
 </tr>
  <tr>
    <td align="center" colspan="2"><input type="submit" value="cetak"><input type="button" value="batal" onclick="window.location.href='data.php'"></td>
  </tr>

 

 </table>
 </form>
 </body>
 </html>
 <?php
}
 ?>