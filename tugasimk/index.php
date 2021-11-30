<?php include 'template/head.php'; ?>
<?php include 'template/navbar.php'; ?>

      <div id="carouselExampleCaptions" class="carousel slide mt-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="height: 500px;">
              <div class="carousel-item active" style="height: 500px;">
                <img src="img/1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item" style="height: 500px;">
                <img src="img/2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item" style="height: 500px;">
                <img src="img/3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
          </div>
      </div>
      <div class="container mt-4">
        <h2 class="text-center" style="color: palevioletred;"><b>PROMO HARI INI</b></h2>
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
                <a href="#" class="btn" style="background-color: palevioletred; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
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
                <a href="#" class="btn" style="background-color: palevioletred; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
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
                <a href="#" class="btn" style="background-color: palevioletred; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
              </div>
            </div>
          </div>
        </div>
        <hr>

        <!-- ETALASE -->
        <h2 class="text-center" style="color: palevioletred;"><b>ETALASE</b></h2>
        <hr>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="smartfren-tab" data-toggle="tab" href="#smartfren" role="tab" aria-controls="smartfren" aria-selected="true" style="color: palevioletred;">Smartfren</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="telkomsel-tab" data-toggle="tab" href="#telkomsel" role="tab" aria-controls="telkomsel" aria-selected="false" style="color: palevioletred;">Telkomsel</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="xl-tab" data-toggle="tab" href="#xl" role="tab" aria-controls="xl" aria-selected="false" style="color: palevioletred;">XL</a>
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
                    <a href="#" class="btn" style="background-color: palevioletred; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
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
                    <a href="#" class="btn" style="background-color: palevioletred; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
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
                    <a href="#" class="btn" style="background-color: palevioletred; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
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
                    <a href="#" class="btn" style="background-color: palevioletred; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
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
                    <a href="#" class="btn" style="background-color: palevioletred; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
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
                    <a href="#" class="btn" style="background-color: palevioletred; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
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
                    <a href="#" class="btn" style="background-color: palevioletred; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
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
                    <a href="#" class="btn" style="background-color: palevioletred; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
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
                    <a href="#" class="btn" style="background-color: palevioletred; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
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
                    <a href="#" class="btn" style="background-color: palevioletred; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
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
                    <a href="#" class="btn" style="background-color: palevioletred; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
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
                    <a href="#" class="btn" style="background-color: palevioletred; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
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
                    <a href="#" class="btn" style="background-color: palevioletred; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
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
                    <a href="#" class="btn" style="background-color: palevioletred; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
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
                    <a href="#" class="btn" style="background-color: palevioletred; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
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
                    <a href="#" class="btn" style="background-color: palevioletred; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
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
                    <a href="#" class="btn" style="background-color: palevioletred; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
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
                    <a href="#" class="btn" style="background-color: palevioletred; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>
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
<?php include 'template/footer.php';