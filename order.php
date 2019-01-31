 <?php
if(isset($_POST['submit'])!="")
{
include "koneksi.php";
$name=$_POST['name'];
$telpon=$_POST['telpon'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
//memeriksa apakah form kosong  
if(($name==null)or($telpon==null)or($email==null)or($address==null)){
	echo("<script> alert('Maaf, Isi data dengan lengkap')</script>");
	include("product.php");exit;} 
		else{$auth=true;}  
//proses pengiriman  
if($auth){   
$data=mysql_query("INSERT INTO pemesanan values(id_pemesan,'name_pemesan','address_pemesan','city_pemesan','email_pemesan','phone_pemesan',date_pemesan,'status_pemesan'),('','$name','$address','$city','$email','$telpon',now(),'pending')") or die (mysql_error());
echo("<script> alert('Pemesanan anda sedang di proses. Terima Kasih')</script>"); 
echo"<meta content='0; url=index.php' http-equiv='refresh'>";
exit;  }
else{  
echo("<script> alert('Maaf, pemesanan gagal silahkan coba lagi')</script>"); 
echo"<meta content='0; url=keranjang.php'>";
exit;} 
} 

?> 