<?php 
session_start();
include "koneksi.php";
 ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title></title>
</head>
<body>
<h1>Cetak surat pengantar</h1>
<form action="savecetak_pengantar.php" method="post">
<tr>
    <td>nama</td>
  <td><select name="username">
 <option value="" selected>masukan nama siswa </option>
 <?php 
  $data_dudi=mysql_query("select * from table_user where level='1' order by username");
 while ($row=mysql_fetch_array($data_dudi)) {
 echo ("<option value='$row[username]'>$row[nama]</option>");
 }
 ?>
 
 </select></td>
  </tr> 
<tr>
	<td>
		<input type="submit" value="cetak">
	</td>
</tr>
</form>
</body>
</html>