<?php 
include 'template/head.php'; 
include 'php_files/session.php';
include 'php_files/config.php';
include 'php_files/checkout-p.php';
session_start();

if (!isset($_SESSION['email'], $_GET['produk'])){
  header("Location: login.php");
}
?>
<br>
    <div class="container mt-4">
        <div class="card">
            <h5 class="card-header" style= "background-color:<?php echo $primary_color; ?>; color: white"> <i class="fas fa-shopping-bag"></i><b> Checkout</b></h5>
            
            <div class="card-body">
                
            <div class="row">
            <?php 
              $id = $_GET['produk'];
              $data = mysqli_query($conn,"select * from produk where id_produk='$id' ");
              while($d = mysqli_fetch_array($data)){
            ?>
              <div class="col-md-6">
                <img src="img/logo_op/<?php echo $d['nama_produk']; ?>.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title text-uppercase"><span class="badge badge-warning"><?php echo $d['tambahan']; ?></span> <?php if($d['jenis'] == "kuota") { echo '<span class="badge badge-info">KUOTA</span>'; } elseif($d['jenis'] == "pulsa") { echo '<span class="badge badge-success">PULSA</span>'; } ?></span><b> <?php echo $d['nama_produk']; ?></b></h5>
                <p class="card-text"><i class="fas fa-globe"></i> <?php echo $d['keterangan']; ?></p>
                <p class="card-text"><i class="far fa-clock"></i> <?php echo $d['masa_aktif']; ?></p>
                <hr>
                <strike><?php echo $d['diskon']; ?></strike>
                <h4><b> <label>Rp</label> <?php echo $d['harga']; ?></b></h4>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <h4 class="text-uppercase" style="color: <?php echo $primary_color; ?>"><b>Konfirmasi Pesanan Anda</b></h4>
                  <b>Pembelian :</b> <?php echo '<label class="card-title text-capitalize">' . $d['nama_produk'] . '</label>'; ?> - <?php echo $d['keterangan']; ?> <br>
                  <b>Harga : </b> <label>Rp</label> <?php echo $d['harga']; ?> <br>
                <hr>
                
                <h5 class="card-title" style="color: <?php echo $primary_color; ?>"><b>Silahkan isi informasi Pembelian</b></h5>
                <form class="needs-validation" method="POST" novalidate>
                  <input type="number" class="form-control" id="validationCustom03" name="id_transaksi" value="<?php echo time(); ?>" hidden>
                  <input type="number" class="form-control" id="validationCustom03" name="id_pembeli" value="<?php echo $_SESSION['id']; ?>" hidden>
                  <input type="text" class="form-control" id="validationCustom03" name="nama_produk" value="<?php echo $d['nama_produk']; ?>" hidden>
                  <input type="text" class="form-control" id="validationCustom03" name="keterangan" value="<?php echo $d['keterangan']; ?>" hidden>
                  <input type="text" class="form-control" id="validationCustom03" name="harga" value="<?php echo $d['harga']; ?>" hidden>
                  <input type="text" class="form-control" id="validationCustom03" name="tanggal_pembelian" value="<?php echo date('D, d M Y'); ?>" hidden>
                  <input type="text" class="form-control" id="validationCustom03" name="status" value="<?php echo 'Belum Dibayar'; ?>" hidden>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <label for="validationCustom03">Phone</label>
                          <input type="number" class="form-control" id="validationCustom03" name="no_tujuan" value="<?php echo$_SESSION['phone']; ?>" required>
                          <div class="invalid-feedback">
                            Please enter your number phone
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                          Saya telah mengisi data saya dengan benar.
                        </label>
                        <div class="invalid-feedback">
                          You must checked before submitting.
                        </div>
                      </div>
                    </div>
                    <hr>
                    <h5 class="card-title" style="color: <?php echo $primary_color; ?>"><b>Silahkan isi informasi Pembayaran</b></h5>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih Pembayaran: </label>
                        <select name="jenis_pembayaran" class="form-control" id="exampleFormControlSelect1">
                        <option>Transfer Bank - BCA</option>
                        <option>Alfamart</option>
                        <option>Indomaret</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn" name="c_submit" style="color: white; background-color: <?php echo $primary_color; ?>;"><i class="fas fa-shopping-cart"></i> Beli </button>
                    </div>
                    <?php
                      }
                    ?>
                  </form>
                  </div>
                </div>
              </div>
            </div>
                
            </div>
        </div>
    </div>

    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>

<?php include 'template/footer.php'; ?>
<?php include 'template/foot.php'; ?>