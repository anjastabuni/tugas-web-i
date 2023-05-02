<?php
    if(!defined('INDEX') ) die("");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h4 class="mt-2">Data Mahasiswa</h4>
    <a href="?hal=mahasiswa_tambah" class="btn btn-success">Tambah</a>
    
    <!-- table start -->
    <div class="table-responsive mt-3">
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Jabatan</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = mysqli_query($con, "SELECT * FROM mahasiswa LEFT JOIN jabatan ON mahasiswa.id_jabatan=jabatan.id_jabatan 
                ORDER BY mahasiswa.id_mahasiswa DESC");
                $no = 0;
                while ($data = mysqli_fetch_array($query)) {
                    $no++;
            ?>
            <tr>
                <td><?= $no ?></td>
                <td><img src="images/ <?= $data['foto'] ?>" width="100"></td>
                <td><?= $data['nama_mahasiswa'] ?></td>
                <td><?= $data['gender'] ?></td>
                <td><?= $data['tgl_lahir'] ?></td>
                <td><?= $data['nama_jabatan'] ?></td>
                <td><?= $data['keterangan'] ?></td>
                <td>
                    <a href="?hal=mahasiswa_edit&id=<?= $data['id_mahasiswa'] ?>" class="btn btn-secondary">Edit</a>
                    <a href="?hal=mahasiswa_hapus&id=<?= $data['id_mahasiswa'] ?>&foto=<?= $data['foto'] ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    </div>
    <!-- table end -->
</body>
</html>
