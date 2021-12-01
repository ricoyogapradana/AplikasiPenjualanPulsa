<?php include 'template/head.php'; ?>
<?php include 'template/navbar.php'; ?>

      <div class="" style="height:70%">
        <?php echo $carausel; ?>
      </div>

      <div class="container mt-4">
        <h2 class="text-center" style="color: <?php echo $primary_color; ?>;"><b>PROMO HARI INI</b></h2>
        <hr>
        <div class="row">
          <div class="col-md-4 mt-2">
            <div class="card" style="width: auto;">
              <img src="img/logo_op/smartfren.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><span class="badge badge-warning">PROMO</span> <span class="badge badge-info">KUOTA</span><b> Smartfren</b></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <strike>250.000 </strike>
                <h4><b> <label>Rp</label> 10.000</b></h4>
                <?php echo $button_beli; ?>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-2">
            <div class="card" style="width: auto;">
              <img src="img/logo_op/telkomsel.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><span class="badge badge-warning">PROMO</span> <span class="badge badge-info">KUOTA</span><b> Telkomsel</b></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <strike>250.000 </strike>
                <h4><b> <label>Rp</label> 10.000</b></h4>
                <?php echo $button_beli; ?>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-2">
            <div class="card" style="width: auto;">
              <img src="img/logo_op/xl.png" class="card-img-top img-fluit" alt="...">
              <div class="card-body">
                <h5 class="card-title"><span class="badge badge-warning">PROMO</span> <span class="badge badge-info">KUOTA</span><b> XL</b></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <strike>250.000 </strike>
                <h4><b> <label>Rp</label> 10.000</b></h4>
                <?php echo $button_beli; ?>
              </div>
            </div>
          </div>
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
              <div class="col-md-4 mt-2">
                <div class="card" style="width: auto;">
                  <img src="img/logo_op/smartfren.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><span class="badge badge-success">PULSA</span><b> Smartfren</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <h4><b> <label>Rp</label> 50.000</b></h4>
                    <?php echo $button_beli; ?>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-2">
                <div class="card" style="width: auto;">
                  <img src="img/logo_op/smartfren.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><span class="badge badge-success">PULSA</span><b> Smartfren</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <h4><b> <label>Rp</label> 80.000</b></h4>
                    <?php echo $button_beli; ?>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-2">
                <div class="card" style="width: auto;">
                  <img src="img/logo_op/smartfren.png" class="card-img-top img-fluit" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><span class="badge badge-success">PULSA</span><b> Smartfren</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <h4><b> <label>Rp</label> 150.000</b></h4>
                    <?php echo $button_beli; ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- bagian 2 -->
            <div class="row mt-2">
              <div class="col-md-4 mt-2">
                <div class="card" style="width: auto;">
                  <img src="img/logo_op/smartfren.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><span class="badge badge-info">KUOTA</span><b> Smartfren</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <h4><b> <label>Rp</label> 40.000</b></h4>
                    <?php echo $button_beli; ?>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-2">
                <div class="card" style="width: auto;">
                  <img src="img/logo_op/smartfren.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><span class="badge badge-info">KUOTA</span><b> Smartfren</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <h4><b> <label>Rp</label> 90.000</b></h4>
                    <?php echo $button_beli; ?>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-2">
                <div class="card" style="width: auto;">
                  <img src="img/logo_op/smartfren.png" class="card-img-top img-fluit" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><span class="badge badge-info">KUOTA</span><b> Smartfren</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <h4><b> <label>Rp</label> 250.000</b></h4>
                    <?php echo $button_beli; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
            
          <!-- Telkomsel -->
          <div class="tab-pane fade" id="telkomsel" role="tabpanel" aria-labelledby="telkomsel-tab">
            <div class="row">
              <div class="col-md-4 mt-2">
                <div class="card" style="width: auto;">
                  <img src="img/logo_op/telkomsel.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><span class="badge badge-success">PULSA</span><b> Telkomsel</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <h4><b> <label>Rp</label> 50.000</b></h4>
                    <?php echo $button_beli; ?>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-2">
                <div class="card" style="width: auto;">
                  <img src="img/logo_op/telkomsel.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><span class="badge badge-success">PULSA</span><b> Telkomsel</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <h4><b> <label>Rp</label> 80.000</b></h4>
                    <?php echo $button_beli; ?>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-2">
                <div class="card" style="width: auto;">
                  <img src="img/logo_op/telkomsel.png" class="card-img-top img-fluit" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><span class="badge badge-success">PULSA</span><b> Telkomsel</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <h4><b> <label>Rp</label> 150.000</b></h4>
                    <?php echo $button_beli; ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- Bagian 2 -->
            <div class="row mt-2">
              <div class="col-md-4 mt-2">
                <div class="card" style="width: auto;">
                  <img src="img/logo_op/telkomsel.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><span class="badge badge-info">KUOTA</span><b> Telkomsel</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <h4><b> <label>Rp</label> 40.000</b></h4>
                    <?php echo $button_beli; ?>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-2">
                <div class="card" style="width: auto;">
                  <img src="img/logo_op/telkomsel.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><span class="badge badge-info">KUOTA</span><b> Telkomsel</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <h4><b> <label>Rp</label> 90.000</b></h4>
                    <?php echo $button_beli; ?>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-2">
                <div class="card" style="width: auto;">
                  <img src="img/logo_op/telkomsel.png" class="card-img-top img-fluit" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><span class="badge badge-info">KUOTA</span><b> Telkomsel</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <h4><b> <label>Rp</label> 250.000</b></h4>
                    <?php echo $button_beli; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- xl -->
          <div class="tab-pane fade" id="xl" role="tabpanel" aria-labelledby="xl-tab">
            <div class="row">
              <div class="col-md-4 mt-2">
                <div class="card" style="width: auto;">
                  <img src="img/logo_op/xl.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><span class="badge badge-success">PULSA</span><b> XL</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <h4><b> <label>Rp</label> 50.000</b></h4>
                    <?php echo $button_beli; ?>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-2">
                <div class="card" style="width: auto;">
                  <img src="img/logo_op/xl.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><span class="badge badge-success">PULSA</span><b> XL</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <h4><b> <label>Rp</label> 80.000</b></h4>
                    <?php echo $button_beli; ?>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-2">
                <div class="card" style="width: auto;">
                  <img src="img/logo_op/xl.png" class="card-img-top img-fluit" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><span class="badge badge-success">PULSA</span><b> XL</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <h4><b> <label>Rp</label> 150.000</b></h4>
                    <?php echo $button_beli; ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- Bagian 2 -->
            <div class="row mt-2">
              <div class="col-md-4 mt-2">
                <div class="card" style="width: auto;">
                  <img src="img/logo_op/xl.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><span class="badge badge-info">KUOTA</span><b> XL</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <h4><b> <label>Rp</label> 40.000</b></h4>
                    <?php echo $button_beli; ?>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-2">
                <div class="card" style="width: auto;">
                  <img src="img/logo_op/xl.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><span class="badge badge-info">KUOTA</span><b> XL</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <h4><b> <label>Rp</label> 90.000</b></h4>
                    <?php echo $button_beli; ?>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-2">
                <div class="card" style="width: auto;">
                  <img src="img/logo_op/xl.png" class="card-img-top img-fluit" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><span class="badge badge-info">KUOTA</span><b> XL</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <h4><b> <label>Rp</label> 250.000</b></h4>
                    <?php echo $button_beli; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <!-- End Etalase -->


      </div>

    <!-- FOOTER -->
<?php include 'template/footer.php'; ?>
<?php include 'template/foot.php'; ?>