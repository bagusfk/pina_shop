 <?php 
    $title = "Home";
    require"includes/header.php";

    if (isset($_GET['filter'])) {
        $query=mysqli_query($con,"select * from barang where id_kategori = '".$_GET['filter']."'");
        $data=mysqli_fetch_assoc($query);
    }elseif (isset($_GET['search'])) {
        $key="%".$_GET['search']."%";
        $query=mysqli_query($con,"select * from barang where nama_barang like'$key'");
        $data=mysqli_fetch_assoc($query);
    }elseif (!isset($_GET['filter'])) {
        $query=mysqli_query($con,"select * from barang order by id_barang DESC");
        $data=mysqli_fetch_assoc($query);
    }
  ?>
         <div class="row">

            <div class="col-lg-3">

                <h1 class="my-4">Shop Name</h1>
                <div class="list-group">
                    <a href="<?=BASE_URL?>../" class="list-group-item">Semua Kategori</a>
                    <?php 
                        $quer = mysqli_query($con,"select * from kategori order by nama_kategori ASC");
                        $kategori = mysqli_fetch_assoc($quer);
                        do{
                     ?>
                    <a href="?filter=<?=$kategori['id_kategori'];?>" class="list-group-item"><?=$kategori['nama_kategori'];?></a>
                    <?php 
                        }while($kategori = mysqli_fetch_assoc($quer));
                     ?>
                </div>
            </div>

            <div class="col-lg-9">

                <div class="col-lg-12 mt-3 mb-3">
                    <form class="col-lg-12 d-none d-md-inline-block form-inline">
                        <div class="input-group">
                            <input class="form-control" type="search" placeholder="Cari" name="search" aria-describedby="basic-addon2" value="<?php if (isset($_GET['search'])) {echo $_GET['search'];}?>">
                            <div class="input-group-append">
                                <input class="btn btn-primary" type="submit" value="Cari">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <?php 
                    if (mysqli_num_rows($query)>0) {
                        
                        do {
                    ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a class="link-img-produk" href="tampil.php?id=<?=$data['id_barang'];?>"><img class="card-img-top" src="<?=BASE_URL?>../assets/img/<?=$data['gambar_barang'];?>" alt="" ></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                  <a href="tampil.php?id=<?=$data['id_barang'];?>"><?=$data['nama_barang'];?></a>
                                </h4>
                                    <h5>Rp. <?=number_format($data['harga_barang']);?></h5>
                                </div>
                                <div class="card-footer">
                                    <a href="tampil.php?id=<?=$data['id_barang']?>" class="btn btn-primary w-100 h-100 pd-5">Beli</a>
                                </div>
                            </div>
                        </div>
                    <?php 
                        } while ($data=mysqli_fetch_assoc($query));
                    }else{
                        echo "Tidak ada produk yang ditampilkan :(";
                    }
                     ?>

                </div>
            </div>

        </div>
<?php 
 require"includes/footer.php";
 ?>