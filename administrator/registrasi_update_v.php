<?php
include('header.php');
include('inavbar.php');
include ('../config.php');

$id = $_GET['id_login'];

$sql = mysqli_query($koneksi, "SELECT * FROM tb_login  WHERE id_login='$id'");

$pengguna = mysqli_fetch_assoc($sql);

?>

<section class="contact-section section-padding" id="section_6">
                    <div class="col-lg-5 col-12 mx-auto">

                        <form class="custom-form contact-form" action="registrasi_update_m.php" method="post" role="form">
                            <h2>Registrasi</h2>

                            <input type="hidden" name="id" value="<?= $pengguna['id_login'] ?>">

                            
                            <!-- <div class="row"> -->
                                <!-- <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="id" id="first-name" class="form-control" placeholder="id" required>
                                </div> -->

                                <!-- <div class="col-lg-6 col-md-6 col-12"> -->
                                    <input type="text" name="nama" id="last-name" class="form-control" placeholder="nama" value="<?= $pengguna['nama'] ?>">
                                <!-- </div> -->
                            <!-- </div> -->

                            <input type="text" name="username" id="email" class="form-control" placeholder="username" value="<?= $pengguna['username_login'] ?>">
                            
                            <input type="password" name="password" id="email" class="form-control" placeholder="password" value="<?= $pengguna['password_login'] ?>">

                            <select name="status" id="" class="form-control" required>
                                <?php
                                if ($pengguna['status'] == "Administrator") {
                                    echo "<option value='Administrator' selected>Administrator</option>";
                                    
                                }else{
                                    echo "<option value='Administrator' selected>Administrator</option>";
                                }
                                if ($pengguna['status'] == "petugas") {
                                    echo "<option value='petugas' selected>petugas</option>";
                                    
                                }else{
                                    echo "<option value='petugas' selected>petugas</option>";
                                }
                                    ?>
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
