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
    <section class="cta-section section-padding  " id="section_2">
<div class="col-lg-10 col-12 text-center mx-auto">
            <h2 class="mb-5">DAFTAR DATA PELANGGAN  </h2>
        </div>
        
        
        <div class="row ">
            <div class=" col-md-11 col-md-1 m-5 mb-lg-11 mb-md-0">
            <div class="featured-block d-flex justify-content-center align-items-center">
                
                    <table class="table table table-hover table-striped ">
                        <thead class="table-primary">
                            <th style="text-align: center;">ID pelanggan</th>
                            <th style="text-align: center;">Nama</th>
                            <th style="text-align: center;">alamat</th>
                            <th style="text-align: center;">Telepon</th>
                            </thead>
                        <tbody class="table-group-divider">
                        <?php
    //ambil koneksi
    include "../config.php";
    //ambil data di tb_pelanggan
    $sql = mysqli_query($koneksi, 'SELECT * FROM tb_pelanggan ORDER BY id_pelanggan DESC');
    foreach ($sql as $pelanggan) {
    ?>
      <tr>
        <td><?= $pelanggan['id_pelanggan'] ?> </td>
        <td><?= $pelanggan['nama_pelanggan'] ?></td>
        <td><?= $pelanggan['alamat_pelanggan'] ?></td>
        <td><?= $pelanggan['telepon_pelanggan'] ?></td>
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