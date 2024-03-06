<?php
    session_start();
    //cek session 
    if ($_SESSION['login'] != 'admin') {
      //kembali ke halaman login
      header('location: ../index.php');
    }
    include('../config.php');
    include('header.php');
    include('inavbar.php');
    
    ?>
    <section class="testimonial-section section-padding section-bg  " id="section_2">
<div class="col-lg-10 col-12 text-center mx-auto">
            <h2 class="mb-5">DAFTAR TRANSAKSI YANG SUDAH DILAKUKAN </h2>
        </div>
      
        <div class="row m-5 ">
            <div class=" col-md-11 col-md-1 m-5 mb-lg-11 mb-md-0">
            <div class="featured-block d-flex justify-content-center align-items-center">
                
                    <table class="table table table-hover table-striped ">
                        <thead class="table-info">
                            <th style="text-align: center;">ID penjualan</th>
                            <th style="text-align: center;">Tanggal</th>
                            <th style="text-align: center;">Total</th>
                            <th style="text-align: center;">ID pelanggan</th>
                            <th style="text-align: center;">Petugas</th>
                            
                        </thead>
                        <tbody class="table-group-divider">
                        <?php
    //ambil koneksi
    include "../config.php";
    //ambil data di tb_pelanggan
    $sql = mysqli_query($koneksi, 'SELECT * FROM tb_penjualan');
    foreach ($sql as $penjualan) {
    ?>
      <tr>
          <th><?= $penjualan['id_penjualan'] ?></th>
          <th><?= $penjualan['tgl_penjualan'] ?></th>
          <th><?= $penjualan['total'] ?></th>
          <th><?= $penjualan['id_pelanggan'] ?></th>
          <th><?= $penjualan['id_login'] ?></th>
        </tr>
    <?php } ?>
                        </tbody>
                    </table>
                </a>
            </div>
        </div>
          </section>
        
<?php 
include('footer.php');

?>