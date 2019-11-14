<?php
include('koneksi.php');
if(isset($_POST['input'])){
	$query_tambah_data="insert into catatan_transaksi(TOKO,ALAMAT,NAMA_BARANG,QTY,HARGA,TOTAL_HARGA)values
	('".$_POST['TOKO']."',
		'".$_POST['ALAMAT']."',
		'".$_POST['NAMA_BARANG']."',
		'".$_POST['QTY']."',
		'".$_POST['HARGA']."',
		'".$_POST['TOTAL_HARGA']."')";
		$proses_data=mysql_query($query_tambah_data);
if ($proses_data){
		echo 'penambahan data dapat dilakukan (OK)';
}else{
		echo 'penambahan data tidak dapat dilakukan (ERROR)';
}
}
?>

<form method="POST" action="">
<table>
		<tr>
				<td>NO_Transaksi</td>
				<td><input name="NO_TRANSAKSI" type="number"></td>
		</tr>
		<tr>
				<td>Toko</td>
				<td><input name="TOKO" type="text"></td>
		</tr>
		<tr>
				<td>Alamat</td>
				<td><input name="ALAMAT" type="text"></td>
		</tr>
		<tr>
				<td>Nama Barang</td>
				<td><input name="NAMA_BARANG" type="text"></td>
		</tr>
		<tr>
				<td>QTY</td>
				<td><input name="QTY" type="number" ></td>
		</tr>
		<tr>
				<td>Harga</td>
				<td><input name="HARGA" type="number"></td>
		</tr>
		<tr>
				<td>Total Harga</td>
				<td><input name="TOTAL_HARGA" type="number"></td>
		</tr>
		<tr>
			<td><input name="input" type="submit"></td>
		</tr>
	</table>
</form>

<a href="form_1.php"><H1>Kembali ...<<<</H1></a>