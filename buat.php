<?php
session_start();
if ($_SESSION['level'] != '2'){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>sign up</title>
</head>
<body>
<form action="buat_akun.php" method="post"> 
	<table>
	
		<tr>
			<td>masukan username</td>
			<td><input type="text" name="username" placeholder="masukan usernama"></td>
		</tr>
		<tr>
			<td>masukan nama</td>
			<td><input type="text" name="name" placeholder="masukan nama"></td>
		</tr>

		<tr>
			<td>masukan password</td>
			<td><input type="password" name="password" placeholder="masukan password"></td>
		</tr>
	
	 	<tr>
			<td>masukan tingkatan</td>
				<td><select name="tingkat">
				<option value="4" >dudi	</option>
				<option value="3" >guru</option>
				<option value="1" >siswa </option>
			</select>
		</tr> 	<tr>
			<td colspan="2" valign="center"><input type="submit" name="login" value="login"></td>
		</tr>
	</table>
</form>
</body>
</html>