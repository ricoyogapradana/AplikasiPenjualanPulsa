<?php 
include 'head.php'; 
include '../php_files/session.php';
?>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: <?php echo $primary_color; ?>;">
      <a class="navbar-brand" href="index.php"><?php echo $logo; ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <!-- <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li> -->
        </ul>
        <form class="form-inline my-3 my-lg-0">
          <a href="" class="btn" style="background-color: white; color: <?php echo $primary_color; ?>; margin-right: 5px"><i class="fas fa-bell"></i></a>
          <a href="./transaksi.php" class="btn" style="background-color: white; color: <?php echo $primary_color; ?>; margin-right: 5px"><i class="fas fa-shopping-cart"></i></a>
          <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" style="background-color: white; color: <?php echo $primary_color; ?>;">
              <img src="img/pp/pp.png" width="23" style="border-radius: 50%"><b> <?php echo $_SESSION['first_name']; ?></b>
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="settings.php">Settings</a>
              <hr>
              <a class="dropdown-item" href="./php_files/logout.php">Log Out</a>
            </div>
          </div>
        </form>
      </div>
    </nav><br>