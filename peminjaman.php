<?php

session_start();

$title = 'Daftar Peminjaman';

include 'layout/header.php';

// menampilkan data peminjaman
$data_peminjaman = select("
    SELECT 
        peminjaman.id_peminjaman, 
        siswa.nama AS nama_siswa, 
        buku.judul_buku, 
        petugas.nama_petugas, 
        peminjaman.tgl_pinjam, 
        peminjaman.tgl_kembali, 
        peminjaman.status 
    FROM peminjaman
    JOIN siswa ON peminjaman.id_siswa = siswa.nis
    JOIN buku ON peminjaman.id_buku = buku.id_buku
    JOIN petugas ON peminjaman.id_petugas = petugas.id_petugas
    ORDER BY peminjaman.id_peminjaman DESC
");

?>

<div class="container mt-5">
    <h1><i class="fas fa-list"></i> Data Peminjaman</h1>
    <hr>

    <a href="tambah-peminjaman.php" class="btn btn-primary mb-1"><i class="fas fa-plus-circle"></i> Tambah</a>

    <table class="table table-bordered table-striped mt-3" id="table">
        <thead>
            <tr>
                <th>Id Peminjaman</th>
                <th>Nama Siswa</th>
                <th>Judul Buku</th>
                <th>Nama Petugas</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_peminjaman as $peminjaman) : ?>
                <tr>
                    <td><?= $peminjaman['id_peminjaman']; ?></td>
                    <td><?= $peminjaman['nama_siswa']; ?></td>
                    <td><?= $peminjaman['judul_buku']; ?></td>
                    <td><?= $peminjaman['nama_petugas']; ?></td>
                    <td><?= $peminjaman['tgl_pinjam']; ?></td>
                    <td><?= $peminjaman['tgl_kembali']; ?></td>
                    <td><?= $peminjaman['status']; ?></td>
                    <td class="text-center" width="20%">
                        <a href="detail-peminjaman.php?id_peminjaman=<?= $peminjaman['id_peminjaman'];?>" class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i> Detail</a>
                        <?php if ($_SESSION['level'] == 1 || $_SESSION['level'] == 2) : ?>
                        <a href="ubah-peminjaman.php?id_peminjaman=<?= $peminjaman['id_peminjaman']; ?>" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Ubah</a>
                        <a href="hapus-peminjaman.php?id_peminjaman=<?= $peminjaman['id_peminjaman']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Data Peminjaman Akan Dihapus?');"><i class="fas fa-trash-alt"></i> Hapus</a>
                        <?php endif;?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'layout/footer.php'; ?>
