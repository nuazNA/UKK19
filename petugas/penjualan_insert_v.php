<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'petugas') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>


<?php
include('header.php');
include('inavbar.php');

?>


<section class="contact-section section-padding" id="section_6">
            <div class="container">
                <div class="row">

                    

                    <div class="col-lg-5 col-12 mx-auto">
                        <form class="custom-form contact-form" action="penjualan_insert_m.php" method="post" role="form">
                        <input type="hidden" name="id_login" value="<?= $_SESSION['id_login'] ?>">
                            <h2>data pelanggan</h2>

                                                        <!-- <div class="row"> -->
                                <!-- <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="id" id="first-name" class="form-control" placeholder="id" required>
                                </div> -->

                                <!-- <div class="col-lg-6 col-md-6 col-12"> -->
                                    <input type="text" name="id_pelanggan" class="form-control" value="<?= date('mis'); ?>" required>
                                <!-- </div> -->
                            <!-- </div> -->

                            <input type="text" name="nama_pelanggan" id="email" class="form-control" placeholder="nama" required>
                            
                            <input type="text" name="alamat_pelanggan" id="email" class="form-control" placeholder="Alamat" required>
                            
                            <input type="text" name="telepon_pelanggan" id="email" class="form-control" placeholder="Telepon" required>
                            
                            
                            <button type="submit" class="form-control">simpan</button>
                            </form>
                    </div>

                </div>
            </div>
        </section>
    </main>


    <?php
include('footer.php');


?>    
