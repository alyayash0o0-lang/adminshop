<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_produk WHERE id='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data Produk</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Produk</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="id" name="id" value="<?php echo $data_cek['id']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?php echo $data_cek['nama_produk']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Deskripsi</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?php echo $data_cek['deskripsi']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Harga Beli</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="harga_beli" name="harga_beli" value="<?php echo $data_cek['harga_beli']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Harga Jual</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="harga_jual" name="harga_jual" value="<?php echo $data_cek['harga_jual']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jumlah Stok</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="jumlah_stok" name="jumlah_stok" value="<?php echo $data_cek['jumlah_stok']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Keterangan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $data_cek['keterangan']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Foto</label>
				<div class="col-sm-6">
					<img src="foto/<?php echo $data_cek['foto']; ?>" width="160px" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ubah Foto</label>
				<div class="col-sm-6">
					<input type="file" id="foto" name="foto">
					<p class="help-block">
						<font color="red">"Format file Jpg/Png"</font>
					</p>
				</div>
			</div>
		</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-produk" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	$sumber = @$_FILES['foto']['tmp_name'];
	$target = 'foto/';
	$nama_file = @$_FILES['foto']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);

	
if (isset ($_POST['Ubah'])){

    if(!empty($sumber)){
        $foto= $data_cek['foto'];
            if (file_exists("foto/$foto")){
            unlink("foto/$foto");}

        $sql_ubah = "UPDATE tb_produk SET
			nama_produk='".$_POST['nama_produk']."',
			deskripsi='".$_POST['deskripsi']."',
			harga_beli='".$_POST['harga_beli']."',
			harga_jual='".$_POST['harga_jual']."',
			jumlah_stok='".$_POST['jumlah_stok']."',
			keterangan='".$_POST['keterangan']."',
			foto='".$nama_file."'		
            WHERE id='".$_POST['id']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

    }elseif(empty($sumber)){
		$sql_ubah = "UPDATE tb_produk SET
		nama_produk='".$_POST['nama_produk']."',
		deskripsi='".$_POST['deskripsi']."',
		harga_beli='".$_POST['harga_beli']."',
		harga_jual='".$_POST['harga_jual']."',
		jumlah_stok='".$_POST['jumlah_stok']."',
		keterangan='".$_POST['keterangan']."'
		WHERE id='".$_POST['id']."'";
	$query_ubah = mysqli_query($koneksi, $sql_ubah);
        }

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-produk';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-produk';
            }
        })</script>";
    }
}

