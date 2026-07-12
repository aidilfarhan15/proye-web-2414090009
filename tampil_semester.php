<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM tb_semester");

while ($data = mysqli_fetch_assoc($query)) {
    echo $data['id_semester'] . " - " . $data['nama_semester'] . " - " . $data['tahun_ajaran'] . "<br>";
}
?>