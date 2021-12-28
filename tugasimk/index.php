<?php 
include 'template/head.php';
include 'php_files/session.php';
include 'php_files/config.php';
session_start();
?>
      <?php include 'template/cek_dompet.php' ?>

      <div class="container mt-4">
        <h2 class="text-center" style="color: <?php echo $primary_color; ?>;"><b>PROMO HARI INI</b></h2>
        <hr>
        <div class="row">
          <?php 
            $data = mysqli_query($conn,"select * from produk where tambahan='promo' ");
            while($d = mysqli_fetch_array($data)){
          ?>

          <div class="col-md-4 mt-2">
            <div class="card" style="width: auto;">
                <img src="img/logo_op/<?php echo $d['nama_produk']; ?>.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title text-uppercase"><span class="badge badge-warning"><?php echo $d['tambahan']; ?></span> <span class="badge badge-info"><?php echo $d['jenis']; ?></span><b> <?php echo $d['nama_produk']; ?></b></h5>
                <p class="card-text"><i class="fas fa-globe"></i> <?php echo $d['keterangan']; ?></p>
                <p class="card-text"><i class="far fa-clock"></i> <?php echo $d['masa_aktif']; ?></p>
                <hr>
                <label>Rp</label> <strike><?php echo $d['diskon']; ?></strike>
                <h4><b> <label>Rp</label> <?php echo $d['harga']; ?></b></h4>
                <a href="checkout.php?produk=<?php echo $d['id_produk']; ?>" class="btn" style="background-color:<?php echo $primary_color; ?>; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
                </div>
            </div>
          </div>

          <?php
            }
          ?>
        </div>
        <hr>

        <!-- ETALASE -->
        <h2 class="text-center" style="color: <?php echo $primary_color; ?>;"><b>ETALASE</b></h2>
        <hr>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="smartfren-tab" data-toggle="tab" href="#smartfren" role="tab" aria-controls="smartfren" aria-selected="true" style="color: <?php echo $primary_color; ?>;">Smartfren</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="telkomsel-tab" data-toggle="tab" href="#telkomsel" role="tab" aria-controls="telkomsel" aria-selected="false" style="color: <?php echo $primary_color; ?>;">Telkomsel</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="xl-tab" data-toggle="tab" href="#xl" role="tab" aria-controls="xl" aria-selected="false" style="color: <?php echo $primary_color; ?>;">XL</a>
          </li>
        </ul>
        <div class="tab-content mt-1" id="myTabContent">
          <!-- smartfren -->
          <div class="tab-pane fade show active" id="smartfren" role="tabpanel" aria-labelledby="smartfren-tab">
            <div class="row">
              <?php 
                $data = mysqli_query($conn,"select * from produk where nama_produk='smartfren' and tambahan='' ");
                while($d = mysqli_fetch_array($data)){
              ?>

              <div class="col-md-4 mt-2">
                <div class="card" style="width: auto;">
                    <img src="img/logo_op/<?php echo $d['nama_produk']; ?>.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title text-uppercase"><span class="badge badge-warning"><?php echo $d['tambahan']; ?></span> <?php if($d['jenis'] == "kuota") { echo '<span class="badge badge-info">KUOTA</span>'; } elseif($d['jenis'] == "pulsa") { echo '<span class="badge badge-success">PULSA</span>'; } ?><b> <?php echo $d['nama_produk']; ?></b></h5>
                    <p class="card-text"><i class="fas fa-globe"></i> <?php echo $d['keterangan']; ?></p>
                    <p class="card-text"><i class="far fa-clock"></i> <?php echo $d['masa_aktif']; ?></p>
                    <hr>
                    <h4><b> <label>Rp</label> <?php echo $d['harga']; ?></b></h4>
                    <a href="checkout.php?produk=<?php echo $d['id_produk']; ?>" class="btn" style="background-color:<?php echo $primary_color; ?>; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
                    </div>
                </div>
              </div>

              <?php
                }
              ?>
            </div>
          </div>
            
          <!-- Telkomsel -->
          <div class="tab-pane fade" id="telkomsel" role="tabpanel" aria-labelledby="telkomsel-tab">
            <div class="row">
                <?php 
                  $data = mysqli_query($conn,"select * from produk where nama_produk='telkomsel' and tambahan='' ");
                  while($d = mysqli_fetch_array($data)){
                ?>

                <div class="col-md-4 mt-2">
                  <div class="card" style="width: auto;">
                      <img src="img/logo_op/<?php echo $d['nama_produk']; ?>.png" class="card-img-top" alt="...">
                      <div class="card-body">
                      <h5 class="card-title text-uppercase"><span class="badge badge-warning"><?php echo $d['tambahan']; ?></span> <?php if($d['jenis'] == "kuota") { echo '<span class="badge badge-info">KUOTA</span>'; } elseif($d['jenis'] == "pulsa") { echo '<span class="badge badge-success">PULSA</span>'; } ?><b> <?php echo $d['nama_produk']; ?></b></h5>
                      <p class="card-text"><i class="fas fa-globe"></i> <?php echo $d['keterangan']; ?></p>
                      <p class="card-text"><i class="far fa-clock"></i> <?php echo $d['masa_aktif']; ?></p>
                      <hr>
                      <h4><b> <label>Rp</label> <?php echo $d['harga']; ?></b></h4>
                      <a href="checkout.php?produk=<?php echo $d['id_produk']; ?>" class="btn" style="background-color:<?php echo $primary_color; ?>; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
                      </div>
                  </div>
                </div>

                <?php
                  }
                ?>
            </div>
          </div>

          <!-- xl -->
          <div class="tab-pane fade" id="xl" role="tabpanel" aria-labelledby="xl-tab">
            <div class="row">
                <?php 
                  $data = mysqli_query($conn,"select * from produk where nama_produk='xl' and tambahan='' ");
                  while($d = mysqli_fetch_array($data)){
                ?>

                <div class="col-md-4 mt-2">
                  <div class="card" style="width: auto;">
                      <img src="img/logo_op/<?php echo $d['nama_produk']; ?>.png" class="card-img-top" alt="...">
                      <div class="card-body">
                      <h5 class="card-title text-uppercase"><span class="badge badge-warning"><?php echo $d['tambahan']; ?></span> <?php if($d['jenis'] == "kuota") { echo '<span class="badge badge-info">KUOTA</span>'; } elseif($d['jenis'] == "pulsa") { echo '<span class="badge badge-success">PULSA</span>'; } ?><b> <?php echo $d['nama_produk']; ?></b></h5>
                      <p class="card-text"><i class="fas fa-globe"></i> <?php echo $d['keterangan']; ?></p>
                      <p class="card-text"><i class="far fa-clock"></i> <?php echo $d['masa_aktif']; ?></p>
                      <hr>
                      <h4><b> <label>Rp</label> <?php echo $d['harga']; ?></b></h4>
                      <a href="checkout.php?produk=<?php echo $d['id_produk']; ?>" class="btn" style="background-color:<?php echo $primary_color; ?>; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
                      </div>
                  </div>
                </div>

                <?php
                  }
                ?>
            </div>
          </div>
        </div>
        <hr>
        <!-- End Etalase -->

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color:<?php echo $primary_color; ?>;">Saldo Topsa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                <?php 
                  $data = mysqli_query($conn,"select * from produk where nama_produk='topsa wallet' and tambahan='' ");
                  while($d = mysqli_fetch_array($data)){
                ?>
                  <div class="col-md-4 mb-2">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title text-uppercase"><b> <?php echo $d['nama_produk']; ?></b></h5>
                        <p class="card-text"><i class="fas fa-money-bill-wave"></i> <?php echo $d['keterangan']; ?></p>
                        <hr>
                        <h4><b> <label>Rp</label> <?php echo $d['harga']; ?></b></h4>
                        <a href="checkout.php?produk=<?php echo $d['id_produk']; ?>" class="btn" style="background-color:<?php echo $primary_color; ?>; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
                      </div>
                    </div>
                  </div>
                <?php } ?>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- FOOTER -->
<?php include 'template/footer.php'; ?>
<?php include 'template/foot.php'; ?>