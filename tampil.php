<?php 
    $title = "Detail Produk";
    require"includes/header.php";
    if (isset($_GET['id'])) {
        $query=mysqli_query($con,"select * from barang left join kategori on kategori.id_kategori =barang.id_kategori where barang.id_barang = '".$_GET['id']."'");
        $data = mysqli_fetch_assoc($query);
    }
?>
        <form action="beli.php" method="post" class="m-5">
            <div class="row">

                <div class="col-md-9">
                    <div class="row">
                        
                            <div class="col-md-4">
                                    <img class="card-img-top" src="<?=BASE_URL?>../assets/img/<?=$data['gambar_barang'];?>" alt="" >
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h1 class="my-4"><?=$data['nama_barang']?></h1>
                                    <h5>Rp. <?=number_format($data['harga_barang']);?>,-/ <?=$data['satuan_barang'];?></h5>
                                    
                                    <div class="input-group mt-3">
                                      <span class="input-group-text" id="inputGroup-sizing-default">Qty </span>
                                      <input type="number" class="form-control col-lg-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="1" name="qty">
                                    </div>
                                </div>
                            </div>              

                    </div>
                </div>

                <div class="col-md-3">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small><br>
                    <span>Kategori : <?=$data['nama_kategori']?></span><br>
                   <input type="submit" name="beli" value="Beli" class="btn btn-primary mt-4">
                   <input type="hidden" name="id" value="<?=$_GET['id'];?>">
                </div>
            </div>
        </form>
<?php 
 require"includes/footer.php";
 ?>