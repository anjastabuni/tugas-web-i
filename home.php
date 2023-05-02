<?php
session_start();
ob_start();

include "library/config.php";

if(empty($_SESSION['username']) or empty($_SESSION['password'])){
    echo "<p align='center'>Anda harus login terlebih dahulu!</p>";
    echo "meta http-equiv='refresh' content='2;url=login.php'>";
}else{
    define('INDEX', true);

?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/355acdeb36.js" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>
<body>
    <!-- nav start -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-info  d-block">
        <a href="#" class="navbar-brand">Manajemen Mahasiswa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav d-sm-none">
                <li class="nav-item">
                    <a href="?hal=dashboard" class="nav-link text-white"><i class="fa-solid fa-gauge"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="?hal=mahasiswa" class="nav-link text-white"><i class="fa-solid fa-users"></i> Data Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a href="?hal=jabatan" class="nav-link text-white"><i class="fa-solid fa-arrow-down-short-wide"></i> Data Jabatan</a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link text-white"><i class="fa-solid fa-right-from-bracket"></i> Keluar</a>
                </li>
            </ul>
        </nav>
    </nav>
    <!-- nav end -->
    <!-- container start -->
    <div class="container-fluid h-100">
        <!-- row start -->
        <div class="row h-100">
            <!-- nav aside start -->
            <nav class="col-md-2 col-sm-3 bg-dark h-100 p-0 position-fixed d-none d-sm-block">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-dark py-4 ">
                        <a href="?hal=dashboard" class="nav-link text-white"><i class="fa-solid fa-gauge"></i> Dashboard</a>
                    </li>
                    <li class="list-group-item bg-dark py-4">
                        <a href="?hal=mahasiswa" class="nav-link text-white"><i class="fa-solid fa-users"></i> Data Mahasiswa</a>
                    </li>
                    <li class="list-group-item bg-dark py-4">
                        <a href="?hal=jabatan" class="nav-link text-white"><i class="fa-solid fa-arrow-down-short-wide"></i> Data Jabatan</a>
                    </li>
                    <li class="list-group-item bg-dark py-4">
                        <a href="logout.php" class="nav-link text-white"><i class="fa-solid fa-right-from-bracket"></i> Keluar</a>
                    </li>
                </ul>
            </nav>
            <!-- nav aside end -->
            <!-- .col start -->
            <div class=".col-md-10.col-sm-9 offset-md-2 offset-sm-3">
                <section class="main">
                    <?= include "konten.php"; ?>
                </section>
            </div>
            <!-- .col end -->
        </div>
        <!-- row end -->
    </div>
    <!-- container end -->

    <footer class="bg-light fixed-bottom">
        <p class="m-2 text-center text-muted">Copyright &copy; Rebly Megib Tabuni</p>
    </footer>
    <?php } ?>
    <script src="/jqury/jquery-3.6.3.js"></script>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script></body>
</html>