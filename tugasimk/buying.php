<?php 
include 'template/head.php'; 
include 'php_files/session.php';
session_start();

if (!isset($_SESSION['email'], $_GET['id'])){
  header("Location: login.php");
}
?>

<br>
    <div class="container mt-4">
        <div class="card">
            <?php 
              $id = $_GET['id'];
              $data = mysqli_query($conn,"select * from transaksi where id_transaksi='$id' ");
              $cek = mysqli_num_rows($data);
              if (empty($cek)) {
              ?>
              <div class="row">
                <div class="col-md-6">
                <img src="img/error.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-6">
                  <h1 class="text-center mt-5" style="color:<?php echo $primary_color; ?>;"><b>Id Transaksi tidak ditemukan..</b></h1>
                </div>
              </div>
              <?php
                } else {
              
              while($d = mysqli_fetch_array($data)){
            ?>
            <h5 class="card-header" style= "background-color:<?php echo $primary_color; ?>; color: white"> <i class="fas fa-sticky-note"></i><b> ID PESANAN : <?php echo $d['id_transaksi']; ?> </b></h5>
            
            <div class="card-body">
                <b>Tanggal :</b> <?php echo $d['tanggal_pembelian']; ?> <br>
                <b>Pembelian :</b> <?php echo $d['nama_produk']; ?> - <?php echo $d['keterangan']; ?> <br>
                <b>Harga :</b> <?php echo $d['harga']; ?> <br>
                <b>Metode Pembayaran :</b> <?php echo $d['jenis_pembayaran']; ?> <br>
                <hr>
                <!-- <h5 class="card-title" style="color: <?php echo $primary_color; ?>"><b>CARA PEMBAYARAN VIA ATM Lain / Bersama</b></h5>

                1. Pilih Transfer <br>
                2. Pilih Antar Bank/Bank Lain <br>
                3. Masukkan nomor Kode Bank: 200 atau pilih BANK BTN <br>
                4. Masukkan 17 nomor Virtual Account: 70610470202030191 <br>
                5. Masukkan jumlah 51.500 secara tepat (tanpa pembulatan). Jumlah nominal yang tidak sesuai dengan tagihan akan menyebabkan transaksi gagal <br>
                6. Kosongkan nomor referensi dan tekan Benar <br>
                7. Di halaman konfirmasi transfer akan muncul jumlah yang dibayarkan, no.rekening tujuan. Jika informasinya telah cocok tekan Benar <br>
                8. Pastikan transfer berhasil dan simpan bukti bayar <br><br> -->

                <h5 class="card-title text-uppercase" style="color: <?php echo $primary_color; ?>"><b>Cara Transfer Uang Lewat ATM BCA ke Virtual Account</b></h5>
                <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header" style="background-color: <?php echo $primary_color; ?>" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" style="color: white;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                          Virtual Account melalui mesin ATM
                        </button>
                      </h2>
                    </div>
                    <div id="collapseOne" class="collapse text-decoration-none" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                      1. Pilih menu Transfer – Ke Rek BCA Virtual Account. <br>
                      2. Masukkan Nomor BCA Virtual Account, lalu pilih Benar. <br>
                      3. Pilih menu “Ke Rek BCA Virtual Account”. <br>
                      4. Kemudian layar ATM akan menampilkan konfirmasi transaksi: <br>
                      5. Pilih Ya bila kamu setuju, atau <br>
                      6. Masukkan jumlah transfer, lalu pilih Benar. Selanjutnya layar ATM akan kembali menampilkan konfirmasi jumlah pembayaran, pilih Ya/OK bila ingin membayar. <br>
                      7. Ikuti langkah selanjutnya sampai transaksi selesai. <br>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" style="background-color: <?php echo $primary_color; ?>;" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" style="color: white;" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Virtual Account melalui m-banking
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                      1. Pilih m-Transfer. <br>
                      2. Kemudian pilih Transfer – BCA Virtual Account. <br>
                      3. Pilih nomor rekening yang akan didebet. <br>
                      4. Masukkan nomor BCA Virtual Account, lalu pilih YA/OK. <br>
                      5. Tampil konfirmasi nomor BCA Virtual Account dan rekening pendebetan, lalu klik Kirim. <br>
                      6. Tampil konfirmasi pembayaran, lalu pilih OK. <br>
                      7. Masukkan jumlah nominal transfer dan berita, atau. <br>
                      8. Masukkan berita. <br>
                      9. Ikuti langkah-langkah berikutnya sampai transaksi selesai. <br>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
                <a href="" class="btn btn-block text-decoration-none" style="color: white; background-color: <?php echo $primary_color; ?>"><b>Saya Sudah Bayar</b></a>
            </div>
            <?php } } ?>
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