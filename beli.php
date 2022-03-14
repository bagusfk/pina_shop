<?php 
    $title = "Beli Produk";
    require"includes/header.php";
    
?>
        <form action="bayar.php" method="post" class="m-5">
            <div class="row">
                <div class="col-md-3">
                    <h2>Isi Detail Informasi Mu</h2>
                    <div class="mb-3 mt-5">
                        <label for="example" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="example" aria-describedby="" name="nama" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInput" class="form-label">No Telpon</label>
                        <input type="text" class="form-control" id="exampleInput" name="phone" placeholder="No Telpon" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Alamat Lengkap</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat" placeholder="Alamat Lengkap" required></textarea>
                    </div>
                   <input type="submit" name="bayar" value="Bayar Sekarang" class="btn btn-primary mt-4">
                   <input type="hidden" name="qty" value="<?=$_POST['qty']?>">
                   <input type="hidden" name="id" value="<?=$_POST['id']?>">
                </div>
            </div>
        </form>
<?php 
 require"includes/footer.php";
 ?>