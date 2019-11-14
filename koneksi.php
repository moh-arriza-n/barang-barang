<?php
$user = "root";
$server = "localhost";
$password = "";
$database = "data_barang";
$notif=mysql_connect($server,$user,$password);
if($notif){
	echo 'Koneksi terjalin (OK) ';
}else{
	echo 'cek lagi !';
}

$db=mysql_select_db($database);
if($db){
	echo 'Data Base Berhasil terhubung (OK) ';
}else{
	echo 'cek lagi !';
}
?>