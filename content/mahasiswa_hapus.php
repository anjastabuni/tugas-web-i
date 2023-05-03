<?php
if (!defined('INDEX')) die("");

if (file_exists("images/ $_GET[foto]")) unlink("images/ $_GET[foto]");
$query = mysqli_query($con, "DELETE FROM mahasiswa WHERE id_mahasiswa= '$_GET[id]'");

if ($query) {
    echo "Data Berhasil dihapus";
    echo "<meta http-equiv='refresh' content='1; url=?hal=mahasiswa'>";
} else {
    echo "Tidak dapat menyimpan data! <br>";
    echo mysqli_error();
}
