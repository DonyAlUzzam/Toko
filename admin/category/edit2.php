<?php
session_start();
if($_POST['simpan']!="")
{
include "koneksi.php";
$id=$_SESSION['id'];
$category=$_POST['category'];
$status=$_POST['status'];
$data=mysql_query ("UPDATE category SET name_category='$category', status_category='$status' where id_category='$id' ") or die (mysql_error());
if ($data){
	echo "<script> alert ('Edit category berhasil'); </script>" ;
	include "index.php";
	}
else {
	echo "Edit link gagal";	
}
}
?>