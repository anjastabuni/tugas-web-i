<?php
if (!defined('INDEX')) die("");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah mahasiswa</title>
</head>
<body>
    <h2 class="judul">Tambah Mahasiswa</h2>
    <form action="?hal=mahasiswa_insert" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="foto">Foto</label>
            <div class="input"><input type="file" id="foto" name="foto"></div>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <div class="input"><input type="text" id="nama" name="nama"></div>
        </div>
        <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <input type="radio" id="jk" name="jk" value="L">Laki-Laki
            <input type="radio" id="jk" name="jk" value="P">Perempuan
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <div class="input"><input type="date" id="tanggal" name="tanggal"></div>
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <div class="input">
                <select name="jabatan" id="jabatan">
                    <option value=""> -Pilih Jabatan- </option>
                    <?php
                        $queryjabatan = mysqli_query($con, "SELECT * FORM jabatan");
                        while ($j = mysqli_fetch_array($queryjabatan)) {
                            echo "<option value='$j[id_jabatan]'>$j[nama_jabatan]</option>";
                        }
                    ?>
                </select>

            </div>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <div class="input"><textarea name="keterangan" id="keterangan" cols="3" rows="5" ></textarea></div>
        </div>
        <div class="form-group">
            <input type="submit" value="Simpan" class="tomboledit">
            <input type="reset" value="Batal" class="tombolhapus">
        </div>
    </form>
</body>
</html>