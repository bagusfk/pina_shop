<?php 
	$title="Edit Kategori";
	require"includes/header.php";
    $id = $_GET['id'];

	if (isset($_POST['update'])) {
		$nama = $_POST['nama'];

		$query = mysqli_query($con,"update kategori set nama_kategori = '$nama' where id_kategori = '$id'");

		if ($query) {
			echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."kategori.php'/>";
		}
	}

    $query = mysqli_query($con,"select nama_kategori from kategori where id_kategori = '$id'");
    $data = mysqli_fetch_assoc($query);
 ?>

 <div class="container-fluid">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="kategori.php">Tabel Kategori</a>
                    </li>
                    <li class="breadcrumb-item active">Edit Kategori</li>
                </ol>

                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-plus"></i> Edit Kategori
                    </div>

                    <div class="card-body">
                        <form action="" method="post">
                        	<div class="row g-3 align-items-center">
	                        	<div class="m-3">
								  	<label for="formGroupExampleInput" class="form-label">Nama Kategori</label>
								  	<input type="text" class="form-control mb-3" id="formGroupExampleInput" placeholder="Nama Kategori" name="nama" value="<?=$data['nama_kategori'];?>">
									<input type="submit" name="update" value="Simpan" class="btn btn-success">
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