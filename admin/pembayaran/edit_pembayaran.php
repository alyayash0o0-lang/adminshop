<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_pembayaran WHERE id='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data Pembayaran</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

		<input type='hidden' class="form-control" name="id" value="<?php echo $data_cek['id']; ?>"
			 readonly/>

			 <div class="form-group row">
				<label class="col-sm-2 col-form-label">Id Pesanan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="id_pesanan" name="id_pesanan" value="<?php echo $data_cek['id_pesanan']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_cek['nama']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Total</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="total" name="total" value="<?php echo $data_cek['total']; ?>"
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
                if ($data_cek['status'] == "pending") echo "<option value='pending' selected>Pending</option>";
                else echo "<option value='Pending'>Pending</option>";

                if ($data_cek['status'] == "verified") echo "<option value='verified' selected>Verified</option>";
                else echo "<option value='Verified'>Verified</option>";
            			?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Keterangan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $data_cek['keterangan']; ?>"
					/>
				</div>
			</div>
			
		</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-pembayaran" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
    if (isset ($_POST['Ubah'])){
    $sql_ubah = "UPDATE tb_pembayaran SET
	        id_pesanan='".$_POST['id_pesanan']."',
        	nama='".$_POST['nama']."',
			total='".$_POST['total']."',
			status='".$_POST['status']."',
			keterangan='".$_POST['keterangan']."'
		WHERE id='".$_POST['id']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-pembayaran';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-pembayaran';
        }
      })</script>";
    }}
?>
