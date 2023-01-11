<?php

session_start();
include '../koneksi-db.php';

// menangkap data dan dicocockan pada table admin xampp
$email = $_POST['email'];
$password = $_POST['pass'];

// menyeleksi data dan mencocokan pada table admin xampp
$data = mysqli_query($koneksi, "select * from anggota where email='$email' and password='$password'");

// menghitung jumlah data yg ditemukan
$cek_data = mysqli_num_rows($data);

if($cek_data > 0){
    $_SESSION['email'] = $email;
    $_SESSION['status'] = 'login';
    header("location:index.php");
} else {
    header("location:login.php?pesan=gagal");
}
?>