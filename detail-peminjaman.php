<?php

session_start();

$title = 'Detail Peminjaman';

include 'layout/header.php';

// Mengambil id peminjaman dari URL
$id_peminjaman = (int)$_GET['id_peminjaman'];

// Menampilkan data peminjaman beserta detail siswa, buku, dan petugas
$peminjaman = select("
    SELECT 
        peminjaman.*, 
        siswa.nama AS nama_siswa, 
        buku.judul_buku, 
        petugas.nama_petugas 
    FROM peminjaman
    JOIN siswa ON peminjaman.id_siswa = siswa.nis
    JOIN buku ON peminjaman.id_buku = buku.id_buku
    JOIN petugas ON peminjaman.id_petugas = petugas.id_petugas
    WHERE peminjaman.id_peminjaman = $id_peminjaman
")[0];

?>

<div class="container mt-5">
    <h1>Data Peminjaman</h1>
    <hr>

    <table class="table table-bordered table-striped mt-3">
        <tr>
            <td>ID Peminjaman</td>
            <td> <?= $peminjaman['id_peminjaman']; ?></td>
        </tr>
        <tr>
            <td>Nama Siswa</td>
            <td> <?= $peminjaman['nama_siswa']; ?></td>
        </tr>
        <tr>
            <td>Judul Buku</td>
            <td> <?= $peminjaman['judul_buku']; ?></td>
        </tr>
        <tr>
            <td>Nama Petugas</td>
            <td> <?= $peminjaman['nama_petugas']; ?></td>
        </tr>
        <tr>
            <td>Tanggal Pinjam</td>
            <td> <?= $peminjaman['tgl_pinjam']; ?></td>
        </tr>
        <tr>
            <td>Tanggal Kembali</td>
            <td> <?= $peminjaman['tgl_kembali']; ?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td> <?= $peminjaman['status']; ?></td>
        </tr>
    </table>

    <a href="peminjaman.php" class="btn btn-secondary btn-sm" style="float: right">Kembali</a>
</div>

<?php include 'layout/footer.php'; ?>
