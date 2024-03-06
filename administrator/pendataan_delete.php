<?php 

    include('../config.php');

    $id = $_GET['id_barang'];
    $id_penjualan = $_GET['id_detail_penjualan'];

    $sql = mysqli_query($koneksi, "DELETE  FROM  tb_barang WHERE id_barang='$id'");


    
    if ($sql) {
        header('location: pendataan_select.php');
    }