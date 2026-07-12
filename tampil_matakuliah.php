<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM tb_matakuliah");

while ($data = mysqli_fetch_assoc($query)) {
    echo $data['kode_mk'] . " - " . $data['nama_mk'] . " - " . $data['sks'] . " SKS<br>";
}
?>