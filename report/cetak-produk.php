<?php
	include "../inc/koneksi.php";
	
	$id = $_GET['id'];

	$sql_cek = "SELECT * FROM tb_profil";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
	{
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Cetak Data Produk</title>
</head>

<body>
	<center>

		<h2>
			<?php echo $data_cek['nama_profil']; ?>
		</h2>
		<h3>
			<?php echo $data_cek['alamat']; ?>
			<hr / size="2px" color="black">

			<?php
			}

			$sql_tampil = "select * from tb_produk where id='$id'";
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
	</center>

	<center>
		<h4>
			<u>Data Produk</u>
		</h4>
	</center>

	<table border="0" cellspacing="0" style="width: 50%" align="center">
		<tbody>
			<tr>
				<td>Nomor Produk</td>
				<td>:</td>
				<td>
					<?php echo $data['id']; ?>
				</td>
				<td rowspan="6" align="center">
					<img src="../foto/<?php echo $data['foto']; ?>" width="150px" />
				</td>
			</tr>
			<tr>
				<td>Nama Produk</td>
				<td>:</td>
				<td>
					<?php echo $data['nama_produk']; ?>
				</td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td>
				<td>
					<?php echo $data['deskripsi']; ?>
				</td>
			</tr>
			<tr>
				<td>Harga Beli</td>
				<td>:</td>
				<td>
					<?php echo $data['harga_beli']; ?>
				</td>
			</tr>
			<tr>
				<td>Harga Jual</td>
				<td>:</td>
				<td>
					<?php echo $data['harga_jual']; ?>
				</td>
			</tr>
			<tr>
				<td>Jumlah Stok</td>
				<td>:</td>
				<td>
					<?php echo $data['jumlah_stok']; ?>
				</td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td>
					<?php echo $data['keterangan']; ?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>


	<script>
		window.print();
	</script>

</body>

</html>