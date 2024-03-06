<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'petugas') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>
<?php
include('../config.php');
    include('header.php');
    include('inavbar.php');



$id_pelanggan = $_GET['id_pelanggan'];
  //cari datanya
  $sql = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan INNER JOIN tb_penjualan ON tb_pelanggan.id_pelanggan = tb_penjualan.id_pelanggan");
  // $pelanggan = mysqli_fetch_assoc($sql);

  foreach ($sql as $pelanggan) {

    //cek data berdasarkan id_pelanggan
    if ($pelanggan['id_pelanggan'] == $id_pelanggan) {
  ?>


<section class="section-padding section-bg" id="section_2">
      <div class="container">
          <div class="row">
                            
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <div class="custom-text-box mb-lg-0">
            <h5 class="mb-3">Penjualan</h5>

        <ul class="custom-list mt-2">
        
          <li class="custom-list-item d-flex">                                    
          ID Pelanggan : <?= $pelanggan['id_pelanggan'] ?>
          </li>

          <li class="custom-list-item d-flex">
          Nama Pelanggan : <?=$pelanggan['nama_pelanggan'] ?>
          </li>

          <li class="custom-list-item d-flex">
          Alamat : <?= $pelanggan['alamat_pelanggan'] ?>
          </li>

          <li class="custom-list-item d-flex">
          Telepon : <?= $pelanggan['telepon_pelanggan'] ?>
          </li>
                                            
        </ul>


          </div>
      </div>

    </div>
  </div>
                <br>
                <br>

  <table class="table table-bordered border-success  table-success table-striped ">
      <thead class="table-warning">
        <th style="text-align: center;">Nama Barang</th>
        <th style="text-align: center;">Jumlah</th>
        <th style="text-align: center;">Harga</th>
        <th style="text-align: center;">Sub Total</th>
        <th colspan="2" style="text-align: center;">aksi</th>
        <!-- <th>stok barang</th> -->
        </thead>
        <tbody class="table-group-divider">

<?php
  //ambil data detail barang pada tb_detail_penjualan
  $data = mysqli_query($koneksi, "SELECT * FROM tb_detail_penjualan");

  //ambil data barang pada tb_barang
  $dataBarang = mysqli_query($koneksi, "SELECT * FROM tb_barang");

  //tampilkan data detail barang
  foreach ($data as $detail) {
  if ($detail['id_penjualan'] == $pelanggan['id_penjualan']) {

  //ambil data harga barang pada tb_barang
  foreach ($dataBarang as $barang) {
  if ($barang['id_barang'] == $detail['id_barang']) {
  $harga_barang =  $barang['harga_barang'];
  $stok_barang = $barang['stok_barang'];
    }
  }
?>
        
        <th>
        <form action="m_update_barang_detail.php" method="post">
        <input type="hidden" name="id_detail_penjualan" value="<?= $detail['id_detail_penjualan'] ?>">
        <input type="hidden" name="id_pelanggan" value="<?= $pelanggan['id_pelanggan'] ?>">

        <select name="id_barang" id="" onchange="this.form.submit()"  class="form-control">
        <?php
          foreach ($dataBarang as $barang) {
          ?> <option value="<?= $barang['id_barang'] ?>" <?php if ($barang['id_barang'] == $detail['id_barang']) echo "selected"; ?>><?= $barang['nama_barang'] ?></option>
        <?php } ?>

        </select>
        </form>
        </th>

      <!-- kolom jumlah barang dan sub total dan stok barang -->
      <form action="m_hitung_sub_total.php" method="post">
      <input type="hidden" name="id_detail_penjualan" value="<?= $detail['id_detail_penjualan'] ?>">
      <input type="hidden" name="id_pelanggan" value="<?= $pelanggan['id_pelanggan'] ?>">
      <input type="hidden" name="id_barang" value="<?= $detail['id_barang'] ?>">

      <th class="col-lg-1   form-check-group">
            <input type="number" class="form-control" name="jumlah_barang" value="<?= $detail['jumlah_barang'] ?>" tabindex="1" onchange="this.form.submit()">
      </th>

      <th>
      <div class="input-group">
        <span class="input-group-text" id="basic-addon1">Rp.</span>
                                            
          <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" name="harga_barang" id="" value="<?= $harga_barang ?>" readonly>
      </div>
       </th>
                
      <th>
      <div class="input-group">
        <span class="input-group-text" id="basic-addon1">Rp.</span>
          <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" name="sub_total" id="" value="<?= $detail['sub_total'] ?>" readonly>
      </div>
      </th>
              
      <th class="col-lg-1   form-check-group">
        <input type="text" class="form-control" name="stok_barang" value="<?= $stok_barang ?>" readonly>
      </th>
    </form>
            

              <!-- kolom hapus -->

              <th>
                  <form action="m_hapus_detail_barang.php" method="post">
                    <input type="hidden" name="jumlah_barang" value="<?= $detail['jumlah_barang'] ?>">
                    <input type="hidden" name="id_barang" value="<?= $detail['id_barang'] ?>">


                    <input type="hidden" name="id_detail_penjualan" value="<?= $detail['id_detail_penjualan'] ?>">
                    <input type="hidden" name="id_pelanggan" value="<?= $pelanggan['id_pelanggan'] ?>">
                    <input class="btn btn-outline-dark" type="submit" value="Hapus">
                  </form>
                </th>
              
              
  </tr>
        <?php   }
        }
        ?>

        <!-- kolom hitung total -->
        <form action="m_hitung_total.php" method="post">
          <input type="hidden" name="id_penjualan" value="<?= $detail['id_penjualan'] ?>">
          <input type="hidden" name="id_pelanggan" value="<?= $pelanggan['id_pelanggan'] ?>">
          <tr>
            <?php
            //  hitung total pembelian dari tb_detail_penjualan
            $hitung = mysqli_query($koneksi, "SELECT SUM(sub_total) AS Total FROM tb_detail_penjualan WHERE id_penjualan='$pelanggan[id_penjualan]'");
            $total = mysqli_fetch_assoc($hitung);
            ?>

            <th colspan="2"></th>
            <th colspan="2"  >
            <div class="col-lg-11 col-12 form-check-group">
            <div class="input-group" >
              <label for="" class="col-lg-2 col-form-label m-2">Total</label>
              <span class="input-group-text" id="basic-addon1">Rp.</span>
              <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" name="total" id="" value="<?= $total['Total'] ?>" readonly>
            </div>
            </div>
            </th>
            <th colspan="2"></th>
          </tr>

          <tr>
            <th colspan="2"></th>
            <th colspan="2" valign="center" >
            <div class="col-lg-11 col-12 form-check-group">
            <div class="input-group">
            <label for="" class=" col-lg-2 col-form-label m-2">Bayar</label>
              <span class="input-group-text" id="basic-addon1">Rp.</span>
              <input type="number" name="bayar" id="bayar" onchange="this.form.submit()" tabindex="1" class="form-control"   aria-label="Username" aria-describedby="basic-addon1">
            </div>
            </div>
            </th>
            
            <th colspan="2"></th>
          </tr>

          <tr>
            <th colspan="2"></th>
            <th colspan="2">
            <div class="col-lg-11 col-12 form-check-group">
            <div class="input-group">
            <label for="" class="col-lg-2 col-form-label m-2">Kembali</label>
              <span class="input-group-text" id="basic-addon1">Rp.</span>
                <input type="number" name="kembali" id="" value="<?php if (isset($_GET['kembali'])) {  echo    $kembali = $_GET['kembali'];
                  } ?>" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" name="total" id=""  readonly>
            </div>
            </div>
            </th>
            
           <th colspan="2"></th>
          </tr>
        </form>
          <tr>  
            <th  colspan="6" class="text-center">
              <div class="row">
               <div class="col">


                 <form action="detail_penjualan_m.php" method="post">
                 <input type="hidden" name="id_penjualan" id="" value="<?= $pelanggan['id_penjualan']  ?>">
                 <input type="hidden" name="id_pelanggan" id="" value="<?= $pelanggan['id_pelanggan']  ?>">
   
                 <!-- //button -->
                 
                 <input type="submit" value="Tambah Barang" class="col-lg-4 custom-btn btn  text-bg-success mt-2">
               </div>
              </div>
             
            </form>
            </th>
          </tr>
    </tbody>
  </table>
  </section>

<?php }
  } ?>
<?php
    include('footer.php');