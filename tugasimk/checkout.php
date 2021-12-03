<?php 
include 'template/head.php'; 
include 'php_files/session.php';
session_start();

if (!isset($_SESSION['email'])){
  header("Location: login.php");
}
?>
<br>
    <div class="container mt-4">
        <div class="card">
            <h5 class="card-header" style= "background-color:<?php echo $primary_color; ?>; color: white"> <i class="fas fa-shopping-bag"></i><b> Checkout</b></h5>
            
            <div class="card-body">
                
            <div class="row">
              <div class="col-md-6">
                <?php echo $card_product_checkout; ?>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <h4 class="text-uppercase" style="color: <?php echo $primary_color; ?>"><b>Informasi Pesanan Anda</b></h4>
                  <b>ID :</b> <?php echo rand(); ?> <br>
                <b>Pembelian :</b> Kuota Smartfren 50 GB <br>
                <b>Harga :</b> 15.000 <br>
                <hr>
                
                <h5 class="card-title" style="color: <?php echo $primary_color; ?>"><b>Silahkan isi informasi Pembelian</b></h5>
                <form class="needs-validation" novalidate>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <label for="validationCustom03">Phone</label>
                          <input type="number" class="form-control" id="validationCustom03" value="<?php echo$_SESSION['phone']; ?>" required>
                          <div class="invalid-feedback">
                            Please enter your number phone
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                          Saya telah mengisi data saya dengan benar.
                        </label>
                        <div class="invalid-feedback">
                          You must checked before submitting.
                        </div>
                      </div>
                    </div>
                    <hr>
                    <h5 class="card-title" style="color: <?php echo $primary_color; ?>"><b>Silahkan isi informasi Pembayaran</b></h5>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih Pembayaran: </label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>Transfer Bank - BCA</option>
                        <option>Alfamart</option>
                        <option>Indomaret</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn"  style="color: white; background-color: <?php echo $primary_color; ?>;"><i class="fas fa-shopping-cart"></i> <a href="buying.php" style="color: white;">Beli</a> </button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
                
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