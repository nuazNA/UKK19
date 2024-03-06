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
            <h2 class="mb-5">DATA USERNAME AND PASSWORD </h2>
        </div>
        
        <a href="registrasi_insert_v.php" class="nav-link custom-btn custom-border-btn btn m-4">registrasi</a>

        <div class="row ">
            <div class=" col-md-11 col-md-1 m-5 mb-lg-11 mb-md-0">
            <div class="featured-block d-flex justify-content-center align-items-center">
                
                    <table class="table table table-hover table-striped ">
                        <thead class="table-success">
                            <th>id</th>
                            <th>nama</th>
                            <th>username</th>
                            <th>password</th>
                            <th>ststus</th>
                            <th>aksi</th>
                        </thead>
                        <tbody class="table-group-divider">
                                    <?php 
                                    include('../config.php');
                                    $sql = mysqli_query($koneksi, "SELECT * FROM tb_login");
                                    foreach($sql as $pengguna){
                                    ?>
                            <tr>
                                <th><?= $pengguna['id_login'] ?></th>
                                <th><?= $pengguna['nama'] ?></th>
                                <th><?= $pengguna['username_login'] ?></th>
                                <th><?= $pengguna['password_login'] ?></th>
                                <th><?= $pengguna['status'] ?></th>
                                <th><a href="registrasi_update_v.php?id_login=<?= $pengguna['id_login']?>"  class="custom-btn btn text-bg-info mt-2">update</a></td>
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