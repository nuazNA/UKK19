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

     //hitung jumlah barang dari tb_barang
  $barang = mysqli_query($koneksi, "SELECT COUNT(*) as Jumlah FROM tb_barang");
  $jumlahBarang = mysqli_fetch_assoc($barang);

  //hitung jumlah pembelian dari tb_penjualan
  $penjualan = mysqli_query($koneksi, "SELECT COUNT(*) as Jumlah FROM tb_penjualan");
  $jumlahPenjualan = mysqli_fetch_assoc($penjualan);

  //hitung jumlah pengguna dari tb_pelanggan
  $pelanggan = mysqli_query($koneksi, "SELECT COUNT(*) as Jumlah FROM tb_pelanggan");
  $jumlahPelanggan = mysqli_fetch_assoc($pelanggan);
  
    
    ?>
    
    
    
    <section class="testimonial-section section-padding section-bg" id="section_6">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12 ms-auto mb-5 mb-lg-0">
                    <div class="contact-info-wrap">
                        <h2>SELAMAT BERTUGAS</h2>

                        <div class="contact-image-wrap d-flex flex-wrap">
                            
                            <div class="d-flex flex-column justify-content-center ms-3">
                                <p class="mb-0"><strong>Nama Pengguna : </strong><?= $_SESSION['nama']; ?></p>
                                <p class="mb-0"><strong>Status : </strong><?= $_SESSION['status']; ?></p>
                            </div>
                        </div>
                        </div>
                        </div>


                        <div class="container">
                    <div class="row">

                         <div class="col-lg-3 col-md-6 col-12 mb-7 mb-lg-0">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                
                                <div class="col-lg- col-md-10 col-12">
                                    <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                        <div class="counter-thumb"> 
                                            <div class="d-flex">
                                                <span class="counter-number" data-from="1" data-to="<?= $jumlahBarang['Jumlah']; ?>" data-speed="1"></span>
                                                <span class="counter-number-text"></span>
                                            </div>

                                            <span class="counter-text">Data Barang</span>
                                        </div> 

                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                            <div class="col-lg- col-md-10 col-12">
                                    <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                        <div class="counter-thumb"> 
                                            <div class="d-flex">
                                                <span class="counter-number" data-from="1" data-to="<?= $jumlahPenjualan['Jumlah']; ?>" data-speed="1"></span>
                                                <span class="counter-number-text"></span>
                                            </div>

                                            <span class="counter-text">Data Penjualan</span>
                                        </div> 

                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                            <div class="col-md-10 col-12">
                                    <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                        <div class="counter-thumb"> 
                                            <div class="d-flex">
                                                <span class="counter-number" data-from="1" data-to="<?= $jumlahPelanggan['Jumlah']; ?>" data-speed="1"></span>
                                                <span class="counter-number-text"></span>
                                            </div>

                                            <span class="counter-text">Data Pelanggan</span>
                                        </div> 

                                        
                                    </div>
                                </div>
                            </div>
                        </div>


                        </div>
                        </div>
                        </section>
                        
                        
                        


                        <section class="section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 text-center mx-auto">
                            <h2 class="mb-5">Welcome to our cafe</h2>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="donate.html" class="d-block">
                                    <img src="../images/icons/hands.png" class="featured-block-image img-fluid" alt="">

                                    <p class="featured-block-text">Become a <strong>volunteer</strong></p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="donate.html" class="d-block">
                                    <img src="../images/icons/heart.png" class="featured-block-image img-fluid" alt="">

                                    <p class="featured-block-text"><strong>Caring</strong> Earth</p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="donate.html" class="d-block">
                                    <img src="../images/icons/receive.png" class="featured-block-image img-fluid" alt="">

                                    <p class="featured-block-text">Love each other <strong> Friends</strong></p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="donate.html" class="d-block">
                                    <img src="../images/icons/scholarship.png" class="featured-block-image img-fluid" alt="">

                                    <p class="featured-block-text"><strong>Successful</strong> income</p>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>




    <?php
     




    include('footer.php');