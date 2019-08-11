<?php
include "koneksi.php";
error_reporting(E_ALL   ^(E_NOTICE | E_WARNING));
session_start();
if ($_SESSION['level'] != '3'){
  header("location:index.php");
  }
  $u=$_SESSION['username'] ;
$data=mysql_query("select * from table_user where level='3' order by username");
?>
<table border="1" cellspacing="0" width="500">
<tr >
  <td width="30" align="center">no</td>
  <td align="center">nama</td>
  <td align="center">nip</td>
  <td align="center">jurusan</td>
  <td align="center" >edit</td>
</tr>

<?php 
$x=1;
while ($row =mysql_fetch_array($data)) {
  echo "<tr><td>".$x."</td>";
  echo "<td>".$row['nama']."</td>";
  echo "<td>".$row['nip']."</td>";
  echo "<td>".$row['jurusan']."</td>";
  echo "<td align='center'> <a href='guru_edit.php?id=$id'>edit</a></td>";
  $x++;
  }
?>
</table>