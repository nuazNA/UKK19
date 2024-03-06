<?php
    session_start();
    //cek session 
    if ($_SESSION['login'] != 'petugas') {
      //kembali ke halaman login
      header('location: ../index.php');
    }
    include('../config.php');
    include('header.php');
    include('inavbar.php');
    
    ?>
    <section class="cta-section section-padding section-bg" id="section_2">
<div class="col-lg-10 col-12 text-center mx-auto">
            <h2 class="mb-5">DATA STOK BARANG YANG TERSISA</h2>
        </div>
        
       

        <div class="row ">
            <div class=" col-md-11 col-md-1 m-5 mb-lg-11 mb-md-0">
            <div class="featured-block d-flex justify-content-center align-items-center">
                
                    <table class="table table-bordered border-success table-success table-striped ">
                        <thead class="table-info">
                            <th>id</th>
                            <th>nama barang</th>
                            <th>stok</th>
                            <th>harga</th>
                            <th colspan="2">aksi</th>
                        </thead>
                        <tbody class="table-group-divider">
                                    <?php 
                                    include('../config.php');
                                    $sql = mysqli_query($koneksi, "SELECT * FROM tb_barang");
                                    foreach($sql as $barang){
                                    ?>
                            <tr>
                                <th><?= $barang['id_barang'] ?></th>
                                <th><?= $barang['nama_barang'] ?></th>
                                <th><?= $barang['stok_barang'] ?></th>
                                <th><?= $barang['harga_barang'] ?></th>
                                <th><a href="stok_update_v.php?id_barang=<?= $barang['id_barang']?>"  class="custom-btn btn  text-bg-success mt-2">update</a></td>
                                
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