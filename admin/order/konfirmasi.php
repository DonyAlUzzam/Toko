<?php
include"../koneksi.php";
$id=$_GET['id'];
$status='Approve';
$data=mysql_query ("UPDATE pemesanan SET status_pemesan='$status' where id_pemesan='$id' ") or die (mysql_error());
if ($data){
	echo "<script> alert ('Data Telah Tersimpan'); </script>" ;
	include "index.php";
	}
else {
	echo "Anda gagal update";	

}