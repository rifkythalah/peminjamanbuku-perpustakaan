<?php

session_start();

$title = 'Daftar siswa';

include 'layout/header.php';


// menampilkan data siswa
$data_siswa = select("SELECT * FROM siswa ORDER BY nis DESC");

?>

<div class="container mt-5">
    <h1><i class="fas fa-user-graduate"></i> Data Siswa</h1>
    <hr>

    <?php if ($_SESSION['level'] == 1 || $_SESSION['level'] == 3) : ?>
    <a href="tambah-siswa.php" class="btn btn-primary mb-1"><i class="fas fa-plus-circle"></i> Tambah</a>
    <?php endif;?>

    <table class="table table-bordered table-striped mt-3" id="table">
        <thead>
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1;?>
            <?php foreach ($data_siswa as $siswa) : ?>
                <tr>
                    <td><?= $siswa['nis']; ?></td>
                    <td><?= $siswa['nama']; ?></td>
                    <td><?= $siswa['kelas']; ?></td>
                    <td><?= $siswa['jurusan']; ?></td>
                    <td class="text-center" width="20%">
                        <a href="detail-siswa.php? nis=<?= $siswa['nis'];?>" class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i> Detail</a>
                        <?php if ($_SESSION['level'] == 1 or $_SESSION['level'] == 3) : ?>
                        <a href="ubah-siswa.php?nis=<?= $siswa['nis']; ?>" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Ubah</a>
                        <a href="hapus-siswa.php?nis=<?= $siswa['nis']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Data siswa Akan Dihapus?');"><i class="fas fa-trash-alt"></i> Hapus</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    

<?php include 'layout/footer.php';?>
