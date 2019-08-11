<?php
include "koneksi.php";
$data=mysql_query("select * from table_dudixsiswa ");
?>
<table border="1" cellspacing="0" width="500">
<tr >
	<td width="30" align="center">no</td>
	<td align="center">nama</td>
	<td align="center">pilihan</td>
	<td align="center">pilihan1</td>
	<td align="center">pilihan2</td>
</tr>

<?php 
$x=1;
while ($row =mysql_fetch_array($data)) {
	echo "<tr><td>".$x."</td>";
	echo "<td>".$row['nama']."</td>";
	echo "<td>".$row['pilihan']."</td>";
	echo "<td>".$row['pilihan1']."</td>";
	echo "<td>".$row['pilihan2']."</td>";
	$x++;
	}
?>
</table>