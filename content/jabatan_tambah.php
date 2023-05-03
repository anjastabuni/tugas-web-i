<?php
if (!defined('INDEX')) die("");
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
    <hr>
    <form action="?hal=jabatan_insert" method="post">
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Jabatan</label>
            <div class="col-sm-4"><input class="form-control" type="text" id="nama" name="nama"></div>
        </div><br>

        <div class="form-group">
            <input type="submit" value="Simpan" class="btn btn-success">
            <input type="reset" value="Batal" class="btn btn-danger">
        </div>
    </form>
</body>

</html>