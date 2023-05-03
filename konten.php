<?php
if(!defined('INDEX')) die("");

$halaman = [
    "dashboard", 
    "mahasiswa", 
    "mahasiswa_tambah", 
    "mahasiswa_insert", 
    "mahasiswa_edit", 
    "mahasiswa_update", 
    "mahasiswa_hapus",
    "jabatan", 
    "jabatan_tambah", 
    "jabatan_insert", 
    "jabatan_edit", 
    "jabatan_update", 
    "jabatan_hapus"
];

if(isset($_GET['hal'])) $hal = $_GET['hal'];
else $hal = "dashboard";

foreach($halaman as $h){
    if($hal == $h){
        include "content/$h.php";
        break;
    }
}
?>