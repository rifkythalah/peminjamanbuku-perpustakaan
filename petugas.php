<?php

session_start();

$title = 'Daftar Petugas';

include 'layout/header.php';


// menampilkan data petugas
$data_petugas = select("SELECT * FROM petugas ORDER BY id_petugas DESC");

?>

<div class="container mt-5">
    <h1><i class="fas fa-user-tie"></i> Data Petugas</h1>
    <hr>

    <?php if ($_SESSION['level'] == 1 || $_SESSION['level'] == 2) : ?>
    <a href="tambah-petugas.php" class="btn btn-primary mb-1"><i class="fas fa-plus-circle"></i> Tambah</a>
    <?php endif;?>

    <table class="table table-bordered table-striped mt-3" id="table">
        <thead>
            <tr>
                <th>Id Petugas</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1;?>
            <?php foreach ($data_petugas as $petugas) : ?>
                <tr>
                    <td><?= $petugas['id_petugas']; ?></td>
                    <td><?= $petugas['nama_petugas']; ?></td>
                    <td><?= $petugas['jabatan']; ?></td>
                    <td class="text-center" width="20%">
                        <a href="detail-petugas.php? id_petugas=<?= $petugas['id_petugas'];?>" class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i> Detail</a>
                        <?php if ($_SESSION['level'] == 1 || $_SESSION['level'] == 2) : ?>
                        <a href="ubah-petugas.php?id_petugas=<?= $petugas['id_petugas']; ?>" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Ubah</a>
                        <a href="hapus-petugas.php?id_petugas=<?= $petugas['id_petugas']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Data petugas Akan Dihapus?');"><i class="fas fa-trash-alt"></i> Hapus</a>
                        <?php endif;?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    

<?php include 'layout/footer.php';?>
