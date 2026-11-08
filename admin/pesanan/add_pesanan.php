<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data Pesanan</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kota</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="kota" name="kota" placeholder="Kota" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ongkir</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="ongkir" name="ongkir" placeholder="Ongkir" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Telp</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="telp" name="telp" placeholder="No Telp" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status</label>
				<div class="col-sm-5">
					<select name="status" id="status" class="form-control">
						<option>Status</option>
						<option>Lunas</option>
						<option>Belum</option>
					</select>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-pesanan" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	
    if (isset ($_POST['Simpan'])){
		
        $sql_simpan = "INSERT INTO tb_pesanan (nama, alamat, kota, ongkir, telp, status) VALUES (
            
			'".$_POST['nama']."',
			'".$_POST['alamat']."',
			'".$_POST['kota']."',
			'".$_POST['ongkir']."',
			'".$_POST['telp']."',
			'".$_POST['status']."')";
            
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-pesanan';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-pesanan';
          }
      })</script>";
	}
	}
     //selesai proses simpan data

	 
	
