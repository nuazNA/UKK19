<?php
include('header.php');
include('inavbar.php');
?>

<section class="contact-section section-padding" id="section_6">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                        <div class="contact-info-wrap">
                            <h2>cafe kami</h2>

                            <div class="contact-image-wrap d-flex flex-wrap">
                                <img src="../images/nurul.jpg" class="img-fluid avatar-image" alt="">

                                <div class="d-flex flex-column justify-content-center ms-3">
                                    <p class="mb-0">Nurul Azizeh</p>
                                    <p class="mb-0"><strong>HR & Office Manager</strong></p>
                                </div>
                            </div>

                            <div class="contact-info">
                                <h5 class="mb-3">Contact Infomation</h5>

                                <p class="d-flex mb-2">
                                    <i class="bi-geo-alt me-2"></i>
                                    jln.masjid Al-abror dsn.paeng
                                </p>

                                <p class="d-flex mb-2">
                                    <i class="bi-telephone me-2"></i>

                                    <a href="tel: +62 877 8224 3600">
                                        +62 877 8224 3600
                                    </a>
                                </p>

                                <p class="d-flex">
                                    <i class="bi-envelope me-2"></i>

                                    <a href="mailto:info@yourgmail.com">
                                        nurulazizeh03@gmail
                                    </a>
                                </p>

                               
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 mx-auto">
                        <form class="custom-form contact-form" action="registrasi_insert_m.php" method="post" role="form">
                            <h2>Registrasi</h2>

                                                        <!-- <div class="row"> -->
                                <!-- <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="id" id="first-name" class="form-control" placeholder="id" required>
                                </div> -->

                                <!-- <div class="col-lg-6 col-md-6 col-12"> -->
                                    <input type="text" name="nama" id="last-name" class="form-control" placeholder="nama" required>
                                <!-- </div> -->
                            <!-- </div> -->

                            <input type="text" name="username" id="email" class="form-control" placeholder="username" required>
                            
                            <input type="password" name="password" id="email" class="form-control" placeholder="password" required>

                            <select name="status" id="" class="form-control" required>
                                    <option value="Administrator">Administrator</option>
                                    <option value="Petugas">Petugas</option>
                            </select>
                            
                            <button type="submit" class="form-control">login</button>
                            
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>

<?php
include('footer.php');
?>    
