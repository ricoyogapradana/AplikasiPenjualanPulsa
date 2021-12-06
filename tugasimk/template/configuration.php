<?php
include './php_files/config.php';
    $primary_color = '#32a852';
    $background_color = '';
    $nama_aplikasi = 'Aplikasi Pembelian Pulsa';
    $logo = '<img src="img/logo.png" alt="" width="80px">';

    // $button_beli = '<a href="checkout.php?id='. echo $d['id_produk'] .'" class="btn" style="background-color: '. $primary_color . '; color: white;"><i class="fas fa-shopping-cart"></i> Beli</a>';

    $carausel = '
            <div id="carouselExampleCaptions" class="carousel slide mb-2" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" style="height: auto;">
                <div class="carousel-item active" style="height: auto;">
                  <img src="img/1.png" class="d-block w-100" alt="..." style="border-radius: 20px">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                  </div>
                </div>
                <div class="carousel-item" style="height: auto;">
                  <img src="img/2.jpg" class="d-block w-100" alt="..." style="border-radius: 20px">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                  </div>
                </div>
                <div class="carousel-item" style="height: auto;">
                  <img src="img/3.png" class="d-block w-100" alt="..." style="border-radius: 20px">
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
    ';

    $card_product_checkout = '
    <div class="card" style="width: auto;">
        <img src="img/logo_op/smartfren.png" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title"><span class="badge badge-warning">PROMO</span> <span class="badge badge-info">KUOTA</span><b> Smartfren</b></h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
        <strike>250.000 </strike>
        <h4><b> <label>Rp</label> 10.000</b></h4>
        </div>
    </div>
    ';
?>