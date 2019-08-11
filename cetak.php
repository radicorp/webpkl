 <?php
 session_start();
 include "koneksi.php";
 $u=$_SESSION['username'];
 $u1=$_SESSION['username'];
 $query=mysql_query("select * from table_user where level='1' and username='$u1' order by username");
 $data=mysql_query("select * from table_user where level='3' order by username");
 ?>
 ﻿<!DOCTYPE html>
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <title>Free Bootstrap Admin Template : Binary Admin</title>
 <!-- BOOTSTRAP STYLES-->
 <link href="assets/css/bootstrap.css" rel="stylesheet" />
 <!-- FONTAWESOME STYLES-->
 <link href="assets/css/font-awesome.css" rel="stylesheet" />
 <!-- MORRIS CHART STYLES-->
 
 <!-- CUSTOM STYLES-->
 <link href="assets/css/custom.css" rel="stylesheet" />
 <!-- GOOGLE FONTS-->
 <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
 <!-- TABLE STYLES-->
 <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
 </head>
 <body>
 <div id="wrapper">
 <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
 <div class="navbar-header">
 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
 <span class="sr-only">Toggle navigation</span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 </button>
 <a class="navbar-brand" href="index.php">Binary admin</a> 
 </div>
 <div style="color: white;
 padding: 15px 50px 5px 50px;
 float: right;
 font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
 </nav>   
 <!-- /. NAV TOP  -->
 <nav class="navbar-default navbar-side" role="navigation">
 <div class="sidebar-collapse">
 <ul class="nav" id="main-menu">
 <li class="text-center">
 <img src="assets/img/find_user.png" class="user-image img-responsive"/>
 <li  >
 <a   href="data_siswa.php"><?php  while ($row1 =mysql_fetch_array($query)) echo $row1['nama']; ?></a>
 </li>
 <li>
 <a   href="daftar_guru.php">Daftar guru </a>
 </li>
 <li>
 <a  href="daftar_dudi.php">Daftar Dudi</a>
 </li>
 <li>
 <a  href="form_siswa.php"> Formulir PKl</a>
 </li>
 <li  >
 <a class="active-menu" href="cetak.php"> Cetak</a>
 </li>	
 
 </ul>
 
 </div>
 
 </nav>  
 <!-- /. NAV SIDE  -->
 <div id="page-wrapper" >
 <div id="page-inner">
 <div class="row">
 <div class="col-md-12">
 <h2>Forms Page</h2>   
 <h5>Welcome Jhon Deo , Love to see you back. </h5>
 
 </div>
 </div>
 <!-- /. ROW  -->
 <hr />
 <div class="row">
 <div class="col-md-12">
 <!-- Form Elements -->
 <div class="panel panel-default">
 <div class="panel-heading">
 Form Element Examples
 </div>
 <div class="panel-body">
 <div class="row">
 <div class="col-md-6">
 	<?php 
if ($_SESSION['level'] != '1'){
	header("location:index.php");
	}
	include "koneksi.php";
$id=$_SESSION['username'];
$query =mysql_query("select * from table_dudixsiswa where  username='$id'");
$rec=mysql_num_rows($query);
if ($rec>0) {
?>
<table border="1" cellspacing="0" width="500">
<tr >
  <td width="30" align="center">no</td>
  <td align="center">nama</td>
  <td align="center">pilihan</td>
  <td align="center">pilihan1</td>
  <td align="center">pilihan2</td>
  <td align="center" >edit</td>
    <td align="center" >hapus</td>
</tr>

<?php 
$data =mysql_query("select * from table_dudixsiswa where  username='$id'");
$x=1;
while ($row =mysql_fetch_array($data)) {
  echo "<tr><td>".$x."</td>";
  echo "<td>".$row['nama']."</td>";
  echo "<td>".$row['pilihan']."</td>";
  echo "<td>".$row['pilihan1']."</td>";
  echo "<td>".$row['pilihan2']."</td>";
  echo "<td align='center'> <a href='siswa_edit1.php?id=$id'>edit</a></td>";
  echo "<td align='center'> <a href='siswa_hapus1.php?id=$id'>hapus</a></td>";
  $x++;
  }
}
else{
  ?>
</table>
 <h3>Basic Form Examples</h3>
 <form role="form" action="simpan_dudixsiswa.php" method ="post">
 	<?php 
 $data =mysql_query("select * from table_user where username ='$id'");
 while ($row=mysql_fetch_array($data)) {
  ?>
                                            <div class="form-group">
                                                <label >Nama</label>
                                                <input class="form-control" name="nama" type="text" value="<?php echo "$row[nama]"; ?>"  >
                                                  <?php 
  }
  ?>
                                          </div>
                                            <div class="form-group">
                                            <label>Select Example</label>
                                          <select name="kode" class="form-control">
                                          <option value="" selected>masukan nama dudi </option>
                                          <?php 
                                          $data_dudi=mysql_query("select * from table_user where level='4' order by username");
                                          while ($row=mysql_fetch_array($data_dudi)) {
                                          echo ("<option value='$row[nama]'>$row[nama]</option>");
                                          }
                                          ?>
                                          
                                          </select>
                                            </div>
                                            <div class="form-group">
                                            <label>Select Example</label>
                                            <select name="kode1" class="form-control">
                                          <option value="" selected>masukan nama dudi </option>
                                          <?php 
                                          $data_dudi=mysql_query("select * from table_user where level='4' order by username");
                                          while ($row=mysql_fetch_array($data_dudi)) {
                                          echo ("<option value='$row[nama]'>$row[nama]</option>");
                                          }
                                          ?>
                                          
                                          </select>
                                            </div>
                                            <div class="form-group">
                                            <label>Select Example</label>
                                             <select name="kode2" class="form-control">
                                          <option value="" selected>masukan nama dudi </option>
                                          <?php 
                                          $data_dudi=mysql_query("select * from table_user where level='4' order by username");
                                          while ($row=mysql_fetch_array($data_dudi)) {
                                          echo ("<option value='$row[nama]'>$row[nama]</option>");
                                          }
                                          ?>
                                          
                                          </select>
                                            </div>
                                            <button type="submit" value="cetak" class="btn btn-default">Submit Button</button>
                                            <button type="reset" class="btn btn-primary">Reset Button</button>
                                            </form>
                                             <?php
}
 ?>
 
 <!-- /. ROW  -->
 </div>
 <!-- /. PAGE INNER  -->
 </div>
 <!-- /. PAGE WRAPPER  -->
 </div>
 <!-- /. WRAPPER  -->
 <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
 <!-- JQUERY SCRIPTS -->
 <script src="assets/js/jquery-1.10.2.js"></script>
 <!-- BOOTSTRAP SCRIPTS -->
 <script src="assets/js/bootstrap.min.js"></script>
 <!-- METISMENU SCRIPTS -->
 <script src="assets/js/jquery.metisMenu.js"></script>
 <!-- CUSTOM SCRIPTS -->
 <script src="assets/js/custom.js"></script>
 
 
 </body>
 </html>