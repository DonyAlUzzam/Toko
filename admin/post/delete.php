<?php 
include ("koneksi.php");
$oke =mysql_query("delete from post where id_post=$_REQUEST[id]");
if ($oke){ 
echo "<script> alert ('Data telah dihapus'); </script>";
include"index.php";
}
else{
echo"<script> alert ('Data Gagal dihapus'); </script>";
include"index.php";
}
?>