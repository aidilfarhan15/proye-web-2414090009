<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM view_mahasiswa_gasal_2020_2021");

while ($data = mysqli_fetch_assoc($query)) {
    echo $data['nim'] . " - " . $data['nama_mahasiswa'] . " - " . $data['jurusan']
       . " | Ambil: " . $data['nama_mk'] . " (" . $data['sks'] . " SKS)"
       . " | " . $data['nama_semester'] . " " . $data['tahun_ajaran'] . "<br>";
}
?>