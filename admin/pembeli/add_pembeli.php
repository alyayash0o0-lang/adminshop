<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data Pembeli</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama </label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-5">
					<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
						<option>Jenis Kelamin</option>
						<option>Laki-Laki</option>
						<option>Perempuan</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Telp</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telp" required>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-pembeli" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	
    if (isset ($_POST['Simpan'])){
		
        $sql_simpan = "INSERT INTO tb_pembeli (nama, jenis_kelamin, alamat, no_telp) VALUES (
            
			'".$_POST['nama']."',
			'".$_POST['jenis_kelamin']."',
			'".$_POST['alamat']."',
			'".$_POST['no_telp']."')";
            
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-pembeli';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-pembeli';
          }
      })</script>";
	}
	}
     //selesai proses simpan data
	