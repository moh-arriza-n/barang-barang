<?php
include('koneksi.php');
if(isset($_POST['simpan'])){
	$query_tambah_data="insert into barang(MERK,HARGA)values
	('".$_POST['MERK']."',
		'".$_POST['HARGA']."')";
		$proses_data=mysql_query($query_tambah_data);
if ($proses_data){
		echo 'tambah data berhasil (OK)';
}else{
		echo mysql_error();
}
}
?>

<form method="POST" action="">
<table>
		<tr>
				<td>ID Barang</td>
				<td><input name="ID_BARANG" type="number"></td>
		</tr>
		<tr>
				<td>Merk</td>
				<td><input name="MERK" type="text"></td>
		</tr>
		<tr>
				<td>Harga</td>
				<td><input name="HARGA" type="number"></td>
		</tr>
		<tr>
			<td><input name="simpan" type="submit"></td>
		</tr>
	</table>
</form>