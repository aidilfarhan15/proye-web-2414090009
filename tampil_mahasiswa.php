<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa");

while ($data = mysqli_fetch_assoc($query)) {
    echo $data['nim'] . " - " . $data['nama'] . " - " . $data['jurusan'] . "<br>";
}
?>
