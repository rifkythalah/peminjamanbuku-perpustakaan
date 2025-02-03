<?php

session_start();

$title = 'Detail petugas';

include 'layout/header.php';



// mengambil id mahasiswa dari url
$id_petugas = (int)$_GET['id_petugas'];

// menampilkan data mahasiswa
$petugas = select("SELECT * FROM petugas WHERE id_petugas = $id_petugas")[0];

?>

<div class="container mt-5">
    <h1>Data <?= $petugas['nama_petugas']; ?></h1>
    <hr>


    <table class="table table-bordered table-striped mt-3">
        <tr>
            <td>id</td>
            <td>: <?= $petugas['id_petugas']; ?></td>
        </tr>
        <tr>
            <td>nama</td>
            <td>: <?= $petugas['nama_petugas']; ?></td>
        </tr>
        <tr>
            <td>jabatan</td>
            <td>: <?= $petugas['jabatan']; ?></td>
        </tr>
    </table>

    <a href="petugas.php" class="btn btn-secondary btn-sm" style="float: right">Kembali</a>
    </div>

<?php include 'layout/footer.php';?>
