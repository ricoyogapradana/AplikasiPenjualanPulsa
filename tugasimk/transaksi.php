<?php 
include 'template/head.php'; 
include 'php_files/session.php';
include 'php_files/config.php';
session_start();

if (!isset($_SESSION['email'])){
  header("Location: login.php");
}
?>
<br>
    <div class="container mt-5">
    <h2 class="mb-4" style= "color:<?php echo $primary_color; ?>;"> <i class="fas fa-shopping-cart"></i><b> Transaksi </b></h2>
    <hr>


    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="semua-tab" data-toggle="tab" href="#semua" role="tab" aria-controls="semua" aria-selected="true" style="color: <?php echo $primary_color; ?>;">Semua</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="diproses-tab" data-toggle="tab" href="#diproses" role="tab" aria-controls="diproses" aria-selected="false" style="color: <?php echo $primary_color; ?>;">Diproses</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="selesai-tab" data-toggle="tab" href="#selesai" role="tab" aria-controls="selesai" aria-selected="false" style="color: <?php echo $primary_color; ?>;">Selesai</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="dibatalkan-tab" data-toggle="tab" href="#dibatalkan" role="tab" aria-controls="dibatalkan" aria-selected="false" style="color: <?php echo $primary_color; ?>;">Dibatalkan</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="semua" role="tabpanel" aria-labelledby="semua-tab">
        <!--  -->
        <?php 
                $data = mysqli_query($conn,"select * from transaksi where id_pembeli='". $_SESSION['id'] . "' ORDER BY id_transaksi desc ");
                while($d = mysqli_fetch_array($data)){
              ?>
        <div class="card mt-2">
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <img src="img/logo_op/<?php echo $d['nama_produk']; ?>.png" alt="" class="img-fluid">
              </div>
              <div class="col-md-9">
                <b>ID Pembelian : </b> <?php echo $d['id_transaksi']; ?> <br>
                <b>Pembelian : </b> <?php echo $d['keterangan']; ?> (<?php echo $d['no_tujuan']; ?>)<br>
                <b>Tanggal</b> : <?php echo $d['tanggal_pembelian'] ?> <br>
                <b>Metode Pembayaran : </b> <?php echo $d['jenis_pembayaran']; ?> <br>
                <b>Harga : </b> <label>Rp</label> <?php echo $d['harga']; ?> <br>
                <b>Status</b> : <span class="badge badge-success"><?php echo $d['status']; ?></span>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
        <!--  -->
      </div>

      <div class="tab-pane fade show" id="selesai" role="tabpanel" aria-labelledby="selesai-tab">
         <!--  -->
         <?php 
                $data = mysqli_query($conn,"select * from transaksi where id_pembeli='". $_SESSION['id'] . "' and status='selesai' ORDER BY id_transaksi desc ");
                while($d = mysqli_fetch_array($data)){
              ?>
        <div class="card mt-2">
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <img src="img/logo_op/<?php echo $d['nama_produk']; ?>.png" alt="" class="img-fluid">
              </div>
              <div class="col-md-9">
                <b>ID Pembelian : </b> <?php echo $d['id_transaksi']; ?> <br>
                <b>Pembelian : </b> <?php echo $d['keterangan']; ?> (<?php echo $d['no_tujuan']; ?>)<br>
                <b>Tanggal</b> : <?php echo $d['tanggal_pembelian'] ?> <br>
                <b>Metode Pembayaran : </b> <?php echo $d['jenis_pembayaran']; ?> <br>
                <b>Harga : </b> <label>Rp</label> <?php echo $d['harga']; ?> <br>
                <b>Status</b> : <span class="badge badge-success"><?php echo $d['status']; ?></span>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
        <!--  -->
      </div>

      <div class="tab-pane fade" id="diproses" role="tabpanel" aria-labelledby="diproses-tab">
       <!--  -->
       <?php 
                $data = mysqli_query($conn,"select * from transaksi where id_pembeli='". $_SESSION['id'] . "' and status='diproses' ORDER BY id_transaksi desc ");
                if ($data < 0) {
                  echo "Tidak Ada Data Yang Ditampilkan";
                } else {
                while($d = mysqli_fetch_array($data)){
              ?>
        <div class="card mt-2">
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <img src="img/logo_op/<?php echo $d['nama_produk']; ?>.png" alt="" class="img-fluid">
              </div>
              <div class="col-md-9">
                <b>ID Pembelian : </b> <?php echo $d['id_transaksi']; ?> <br>
                <b>Pembelian : </b> <?php echo $d['keterangan']; ?> (<?php echo $d['no_tujuan']; ?>)<br>
                <b>Tanggal</b> : <?php echo $d['tanggal_pembelian'] ?> <br>
                <b>Metode Pembayaran : </b> <?php echo $d['jenis_pembayaran']; ?> <br>
                <b>Harga : </b> <label>Rp</label> <?php echo $d['harga']; ?> <br>
                <b>Status</b> : <span class="badge badge-info"><?php echo $d['status']; ?></span>
              </div>
            </div>
          </div>
        </div>
        <?php }} ?>
        <!--  -->
      </div>
      <div class="tab-pane fade" id="dibatalkan" role="tabpanel" aria-labelledby="dibatalkan-tab">
        <!--  -->
        <?php 
                $data = mysqli_query($conn,"select * from transaksi where id_pembeli='". $_SESSION['id'] . "' and status='dibatalkan' ORDER BY id_transaksi desc ");
                while($d = mysqli_fetch_array($data)){
              ?>
        <div class="card mt-2">
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <img src="img/logo_op/<?php echo $d['nama_produk']; ?>.png" alt="" class="img-fluid">
              </div>
              <div class="col-md-9">
                <b>ID Pembelian : </b> <?php echo $d['id_transaksi']; ?> <br>
                <b>Pembelian : </b> <?php echo $d['keterangan']; ?> (<?php echo $d['no_tujuan']; ?>)<br>
                <b>Tanggal</b> : <?php echo $d['tanggal_pembelian'] ?> <br>
                <b>Metode Pembayaran : </b> <?php echo $d['jenis_pembayaran']; ?> <br>
                <b>Harga : </b> <label>Rp</label> <?php echo $d['harga']; ?> <br>
                <b>Status</b> : <span class="badge badge-danger"><?php echo $d['status']; ?></span>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
        <!--  -->
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