<?php
    if (!defined('INDEX')) die("");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jabatan</title>
</head>
<body>
    <h2 class="judul">Data Jabatan</h2>
    <a href="?hal=jabatan_tambah" class="tombol">Tambah</a>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = mysqli_query($con, "SELECT*FROM jabatan ORDER BY id_jabatan DESC");
                $no = 0;
                while ($data = mysqli_fetch_array($query)) {
                    $no++;
                
            ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $data['nama_jabatan']?></td>
                <td>
                    <a href="?hal=jabatan_edit&id=<?= $data['id_jabatan'] ?>" class="tomboledit">Edit</a>
                    <a href="?hal=jabatan_hapus&id=<?= $data['id_jabatan'] ?>" class="tombolhapus">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>