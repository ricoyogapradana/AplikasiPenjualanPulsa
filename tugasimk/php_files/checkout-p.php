<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
  
if (isset($_POST['c_submit'])) {
    $id_transaksi = $_POST['id_transaksi'];
    $id_pembeli = $_POST['id_pembeli'];
    $nama_produk = $_POST['nama_produk'];
    $keterangan = $_POST['keterangan'];
    $tanggal_pembelian = $_POST['tanggal_pembelian'];
    $harga = $_POST['harga'];
    $no_tujuan = $_POST['no_tujuan'];
    $jenis_pembayaran = $_POST['jenis_pembayaran'];
    $status = $_POST['status'];
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM transaksi WHERE id_transaksi='$id_transaksi'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "insert into `transaksi` (id_transaksi, id_pembeli, nama_produk, keterangan, tanggal_pembelian, no_tujuan, status, harga, jenis_pembayaran)
                    VALUES ('$id_transaksi', '$id_pembeli', '$nama_produk', '$keterangan', '$tanggal_pembelian', '$no_tujuan', '$status', '$harga', '$jenis_pembayaran')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: transaksi.php");
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 
?>