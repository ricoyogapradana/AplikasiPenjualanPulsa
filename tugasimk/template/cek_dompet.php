<?php
    $a = $_SESSION['id'];
    if (isset($a)) {
    ?>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="" style="height:70%">
            <?php echo $carausel1; ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mt-5 border" style="border-radius: 20px; color: <?php echo $primary_color; ?>; border-color: <?php echo $primary_color; ?>;">
            <div class="card-body">
            <h5 class="card-title"><i class="fas fa-wallet"></i> Topsa Wallet</h5>
            <hr>
            Selamat Datang...
              <h5><b><?php echo $_SESSION['first_name']; ?> <?php echo $_SESSION['last_name']; ?> ( <?php echo $_SESSION['phone']; ?> )</b></h5>
              <!-- <h3 class="text-uppercase">a</h3> -->
              <h1><b>Rp <?php echo $_SESSION['saldo']; ?></b></h1>
              <hr>
              <button type="button" class="btn text-white" style="background-color: <?php echo $primary_color; ?>;" data-toggle="modal" data-target="#exampleModal">Top Up</button>
            </div>
          </div>
        </div>
      </div>
      </div>
    <?php
    } else { 
    ?>
    <div class="" style="height:70%">
      <?php echo $carausel; ?>
    </div>
    <?php } ?>