<?php
// ================================================
// DaftarMahasiswa.php
// Menampilkan daftar mahasiswa menggunakan array PHP
// ================================================

// Data mahasiswa disimpan dalam array multidimensi (array asosiatif di dalam array)
$mahasiswa = array(
    array(
        "nim"           => "13012012",
        "nama"          => "James Situmorang",
        "tempat_lahir"  => "Medan",
        "tanggal_lahir" => "1995-04-02",
        "fakultas"      => "Kedokteran",
        "jurusan"       => "Kedokteran Gigi",
        "ipk"           => "2.70"
    ),
    array(
        "nim"           => "14005011",
        "nama"          => "Riana Putria",
        "tempat_lahir"  => "Padang",
        "tanggal_lahir" => "1996-11-23",
        "fakultas"      => "FMIPA",
        "jurusan"       => "Kimia",
        "ipk"           => "3.10"
    ),
    array(
        "nim"           => "15002032",
        "nama"          => "Rina Kumala Sari",
        "tempat_lahir"  => "Jakarta",
        "tanggal_lahir" => "1997-06-28",
        "fakultas"      => "Ekonomi",
        "jurusan"       => "Akuntansi",
        "ipk"           => "3.40"
    ),
    array(
        "nim"           => "15021044",
        "nama"          => "Rudi Permana",
        "tempat_lahir"  => "Bandung",
        "tanggal_lahir" => "1994-08-22",
        "fakultas"      => "FASILKOM",
        "jurusan"       => "Ilmu Komputer",
        "ipk"           => "2.90"
    ),
    array(
        "nim"           => "15003036",
        "nama"          => "Sari Citra Lestari",
        "tempat_lahir"  => "Jakarta",
        "tanggal_lahir" => "1997-12-31",
        "fakultas"      => "Ekonomi",
        "jurusan"       => "Manajemen",
        "ipk"           => "3.50"
    )
);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f0f2f5;
            padding: 30px;
        }
        h2 {
            color: #2c3e50;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            background: #fff;
        }
        th, td {
            border: 1px solid #999;
            padding: 8px 10px;
            text-align: left;
            font-size: 14px;
        }
        th {
            background: #3b82f6;
            color: #fff;
        }
        tr:nth-child(even) {
            background: #f7f7f7;
        }
        .btn-edit {
            padding: 4px 10px;
            background: #eee;
            border: 1px solid #ccc;
            border-radius: 3px;
            text-decoration: none;
            color: #333;
            font-size: 13px;
        }
        .btn-edit:hover {
            background: #ddd;
        }
    </style>
</head>
<body>

    <h2>Daftar Mahasiswa</h2>

    <table>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Fakultas</th>
            <th>Jurusan</th>
            <th>IPK</th>
            <th></th>
        </tr>

        <?php foreach ($mahasiswa as $mhs) { ?>
        <tr>
            <td><?php echo $mhs["nim"]; ?></td>
            <td><?php echo $mhs["nama"]; ?></td>
            <td><?php echo $mhs["tempat_lahir"]; ?></td>
            <td><?php echo $mhs["tanggal_lahir"]; ?></td>
            <td><?php echo $mhs["fakultas"]; ?></td>
            <td><?php echo $mhs["jurusan"]; ?></td>
            <td><?php echo $mhs["ipk"]; ?></td>
            <td><a class="btn-edit" href="edit.php?nim=<?php echo $mhs['nim']; ?>">Edit</a></td>
        </tr>
        <?php } ?>

    </table>

</body>
</html>