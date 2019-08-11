<?php
$id=$_SESSION['username'];
//Buat konfigurasi upload
//Folder tujuan upload file
error_reporting(E_ALL   ^(E_NOTICE | E_WARNING));
$eror		= false;
$folder		= './file/';
//type file yang bisa diupload
$file_type	= array('jpg','JPG','jpeg','JPEG','png','PNG');
//tukuran maximum file yang dapat diupload
$max_size	= 1000000; // 1MB
if(isset($_POST['btnUpload'])){
	//Mulai memorises data
	$file_name	= $_FILES['data_upload']['name'];
	$file_size	= $_FILES['data_upload']['size'];
	//cari extensi file dengan menggunakan fungsi explode
	$explode	= explode('.',$file_name);
	$extensi	= $explode[count($explode)-1];

	//check apakah type file sudah sesuai
	if(!in_array($extensi,$file_type)){
		$eror   = true;
		$pesan .= '- Type file yang anda upload tidak sesuai<br />';
	}
	if($file_size > $max_size){
		$eror   = true;
		$pesan .= '- Ukuran file melebihi batas maximum<br />';
	}
	//check ukuran file apakah sudah sesuai

	if($eror == true){
		echo '<div id="eror">'.$pesan.'</div>';
	}
	else{
		//mulai memproses upload file
		if(move_uploaded_file($_FILES['data_upload']['tmp_name'], $folder.$file_name)){
			//catat nama file ke database
			$catat = mysql_query('insert into file_upload(username,kartu,Filename,Detail,Folder,DateUpload) values ("'.$id.'","'.$kartu.'","'.$file_name.'", "'.$_POST['keterangan'].'", 
								  "'.$folder.'", "'.date('Y-m-d H:i:s').'")');
			echo '<div id="msg">Berhasil mengupload file '.$file_name.'</div>';
		} else{
			echo "Proses upload eror";
		}
	}
}
?>