<?php 
	

	define("BASE_URL","http://localhost/pina_shop/admin/");
	define("WEBNAME","Online_Shop");
	$con = mysqli_connect("localhost","root","","online_shop");
	if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());

	}
	// echo "Koneksi berhasil";
	// mysqli_close($con);
 ?>