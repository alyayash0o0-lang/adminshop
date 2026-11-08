<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from tb_pesanan WHERE id='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Data Pesanan</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						
						<tr>
							<td style="width: 150px">
								<b>Nama</b>
							</td>
							<td>:
								<?php echo $data_cek['nama']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Alamat</b>
							</td>
							<td>:
								<?php echo $data_cek['alamat']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Kota</b>
							</td>
							<td>:
								<?php echo $data_cek['kota']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Ongkir</b>
							</td>
							<td>:
								<?php echo $data_cek['ongkir']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>No Telp</b>
							</td>
							<td>:
								<?php echo $data_cek['telp']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Status</b>
							</td>
							<td>:
								<?php echo $data_cek['status']; ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=data-pesanan" class="btn btn-warning">Kembali</a>

					<a href="./report/cetak-pesanan.php?id=<?php echo $data_cek['id']; ?>" target=" _blank"
					 title="Cetak Data Pesanan" class="btn btn-primary">Print</a>
				</div>
			</div>
		</div>
	</div>

	
</div>