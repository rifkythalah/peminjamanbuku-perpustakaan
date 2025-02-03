<?php

session_start();

$title = 'Detail siswa';

include 'layout/header.php';



// mengambil id mahasiswa dari url
$nis = (int)$_GET['nis'];

// menampilkan data mahasiswa
$siswa = select("SELECT * FROM siswa WHERE nis = $nis")[0];

?>

<div class="container mt-5">
    <h1>Data <?= $siswa['nama']; ?></h1>
    <hr>


    <table class="table table-bordered table-striped mt-3">
        <tr>
            <td>Nama</td>
            <td>: <?= $siswa['nama']; ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>: <?= $siswa['kelas']; ?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>: <?= $siswa['jurusan']; ?></td>
        </tr>
    </table>

    <a href="siswa.php" class="btn btn-secondary btn-sm" style="float: right">Kembali</a>
    </div>

<?php include 'layout/footer.php';?>
