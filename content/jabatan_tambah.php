<?php
    if(!defined('INDEX') ) die("");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jabatan</title>
    
</head>
<body>
    <h2>Tambah Jabatan</h2>
    <form action="?hal=jabatan_insert" method="post">
        <div class="form-group">
            <label for="nama">Nama</label>
            <div class="input"><input type="text" id="nama" name="nama"></div>
        </div><br>

        <div class="form-group">
            <input type="submit" value="Simpan" class="tombol simpan">
            <input type="reset" value="Batal" class="tombol reset">
        </div>
    </form>
</body>
</html>