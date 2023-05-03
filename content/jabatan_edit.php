<?php
if (!defined('INDEX')) die("");

$query = mysqli_query($con, "SELECT * FROM jabatan WHERE id_jabatan='$_GET[id]' ");
$data = mysqli_fetch_array($query);
?>

<h2 class="judul">Edit Jabatan</h2>
<hr>
<form action="?hal=jabatan_update" method="post">
    <input type="hidden" name="id" value="<?= $data['id_jabatan'] ?>">

    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Nama Jabatan</label>
        <div class="col-sm-4"><input class="form-control" type="text" id="nama" name="nama" value="<?= $data['nama_jabatan'] ?>"></div>

        <div class="form-group">
            <input type="submit" value="Simpan" class="btn btn-success">
            <input type="reset" vlaue="Batal" class="btn btn-danger">
        </div>
    </div>
</form>