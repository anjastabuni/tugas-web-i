<?php
if(!defined('INDEX')) die("");
$query = mysqli_query($con, "SELECT * FROM mahasiswa WHERE id_mahasiswa= '$_GET[id]' ");
$data = mysqli_fetch_array($query);
?>

<h4 class="mt-2">Edit mahasiswa</h4>
<form action="?hal=pegawai_update" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $data['id_mahasiswa'] ?>">

    <div class="form-group">
        <label for="foto">Foto</label>
        <input type="file" id="foto" name="foto">
        <img src="img/<?= $data['foto'] ?>" width="150" alt="">
    </div>

    <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input">
            <input type="text" id="nama" name="nama" value="<?= $data['nama_mahasiswa'] ?>">
        </div>
    </div>

    <div class="from-group">
        <label for="jk">Jenis Kelamin</label>
        <?php
            if($data['gender'] == "L"){
                $l = "checked";
                $p = "";
            }else{
                $l = "";
                $p = "checked";
            }
        ?>
        <input type="radio" id="jk" name="jk" value="L" <?= $l ?>>Laki-laki 
        <input type="radio" id="jk" name="jk" value="P" <?= $p ?>>Perempuan
    </div>

    <div class="from-group">
        <label for="tangal">Tanggal</label>
        <div class="input">
            <input type="date" id="tangal" name="tangal" value="<?= $data['tgl_lahir']?>">
        </div>
    </div>

    <div class="from-group">
        <label for="jabatan">Jabatan</label>
        <div class="input">
            <select name="jabatan" id="jabatan">
                <option value="">-Pilih Jabatan</option>
                <?php
                    $queryjabatan = mysqli_query($con, "SELECT * FROM jabtan");
                    while($j = mysqli_fetch_array($queryjabatan)){
                        echo "<option value='$j[id_jabatan]'";
                        if($j['id_jabatan'] == $data['id_jabatan']) echo "selected";
                        echo ">$j[nama_jabatan]</option>";
                    }
                ?>
            </select>
        </div>
    </div>

    <div class="from-group">
        <label for="keterangan">Keterangan</label>
        <div class="input">
            <textarea name="keterangan" id="keterangan" cols="30" rows="5">
                <?= $data['keterangan'] ?>
            </textarea>
        </div>
    </div>

    <div class="from-group">
        <input type="submit" value="Simpan" class="btn btn-primary">
        <input type="reset" value="Batal" class="btn btn-danger">
    </div>
</form>