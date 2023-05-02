<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <header>
        Aplikasi Manajemen Mahasiswa
    </header>

    <div class="container">
        <aside>
            <ul class="menu">
                <li><a href="?hal=dashboard" class="aktif">Dashboard</a></li>
                <li><a href="?hal=pegawai" class="aktif">Data Pegawai</a></li>
                <li><a href="?hal=jabatan" class="aktif">Data Jabatan</a></li>
                <li><a href="logout.php" class="aktif">Keluar</a></li>
            </ul>
        </aside>

        <h2 class="judul">Tambah Mahasiswa</h2>
        <form action="proses.php" method="post">

            <div class="nama">
                <label for="foto">Foto</label>
                <div class="input"><input type="file" id="foto"></div>
            </div>
            <div class="nama">
                <label for="nama">Nama</label>
                <div class="input"><input type="text" name="nama"></div>
            </div>


        </form>
    </div>
</body>
</html>