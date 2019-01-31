<?php
if(!isset($_SESSION)){
    session_start();}
function check()
{
include "koneksi.php";
$sql = mysql_query("SELECT * FROM admin WHERE username_admin='$_SESSION[username]'");
while($data = mysql_fetch_array($sql)){
if($data['password_admin']==$_SESSION['password'])
{
return TRUE;
exit();
}
else
{
return FALSE;
exit();
}
}
}
?>

