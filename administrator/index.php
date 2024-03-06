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
    <section class="hero-section about-section  hero-section-full-height">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-12 col-12 p-0">
                            <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="../images/slide/volunteer-helping-with-donation-box.jpg" class="carousel-image img-fluid" alt="...">
                                        
                                        <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>RPL</h1>
                                            
                                            <p>Softwer engineering, our class</p>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="../images/slide/volunteer-selecting-organizing-clothes-donations-charity.jpg" class="carousel-image img-fluid" alt="...">
                                        
                                        <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>praskasaga</h1>
                                            
                                            <p>You can support us to grow more</p>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="../images/slide/medium-shot-people-collecting-donations.jpg" class="carousel-image img-fluid" alt="...">
                                        
                                        <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>cafe ambalan</h1>
                                            
                                            <p>Please tell your friends about our website </p>
                                        </div>
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

<section class="testimonial-section  section-padding ">
    <div class="container">
        <div class="row">

        <div class="col-lg-8 col-12 mx-auto">
            <h2 class="mb-lg-3">Good Luck</h2>
                            
                <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">

                    <div class="carousel-inner">
                    <div class="carousel-item active">
                    <div class="carousel-caption">
                    
                        <h4 class="carousel-title">Menjalani semuanya harus dengan tenang,karena menjalani semua dengan ketenangan maka apa yang kita lakukan akan menjadi ikhlas</h4>
                        <small class="carousel-name"><span class="carousel-name-title"><?= $_SESSION['id_login']; ?></span>). <?= $_SESSION['nama']; ?> {<span class="carousel-name-title"><?= $_SESSION['status']; ?></span>}.</small>
                    </div>
                    </div>
                    </div>
                        
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

    <?php
       include('footer.php');