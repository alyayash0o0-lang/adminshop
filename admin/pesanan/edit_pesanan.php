<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_pesanan WHERE id='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data Pesanan</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

		<input type='hidden' class="form-control" name="id" value="<?php echo $data_cek['id']; ?>"
			 readonly/>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_cek['nama']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data_cek['alamat']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kota</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="kota" name="kota" value="<?php echo $data_cek['kota']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ongkir</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="ongkir" name="ongkir" value="<?php echo $data_cek['ongkir']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Telp</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="telp" name="telp" value="<?php echo $data_cek['telp']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status</label>
				<div class="col-sm-4">
					<select name="status" id="status" class="form-control">
						<option value="">Status</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['status'] == "lunas") echo "<option value='lunas' selected>lunas</option>";
                else echo "<option value='lunas'>lunas</option>";

                if ($data_cek['status'] == "belum") echo "<option value='belum' selected>belum</option>";
                else echo "<option value='belum'>belum</option>";
            			?>
					</select>
				</div>
			</div>

		</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-pesanan" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
    if (isset ($_POST['Ubah'])){
    $sql_ubah = "UPDATE tb_pesanan SET
			nama='".$_POST['nama']."',
			alamat='".$_POST['alamat']."',
			kota='".$_POST['kota']."',
			ongkir='".$_POST['ongkir']."',
			telp='".$_POST['telp']."',
			status='".$_POST['status']."'
		WHERE id='".$_POST['id']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-pesanan';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-pesanan';
        }
      })</script>";
    }}
?>
