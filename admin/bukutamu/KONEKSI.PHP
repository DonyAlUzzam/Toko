<?php
$koneksi=mysql_connect('localhost','root','');
if (!$koneksi)
{print "koneksi tidak berhasil bost, di cobo meneh ae. smngat2 bost";
}
mySQL_select_db("distro");
?>