<?php 
include 'template/head.php';
include 'php_files/session.php';
include 'php_files/config.php';
?>

      <div class="" style="height:70%">
        <?php echo $carausel; ?>
      </div>

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
                <p class="card-text"><?php echo $d['keterangan']; ?></p>
                <strike><?php echo $d['harga']; ?></strike>
                <h4><b> <label>Rp</label> <?php echo $d['diskon']; ?></b></h4>
                <?php echo $button_beli; ?>
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
                    <h5 class="card-title text-uppercase"><span class="badge badge-warning"><?php echo $d['tambahan']; ?></span> <span class="badge badge-info"><?php echo $d['jenis']; ?></span><b> <?php echo $d['nama_produk']; ?></b></h5>
                    <p class="card-text"><i class="fas fa-globe"></i> <?php echo $d['keterangan']; ?></p>
                    <p class="card-text"><i class="far fa-clock"></i> <?php echo $d['berlaku']; ?></p>
                    <hr>
                    <h4><b> <label>Rp</label> <?php echo $d['harga']; ?></b></h4>
                    <?php echo $button_beli; ?>
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
                      <h5 class="card-title text-uppercase"><span class="badge badge-warning"><?php echo $d['tambahan']; ?></span> <span class="badge badge-info"><?php echo $d['jenis']; ?></span><b> <?php echo $d['nama_produk']; ?></b></h5>
                      <p class="card-text"><i class="fas fa-globe"></i> <?php echo $d['keterangan']; ?></p>
                      <p class="card-text"><i class="far fa-clock"></i> <?php echo $d['berlaku']; ?></p>
                      <hr>
                      <h4><b> <label>Rp</label> <?php echo $d['harga']; ?></b></h4>
                      <?php echo $button_beli; ?>
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
                      <h5 class="card-title text-uppercase"><span class="badge badge-warning"><?php echo $d['tambahan']; ?></span> <span class="badge badge-info"><?php echo $d['jenis']; ?></span><b> <?php echo $d['nama_produk']; ?></b></h5>
                      <p class="card-text"><i class="fas fa-globe"></i> <?php echo $d['keterangan']; ?></p>
                      <p class="card-text"><i class="far fa-clock"></i> <?php echo $d['berlaku']; ?></p>
                      <hr>
                      <h4><b> <label>Rp</label> <?php echo $d['harga']; ?></b></h4>
                      <?php echo $button_beli; ?>
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


      </div>

    <!-- FOOTER -->
<?php include 'template/footer.php'; ?>
<?php include 'template/foot.php'; ?>