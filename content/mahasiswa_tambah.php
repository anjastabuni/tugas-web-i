<?php
if (!defined('INDEX')) die("");
?>
    <h4 class="mt-2">Tambah Mahasiswa</h4>
    <hr>
    <form class="mb-5" action="?hal=mahasiswa_insert" method="post" enctype="multipart/form-data">
        <!-- row start -->
        <div class="form-group row">
            <label for="foto" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-4">
                <div class="custom-file">
                    <label for="foto" class="custom-file-label"></label>
                    <input class="custom-file-input" type="file" id="foto" name="foto">
                </div>
            </div>
        </div>
        <!-- row end -->
        <!-- row start -->
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" id="nama" name="nama">
            </div>
        </div>
        <!-- row end -->
        <div class="form-group row">
            <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-4">
                <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" id="jkl" name="jk" value="L">
                    <label class="custom-conntrol-label" for="jkl">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" id="jkp" name="jk" value="L">
                    <label class="custom-conntrol-label" for="jkp">Perempuan</label>
                </div>
            </div>
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
            <input type="submit" value="Simpan" class="btn btn-primary">
            <input type="reset" value="Batal" class="btn btn-danger">
        </div>
    </form>
