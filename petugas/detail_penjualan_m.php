<?php
//ambil koneksi
include "../config.php";

// echo "detail";
// //terima data dari v_detail_penjualan.php
$id_pelanggan = $_POST['id_pelanggan'];

$id_penjualan = $_POST['id_penjualan'];
$id_barang = 1;
$jumlah_barang = 0;
$sub_total = 0;

$sql = mysqli_query($koneksi, "INSERT INTO tb_detail_penjualan VALUES(Null,'$id_penjualan','$id_barang','$jumlah_barang','$sub_total')");

// var_dump($sql);
// //kembali ke halaman v_detail_penjualan.php

header("location: detail_penjualan_v.php?id_pelanggan=$id_pelanggan");
