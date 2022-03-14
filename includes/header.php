<?php 
	require"config/connect.php";

 ?>

 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$title." ".WEBNAME;?></title>
    <link href="<?=BASE_URL;?>../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=BASE_URL;?>../assets/css/shop-homepage.css" rel="stylesheet">
    <link href="<?=BASE_URL;?>../assets/css/customs.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?=BASE_URL;?>../"><img src="<?=BASE_URL;?>../assets/images/pina.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=BASE_URL;?>../">Home
              <span class="sr-only">(current)</span>
            </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontak.php">Kontak Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">