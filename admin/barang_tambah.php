<?php 
	$title="Tambah Barang";
	require"includes/header.php";

	if (isset($_POST['insert'])) {
		$nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $satuan = $_POST['satuan'];
        $gambar = $_FILES['gambar']['name'];
        $file = $_FILES['gambar']['tmp_name'];
        $kategori = $_POST['kategori'];
        $path = "../assets/img/";

        if(move_uploaded_file($file, $path.$gambar)){
    		$query = mysqli_query($con,"insert into barang (nama_barang, harga_barang, stok_barang, satuan_barang, gambar_barang, id_kategori) value ('$nama','$harga','$stok','$satuan','$gambar','$kategori')");

    		if ($query) {
    			echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."barang.php'/>";
    		}
        }

	}
 ?>

 <div class="container-fluid">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="barang.php">Tabel Barang</a>
                    </li>
                    <li class="breadcrumb-item active">Tambah Barang</li>
                </ol>

                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-plus"></i> Tambah Barang
                    </div>

                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                        	<div class="row g-3 align-items-center">
	                        	<div class="col-md-3">
                                    <div class="form-group">
    								  	<label for="formGroupExampleInput" class="form-label">Nama</label>
    								  	<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Barang" name="nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput" class="form-label">Harga</label>
                                        <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Harga Barang" name="harga" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput" class="form-label">Stok</label>
                                        <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Stok Barang" name="stok" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput" class="form-label">Satuan</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Satuan Barang" name="satuan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput" class="form-label">Gambar</label>
                                        <input type="file" class="form-control" name="gambar" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput" class="form-label">Kategori</label>
                                        <select class="form-control" aria-label="Default select example" id="formGroupExampleInput" name="kategori">
                                            <option disabled selected>- Pilih -</option>
                                            <?php 
                                                $kategori=mysqli_query($con,"select * from kategori");
                                                $data = mysqli_fetch_assoc($kategori);

                                                do {
                                             ?>
                                            <option value="<?=$data['id_kategori']?>">
                                                <?=$data['nama_kategori'];?>
                                            </option>
                                            <?php 
                                                } while ($data=mysqli_fetch_assoc($kategori));

                                             ?>
                                        </select>
                                    </div>
									<div class="form-group">
                                        <input type="submit" name="insert" value="Tambah" class="btn btn-primary">    
                                    </div>
								</div>
							</div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik tombol logout untuk menghapus seluruh sesi dan keluar.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="<?=BASE_URL;?>../assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=BASE_URL;?>../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=BASE_URL;?>../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?=BASE_URL;?>../assets/js/sb-admin.min.js"></script>

</body>

</html>