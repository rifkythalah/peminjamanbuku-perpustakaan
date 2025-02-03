<?php

session_start();

$title = 'Daftar Buku';

include 'layout/header.php';

$data_buku = select("SELECT * FROM buku ORDER BY id_buku DESC ");

?>

    <div class="container mt-5">
    <h1><i class="fas fa-book"></i> Data Buku</h1>
    <hr>

    <?php if ($_SESSION['level'] == 1 || $_SESSION['level'] == 2) : ?>
    <a href="tambah-buku.php" class="btn btn-primary mb-1"><i class="fas fa-plus-circle"></i> Tambah</a>
    <?php endif;?>
    
    <table class="table table-bordered table-striped mt-3" id="table">
        <thead>
            <tr>
                <th>ID_Buku</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Stok Buku</th>
                <?php if ($_SESSION['level'] == 1 || $_SESSION['level'] == 2) : ?>
                <th>Aksi</th>
                <?php endif;?>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_buku as $buku) : ?>
            <tr>
                <td><?= $buku['id_buku']; ?></td>
                <td><?= $buku['judul_buku']; ?></td>
                <td><?= $buku['pengarang']; ?></td>
                <td><?= $buku['penerbit']; ?></td>
                <td><?= $buku['tahun_terbit']; ?></td>
                <td><?= $buku['stok_buku']; ?></td>
                <?php if ($_SESSION['level'] == 1 || $_SESSION['level'] == 2) : ?>
                <td width="20%" class="text-center">
                    <a href="ubah-buku.php?id_buku=<?= $buku['id_buku'];?>" class="btn btn-success"><i class="fas fa-edit"></i> Ubah</a>
                    <a href="hapus-buku.php?id_buku=<?= $buku['id_buku'];?>" class="btn btn-danger" onclick="return confirm('Yakin Data Barang Akan Dihapus.');"><i class="fas fa-trash-alt"></i> Hapus</a>
                    <?php endif;?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>

<?php include 'layout/footer.php'; ?>

    