<?php
if (!defined('INDEX')) die("");
$query = mysqli_query($con, "SELECT * FROM mahasiswa WHERE id_mahasiswa= '$_GET[id]' ");
$data = mysqli_fetch_array($query);
?>

<h4 class="mt-2">Edit Mahasiswa</h4>
<hr>
<form action="?hal=pegawai_update" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $data['id_mahasiswa'] ?>">

    <div class="form-group row">
        <label for="foto" class="col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-4">
            <div class="custom-file">
                <input class="custom-file-label" type="file" id="foto" name="foto">
                <img src="img/<?= $data['foto'] ?>" width="150" alt="">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-4">
            <input class="form-control" type="text" id="nama" name="nama" value="<?= $data['nama_mahasiswa'] ?>">
        </div>
    </div>

    <div class="from-group row">
        <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <?php
        if ($data['gender'] == "L") {
            $l = "checked";
            $p = "";
        } else {
            $l = "";
            $p = "checked";
        }
        ?>
        <div class="col-sm-4">
            <input type="radio" id="jk" name="jk" value="L" <?= $l ?>>Laki-laki
            <input type="radio" id="jk" name="jk" value="P" <?= $p ?>>Perempuan
        </div>
    </div>

    <div class="from-group row">
        <label for="tangal" class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-2">
            <input class="form-control" type="date" id="tangal" name="tangal" value="<?= $data['tgl_lahir'] ?>">
        </div>
    </div>

    <div class="from-group row">
        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
        <div class=" col-sm-4 py-2">
            <select class="custom-select" name="jabatan" id="jabatan">
                <option value="">-Pilih Jabatan</option>
                <?php
                $queryjabatan = mysqli_query($con, "SELECT * FROM jabatan");
                while ($j = mysqli_fetch_array($queryjabatan)) {
                    echo "<option value='$j[id_jabatan]'";
                    if ($j['id_jabatan'] == $data['id_jabatan']) echo "selected";
                    echo ">$j[nama_jabatan]</option>";
                }
                ?>
            </select>
        </div>
    </div>

    <div class="from-group row">
        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
        <div class="col-sm-8">
            <textarea name="keterangan" id="keterangan" class="form-control">
                <?= $data['keterangan'] ?>
            </textarea>
        </div>
    </div>

    <div class="from-group">
        <input type="submit" value="Simpan" class="btn btn-primary">
        <input type="reset" value="Batal" class="btn btn-danger">
    </div>
</form>