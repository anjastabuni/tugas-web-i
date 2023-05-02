<?php
    if(!defined('INDEX')) die("");
?>

<!-- jumbotron start -->
<div class="jumbotron mt-3">
    <h1 class="fs-1">Selamat Datang di</h1>
    <h1 class="display-4">Aplikasi Manajemen Pegawai</h1>
    <h3>Anda logi sebagai Administrator</h3>
</div>
<!-- jumbotron end -->

<?php 
    $jml_mahasiswa = mysqli_num_rows(mysqli_query($con, "SELECT * FROM mahasiswa"));
    $jml_jabatan = mysqli_num_rows(mysqli_query($con, "SELECT * FROM jabatan"));
?>

<!-- .row start -->
<div class="row mb-3 pb-3 position-sticky">
    <!-- .col start -->
    <div class="col-sm-5 col-md-5 mb-3">
        <ul class="list-group">
            <li class="list-group-item text-danger">
            <i class="fa-solid fa-users fs-1 me-2"></i>
                <span class="display-3 float-right">
                    <?= $jml_mahasiswa ?>
                </span>
            </li>
            <li class="list-group-item bg-danger">
                <a href="?hal=jabatan" class="nav-link text-white">Data Mahasiswa</a>
            </li>
        </ul>
    </div>
    <!-- .col end -->
    <!-- .col start -->
    <div class="col-sm-4 col-md-5 mb-3">
        <ul class="list-group">
            <li class="list-group-item text-danger">
            <i class="fa-solid fa-arrow-down-short-wide fs-1 me-2"></i>  
                <span class="display-3 float-right">
                    <?= $jml_jabatan ?>
                </span>
            </li>
            <li class="list-group-item bg-success">
                <a href="?hal=jabatan" class="nav-link text-white">Data Jabatan</a>
            </li>
        </ul>
    </div>
    <!-- .col end -->
</div>
<!-- .row end -->