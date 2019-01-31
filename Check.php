<?php
if(!isset($_SESSION)){
    session_start();}
function checkmember()
{
include "koneksi.php";
$sql = mysql_query("SELECT * FROM member WHERE username='$_SESSION[username]'");
while($data = mysql_fetch_array($sql)){
if($data['password']==$_SESSION['password'])
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

