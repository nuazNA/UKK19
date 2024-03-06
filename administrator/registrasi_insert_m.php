<?php

    $nama = $_POST['nama'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $status = $_POST['status'];

    include('../config.php');
    $sql = mysqli_query($koneksi, "INSERT INTO  tb_login VALUES (Null,'$nama','$user','$pass','$status')");


    if ($sql) {
        header('location: registrasi_select.php');
    }