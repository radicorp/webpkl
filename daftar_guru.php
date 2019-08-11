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
					<a class="active-menu"  href="daftar_guru.php">Daftar guru </a>
					</li>
					<li>
					<a  href="daftar_dudi.php">Daftar Dudi</a>
					</li>
					<li>
					<a  href="form_siswa.php"> Formulir PKl</a>
					</li>
					<li  >
					<a  href="cetak.php"> Cetak</a>
					</li>	
     
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Table Examples</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
<div class="panel panel-default">
                       <div class="panel-heading">
                            Data Guru
                            
                       </div>
                       <div class="panel-body">
                           <div class="table-responsive">
                               <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                   <thead>
                                       <tr>
                                       <th>no</th>
                                           <th>Nama</th>
                                           <th>Nip</th>
                                           <th>Jurusan</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                   <?php 
                                   $x=1;
                                   while ($row =mysql_fetch_array($data)) {
                                   echo "<tr class= 'odd gradeX'><td>".$x."</td>";
                                   echo "<td>".$row['nama']."</td>";
                                   echo "<td>".$row['nip']."</td>";
                                   echo "<td>".$row['jurusan']."</td></tr>";
                                   $x++;
                                   }
                                   ?>
                        
</tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    </div>
                    </div>
                    <!-- /. ROW  -->
                    </div>
                    
                    </div>
                    <!-- /. PAGE INNER  -->
                    </div>
                    <!-- /. PAGE WRAPPER  -->
                    <!-- /. WRAPPER  -->
                    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
                    <!-- JQUERY SCRIPTS -->
                    <script src="assets/js/jquery-1.10.2.js"></script>
                    <!-- BOOTSTRAP SCRIPTS -->
                    <script src="assets/js/bootstrap.min.js"></script>
                    <!-- METISMENU SCRIPTS -->
                    <script src="assets/js/jquery.metisMenu.js"></script>
                    <!-- DATA TABLE SCRIPTS -->
                    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
                    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
                    <script>
                    $(document).ready(function () {
                    $('#dataTables-example').dataTable();
                    });
                    </script>
                    <!-- CUSTOM SCRIPTS -->
                    <script src="assets/js/custom.js"></script>
                    
                    
                    </body>
                    </html>