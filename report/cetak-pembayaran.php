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
	<title>Cetak Data Pembayaran</title>
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

			$sql_tampil = "select * from tb_pembayaran where id='$id'";
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
              
		?>
	</center>

	<center>
		<h4>
			<u> Data Pembayaran </u>
		</h4>
	</center>

	<table border="0" cellspacing="0" style="width: 30%" align="center">
		<tbody>
			
			<tr>
				<td>Id Pesanan</td>
				<td>:</td>
				<td>
					<?php echo $data['id_pesanan']; ?>
				</td>
			</tr>

			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo $data['nama']; ?>
				</td>
			</tr>

            <tr>
				<td>Total</td>
				<td>:</td>
				<td>
					<?php echo $data['total']; ?>
				</td>
			</tr>

			<tr>
				<td>Status</td>
				<td>:</td>
				<td>
					<?php echo $data['status']; ?>
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