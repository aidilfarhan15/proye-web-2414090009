<?php
$koneksi = mysqli_connect("localhost", "root", "", "dtb_belajar");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>