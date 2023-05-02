<?php

if (!defined('INDEX')) die("");

$foto = $_FILES['foto']['name'];
$lokasi = $_FILES['foto']['tmp_name'];
$tipefile = $_FILES['foto']['type'];
$ukuranfile = $_FILES['foto']['size'];

$error = "";
if($foto == ""){
    $query = mysqli_query($con, "INSERT INTO mahasiswa SET
    nama_mahasiswa = '$_POST[nama]',
    gender = '$_POST[jk]',
    tgl_lahir = '$_POST[tanggal]',
    id_jabatan = '$_POST[jabatan]',
    keterangan = '$_POST[keterangan]'
    ");
}else{
    if($tipefile != "image/jpeg" and $tipefile != "image/jpg" and $tipefile != "image/png" ){
        $error = "Tipe file tidak ditemukan";
    }elseif($ukuranfile  >= 1000000){
        echo $ukuranfile;
        $error = "ukuran file terlalu besar (lebih dari 1MB) !";
    }else{
        move_uploaded_file($lokasi, "images/".$foto);
        $query = mysqli_query($con, "INSERT INTO mahasiswa SET
        foto = '$foto', 
        nama_mahasiswa = '$_POST[nama]',
        gender = '$_POST[jk]',
        tgl_lahir = '$_POST[tanggal]',
        id_jabatan = '$_POST[jabatan]',
        keterangan = '$_POST[keterangan]'
        ");
    }
}

if($error != ""){
    echo $error;
    echo "<meta http-equiv='refresh' content='1; url=?hal=mahasiswa'>";
}else{
    echo "Tidak dapat menyimpan data <br>";
}
?>