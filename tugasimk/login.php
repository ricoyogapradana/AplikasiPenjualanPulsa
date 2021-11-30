<?php include 'template/head.php'; ?>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card container">
                    <form>
                        <div class="mb-3 mt-4">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                          <div class="invalid-feedback">
                            Enter your First name
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" required>
                        </div>
                        <div class="mb-3">
                           
                          </div>
                          <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="g-signin2 mb-2" data-onsuccess="onSignIn" data-theme="dark"></div>
                                <script>
                                  function onSignIn(googleUser) {
                                    // Useful data for your client-side scripts:
                                    var profile = googleUser.getBasicProfile();
                                    console.log("ID: " + profile.getId()); // Don't send this directly to your server!
                                    console.log('Full Name: ' + profile.getName());
                                    console.log('Given Name: ' + profile.getGivenName());
                                    console.log('Family Name: ' + profile.getFamilyName());
                                    console.log("Image URL: " + profile.getImageUrl());
                                    console.log("Email: " + profile.getEmail());
                            
                                    // The ID token you need to pass to your backend:
                                    var id_token = googleUser.getAuthResponse().id_token;
                                    console.log("ID Token: " + id_token);
                                  }
                                </script>
                            </div>
                            <div class="col-md-6">
                              <button type="submit" class="btn btn-block" style="color: white; background-color: palevioletred;">Login</button>
                            </div>
                        </div>
                          <hr>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                Belum punya akun ? <a href="" data-toggle="modal" data-target="#staticBackdrop" style="color: palevioletred;">Daftar Sekarang</a>
                            </div>
                        </div>
                      </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
      
      <!-- Modal Register -->
      <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel" style="color: palevioletred;"><b>Registrasi Akun</b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom01">First name</label>
                        <input type="text" class="form-control" id="validationCustom01" required>
                        <div class="invalid-feedback">
                          Enter your First name
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Last name</label>
                        <input type="text" class="form-control" id="validationCustom02" required>
                        <div class="invalid-feedback">
                            Enter your Last name
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                        <label for="validationCustom03">Email</label>
                        <input type="email" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                          Please enter your email
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <label for="validationCustom03">Phone</label>
                          <input type="number" class="form-control" id="validationCustom03" required>
                          <div class="invalid-feedback">
                            Please enter your number phone
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                          Agree to <a href="terms-condition.html" style="color: palevioletred;">terms</a> and <a href="terms-condition.html" style="color: palevioletred;">conditions</a>
                        </label>
                        <div class="invalid-feedback">
                          You must agree before submitting.
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn"  style="color: white; background-color: palevioletred;">Register</button>
                      </div>
                  </form>
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