<?php
include "koneksi.php";
session_start();
$id=$_SESSION['username'];
 $data =mysql_query("select * from table_user where username ='$id'");
 while ($row=mysql_fetch_array($data)) {
$nama=$row['nama'];
$nip=$row['nip'];

 }
include "docxtemplate.class.php";
$docx = new DOCXTemplate('documen_monitor.docx');
$docx->set('nama', $nama);
$docx->set('jeniskelamin', $nip);

$docx->saveAs('surat_pernyataan.docx');

header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=surat_pernyataan.docx");
readfile('surat_pernyataan.docx');
?>	