<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from tb_pembeli WHERE id_pengguna='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Data Pembeli</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						
						<tr>
							<td style="width: 150px">
								<b>Nama Pembeli</b>
							</td>
							<td>:
								<?php echo $data_cek['nama']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jenis Kelamin</b>
							</td>
							<td>:
								<?php echo $data_cek['jenis_kelamin']; ?>
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
								<b>No Telp</b>
							</td>
							<td>:
								<?php echo $data_cek['no_telp']; ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=data-pembeli" class="btn btn-warning">Kembali</a>

					<a href="./report/cetak-pembeli.php?id_pengguna=<?php echo $data_cek['id_pengguna']; ?>" target=" _blank"
					 title="Cetak Data Pembeli" class="btn btn-primary">Print</a>
				</div>
			</div>
		</div>
	</div>

	
</div>