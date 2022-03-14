<?php 
    $title = "Daftar Barang";
    require"includes/header.php";
 ?>        

        <div class="container-fluid">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?=BASE_URL;?>../admin/">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Tabel Barang</li>
                </ol>

                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i> Data Table Barang
                        <a class="btn btn-primary" href="barang_tambah.php" role="button">Tambah <i class ="fas fa-plus"></i></a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="col-1">No</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Gambar</th>
                                        <th class="col-3">aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        $no = 0;
                                        $query = mysqli_query($con,"select * from barang");
                                        
                                        while ($data = mysqli_fetch_array($query)) { $no++;
                                    ?>
                                    <tr>
                                        <td><?=$no; ?></td>
                                        <td><?=$data['nama_barang']; ?></td>
                                        <td>Rp. <?=$data['harga_barang']; ?></td>
                                        <td><?=$data['stok_barang']; ?></td>
                                        <td><img src="<?=BASE_URL;?>../assets/img/<?=$data['gambar_barang'];?>" width="80" height="auto"></td>
                                        <td>
                                            <a class="btn btn-primary" href="barang_edit.php?id=<?=$data['id_barang'];?>" role="button"><i class ="fas fa-edit"></i> Edit</a>
                                            <a class="btn btn-danger" href="barang_delete.php?id=<?=$data['id_barang'];?>" role="button" ><i class ="fas fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
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
    <script src="<?=BASE_URL;?>../assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?=BASE_URL;?>../assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="<?=BASE_URL;?>../assets/js/sb-admin.min.js"></script>
    <script src="<?=BASE_URL;?>../assets/js/demo/datatables-demo.js"></script>

</body>

</html>