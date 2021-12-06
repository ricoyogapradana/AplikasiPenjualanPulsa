<?php include 'head.php'; ?>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: <?php echo $primary_color; ?>;">
      <a class="navbar-brand" href="index.php">Navbar</a>
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
        <form class="form-inline my-2 my-lg-0">
          <a href="login.php" class="btn my-2 my-sm-0" style="background-color: white; color: <?php echo $primary_color; ?>;"><b>Login</b></a>
        </form>
      </div>
    </nav><br>