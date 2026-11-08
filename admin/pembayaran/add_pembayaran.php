<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data Pembayaran</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Id Pesanan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="id_pesanan" name="id_pesanan" placeholder="Id Pesanan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Pemesan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Total</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="total" name="total" placeholder="Total" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status</label>
				<div class="col-sm-5">
					<select name="status" id="status" class="form-control">
						<option>- Pilih -</option>
						<option>Pending</option>
						<option>Verified</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Keterangan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" required>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-pembayaran" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
        if (isset ($_POST['Simpan'])){
        $sql_simpan = "INSERT INTO tb_pembayaran (id_pesanan, nama, total, status, keterangan) VALUES (
			'".$_POST['id_pesanan']."',
			'".$_POST['nama']."',
			'".$_POST['total']."',
			'".$_POST['status']."',
			'".$_POST['keterangan']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

		if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-pembayaran';
          }
      })</script>";
	}else{
	  echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-pembayaran';
          }
      })</script>";
	}
}
     //selesai proses simpan data
