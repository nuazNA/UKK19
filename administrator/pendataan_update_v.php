<?php
include('header.php');
include('inavbar.php');
include ('../config.php');

$id = $_GET['id_barang'];

$sql = mysqli_query($koneksi, "SELECT * FROM tb_barang  WHERE id_barang='$id'");

$barang = mysqli_fetch_assoc($sql);

?>
<section class="cta-section section-padding section-bg " id="section_4">
<div class="col-lg-9 col-17 mx-auto">
               
                        <div class="col-lg-6 col-12 mx-auto">
                            <h2 class="text-white mb-4">

                            <form class="custom-form volunteer-form mb-5 mb-lg-0" action="pendataan_update_m.php" method="post" role="form">
                                <h3 class="mb-4">Mengupdate barang</h3>

                                <input type="hidden" name="id" value="<?= $barang['id_barang'] ?>">

                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <input type="text" name="nama_barang" value="<?= $barang['nama_barang'] ?>" class="form-control" placeholder="nama barang" required>
                                    </div>

                                    <div class="col-lg-6 col-12">    
                                        <input type="text" name="stok" value="<?= $barang['stok_barang'] ?>" class="form-control" placeholder="stok" required>
                                    </div>

                                    <div class="">
                                        <input type="text" name="harga" value="<?= $barang['harga_barang'] ?>"  class="form-control" placeholder="Harga" required>
                                    </div>

                                </div>

                                <button type="submit" class="form-control">Submit</button>
                            </form>
                        </div>

                    </div>
                </h2>
            </section>
    <?php
include('footer.php');
?>    
