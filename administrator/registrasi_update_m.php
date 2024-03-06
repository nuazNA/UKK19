<?php

    include('../config.php');

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $user = $_POST['username'];
    $password = $_POST['password'];
    $status = $_POST['status'];

     $sql = mysqli_query($koneksi, "UPDATE tb_login SET id_login='$id', nama='$nama', username_login='$user', password_login='$password'  WHERE id_login='$id'");


     if ($sql) {
        header('location: registrasi_select.php');
    }