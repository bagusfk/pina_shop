<?php 
    $title = "Bayar Produk";
    require"includes/header.php";
    if (isset($_POST['bayar'])) {
        $nama = $_POST['nama'];
        $telp = $_POST['phone'];
        $alamat = $_POST['alamat'];
        
        $insert=mysqli_query($con,"insert into customer(nama_customer,alamat_customer,telp_customer) value('$nama','$alamat','$telp')");
        if ($insert) {
            $sql = "select id_customer from customer order by id_customer DESC";
            $cust_id = mysqli_query($con, $sql);
            $customer_id=mysqli_fetch_object($cust_id);
            $qty = $_POST['qty'];
            $id = $_POST['id'];
            $setpenjualan=mysqli_query($con,"insert into penjualan(qty_penjualan, id_barang,id_customer) value('$qty','$id','$customer_id->id_customer')");

            if ($setpenjualan) {
                $barang=mysqli_query($con,"select * from barang where id_barang = '$id'");
                $data=mysqli_fetch_assoc($barang);

?>
            <div class="row mt-5 mb-5">
                <div class="col-md-12 mb-5">
                    <h2 class="mb-5">Detail yang harus di bayar</h2>
                    <table class="table mb-5">
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Qty</th>
                                <th>jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?=$data['nama_barang'];?></td>
                                <td>Rp. <?=number_format($data['harga_barang']);?></td>
                                <td><?=$qty;?></td>
                                <td>Rp. <?=number_format($data['harga_barang'] * $qty);?></td>
                            </tr>
                        </tbody>
                    </table>
                    <h3>Total yang harus di bayar : Rp. <?=number_format($data['harga_barang'] * $qty);?></h3>
                </div>
                <div class="col-md-12 ">
                    <h5>Informasi Pembayaran</h5>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, officiis illo maxime saepe voluptatibus, sapiente nihil delectus ratione odio veritatis consequuntur. Unde labore officia hic temporibus quae rerum debitis dolor!<br>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, natus mollitia neque cupiditate, perferendis unde? Excepturi voluptatem cum, odio iste velit impedit quaerat, eos. Quos voluptates maxime itaque alias eum.</p>
                </div>
            </div>
<?php
            }
        }
    }
?>

<?php 
 require"includes/footer.php";
 ?>