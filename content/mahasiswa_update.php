<?php
if(!defined('INDEX')) die("");

$foto = $_FILES['foto']['name'];
$lokasi = $_FILES['foto']['tmp name'];
$tipefile = $_FILES['foto']['type'];
$ukuranfile = $_FILES['foto']['size'];

$error = "";
if($foto == ""){
    $query = mysqli_query($con, "UPDATE mahasiswa SET
    nama_mahasiswa = '$_POST[nama]',
    gender = '$_POST[jk]',
    tgl_lahir = '$_POST[tangal]',
    id_jabatan = '$_POST[jabatan]',
    keterangan = '$_POST[keterangan]'
    WHERE id_mahasiswa = '$_POST[id]'");
}else{
    
}
?>