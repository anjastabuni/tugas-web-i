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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <header>
        Aplikasi Manajemen Mahasiswa
    </header>

    <div class="container">
        <aside>
            <ul class="menu">
                <li><a href="?hal=dashboard" class="aktif">Dashboard</a></li>
                <li><a href="?hal=mahasiswa" class="aktif">Data Mahasiswa</a></li>
                <li><a href="?hal=jabatan" class="aktif">Data Jabatan</a></li>
                <li><a href="logout.php" class="aktif">Keluar</a></li>
            </ul>
        </aside>

        <section class="main">
            <?= include "konten.php"; ?>
        </section>
    </div>
    <footer>
        Copyright &copy; Rebly Megib Tabuni
    </footer>
    <?php } ?>
</body>
</html>