<?php

    $nama_barang = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    include('../config.php');
    $sql = mysqli_query($koneksi, "INSERT INTO  tb_barang VALUES (Null,'$nama_barang','$stok','$harga')");


    if ($sql) {
        header('location: pendataan_select.php');
    }