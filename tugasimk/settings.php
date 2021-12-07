<?php
    include 'template/head.php';
    include 'php_files/session.php';
    if (!isset($_SESSION['email'])){
        header("Location: login.php");
    }
?>

<div class="container mt-5">
    <h2 class="mb-4" style= "color:<?php echo $primary_color; ?>;"> <i class="fas fa-user-cog"></i><b> Settings Account </b></h2>
    <div class="card">
        <div class="card-body">
        <form action="" method="POST" class="needs-validation" novalidate>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom01">First name</label>
                        <input type="text" name="r_firstname" class="form-control" id="validationCustom01" value="<?php echo $_SESSION['first_name']; ?>" required>
                        <div class="invalid-feedback">
                          Enter your First name
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Last name</label>
                        <input type="text" name="r_lastname" class="form-control" id="validationCustom02" value="<?php echo $_SESSION['last_name']; ?>" required>
                        <div class="invalid-feedback">
                            Enter your Last name
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                        <label for="validationCustom03">Email</label>
                        <input type="email" name="r_email" class="form-control" id="validationCustom03" value="<?php echo $_SESSION['email']; ?>" required>
                        <div class="invalid-feedback">
                          Please enter your email
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <label for="validationCustom03">Phone</label>
                          <input type="number" name="r_phone" class="form-control" id="validationCustom03" value="<?php echo $_SESSION['phone']; ?>" required>
                          <div class="invalid-feedback">
                            Please enter your number phone
                          </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <label for="validationCustom03">Password</label>
                          <input type="password" name="r_password" class="form-control" id="validationCustom03" value="<?php echo md5($_SESSION['password']); ?>" required>
                          <div class="invalid-feedback">
                            Please enter your password
                          </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="r_submit" class="btn"  style="color: white; background-color: <?php echo $primary_color; ?>;">Update</button>
                      </div>
                </form>
        </div>
    </div>
</div>

<?php
    include 'template/footer.php';
    include 'template/foot.php';
?>