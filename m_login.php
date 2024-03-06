<?php

//koneksi
include "config.php";

//ambil data yang dikirim oleh v_login
$username_login = $_POST['username_login'];
$password_login = $_POST['password_login'];

//cek datanya di database / ditabel tb_login
$sql = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username_login='$username_login' AND password_login='$password_login'");

// variabel hasil=0 kalau tidak ada, hasil=1 kalau ada
$hasil = mysqli_num_rows($sql);

//cek kondisi
if ($hasil > 0) {
  //abmil data user yang login
  $data = mysqli_fetch_assoc($sql);

  //cek kondisi status
  if ($data['status'] == "Administrator") {
    session_start();
    //buat session untuk security 
    $_SESSION['login'] = 'admin';
    //nama pengguna dan id pengguna
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['id_login'] = $data['id_login'];
    $_SESSION['status'] = $data['status'];

    //ke halaman administrator
    header('location: administrator/index.php');
  } else 
   if ($data['status'] == "Petugas") {
    //buat session untuk security 
    session_start();
    $_SESSION['login'] = 'petugas';
    //nama pengguna dan id pengguna
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['id_login'] = $data['id_login'];
    $_SESSION['status'] = $data['status'];
    

    //ke halaman petugas
    header('location: petugas/index.php');
  }
   if ($data['status'] == "Petugas") {
    //buat session untuk security 
    session_start();
    $_SESSION['login'] = 'petugas';
    //nama pengguna dan id pengguna
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['id_login'] = $data['id_login'];
    $_SESSION['status'] = $data['status'];


    //ke halaman petugas
    header('location: petugas/index.php');
  }
}else{
  echo "<script>alert('Username or Password  salah. Silakan coba lagi!')</script>";
  include('index.php');
}

