<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from tb_produk WHERE id='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Produk</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 150px">
								<b>Id Produk</b>
							</td>
							<td>:
								<?php echo $data_cek['id']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama</b>
							</td>
							<td>:
								<?php echo $data_cek['nama_produk']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Deskripsi</b>
							</td>
							<td>:
								<?php echo $data_cek['deskripsi']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Harga Beli</b>
							</td>
							<td>:
								<?php echo $data_cek['harga_beli']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Harga Jual</b>
							</td>
							<td>:
								<?php echo $data_cek['harga_jual']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jumlah Stok</b>
							</td>
							<td>:
								<?php echo $data_cek['jumlah_stok']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Keterangan</b>
							</td>
							<td>:
								<?php echo $data_cek['keterangan']; ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=data-produk" class="btn btn-warning">Kembali</a>

					<a href="./report/cetak-produk.php?id=<?php echo $data_cek['id']; ?>" target=" _blank"
					 title="Cetak Data Produk" class="btn btn-primary">Print</a>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card card-success">
			<div class="card-header">
				<center>
					<h3 class="card-title">
						Foto
					</h3>
				</center>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body">
				<div class="text-center">
					<img src="foto/<?php echo $data_cek['foto']; ?>" width="280px" />
				</div>

				<h3 class="profile-username text-center">
					<?php echo $data_cek['id']; ?>
					-
					<?php echo $data_cek['nama_produk']; ?>
				</h3>
			</div>
		</div>
	</div>

</div>