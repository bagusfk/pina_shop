<?php 
	$title = "Dashboard Admin";
	require"includes/header.php";
 ?>

		<div class="container-fluid">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?=BASE_URL;?>../admin/">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Overview</li>
                </ol>

                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-comments"></i>
                                </div>
                                <?php
                                    $result=mysqli_query($con,"SELECT count(*) as total from barang");
                                    $data=mysqli_fetch_assoc($result);
                                ?>
                                <div class="mr-5"><?=$data['total'];?> Data Barang</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="barang.php">
                                <span class="float-left">Lihat Detail</span>
                                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-list"></i>
                                </div>
                                <?php
                                    $result=mysqli_query($con,"SELECT count(*) as total from kategori");
                                    $data=mysqli_fetch_assoc($result);
                                ?>
                                <div class="mr-5"><?=$data['total'];?> Data Kategori</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="kategori.php">
                                <span class="float-left">Lihat Detail</span>
                                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-shopping-cart"></i>
                                </div>
                                <?php
                                    $result=mysqli_query($con,"SELECT count(*) as total from penjualan");
                                    $data=mysqli_fetch_assoc($result);
                                ?>
                                <div class="mr-5"><?=$data['total'];?> Data Penjualan</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="penjualan.php">
                                <span class="float-left">Lihat Detail</span>
                                <span class="float-right">
                                  <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-chart-area"></i> Area Chart Example</div>
                    <div class="card-body">
                        <canvas id="myAreaChart" width="100%" height="30"></canvas>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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
                        <span aria-hidden="true">??</span>
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

    <!-- Bootstrap core JavaScript-->
    <script src="<?=BASE_URL;?>../assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=BASE_URL;?>../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=BASE_URL;?>../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?=BASE_URL;?>../assets/vendor/chart.js/Chart.min.js"></script>
    <script src="<?=BASE_URL;?>../assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?=BASE_URL;?>../assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="<?=BASE_URL;?>../assets/js/sb-admin.min.js"></script>
    <script src="<?=BASE_URL;?>../assets/js/demo/datatables-demo.js"></script>
    <script src="<?=BASE_URL;?>../assets/js/demo/chart-area-demo.js"></script>

</body>

</html>