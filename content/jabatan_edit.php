<?php
    if(!defined('INDEX') ) die("");

    $query = mysqli_query($con, "SELECT * FROM jabatan WHERE id_jabatan='$_GET[id]' ");
    $data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>

</head>
<body>
    <h2 class="judul">Edit Jabatan</h2>
    <form action="?hal=jabatan_update" method="post">
        <input type="hidden" name="id" value="<?= $data['id_jabatan'] ?>">

        <div class="form-group">
            <label for="nama">Nama</label>
            <div class="input"><input type="text" id="nama" name="nama" value="<?= $data['nama_jabatan'] ?>"></div>

            <div class="form-group">
                <input type="submit" value="Simpan" class="tombol simpan">
                <input type="reset" vlaue="Batal" class="tombol reset">
            </div>
        </div>
    </form>
</body>
</html>