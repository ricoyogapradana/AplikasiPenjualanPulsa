<?php
    include 'template/head.php';
    include 'php_files/session.php';
    include 'php_files/config.php';
    include 'php_files/report.php';
?>
<br>

<div class="container mt-4">
    <h2 class="mb-4" style= "color:<?php echo $primary_color; ?>;"> <i class="fas fa-tools"></i><b> Pusat Bantuan </b></h2>
    <div class="card">
        <div class="card-body">
        <form action="" method="POST" class="needs-validation" novalidate>
                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                        <label for="validationCustom03">What can we help you with?</label>
                        <select name="rp_mention" class="form-control" id="exampleFormControlSelect1">
                        <option value="917478078781993061">Customer Care</option>
                        <option value="890655167849041951">Bug Report</option>
                        <option value="894202950631702580">Other</option>
                        </select>
                        <div class="invalid-feedback">
                          Please enter your email
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                        <label for="validationCustom03">Email</label>
                        <input type="email" name="rp_email" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                          Please enter your email
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <label for="validationCustom03">Subject</label>
                          <input type="text" name="rp_subject" class="form-control" id="validationCustom03" required>
                          <div class="invalid-feedback">
                            Please enter your Subject
                          </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <label for="validationCustom03">Description</label>
                          <textarea type="text" name="rp_description" class="form-control" id="validationCustom03" required></textarea>
                          <div class="invalid-feedback">
                            Please describe your problem
                          </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <label for="validationCustom03">Attachments (optional)</label>
                          <input type="text" name="rp_attachments" class="form-control" id="validationCustom03" placeholder="link images or file" required></input>
                          <div class="invalid-feedback">
                            Please describe your problem
                          </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="rp_submit" class="btn"  style="color: white; background-color: <?php echo $primary_color; ?>;">Submit</button>
                      </div>
                  </form>
        </div>
    </div>
</div>

<?php 
    include 'template/footer.php'; 
    include 'template/foot.php'; 
?>