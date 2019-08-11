<?php 
include "koneksi.php";
session_start();
$username =$_POST['username'];
$password =md5($_POST['password']);
$query =mysql_query("select * from table_user where  username='$username'  and password='$password'");
$r=mysql_fetch_array($query);
$user = $r['username'];
$pass = $r['password'];
$level = $r['level'];
if($username == $user && $password =$pass){
	$_SESSION['username']=$username;
	$_SESSION['level'] = $level ;
	$_SESSION['status']="login";
	
	if ($_SESSION['level'] == '1'){
	header("location:dashboard_siswa.php");	
	}	
	elseif ($_SESSION['level'] == '2'){
	header("location:dashboard_admin.php");	
	}	
	elseif ($_SESSION['level'] == '3'){
	header("location:dashboard_guru.php");	
	}	
	elseif ($_SESSION['level'] == '4'){
	header("location:dashboard_dudi.php");	
	}	
	
	
	
	
}else{
	echo "<script type=text/javascript>alert('maaf bosku');</script>";
	echo "<script type=text/javascript>location.replace('index.php');</script>";
}

 ?>